<?php
/*-------------------------------------------------------
*
*   LiveStreet Engine Social Networking
*   Copyright © 2008 Mzhelskiy Maxim
*
*--------------------------------------------------------
*
*   Official site: www.livestreet.ru
*   Contact e-mail: rus.engine@gmail.com
*
*   GNU General Public License, version 2:
*   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*
---------------------------------------------------------
*/

require_once(Config::Get('path.root.engine').'/lib/external/Jevix/jevix.class.php');

/**
 * Модуль обработки текста на основе типографа Jevix
 *
 */
class ModuleText extends Module {
	/**
	 * Объект типографа
	 *
	 * @var Jevix
	 */
	protected $oJevix;		
	
	/**
	 * Инициализация модуля
	 *
	 */
	public function Init() {	
		/**
		 * Создаем объект типографа и запускаем его конфигурацию
		 */
		$this->oJevix = new Jevix();		
		$this->JevixConfig();
	}
	
	/**
	 * Конфигурирует типограф
	 *
	 */
	protected function JevixConfig() {
		// загружаем конфиг
		$this->LoadJevixConfig();
	}
	
	/**
	 * Загружает конфиг Jevix'а
	 *
	 * @param string $sType Тип конфига
	 * @param bool $bClear
	 */
	public function LoadJevixConfig($sType='default',$bClear=true) {
		if ($bClear) {
			$this->oJevix->tagsRules=array();
		}
		$aConfig=Config::Get('jevix.'.$sType);
		if (is_array($aConfig)) {
			foreach ($aConfig as $sMethod => $aExec) {
				foreach ($aExec as $aParams) {
					if (in_array(strtolower($sMethod),array_map("strtolower",array('cfgSetTagCallbackFull','cfgSetTagCallback')))) {
						if (isset($aParams[1][0]) and $aParams[1][0]=='_this_') {
							$aParams[1][0]=$this;
						}
					}
					call_user_func_array(array($this->oJevix,$sMethod), $aParams);
				}
			}
			/**
			 * Хардкодим некоторые параметры
			 */
			unset($this->oJevix->entities1['&']); // разрешаем в параметрах символ &
			if (Config::Get('view.noindex') and isset($this->oJevix->tagsRules['a'])) {
				$this->oJevix->cfgSetTagParamDefault('a','rel','nofollow',true);
			}
		}
	}
	
	/**
	 * Возвращает объект Jevix
	 *
	 * @return unknown
	 */
	public function GetJevix() {
		return $this->oJevix;
	}
	/**
	 * Парсинг текста с помощью Jevix
	 *
	 * @param string $sText
	 * @param array $aError
	 * @return string
	 */
	public function JevixParser($sText,&$aError=null) {
		// Если конфиг пустой, то загружаем его
		if (!count($this->oJevix->tagsRules)) {
			$this->LoadJevixConfig();
		}
		$sResult=$this->oJevix->parse($sText,$aError);
		return $sResult;
	}
	
	/**
	 * Парсинг текста на предмет видео
	 *
	 * @param string $sText
	 * @return string
	 */
	public function VideoParser($sText) {
		/**
		 * youtube.com
		 */		
		$sText = preg_replace('~<video>http://(?:www\.|)?youtube.com/watch?(.*?)(v=)([a-zA-Z0-9_-]+)(.*?)</video>~usi', '<object width="560" height="349"><param name="movie" value="http://www.youtube.com/v/$3&version=3&feature=player_detailpage&hl=en"></param><param name="wmode" value="opaque"></param><param name="allowFullScreen" value="true"></param><embed src="http://www.youtube.com/v/$3&version=3&feature=player_detailpage&hl=en" type="application/x-shockwave-flash" allowfullscreen="true" wmode="opaque" width="560" height="349"></embed></object>', $sText);		
		/**
		 * rutube.ru
		 */		
		$sText = preg_replace('/<video>http:\/\/(?:www\.|)rutube.ru\/tracks\/\d+.html\?v=([a-zA-Z0-9_\-]+)(&.+)?<\/video>/Ui', '<OBJECT width="560" height="349"><PARAM name="movie" value="http://video.rutube.ru/$1"></PARAM><PARAM name="wmode" value="opaque"></PARAM><PARAM name="allowFullScreen" value="true"></PARAM><PARAM name="flashVars" value="uid=662118"></PARAM><EMBED src="http://video.rutube.ru/$1" type="application/x-shockwave-flash" wmode="opaque" width="560" height="349" allowFullScreen="true" flashVars="uid=662118"></EMBED></OBJECT>', $sText);				
		return $sText;
	}
		
	/**
	 * Парсит текст
	 *
	 * @param string $sText
	 */
	public function Parser($sText) {
                $sResult=$this->FlashParamParser($sText);	
                $sResult=$this->ParseHuddleSource($sResult);		
		$sResult=$this->JevixParser($sResult);
		$sResult=$this->VideoParser($sResult);	
		$sResult=$this->CodeSourceParser($sResult);
		return $sResult;
	}
	/**
	 * Заменяет все вхождения короткого тега <param/> на длиную версию <param></param>
	 * Заменяет все вхождения короткого тега <embed/> на длиную версию <embed></embed>
	 * 
	 */
	protected function FlashParamParser($sText) {	
		if (preg_match_all("@(<\s*param\s*name\s*=\s*(?:\"|').*(?:\"|')\s*value\s*=\s*(?:\"|').*(?:\"|'))\s*/?\s*>(?!</param>)@Ui",$sText,$aMatch)) {				
			foreach ($aMatch[1] as $key => $str) {
				$str_new=$str.'></param>';				
				$sText=str_replace($aMatch[0][$key],$str_new,$sText);				
			}	
		}
		if (preg_match_all("@(<\s*embed\s*.*)\s*/?\s*>(?!</embed>)@Ui",$sText,$aMatch)) {				
			foreach ($aMatch[1] as $key => $str) {
				$str_new=$str.'></embed>';				
				$sText=str_replace($aMatch[0][$key],$str_new,$sText);				
			}	
		}	
		/**
		 * Удаляем все <param name="wmode" value="*"></param>		 
		 */
		if (preg_match_all("@(<param\s.*name=(?:\"|')wmode(?:\"|').*>\s*</param>)@Ui",$sText,$aMatch)) {
			foreach ($aMatch[1] as $key => $str) {
				$sText=str_replace($aMatch[0][$key],'',$sText);
			}
		}
		/**
		 * А теперь после <object> добавляем <param name="wmode" value="opaque"></param>
		 * Решение не фантан, но главное работает :)
		 */
		if (preg_match_all("@(<object\s.*>)@Ui",$sText,$aMatch)) {
			foreach ($aMatch[1] as $key => $str) {
				$sText=str_replace($aMatch[0][$key],$aMatch[0][$key].'<param name="wmode" value="opaque"></param>',$sText);
			}
		}
		
		return $sText;
	}
	
        public function ParseHuddleSource($sText){
                // Обрабатываем новый тег <source>. Нужно выделить язык и преобразовать в
                // тег для использования с syntax highlighter
                
                // Экранируем левые < для вложенных закрывающих теков source. Пример для обработки:
                // <source lang="sdf"> sdf<source lang="cpp">sdfa</source></source>
                // будет преобразовано в
                // <source lang="sdf"> sdf<source lang="cpp">sdfa&lt;/source></source>
                // Делаем это в данной функции, а не в CodeSourceParser, чтобы осуществить текущую операцию
                // перед обработкой JevixParser (иначе он удалит указанные теги), а преобразование
                // source в pre class="brush: ..." - после Jevix (он удаляет аттрибут class)
                $pattern = "/<\/source>(((?!<source).)*)<\/source>/msi";
                $replacement = "&lt;/source>$1</source>";
                $resText = $sText;
                do{
                    $resText = preg_replace($pattern, $replacement, $resText);
                    //echo $sText;
                    if($resText == $sText)
                        break;
                    $sText = $resText;
                } while (true);
                
                return $sText;
        }
        
	public function CodeSourceParser($sText) {
                // Обрабатываем тег <code>, стандартный механизм
		$sText=str_replace("<code>",'<pre class="prettyprint"><code>',$sText);
                $sText=str_replace("</code>",'</code></pre>',$sText);                
                
                // Экранируем все левые теги внутри блоков source
                /*$pattern = "/(((?!<source).)*)(<source[^<]*?\slang=\"([^\"]*)\"(\s[^<]*)?>)(.*?)(<\/source>)(((?!<source).)*)/Usi";
                $sTextTemp = $sText;
                $sNewText = "";
                if (preg_match_all($pattern,$sTextTemp,$aMatch)) {
                    if(count($aMatch[0]) > 0)
                        $sNewText = $aMatch[1][1];
                    foreach ($aMatch[2] as $key => $str) {
                        echo $key;
                        $sNewText = $sNewText . $aMatch[2][$key];
                        $sNewText = $sNewText . $aMatch[3][$key];
                        $sNewText = $sNewText . str_replace("<", "&lt", $aMatch[4][$key]);
                        $sNewText = $sNewText . $aMatch[5][$key];
                        $sNewText = $sNewText . $aMatch[6][$key];
                    }
                }
                $sText = $sNewText;*/
                
                
                /*$pos1 = 0;
                $pos2 = 0;
                $lastpos = 0;
                $sNewText = "";
                
                do{
                    $pos1 = strpos($sText, '<source', $pos2);
                    $pos2 = strpos($sText, '</source', $pos1);
                    if($pos1 === false || $pos2 === false){
                        $sNewText = $sNewText . substr($sText, $lastpos, strlen($sText) - $lastpos);
                        break;
                    }else{
                    $sNewText = $sNewText . substr($sText, $lastpos, $pos1 - $lastpos);
                    $sSubString = substr($sText, $pos1, $pos2 - $pos1);
                    //echo $sSubString;
                    $sNewText = $sNewText . str_replace('<', '&lt;', $sSubString);
                    $lastpos = $pos2;
                    }
                }while(true);
                $sText = $sNewText;*/
                
                //echo $sText;
                $pattern = "/<source[^<]*?\slang=\"([^\"]*)\"(\s[^<]*)?>(.*?)<\/source>/msi";
                $replacement = "<pre class=\"brush: $1\">$3</pre>";                
                $sText = preg_replace($pattern, $replacement, $sText);
                //echo $sText;
                
                return $sText;
	}
	/**
	 * Производить резрезание текста по тегу <cut>.
	 * Возвращаем массив вида:
	 * array(
	 * 		$sTextShort - текст до тега <cut>
	 * 		$sTextNew   - весь текст за исключением удаленного тега
	 * 		$sTextCut   - именованное значение <cut> 
	 * )
	 *
	 * @param  string $sText
	 * @return array
	 */
	public function Cut($sText) {
		$sTextShort = $sText;
		$sTextNew   = $sText;
		$sTextCut   = null;
		
		$sTextTemp=str_replace("\r\n",'[<rn>]',$sText);
		$sTextTemp=str_replace("\n",'[<n>]',$sTextTemp);
		
		if (preg_match("/^(.*)<cut(.*)>(.*)$/Ui",$sTextTemp,$aMatch)) {			
			$aMatch[1]=str_replace('[<rn>]',"\r\n",$aMatch[1]);
			$aMatch[1]=str_replace('[<n>]',"\r\n",$aMatch[1]);
			$aMatch[3]=str_replace('[<rn>]',"\r\n",$aMatch[3]);
			$aMatch[3]=str_replace('[<n>]',"\r\n",$aMatch[3]);				
			$sTextShort=$aMatch[1];
			$sTextNew=$aMatch[1].' <a name="cut"></a> '.$aMatch[3];
			if (preg_match('/^\s*name\s*=\s*"(.+)"\s*\/?$/Ui',$aMatch[2],$aMatchCut)) {				
				$sTextCut=trim($aMatchCut[1]);
			}				
		}

		return array($sTextShort,$sTextNew,$sTextCut ? htmlspecialchars($sTextCut) : null);
	}
	
	/**
	 * Обработка тега <ls> в тексте
	 *
	 * @param unknown_type $sTag
	 * @param unknown_type $aParams
	 * @return unknown
	 */
	public function CallbackTagLs($sTag,$aParams) {
		$sText='';
		if (isset($aParams['user'])) {
			if ($oUser=$this->User_getUserByLogin($aParams['user'])) {
				$sText.="<a href=\"{$oUser->getUserWebPath()}\" class=\"ls-user\">{$oUser->getLogin()}</a> ";
			}
		}
		return $sText;
	}
}
?>
<<<<<<< HEAD
<?php
=======
<?php
>>>>>>> 2ccb00235253ce282d91021c0fbe9e10c7e5284a
/*---------------------------------------------------------------------------
 * @Plugin Name: aceAdminPanel
 * @Plugin Id: aceadminpanel
 * @Plugin URI: 
 * @Description: Advanced Administrator's Panel for LiveStreet/ACE
 * @Version: 1.5.210
 * @Author: Vadim Shemarov (aka aVadim)
 * @Author URI: 
 * @LiveStreet Version: 0.5
 * @File Name: adm_helper.php
 * @License: GNU GPL v2, http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *----------------------------------------------------------------------------
<<<<<<< HEAD
 */

require_once(Config::Get('path.root.engine') . "/classes/Engine.class.php");

/**
 * Абстрактный класс плагина
 */
abstract class AcePlugin extends Plugin
{
    public function __construct()
    {
        HelperPlugin::InitPlugin($this);
    }
}

/**
 * Хелпер для работы с плагинами
 */
class HelperPlugin extends Object
{

    static public function InitPlugin($oPlugin, $sFuncAutoLoader = null)
    {
        HelperPluginLoader::getInstance()->Init();

        $sPluginClass = get_class($oPlugin);
        if (property_exists($sPluginClass, 'aInherits') AND $oPlugin->aInherits) {
            foreach ($oPlugin->aInherits as $sType => $aRules) {
                foreach ($aRules as $sFrom => $sTo) {
                    if (is_numeric($sFrom)) {
                        $sFrom = $sTo;
                        $sTo = $sPluginClass . '_' . $sTo;
                    } elseif (substr($sTo, 0, 1) == '_') {
                        $sTo = $sPluginClass . $sTo;
                    }
                    if ($sType == 'module' AND (strpos($sFrom, '_') === false) AND strpos($sFrom, 'Module') === false)
                        $sFrom = 'Module' . $sFrom;
                    $sReloadedObject = $oPlugin->Plugin_GetDelegate($sType, $sFrom);
                    // Если переделегирование, то создаем родительский класс для переделегата
                    // Т.е. создаем цепочку наследников от исходного родителя
                    if ($sReloadedObject) {
                        if (substr($sReloadedObject, 0, 6) == 'Plugin') {
                            HelperPluginLoader::getInstance()->Autoloader($sReloadedObject);
                        }
                    }
                    // Наследование в ядре работает нормально
                    // $oPlugin->Plugin_Inherit($sFrom, $sTo, $sPluginClass);
                }
            }
        }

        if ($sFuncAutoLoader) self::AutoLoadRegister($sFuncAutoLoader);
    }

    /**
     * Получить массив описания класса по его имени
     *
     * @param   string  $sClassName
     * @param   array   $aNameElements
     * @return  array
     */
    static public function ClassNameExplode($sClassName, $aNameElements = array())
    {
        $aClassElements = array();
        $aElements = explode('_', $sClassName);
        if (preg_match('/^Mapper_[A-Z][a-zA-Z0-9]+/', $sClassName)) {
            $aClassElements['Mapper'] = $aElements[1];
        } elseif (preg_match('/^Entity_[A-Z][a-zA-Z0-9]+/', $sClassName)) {
            $aClassElements['Entity'] = $aElements[1];
        } elseif (preg_match('/^Block([A-Z][a-zA-Z0-9_]+)/', $sClassName, $aMatches)) {
            $aClassElements['Block'] = $aMatches[1];
        } else {
            // вынужден учитывать, что в движке Inherits называется Inherit
            $aKeywords = array('Plugin', 'Module', 'Action', 'Mapper', 'Entity', 'Inherits', 'Inherit', 'Block');
            foreach ($aElements as $sElement) {
                foreach ($aKeywords as $sKeyword) {
                    if (0 === strpos($sElement, $sKeyword)) {
                        if ($sElement == 'Inherits') {
                            $aClassElements[$sKeyword] = substr($sClassName, strpos($sClassName, '_Inherits') + 10);
                        } elseif ($sElement == 'Inherit') {
                            $aClassElements['Inherits'] = substr($sClassName, strpos($sClassName, '_Inherit') + 9);
                        } elseif ($sKeyword == 'Block') {
                            $aClassElements['Block'] = substr($sClassName, strpos($sClassName, '_Block') + 6);
                        } else {
                            $aClassElements[$sKeyword] = substr($sElement, strlen($sKeyword));
                        }
                        break;
                    }
                }
            }

            // Если не определен тип класса, то это модуль
            if (isset($aClassElements['Inherits'])) {
                if (!isset($aClassElements['Module'])
                    AND !isset($aClassElements['Action'])
                        AND !isset($aClassElements['Mapper'])
                            AND !isset($aClassElements['Entity'])
                                AND isset($aElements[2])
                ) {
                    $aClassElements['Module'] = $aElements[2];
                }
            }
            elseif (!isset($aClassElements['Module'])
                    AND !isset($aClassElements['Action'])
                        AND !isset($aClassElements['Mapper'])
                            AND !isset($aClassElements['Entity'])
                                AND !isset($aClassElements['Block'])
            ) {
                if (isset($aElements[1])) {
                    $aClassElements['Module'] = $aElements[1];
                }
                else {
                    $aClassElements['Module'] = $aElements[0];
                }

            }
        }

        $aClassElements = array_merge($aClassElements, $aNameElements);
        return $aClassElements;
    }

    /**
     * Получить имя класса по массиву описания класса
     *
     * @param   array   $aClassElements
     * @param   string  $sClassType
     * @return  string
     */
    static public function ClassNameImplode($aClassElements, $sClassType)
    {
        $sResult = null;
        if (isset($aClassElements[$sClassType])) {
            if (isset($aClassElements['Plugin'])) $sResult .= 'Plugin' . $aClassElements['Plugin'] . '_';
            if (isset($aClassElements['Module'])) $sResult .= 'Module' . $aClassElements['Module'] . '_';
            $sResult .= $sClassType . $aClassElements[$sClassType];
        }
        return $sResult;
    }

    /**
     * Получить имя плагина по классу плагина
     *
     * @param   string  $sClassName
     * @return  string
     */
    static public function ExtractPluginName($sClassName)
    {
        if (($n = strpos($sClassName, '_'))) $sPluginClass = substr($sClassName, 0, $n);
        else $sPluginClass = $sClassName;
        $sPluginName = substr($sPluginClass, 6);
        return $sPluginName;
    }

    /**
     * Получить имя плагина либо по классу плагина, либо из стека вызовов
     *
     * @param   mixed   $sClassName
     * @param   bool    $bLowCase
     * @return  string
     */
    static public function GetPluginName($sClassName = null, $bLowCase = false)
    {
        if (!$sClassName) {
            $sClassName = admBacktrace(-1, 'class', 'Plugin');
        } elseif (is_object($sClassName)) {
            $sClassName = get_class($sClassName);
        }
        $result = self::ExtractPluginName($sClassName);
        if ($bLowCase) $result = strtolower($result);
        return $result;
    }

    /**
     * Получить имя плагина (lower case) либо по классу плагина, либо из стека вызовов
     *
     * @param   mixed   $sClassName
     * @return  string
     */
    static public function GetPluginStr($sClassName = null)
    {
        if (!$sClassName) {
            $sClassName = admBacktrace(-1, 'class', 'Plugin');
        } elseif (is_object($sClassName)) {
            $sClassName = get_class($sClassName);
        }
        return self::GetPluginName($sClassName, true);
    }

    /**
     * Получить маппер (объект), если имя маппера не задано, то определяется автоматически
     *
     * @param   string  $sMapperName
     * @return  object  sFullClassName
     */
    static public function GetMapper($sMapperName = null)
    {
        $sCallerClass = admBacktrace(1, 'class');
        if ($sCallerClass) {
            if (!$sMapperName) {
                $n = strrpos($sCallerClass, '_');
                if ($n) $sMapperName = substr($sCallerClass, $n + 1);
                if (strpos($sMapperName, 'Module') === 0) $sMapperName = substr($sMapperName, 6);
            }
            $aClassElements = HelperPlugin::ClassNameExplode($sCallerClass, array('Mapper' => $sMapperName));
            $sFullClassName = HelperPlugin::ClassNameImplode($aClassElements, 'Mapper');
            return new $sFullClassName(Engine::getInstance()->Database_GetConnect());
        }
        return null;
    }

    /**
     * Получить конфигурацию плагина
     *
     * @param   string  $key
     * @return  mixed
     */
    static public function GetConfig($key = '')
    {
        if ($key) $key = '.' . $key;
        $key = 'plugin.' . self::GetPluginStr() . $key;
        return Config::Get($key);
    }

    /**
     * Получить путь (полное имя файла) к шаблону скина
     *
     * @param   string  $sFile
     * @return  string
     */
    static public function GetTemplatePath($sFile = '')
    {
        if ($sFile) {
            if (substr($sFile, 0, 1) != '/') $sFile = '/' . $sFile;
            $result = Plugin::GetTemplatePath(self::GetPluginStr()) . $sFile;
        } else
            $result = Plugin::GetTemplatePath(self::GetPluginStr()) . '/';
        if (DIRECTORY_SEPARATOR == '\\')
            $result = str_replace('/', DIRECTORY_SEPARATOR, $result);
        else
            $result = str_replace('\\', DIRECTORY_SEPARATOR, $result);
        $result = str_replace(DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR, $result);
        return $result;
    }

    /**
     * Получить путь (полное имя файла) к шаблону акшена
     *
     * @param   string  $sFile
     * @return  string
     */
    static public function GetTemplateActionPath($sFile = '')
    {
        $aClassElements = self::ClassNameExplode(Router::GetActionClass());
        if (isset($aClassElements['Action'])) $sAction = $aClassElements['Action'];
        else $sAction = Router::GetAction();
        return self::GetTemplatePath('actions/Action' . ucfirst($sAction) . '/' . $sFile);
    }

    static public function GetPluginPath($sPluginName = null)
    {
        if (!$sPluginName) $sPluginName = self::GetPluginStr();
        return Config::Get('path.root.server') . '/plugins/' . strtolower($sPluginName);
    }

    /**
     * Получить URL к плагину
     *
     * @param   string  $sPluginName
     * @return  string
     */
    static public function GetWebPluginPath($sPluginName = null)
    {
        if (!$sPluginName) $sPluginName = self::GetPluginStr();
        return Config::Get('path.root.web') . '/plugins/' . strtolower($sPluginName);
    }

    /**
     * Получить URL к текущему скину плагина
     *
     * @param   string  $sPluginName
     * @return  string
     */
    static public function GetWebPluginSkin($sPluginName = null)
    {
        if (!$sPluginName) $sPluginName = self::GetPluginStr();
        $sTemplatePath = Plugin::GetTemplatePath($sPluginName);
        if (substr($sTemplatePath, -1) == '/') $sTemplatePath = substr($sTemplatePath, 0, strlen($sTemplatePath) - 1);
        $sSkin = substr($sTemplatePath, strrpos($sTemplatePath, '/') + 1);
        return self::GetWebPluginPath() . '/templates/skin/' . $sSkin . '/';
    }

    /**
     * Получить список всех родителей класса/объекта
     *
     * @param   object  $obj
     * @param   bool    $bIncludeSelf
     * @return  array
     */
    static public function GetAllParents($obj, $bIncludeSelf = true)
    {
        $aParents = array();
        if ($bIncludeSelf) {
            if (is_object($obj)) {
                $aParents[] = $sClass = get_class($obj);
            } else {
                $aParents = $sClass = $obj;
            }
        }
        do {
            $sClass = get_parent_class($sClass);
            if ($sClass) $aParents[] = $sClass;
        } while ($sClass);
        return $aParents;
    }

    static public function AutoLoadRegister($sFunction)
    {
        HelperPluginLoader::getInstance()->AutoLoadRegister($sFunction);
    }

} // class HelperPlugin

/**
 * Загрузчик файлов плагинов
 */
class HelperPluginLoader extends Object
{
    static protected $oInstance = null;
    protected $bInialized = false;
    protected $aAutoloaderSkipPrefix = array('DbSimple_', 'Smarty_');
    protected $aAutoloaderLog = array();
    protected $bAutoloaderError = false;
    protected $aInheritance = array();
    protected $nExtAutoLoaders = 0; // кол-во внешних автозагрузчиков

    static public function getInstance()
    {
        if (self::$oInstance === null) {
            self::$oInstance = new self;
        }
        return self::$oInstance;
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public function __destruct()
    {
    }

    public function Init()
    {
        if (!is_null(Config::Get('plugin.aceadminpanel.autoloader_error')))
            $this->bAutoloaderError = (bool)Config::Get('plugin.aceadminpanel.autoloader_error');
        if (Config::Get('plugin.aceadminpanel.autoloader_yii'))
            return $this->InitNew();
        else
            return $this->InitOld();
    }

    /**
     * Инициализация старого автозагрузчика классов
     *
     * @return
     */
    protected function InitOld()
    {
        if ($this->bInialized) return;

        $aFunc = spl_autoload_functions();
        if (is_array($aFunc) AND sizeof($aFunc) == 1) {
            // Первый вызов spl_autoload_register отключает __autoload,
            // поэтому надо зарегистрировать эту ф-цию опять
            spl_autoload_register($aFunc[0]);
        }
        spl_autoload_register(array(self::$oInstance, 'Autoloader'));
        if (!is_null(Config::Get('plugin.aceadminpanel.autoloader_error')))
            $this->bAutoloaderError = Config::Get('plugin.aceadminpanel.autoloader_error');

        $this->bInialized = true;
    }

    /**
     * Инициализация нового автозгручика классов, совместимого с Yii
     *
     * @return
     */
    protected function InitNew()
    {
        if ($this->bInialized) return;

        $cbAceLoader = array(self::$oInstance, 'Autoloader');

        $aFunc = spl_autoload_functions();

        // первый вызов spl_autoload_register
        if ($aFunc === array('__autoload')) {
            spl_autoload_register('__autoload');
            $aFunc = spl_autoload_functions();
        }

        if (!in_array($cbAceLoader, $aFunc)) {
            // удаляем все лоадеры кроме __autoload
            foreach ($aFunc as $cbLoader) {
                if ($cbLoader !== '__autoload') {
                    spl_autoload_unregister($cbLoader);
                }
            }
            // сразу за __autoload добавляем лоадер ace
            spl_autoload_register($cbAceLoader);
            // восстанавливаем лоадеры
            foreach ($aFunc as $cbLoader) {
                if ($cbLoader !== '__autoload') {
                    spl_autoload_register($cbLoader);
                }
            }
        }
        $this->bInialized = true;
    }

    public function AutoLoadRegister($sFunction)
    {
        if (!$this->bInialized) $this->Init();
        spl_autoload_register($sFunction);
        $this->nExtAutoLoaders += 1;
    }

    /**
     * Игнорировать автозагрузку класса
     *
     * @param   string  $sClassName
     * @return  bool
     */
    public function AutoloadIgnoreClass($sClassName)
    {
        if ($this->aAutoloaderSkipPrefix) {
            foreach ($this->aAutoloaderSkipPrefix as $sPrefix) {
                if (0 === strpos($sClassName, $sPrefix)) {
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * Автозагрузка файла класса
     *
     * @param   string  $sClassName
     * @return  void
     */
    public function Autoloader($sClassName)
    {
        if ($this->AutoloadIgnoreClass($sClassName)) return;

        $aLog = array('class' => $sClassName, 'time_begin' => microtime(true));

        // * В LS 0.4.1 пропущенна буква "s" в слове Inherits
        if (preg_match('/^Plugin(\w+)_Inherits_([\w_]+)/i', $sClassName, $aMatch)) {
            if (preg_match("/^Module(\w+)\_Entity(\w+)$/i", $aMatch[2])) {
                $sPlugin = $aMatch[1];
                $sInheritClass = $aMatch[2];
                $sParentClass = Engine::getInstance()->Plugin_GetParentInherit($sInheritClass);

                // опять приходится через ж..., исправляем ядро движка
                if (strtolower($sParentClass) == strtolower('Plugin' . $sPlugin . '_' . $sInheritClass)) {
                    $sParentClass = Engine::getInstance()->Plugin_GetParentInherit($sInheritClass);
                }
            } else {
                $sParentClass = str_replace('_Inherits_', '_Inherit_', $sClassName);
            }
            $aLog['code'] = $this->ClassAlias($sParentClass, $sClassName);
            $aLog['mode'] = 'inh';
            $aLog['time_end'] = microtime(true);
            $this->aAutoloaderLog[] = $aLog;
            return;
        }

        $aClassElements = HelperPlugin::ClassNameExplode($sClassName);

        if (isset($aClassElements['Module'])) {
            $sClassDelegate = Engine::getInstance()->Plugin_GetDelegate('module', $aClassElements['Module']);

            //if ($sClassDelegate != $sClassName) {
            if ($sClassDelegate != $sClassName AND $sClassDelegate != $aClassElements['Module']) {
                // если класс делегирован и делегат загружен, то ничего не делаем
                if (class_exists($sClassDelegate, false)) {
                    return;
                }
                $sClassName = $sClassDelegate;
                $aClassElements = HelperPlugin::ClassNameExplode($sClassName);
            }
        }

        // Формат именования с автонаследованием - создаем родительский класс
        if (preg_match('/^Plugin(\w+)_Inherits_([\w_]+)/', $sClassName, $match)) {
            //$aClassElements = HelperPlugin::ClassNameExplode($sClassName);
            if (!isset($this->aInheritance[$aClassElements['Inherits']])) {
                $sParentClass = $aClassElements['Inherits'];
            } else {
                $sParentClass = $this->aInheritance[$aClassElements['Inherits']];
            }
            // Запоминаем последнего наследника в цепочке
            $this->aInheritance[$aClassElements['Inherits']] = str_replace('_Inherits_', '_', $sClassName);

            // Формируем имя родительского класса
            if (isset($aClassElements['Module']) AND !strpos($sParentClass, '_')) {
                $sParentClass = 'Module' . $sParentClass;
                if (!class_exists($sParentClass, false)) {
                    Engine::getInstance()->LoadModule($sParentClass);
                }
            }

            // Создаем "динамический" класс или алиас
            $aLog['code'] = $this->ClassAlias($sParentClass, $sClassName);
            $aLog['mode'] = 'inh';
            if (class_exists($sClassName)) { /* nothing */

            }
        }
            // Старый формат именования класса Entity
        elseif (preg_match('/^Plugin(\w+)_(\w+)Entity_(\w+)/', $sClassName, $match)) {
            $aClassElements['Plugin'] = $match[1];
            $aClassElements['Module'] = $match[2];
            $aClassElements['Entity'] = $match[3];
            if (($aLog['file'] = $this->ClassLoad($aClassElements))) {
                $sParentClass = HelperPlugin::ClassNameImplode($aClassElements, 'Entity');
                // Создаем "динамический" класс или алиас
                $aLog['code'] = $this->ClassAlias($sParentClass, $sClassName);
                $aLog['mode'] = 'old';
            }
        }
            // Загрузка класса из файла
        else {
            $aLog['file'] = $this->ClassLoad($sClassName);
            $aLog['mode'] = 'new';
        }
        $aLog['time_end'] = microtime(true);
        $this->aAutoloaderLog[] = $aLog;
    }

    /**
     * Загрузка класса по его имени либо по массиву описания класса
     *
     * @param   mixed   $xClass - либо имя класса (строка), либо описание класса (массив)
     * @return  string
     */
    protected function ClassLoad($xClass)
    {
        $sFile = $this->ClassToPath($xClass);
        if (file_exists($sFile) AND is_file($sFile)) {
            include_once($sFile);
            return $sFile;
        }
        else {
            // Если не было подключено дополнительных автозагрузчиков,
            // то вывод отладочной информации
            if (!$this->nExtAutoLoaders AND $this->bAutoloaderError) {
                echo '[ERROR:classLoad] ';
                if (is_array($xClass)) {
                    foreach ($xClass as $key => $val) {
                        echo $key . '=&gt;' . $val . '<br/>';
                    }
                } else {
                    echo $xClass;
                }
                echo '<br/>';
                echo 'File not found: ' . $sFile . '<br/>';
                var_dump(debug_backtrace());
                exit;
            }
        }
        return '';
    }

    /**
     * Создание алиаса класса или дочернего класса (если нет поддержки алиасов)
     *
     * @param   string  $sOriginal
     * @param   string  $sAlias
     * @param   bool    $bAbstract
     * @return  string
     */
    public function ClassAlias($sOriginal, $sAlias, $bAbstract = true)
    {
        if (function_exists('class_alias')) {
            class_alias($sOriginal, $sAlias);
            $sEvalCode = "class_alias('$sOriginal', '$sAlias')";
        } else {
            if ($bAbstract) {
                $sEvalCode = 'abstract class ' . $sAlias . ' extends ' . $sOriginal . ' {}';
            } else {
                $sEvalCode = 'class ' . $sAlias . ' extends ' . $sOriginal . ' {}';
            }
            eval($sEvalCode);
        }
        return $sEvalCode;
    }

    /**
     * Преобразование класса в путь к файлу плагина
     *
     * @param  array|string $xClass - либо имя класса (строка), либо описание класса (массив)
     * @return string
     */
    protected function ClassToPath($xClass)
    {
        if (is_array($xClass)) $aClassElements = $xClass;
        else $aClassElements = HelperPlugin::ClassNameExplode($xClass);

        $sFilePath = Config::Get('path.root.server');
        if (isset($aClassElements['Plugin'])) {
            // класс внутри плагина
            if ((is_string($xClass) AND (false !== strpos($aClassElements['Plugin'], '_')))
                OR (sizeof($aClassElements) > 1)
            ) {
                $sFilePath .= '/plugins/' . strtolower($aClassElements['Plugin']);
            }
                // класс самого плагина
            else {
                $sFilePath .= '/plugins/Plugin' . ucfirst(strtolower($aClassElements['Plugin'])) . '.class.php';
            }
        }

        if (isset($aClassElements['Action'])) {
            $sFilePath .= '/classes/actions/Action' . $aClassElements['Action'] . '.class.php';
        }
        elseif (isset($aClassElements['Block'])) {
            $sFilePath .= '/classes/blocks/Block' . $aClassElements['Block'] . '.class.php';
        }
        elseif (isset($aClassElements['Hook'])) {
            $sFilePath .= '/classes/hooks/Hook' . $aClassElements['Hook'] . '.class.php';
        }
        elseif (isset($aClassElements['Module'])) {
            $sFilePath .= '/classes/modules/' . strtolower($aClassElements['Module']);
            if (isset($aClassElements['Mapper'])) {
                $sFilePath .= '/mapper/' . $aClassElements['Mapper'] . '.mapper.class.php';
            }
            elseif (isset($aClassElements['Entity'])) {
                $sFilePath .= '/entity/' . $aClassElements['Entity'] . '.entity.class.php';
            }
            else {
                $sFilePath .= '/' . ucfirst($aClassElements['Module']) . '.class.php';
            }
        }
        elseif (isset($aClassElements['Mapper'])) {
            if (!isset($aClassElements['Plugin'])) {
                $sFilePath .= '/classes/modules/' . strtolower($aClassElements['Mapper']) . '/mapper/'
                              . ucfirst(strtolower($aClassElements['Mapper'])) . '.mapper.class.php';
            }
        }
        if (DIRECTORY_SEPARATOR != '/') $sFilePath = str_replace(DIRECTORY_SEPARATOR, '/', $sFilePath);
        return $sFilePath;
    }

    public function GetLog()
    {
        return $this->aAutoloaderLog;
    }
}

if (!function_exists('class_alias')) {
    function class_alias($sOriginal, $sAlias)
    {
        eval('class ' . $sAlias . ' extends ' . $sOriginal . ' {}');
    }
}

=======
 */

require_once(Config::Get('path.root.engine') . "/classes/Engine.class.php");

/**
 * Абстрактный класс плагина
 */
abstract class AcePlugin extends Plugin
{
    public function __construct()
    {
        HelperPlugin::InitPlugin($this);
    }
}

/**
 * Хелпер для работы с плагинами
 */
class HelperPlugin extends Object
{

    static public function InitPlugin($oPlugin, $sFuncAutoLoader = null)
    {
        HelperPluginLoader::getInstance()->Init();

        $sPluginClass = get_class($oPlugin);
        if (property_exists($sPluginClass, 'aInherits') AND $oPlugin->aInherits) {
            foreach ($oPlugin->aInherits as $sType => $aRules) {
                foreach ($aRules as $sFrom => $sTo) {
                    if (is_numeric($sFrom)) {
                        $sFrom = $sTo;
                        $sTo = $sPluginClass . '_' . $sTo;
                    } elseif (substr($sTo, 0, 1) == '_') {
                        $sTo = $sPluginClass . $sTo;
                    }
                    if ($sType == 'module' AND (strpos($sFrom, '_') === false) AND strpos($sFrom, 'Module') === false)
                        $sFrom = 'Module' . $sFrom;
                    $sReloadedObject = $oPlugin->Plugin_GetDelegate($sType, $sFrom);
                    // Если переделегирование, то создаем родительский класс для переделегата
                    // Т.е. создаем цепочку наследников от исходного родителя
                    if ($sReloadedObject) {
                        if (substr($sReloadedObject, 0, 6) == 'Plugin') {
                            HelperPluginLoader::getInstance()->Autoloader($sReloadedObject);
                        }
                    }
                    // Наследование в ядре работает нормально
                    // $oPlugin->Plugin_Inherit($sFrom, $sTo, $sPluginClass);
                }
            }
        }

        if ($sFuncAutoLoader) self::AutoLoadRegister($sFuncAutoLoader);
    }

    /**
     * Получить массив описания класса по его имени
     *
     * @param   string  $sClassName
     * @param   array   $aNameElements
     * @return  array
     */
    static public function ClassNameExplode($sClassName, $aNameElements = array())
    {
        $aClassElements = array();
        $aElements = explode('_', $sClassName);
        if (preg_match('/^Mapper_[A-Z][a-zA-Z0-9]+/', $sClassName)) {
            $aClassElements['Mapper'] = $aElements[1];
        } elseif (preg_match('/^Entity_[A-Z][a-zA-Z0-9]+/', $sClassName)) {
            $aClassElements['Entity'] = $aElements[1];
        } elseif (preg_match('/^Block([A-Z][a-zA-Z0-9_]+)/', $sClassName, $aMatches)) {
            $aClassElements['Block'] = $aMatches[1];
        } else {
            // вынужден учитывать, что в движке Inherits называется Inherit
            $aKeywords = array('Plugin', 'Module', 'Action', 'Mapper', 'Entity', 'Inherits', 'Inherit', 'Block');
            foreach ($aElements as $sElement) {
                foreach ($aKeywords as $sKeyword) {
                    if (0 === strpos($sElement, $sKeyword)) {
                        if ($sElement == 'Inherits') {
                            $aClassElements[$sKeyword] = substr($sClassName, strpos($sClassName, '_Inherits') + 10);
                        } elseif ($sElement == 'Inherit') {
                            $aClassElements['Inherits'] = substr($sClassName, strpos($sClassName, '_Inherit') + 9);
                        } elseif ($sKeyword == 'Block') {
                            $aClassElements['Block'] = substr($sClassName, strpos($sClassName, '_Block') + 6);
                        } else {
                            $aClassElements[$sKeyword] = substr($sElement, strlen($sKeyword));
                        }
                        break;
                    }
                }
            }

            // Если не определен тип класса, то это модуль
            if (isset($aClassElements['Inherits'])) {
                if (!isset($aClassElements['Module'])
                    AND !isset($aClassElements['Action'])
                        AND !isset($aClassElements['Mapper'])
                            AND !isset($aClassElements['Entity'])
                                AND isset($aElements[2])
                ) {
                    $aClassElements['Module'] = $aElements[2];
                }
            }
            elseif (!isset($aClassElements['Module'])
                    AND !isset($aClassElements['Action'])
                        AND !isset($aClassElements['Mapper'])
                            AND !isset($aClassElements['Entity'])
                                AND !isset($aClassElements['Block'])
            ) {
                if (isset($aElements[1])) {
                    $aClassElements['Module'] = $aElements[1];
                }
                else {
                    $aClassElements['Module'] = $aElements[0];
                }

            }
        }

        $aClassElements = array_merge($aClassElements, $aNameElements);
        return $aClassElements;
    }

    /**
     * Получить имя класса по массиву описания класса
     *
     * @param   array   $aClassElements
     * @param   string  $sClassType
     * @return  string
     */
    static public function ClassNameImplode($aClassElements, $sClassType)
    {
        $sResult = null;
        if (isset($aClassElements[$sClassType])) {
            if (isset($aClassElements['Plugin'])) $sResult .= 'Plugin' . $aClassElements['Plugin'] . '_';
            if (isset($aClassElements['Module'])) $sResult .= 'Module' . $aClassElements['Module'] . '_';
            $sResult .= $sClassType . $aClassElements[$sClassType];
        }
        return $sResult;
    }

    /**
     * Получить имя плагина по классу плагина
     *
     * @param   string  $sClassName
     * @return  string
     */
    static public function ExtractPluginName($sClassName)
    {
        if (($n = strpos($sClassName, '_'))) $sPluginClass = substr($sClassName, 0, $n);
        else $sPluginClass = $sClassName;
        $sPluginName = substr($sPluginClass, 6);
        return $sPluginName;
    }

    /**
     * Получить имя плагина либо по классу плагина, либо из стека вызовов
     *
     * @param   mixed   $sClassName
     * @param   bool    $bLowCase
     * @return  string
     */
    static public function GetPluginName($sClassName = null, $bLowCase = false)
    {
        if (!$sClassName) {
            $sClassName = admBacktrace(-1, 'class', 'Plugin');
        } elseif (is_object($sClassName)) {
            $sClassName = get_class($sClassName);
        }
        $result = self::ExtractPluginName($sClassName);
        if ($bLowCase) $result = strtolower($result);
        return $result;
    }

    /**
     * Получить имя плагина (lower case) либо по классу плагина, либо из стека вызовов
     *
     * @param   mixed   $sClassName
     * @return  string
     */
    static public function GetPluginStr($sClassName = null)
    {
        if (!$sClassName) {
            $sClassName = admBacktrace(-1, 'class', 'Plugin');
        } elseif (is_object($sClassName)) {
            $sClassName = get_class($sClassName);
        }
        return self::GetPluginName($sClassName, true);
    }

    /**
     * Получить маппер (объект), если имя маппера не задано, то определяется автоматически
     *
     * @param   string  $sMapperName
     * @return  object  sFullClassName
     */
    static public function GetMapper($sMapperName = null)
    {
        $sCallerClass = admBacktrace(1, 'class');
        if ($sCallerClass) {
            if (!$sMapperName) {
                $n = strrpos($sCallerClass, '_');
                if ($n) $sMapperName = substr($sCallerClass, $n + 1);
                if (strpos($sMapperName, 'Module') === 0) $sMapperName = substr($sMapperName, 6);
            }
            $aClassElements = HelperPlugin::ClassNameExplode($sCallerClass, array('Mapper' => $sMapperName));
            $sFullClassName = HelperPlugin::ClassNameImplode($aClassElements, 'Mapper');
            return new $sFullClassName(Engine::getInstance()->Database_GetConnect());
        }
        return null;
    }

    /**
     * Получить конфигурацию плагина
     *
     * @param   string  $key
     * @return  mixed
     */
    static public function GetConfig($key = '')
    {
        if ($key) $key = '.' . $key;
        $key = 'plugin.' . self::GetPluginStr() . $key;
        return Config::Get($key);
    }

    /**
     * Получить путь (полное имя файла) к шаблону скина
     *
     * @param   string  $sFile
     * @return  string
     */
    static public function GetTemplatePath($sFile = '')
    {
        if ($sFile) {
            if (substr($sFile, 0, 1) != '/') $sFile = '/' . $sFile;
            $result = Plugin::GetTemplatePath(self::GetPluginStr()) . $sFile;
        } else
            $result = Plugin::GetTemplatePath(self::GetPluginStr()) . '/';
        if (DIRECTORY_SEPARATOR == '\\')
            $result = str_replace('/', DIRECTORY_SEPARATOR, $result);
        else
            $result = str_replace('\\', DIRECTORY_SEPARATOR, $result);
        $result = str_replace(DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR, $result);
        return $result;
    }

    /**
     * Получить путь (полное имя файла) к шаблону акшена
     *
     * @param   string  $sFile
     * @return  string
     */
    static public function GetTemplateActionPath($sFile = '')
    {
        $aClassElements = self::ClassNameExplode(Router::GetActionClass());
        if (isset($aClassElements['Action'])) $sAction = $aClassElements['Action'];
        else $sAction = Router::GetAction();
        return self::GetTemplatePath('actions/Action' . ucfirst($sAction) . '/' . $sFile);
    }

    static public function GetPluginPath($sPluginName = null)
    {
        if (!$sPluginName) $sPluginName = self::GetPluginStr();
        return Config::Get('path.root.server') . '/plugins/' . strtolower($sPluginName);
    }

    /**
     * Получить URL к плагину
     *
     * @param   string  $sPluginName
     * @return  string
     */
    static public function GetWebPluginPath($sPluginName = null)
    {
        if (!$sPluginName) $sPluginName = self::GetPluginStr();
        return Config::Get('path.root.web') . '/plugins/' . strtolower($sPluginName);
    }

    /**
     * Получить URL к текущему скину плагина
     *
     * @param   string  $sPluginName
     * @return  string
     */
    static public function GetWebPluginSkin($sPluginName = null)
    {
        if (!$sPluginName) $sPluginName = self::GetPluginStr();
        $sTemplatePath = Plugin::GetTemplatePath($sPluginName);
        if (substr($sTemplatePath, -1) == '/') $sTemplatePath = substr($sTemplatePath, 0, strlen($sTemplatePath) - 1);
        $sSkin = substr($sTemplatePath, strrpos($sTemplatePath, '/') + 1);
        return self::GetWebPluginPath() . '/templates/skin/' . $sSkin . '/';
    }

    /**
     * Получить список всех родителей класса/объекта
     *
     * @param   object  $obj
     * @param   bool    $bIncludeSelf
     * @return  array
     */
    static public function GetAllParents($obj, $bIncludeSelf = true)
    {
        $aParents = array();
        if ($bIncludeSelf) {
            if (is_object($obj)) {
                $aParents[] = $sClass = get_class($obj);
            } else {
                $aParents = $sClass = $obj;
            }
        }
        do {
            $sClass = get_parent_class($sClass);
            if ($sClass) $aParents[] = $sClass;
        } while ($sClass);
        return $aParents;
    }

    static public function AutoLoadRegister($sFunction)
    {
        HelperPluginLoader::getInstance()->AutoLoadRegister($sFunction);
    }

} // class HelperPlugin

/**
 * Загрузчик файлов плагинов
 */
class HelperPluginLoader extends Object
{
    static protected $oInstance = null;
    protected $bInialized = false;
    protected $aAutoloaderSkipPrefix = array('DbSimple_', 'Smarty_');
    protected $aAutoloaderLog = array();
    protected $bAutoloaderError = false;
    protected $aInheritance = array();
    protected $nExtAutoLoaders = 0; // кол-во внешних автозагрузчиков

    static public function getInstance()
    {
        if (self::$oInstance === null) {
            self::$oInstance = new self;
        }
        return self::$oInstance;
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public function __destruct()
    {
    }

    public function Init()
    {
        if (!is_null(Config::Get('plugin.aceadminpanel.autoloader_error')))
            $this->bAutoloaderError = (bool)Config::Get('plugin.aceadminpanel.autoloader_error');
        if (Config::Get('plugin.aceadminpanel.autoloader_yii'))
            return $this->InitNew();
        else
            return $this->InitOld();
    }

    /**
     * Инициализация старого автозагрузчика классов
     *
     * @return
     */
    protected function InitOld()
    {
        if ($this->bInialized) return;

        $aFunc = spl_autoload_functions();
        if (is_array($aFunc) AND sizeof($aFunc) == 1) {
            // Первый вызов spl_autoload_register отключает __autoload,
            // поэтому надо зарегистрировать эту ф-цию опять
            spl_autoload_register($aFunc[0]);
        }
        spl_autoload_register(array(self::$oInstance, 'Autoloader'));
        if (!is_null(Config::Get('plugin.aceadminpanel.autoloader_error')))
            $this->bAutoloaderError = Config::Get('plugin.aceadminpanel.autoloader_error');

        $this->bInialized = true;
    }

    /**
     * Инициализация нового автозгручика классов, совместимого с Yii
     *
     * @return
     */
    protected function InitNew()
    {
        if ($this->bInialized) return;

        $cbAceLoader = array(self::$oInstance, 'Autoloader');

        $aFunc = spl_autoload_functions();

        // первый вызов spl_autoload_register
        if ($aFunc === array('__autoload')) {
            spl_autoload_register('__autoload');
            $aFunc = spl_autoload_functions();
        }

        if (!in_array($cbAceLoader, $aFunc)) {
            // удаляем все лоадеры кроме __autoload
            foreach ($aFunc as $cbLoader) {
                if ($cbLoader !== '__autoload') {
                    spl_autoload_unregister($cbLoader);
                }
            }
            // сразу за __autoload добавляем лоадер ace
            spl_autoload_register($cbAceLoader);
            // восстанавливаем лоадеры
            foreach ($aFunc as $cbLoader) {
                if ($cbLoader !== '__autoload') {
                    spl_autoload_register($cbLoader);
                }
            }
        }
        $this->bInialized = true;
    }

    public function AutoLoadRegister($sFunction)
    {
        if (!$this->bInialized) $this->Init();
        spl_autoload_register($sFunction);
        $this->nExtAutoLoaders += 1;
    }

    /**
     * Игнорировать автозагрузку класса
     *
     * @param   string  $sClassName
     * @return  bool
     */
    public function AutoloadIgnoreClass($sClassName)
    {
        if ($this->aAutoloaderSkipPrefix) {
            foreach ($this->aAutoloaderSkipPrefix as $sPrefix) {
                if (0 === strpos($sClassName, $sPrefix)) {
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * Автозагрузка файла класса
     *
     * @param   string  $sClassName
     * @return  void
     */
    public function Autoloader($sClassName)
    {
        if ($this->AutoloadIgnoreClass($sClassName)) return;

        $aLog = array('class' => $sClassName, 'time_begin' => microtime(true));

        // * В LS 0.4.1 пропущенна буква "s" в слове Inherits
        if (preg_match('/^Plugin(\w+)_Inherits_([\w_]+)/i', $sClassName, $aMatch)) {
            if (preg_match("/^Module(\w+)\_Entity(\w+)$/i", $aMatch[2])) {
                $sPlugin = $aMatch[1];
                $sInheritClass = $aMatch[2];
                $sParentClass = Engine::getInstance()->Plugin_GetParentInherit($sInheritClass);

                // опять приходится через ж..., исправляем ядро движка
                if (strtolower($sParentClass) == strtolower('Plugin' . $sPlugin . '_' . $sInheritClass)) {
                    $sParentClass = Engine::getInstance()->Plugin_GetParentInherit($sInheritClass);
                }
            } else {
                $sParentClass = str_replace('_Inherits_', '_Inherit_', $sClassName);
            }
            $aLog['code'] = $this->ClassAlias($sParentClass, $sClassName);
            $aLog['mode'] = 'inh';
            $aLog['time_end'] = microtime(true);
            $this->aAutoloaderLog[] = $aLog;
            return;
        }

        $aClassElements = HelperPlugin::ClassNameExplode($sClassName);

        if (isset($aClassElements['Module'])) {
            $sClassDelegate = Engine::getInstance()->Plugin_GetDelegate('module', $aClassElements['Module']);

            //if ($sClassDelegate != $sClassName) {
            if ($sClassDelegate != $sClassName AND $sClassDelegate != $aClassElements['Module']) {
                // если класс делегирован и делегат загружен, то ничего не делаем
                if (class_exists($sClassDelegate, false)) {
                    return;
                }
                $sClassName = $sClassDelegate;
                $aClassElements = HelperPlugin::ClassNameExplode($sClassName);
            }
        }

        // Формат именования с автонаследованием - создаем родительский класс
        if (preg_match('/^Plugin(\w+)_Inherits_([\w_]+)/', $sClassName, $match)) {
            //$aClassElements = HelperPlugin::ClassNameExplode($sClassName);
            if (!isset($this->aInheritance[$aClassElements['Inherits']])) {
                $sParentClass = $aClassElements['Inherits'];
            } else {
                $sParentClass = $this->aInheritance[$aClassElements['Inherits']];
            }
            // Запоминаем последнего наследника в цепочке
            $this->aInheritance[$aClassElements['Inherits']] = str_replace('_Inherits_', '_', $sClassName);

            // Формируем имя родительского класса
            if (isset($aClassElements['Module']) AND !strpos($sParentClass, '_')) {
                $sParentClass = 'Module' . $sParentClass;
                if (!class_exists($sParentClass, false)) {
                    Engine::getInstance()->LoadModule($sParentClass);
                }
            }

            // Создаем "динамический" класс или алиас
            $aLog['code'] = $this->ClassAlias($sParentClass, $sClassName);
            $aLog['mode'] = 'inh';
            if (class_exists($sClassName)) { /* nothing */

            }
        }
            // Старый формат именования класса Entity
        elseif (preg_match('/^Plugin(\w+)_(\w+)Entity_(\w+)/', $sClassName, $match)) {
            $aClassElements['Plugin'] = $match[1];
            $aClassElements['Module'] = $match[2];
            $aClassElements['Entity'] = $match[3];
            if (($aLog['file'] = $this->ClassLoad($aClassElements))) {
                $sParentClass = HelperPlugin::ClassNameImplode($aClassElements, 'Entity');
                // Создаем "динамический" класс или алиас
                $aLog['code'] = $this->ClassAlias($sParentClass, $sClassName);
                $aLog['mode'] = 'old';
            }
        }
            // Загрузка класса из файла
        else {
            $aLog['file'] = $this->ClassLoad($sClassName);
            $aLog['mode'] = 'new';
        }
        $aLog['time_end'] = microtime(true);
        $this->aAutoloaderLog[] = $aLog;
    }

    /**
     * Загрузка класса по его имени либо по массиву описания класса
     *
     * @param   mixed   $xClass - либо имя класса (строка), либо описание класса (массив)
     * @return  string
     */
    protected function ClassLoad($xClass)
    {
        $sFile = $this->ClassToPath($xClass);
        if (file_exists($sFile) AND is_file($sFile)) {
            include_once($sFile);
            return $sFile;
        }
        else {
            // Если не было подключено дополнительных автозагрузчиков,
            // то вывод отладочной информации
            if (!$this->nExtAutoLoaders AND $this->bAutoloaderError) {
                echo '[ERROR:classLoad] ';
                if (is_array($xClass)) {
                    foreach ($xClass as $key => $val) {
                        echo $key . '=&gt;' . $val . '<br/>';
                    }
                } else {
                    echo $xClass;
                }
                echo '<br/>';
                echo 'File not found: ' . $sFile . '<br/>';
                var_dump(debug_backtrace());
                exit;
            }
        }
        return '';
    }

    /**
     * Создание алиаса класса или дочернего класса (если нет поддержки алиасов)
     *
     * @param   string  $sOriginal
     * @param   string  $sAlias
     * @param   bool    $bAbstract
     * @return  string
     */
    public function ClassAlias($sOriginal, $sAlias, $bAbstract = true)
    {
        if (function_exists('class_alias')) {
            class_alias($sOriginal, $sAlias);
            $sEvalCode = "class_alias('$sOriginal', '$sAlias')";
        } else {
            if ($bAbstract) {
                $sEvalCode = 'abstract class ' . $sAlias . ' extends ' . $sOriginal . ' {}';
            } else {
                $sEvalCode = 'class ' . $sAlias . ' extends ' . $sOriginal . ' {}';
            }
            eval($sEvalCode);
        }
        return $sEvalCode;
    }

    /**
     * Преобразование класса в путь к файлу плагина
     *
     * @param  array|string $xClass - либо имя класса (строка), либо описание класса (массив)
     * @return string
     */
    protected function ClassToPath($xClass)
    {
        if (is_array($xClass)) $aClassElements = $xClass;
        else $aClassElements = HelperPlugin::ClassNameExplode($xClass);

        $sFilePath = Config::Get('path.root.server');
        if (isset($aClassElements['Plugin'])) {
            // класс внутри плагина
            if ((is_string($xClass) AND (false !== strpos($aClassElements['Plugin'], '_')))
                OR (sizeof($aClassElements) > 1)
            ) {
                $sFilePath .= '/plugins/' . strtolower($aClassElements['Plugin']);
            }
                // класс самого плагина
            else {
                $sFilePath .= '/plugins/Plugin' . ucfirst(strtolower($aClassElements['Plugin'])) . '.class.php';
            }
        }

        if (isset($aClassElements['Action'])) {
            $sFilePath .= '/classes/actions/Action' . $aClassElements['Action'] . '.class.php';
        }
        elseif (isset($aClassElements['Block'])) {
            $sFilePath .= '/classes/blocks/Block' . $aClassElements['Block'] . '.class.php';
        }
        elseif (isset($aClassElements['Hook'])) {
            $sFilePath .= '/classes/hooks/Hook' . $aClassElements['Hook'] . '.class.php';
        }
        elseif (isset($aClassElements['Module'])) {
            $sFilePath .= '/classes/modules/' . strtolower($aClassElements['Module']);
            if (isset($aClassElements['Mapper'])) {
                $sFilePath .= '/mapper/' . $aClassElements['Mapper'] . '.mapper.class.php';
            }
            elseif (isset($aClassElements['Entity'])) {
                $sFilePath .= '/entity/' . $aClassElements['Entity'] . '.entity.class.php';
            }
            else {
                $sFilePath .= '/' . ucfirst($aClassElements['Module']) . '.class.php';
            }
        }
        elseif (isset($aClassElements['Mapper'])) {
            if (!isset($aClassElements['Plugin'])) {
                $sFilePath .= '/classes/modules/' . strtolower($aClassElements['Mapper']) . '/mapper/'
                              . ucfirst(strtolower($aClassElements['Mapper'])) . '.mapper.class.php';
            }
        }
        if (DIRECTORY_SEPARATOR != '/') $sFilePath = str_replace(DIRECTORY_SEPARATOR, '/', $sFilePath);
        return $sFilePath;
    }

    public function GetLog()
    {
        return $this->aAutoloaderLog;
    }
}

if (!function_exists('class_alias')) {
    function class_alias($sOriginal, $sAlias)
    {
        eval('class ' . $sAlias . ' extends ' . $sOriginal . ' {}');
    }
}

>>>>>>> 2ccb00235253ce282d91021c0fbe9e10c7e5284a
// EOF
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

/**
 * Обработка блока с комментариями
 *
 */
class BlockStream extends Block {
        public function Exec() {
                if ($aComments=$this->Comment_GetCommentsOnline('topic',Config::Get('block.stream.row'))) {
			$oViewer=$this->Viewer_GetLocalViewer();
			$oViewer->Assign('aComments',$aComments);
                        $oViewer->Assign('oUserCurrent',$this->User_getUserCurrent());
			$sTextResult=$oViewer->Fetch("block.stream_comment.tpl");
			$this->Viewer_Assign('sStreamComments',$sTextResult);
		}
	}
}
?>
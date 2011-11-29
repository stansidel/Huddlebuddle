<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BlockPagesList
 *
 * @author stas
 */
class BlockPagesList extends Block {
    public function Exec()
    {
        $aPages = $this->PluginPage_Page_GetPages(array('pid'=>Config::Get('block.pageslist.pid'),'active'=>1));
        //Для того, чтобы не допустить конфликта создаем локальный объект представления
        $oViewer = $this->Viewer_GetLocalViewer();
        $sAction = strtolower(Router::GetAction());
        $sParams  = Router::GetParams();
        $oViewer->Assign('aPages', $aPages);
        $oViewer->Assign('sAction', $sAction);
        $oViewer->Assign('sParams', $sParams);
        $sPagesList  = $oViewer->Fetch('block.pageslist_content.tpl');
        //Передаем данные уже в глобальный объект вида 
        $this->Viewer_Assign('sPagesList', $sPagesList);
    }
}

?>

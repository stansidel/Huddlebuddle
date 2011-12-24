<?php

/*
  Getlasttopics plugin
  (P) PSNet, 2008 - 2011
  http://psnet.lookformp3.net/
 */

class PluginGetlasttopics_HookGetlasttopics extends Hook {

    public function RegisterHook() {
        //$this->AddHook('template_form_login_end', 'GetLastTopics');
        $this->AddHook('template_login_page_end', 'GetLastTopics');
        $this->AddHook('template_html_head_end', 'AddRssLink');
        $this->AddHook('init_action', 'InitAction');
    }

    // ---

    public function GetLastTopics() {
        if (Config::Get('general.close') and Config::Get('plugin.getlasttopics.show_topics')) {
            $aResult = $this->Topic_GetTopicsNew(1, Config::Get('plugin.getlasttopics.per_page'));
            $aTopics = $aResult ['collection'];

            $this->Viewer_Assign('aNewTopicsList', $aTopics);
            return $this->Viewer_Fetch(Plugin::GetTemplatePath(__CLASS__) . 'addtopiclisting.tpl');
        }
    }
    
    public function InitAction(){
        if (Config::Get('general.close') and Config::Get('plugin.getlasttopics.enable_rss')) {
            $sUrl = @$_SERVER['REDIRECT_URL'];
            if(Router::GetAction() == 'login' and substr_count($sUrl, '/rss') > 0)
                    Router::Action('rss', 'login');
        }
    }
    
    public function AddRssLink(){
        if (Config::Get('general.close') and Config::Get('plugin.getlasttopics.enable_rss')) {
            $aHtmlRssAlternate = null;
            $aHtmlRssAlternate['url']=htmlspecialchars(Router::GetPath('rss'));
            $aHtmlRssAlternate['title']=htmlspecialchars(Config::Get('view.name'));
            $this->Viewer_Assign('aHtmlRssAlternate', $aHtmlRssAlternate);
            return $this->Viewer_Fetch(Plugin::GetTemplatePath(__CLASS__) . 'rsslink.tpl');
        }
    }

}

?>
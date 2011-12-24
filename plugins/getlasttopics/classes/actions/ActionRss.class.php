<?php

/*---------------------------------------------------------------------------
 * @Plugin Name: getLastTopics
 * @Plugin Id: getlasttopics
 * @Plugin URI: http://livestreetcms.ru/addons/view/149/
 * @Description: Get New Topics
 * @LiveStreet Version: 0.5
 * @File Name: ActionRss.class.php
 * @License: GNU GPL v2, http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *----------------------------------------------------------------------------
 */

/**
 * 
 * 
 *
 */
class PluginGetlasttopics_ActionRss extends PluginGetlasttopics_Inherit_ActionRss {

    private $sPlugin = 'getlasttopics';

    public function Init() {
        return parent::Init();
    }

    protected function RegisterEvent() {
        $this->AddEvent('login', 'RssLogin');
    }

    protected function RssLogin() {
        $aResult = $this->Topic_GetTopicsNew(1, Config::Get('plugin.getlasttopics.per_page'));
        $aTopics = $aResult ['collection'];

        $aChannel['title'] = Config::Get('view.name');
        $aChannel['link'] = Config::Get('path.root.web');
        $aChannel['description'] = Config::Get('view.name') . ' / RSS channel';
        $aChannel['language'] = 'ru';
        $aChannel['managingEditor'] = Config::Get('general.rss_editor_mail');
        $aChannel['generator'] = Config::Get('view.name');

        $topics = array();
        foreach ($aTopics as $oTopic) {
            $item['title'] = $oTopic->getTitle();
            $item['guid'] = $oTopic->getUrl();
            $item['link'] = $oTopic->getUrl();
            $item['description'] = $this->getTopicText($oTopic);
            $item['pubDate'] = $oTopic->getDateAdd();
            $item['author'] = $oTopic->getUser()->getLogin();
            $item['category'] = htmlspecialchars($oTopic->getTags());
            $topics[] = $item;
        }

        $this->InitRss();
        $this->Viewer_Assign('aChannel', $aChannel);
        $this->Viewer_Assign('aItems', $topics);
        $this->SetTemplateAction('index');
    }

}

?>
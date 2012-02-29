<?php

/*
  Getlasttopics plugin
  (P) PSNet, 2008 - 2011
  http://psnet.lookformp3.net/
 */

if (!class_exists('Plugin')) {
    die('Kokobubble!');
}

class PluginGetlasttopics extends Plugin {

    public $aInherits = array(
        'action' => array('ActionRss'),
    );

    public function Activate() {
        return true;
    }

    public function Init() {
        
    }

}

?>
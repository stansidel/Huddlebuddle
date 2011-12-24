<?php

class PluginExternallinks_HookExternallinks extends Hook {

    function RegisterHook() {
        $this->AddHook("topic_add_before", "onTopicAddUpdate", __CLASS__);
        $this->AddHook("topic_edit_before", "onTopicAddUpdate", __CLASS__);
        $this->AddHook("comment_add_before", "onCommetAdd", __CLASS__);
    }

    function onTopicAddUpdate($params) {
        $aMatches = array();
        $oTopic = $params['oTopic'];
        $text = $oTopic->getText();
        $thisDomain = Config::Get('path.root.web');
        $ereg = '<a[^>]+href="[^"]+"[^>]{0,}>';
        if (mb_ereg($ereg, $text, $aMatches)) {
            $countMatches = sizeof($aMatches);
            for ($i = 0; $i < $countMatches; $i++) {
                if (mb_ereg(str_replace(array('\\', '\\.'), array('\\\\', '\.'), $thisDomain), $aMatches[$i]))
                    continue;
                if (strpos($aMatches[$i], "target=") === false)
                    $newString = mb_ereg_replace('>$', ' target="_blank">', $aMatches[$i]);
                else
                    $newString = mb_ereg_replace('target="[_a-zA-Z]{0,}"', 'target="_blank"', $aMatches[$i]);
                $text = mb_ereg_replace($aMatches[$i], $newString, $text);
            }
        }


        $oTopic->setText($text);
        $shortText = $oTopic->getTextShort();
        $ereg = '<a[^>]+href="[^"]+"[^>]{0,}>';
        if (mb_ereg($ereg, $shortText, $aMatches)) {
            $countMatches = sizeof($aMatches);
            for ($i = 0; $i < $countMatches; $i++) {
                if (mb_ereg(str_replace(array('\\', '\\.'), array('\\\\', '\.'), $thisDomain), $aMatches[$i]))
                    continue;
                if (strpos($aMatches[$i], "target=") === false)
                    $newString = mb_ereg_replace('>$', ' target="_blank">', $aMatches[$i]);
                else
                    $newString = mb_ereg_replace('target="[_a-zA-Z]{0,}"', 'target="_blank"', $aMatches[$i]);
                $shortText = mb_ereg_replace($aMatches[$i], $newString, $shortText);
            }
        }
        $oTopic->setTextShort($shortText);
    }

    function onCommetAdd($params) {

        $comment = $params['oCommentNew'];
        $text = $comment->getText();
        $thisDomain = Config::Get('path.root.web');

        $ereg = '<a[^>]+href="[^"]+"[^>]{0,}>';
        $aMatches = array();
        if (mb_ereg($ereg, $text, $aMatches)) {
            $countMatches = sizeof($aMatches);
            for ($i = 0; $i < $countMatches; $i++) {
                if (mb_ereg(str_replace(array('\\', '\\.'), array('\\\\', '\.'), $thisDomain), $aMatches[$i]))
                    continue;
                if (strpos($aMatches[$i], "target=") === false)
                    $newString = mb_ereg_replace('>$', ' target="_blank">', $aMatches[$i]);
                else
                    $newString = mb_ereg_replace('target="[_a-zA-Z]{0,}"', 'target="_blank"', $aMatches[$i]);
                $text = mb_ereg_replace($aMatches[$i], $newString, $text);
            }
        }
        $comment->setText($text);
    }

}

?>

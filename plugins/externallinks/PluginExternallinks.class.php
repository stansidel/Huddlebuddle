<?php

/*
 * Copyright © 2011 Stanislav Sidelnikov
 *
 * URL Redirect plugin: make links to external resources open in new tabs
 * Author: Stanislav Sidelnikov
 * Profile: http://livestreet.ru/profile/ssidelnikov/
 * Site: http://ssidelnikov.ru
 *
 * GNU General Public License, version 2:
 * http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *
 */

if (!class_exists('Plugin')) {
    die('Hacking attempt!');
}

class PluginExternallinks extends Plugin {

    public function Activate() {
        return true;
    }

    public function Init() {
        
    }

}

?>
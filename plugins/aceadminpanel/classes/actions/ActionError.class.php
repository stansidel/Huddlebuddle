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
 * @File Name: ActionError.class.php
 * @License: GNU GPL v2, http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *----------------------------------------------------------------------------
<<<<<<< HEAD
 */

class PluginAceadminpanel_ActionError extends PluginAceadminpanel_Inherit_ActionError {
    private $sPlugin = 'aceadminpanel';

    protected function EventError() {
        if (Router::GetAction() == 'admin') {
            //func_header_location(Config::Get('path.root.web') . '/admin/');
            admHeaderLocation(Config::Get('path.root.web') . '/admin/');
            exit;
        } else {
            return parent::EventError();
        }
    }
=======
 */

class PluginAceadminpanel_ActionError extends PluginAceadminpanel_Inherit_ActionError {
    private $sPlugin = 'aceadminpanel';

    protected function EventError() {
        if (Router::GetAction() == 'admin') {
            //func_header_location(Config::Get('path.root.web') . '/admin/');
            admHeaderLocation(Config::Get('path.root.web') . '/admin/');
            exit;
        } else {
            return parent::EventError();
        }
    }
>>>>>>> 2ccb00235253ce282d91021c0fbe9e10c7e5284a
}
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
 * Настройка базы данных
 */
$config['db']['params']['host'] = 'localhost';
$config['db']['params']['port'] = '3306';
$config['db']['params']['user'] = 'huddle';
$config['db']['params']['pass'] = 'V86cc1Ht';
$config['db']['params']['type']   = 'mysql';
$config['db']['params']['dbname'] = 'huddlebuddle';
$config['db']['table']['prefix'] = 'huddle_';

//$config['path']['root']['web'] = 'http://alpha.huddlebuddle.org';
//$config['path']['root']['server'] = '/var/www/alpha.huddlebuddle.org';
$config['path']['root']['web'] = 'http://huddle.localhost:8080';
$config['path']['root']['server'] = 'Y:\home\localhost\huddle';
$config['path']['offset_request_url'] = '0';
$config['db']['tables']['engine'] = 'InnoDB';
?>

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
 * Настройки для локального сервера.
 * Для использования - переименовать файл в config.local.php
 */

include("server/config.server.php");
 
$config['view']['name'] = 'Huddlebuddle';
$config['view']['description'] = 'IT-crowd huddle place';
$config['view']['keywords'] = 'it,blog';
$config['view']['skin'] = 'huddlebuddle';
$config['sys']['mail']['from_email'] = 'bigbrother@huddlebuddle.org';
$config['sys']['mail']['from_name'] = 'Huddlebuddle Big Brother';
$config['general']['close'] = true;
$config['general']['reg']['activation'] = true;
$config['general']['reg']['invite'] = true;
$config['lang']['current'] = 'english';
$config['lang']['default'] = 'english';

$config['admin_actions']['enabled'] = false;
$config['admin_actions']['url'] = $config['path']['root']['web'];
$config['admin_actions']['name'] = 'Big Brother';
$config['admin_actions']['avatar_url'] = '';
$config['admin_actions']['single_comments'] = true;
$config['admin_actions']['single_topics'] = false;

$config['module']['topic']['user_block_comments'] = false;       // Пользователь может запретить комментирование

/**
 * Настройка основных блоков
 */
$config['block']['stream']['row'] = 20;  // сколько записей выводить в блоке "Прямой эфир"
$config['block']['blogs']['row']  = 10;  // сколько записей выводить в блоке "Блоги"

/**
 * Настройки ACL(Access Control List — список контроля доступа)
 */
$config['acl']['create']['blog']['rating']                =  0;  // порог рейтинга при котором юзер может создать коллективный блог
$config['acl']['create']['comment']['rating']             = -10; // порог рейтинга при котором юзер может добавлять комментарии
$config['acl']['create']['comment']['limit_time']         =  10; // время в секундах между постингом комментариев, если 0 то ограничение по времени не будет работать
$config['acl']['create']['comment']['limit_time_rating']  = -1;  // рейтинг, выше которого перестаёт действовать ограничение по времени на постинг комментов. Не имеет смысла при $config['acl']['create']['comment']['limit_time']=0
$config['acl']['create']['topic']['limit_time']           =  240;// время в секундах между созданием записей, если 0 то ограничение по времени не будет работать
$config['acl']['create']['topic']['limit_time_rating']    =  5;  // рейтинг, выше которого перестаёт действовать ограничение по времени на создание записей
$config['acl']['create']['talk']['limit_time']        =  300; // время в секундах между отправкой инбоксов, если 0 то ограничение по времени не будет работать
$config['acl']['create']['talk']['limit_time_rating'] =  1;   // рейтинг, выше которого перестаёт действовать ограничение по времени на отправку инбоксов
$config['acl']['create']['talk_comment']['limit_time']        =  10; // время в секундах между отправкой инбоксов, если 0 то ограничение по времени не будет работать
$config['acl']['create']['talk_comment']['limit_time_rating'] =  5;   // рейтинг, выше которого перестаёт действовать ограничение по времени на отправку инбоксов
$config['acl']['vote']['comment']['rating']               = -3;  // порог рейтинга при котором юзер может голосовать за комментарии
$config['acl']['vote']['blog']['rating']                  = -5;  // порог рейтинга при котором юзер может голосовать за блог
$config['acl']['vote']['topic']['rating']                 = -7;  // порог рейтинга при котором юзер может голосовать за топик
$config['acl']['vote']['user']['rating']                  = -1;  // порог рейтинга при котором юзер может голосовать за пользователя
$config['acl']['vote']['topic']['limit_time']             = 60*60*24*20; // ограничение времени голосования за топик
$config['acl']['vote']['comment']['limit_time']           = 60*60*24*5;  // ограничение времени голосования за комментарий

/**
 * Настройки модулей
 */
// Модуль Blog
$config['module']['blog']['per_page']        = 20;   // Число блогов на страницу
$config['module']['blog']['users_per_page']  = 20;   // Число пользователей блога на страницу
$config['module']['blog']['personal_good']   = -5;   // Рейтинг топика в персональном блоге ниже которого он считается плохим
$config['module']['blog']['collective_good'] = -3;   // рейтинг топика в коллективных блогах ниже которого он считается плохим
$config['module']['blog']['index_good']      =  0;   // Рейтинг топика выше которого(включительно) он попадает на главную
$config['module']['blog']['encrypt']         = 'huddlebro'; // Ключ XXTEA шифрования идентификаторов в ссылках приглашения в блоги
$config['module']['blog']['avatar_size'] = array(48,24,0); // Список размеров аватаров у блога. 0 - исходный размер
// Модуль Topic
$config['module']['topic']['new_time']   = 60*60*24*1;  // Время в секундах в течении которого топик считается новым
$config['module']['topic']['per_page']   = 10;          // Число топиков на одну страницу
$config['module']['topic']['max_length'] = 99000;       // Максимальное количество символов в одном топике
// Модуль User
$config['module']['user']['per_page']    = 15;          // Число юзеров на страницу на странице статистики
$config['module']['user']['friend_notice']['delete'] = false; // Отправить talk-сообщение в случае удаления пользователя из друзей
$config['module']['user']['friend_notice']['accept'] = false; // Отправить talk-сообщение в случае одобрения заявки на добавление в друзья
$config['module']['user']['friend_notice']['reject'] = false; // Отправить talk-сообщение в случае отклонения заявки на добавление в друзья
$config['module']['user']['avatar_size'] = array(64,48,24,0); // Список размеров аватаров у пользователя. 0 - исходный размер
$config['module']['user']['login']['min_size'] = 3; // Минимальное количество символов в логине
$config['module']['user']['login']['max_size'] = 30; // Максимальное количество символов в логине
$config['module']['user']['time_active'] = 60*60*24*7; 	// Число секунд с момента последнего посещения пользователем сайта, в течение которых он считается активным
// Модуль Comment
$config['module']['comment']['per_page'] = 20;          // Число комментариев на одну страницу(это касается только полного списка комментариев прямого эфира)
$config['module']['comment']['bad']      = -5;          // Рейтинг комментария, начиная с которого он будет скрыт
$config['module']['comment']['max_tree'] = 7;           // Максимальная вложенность комментов при отображении
$config['module']['comment']['use_nested'] = false; 	// Использовать или нет nested set при выборке комментов, увеличивает производительность при большом числе комментариев + позволяет делать постраничное разбиение комментов
$config['module']['comment']['nested_per_page'] = 0; 	// Число комментов на одну страницу в топике, актуально только при use_nested = true
$config['module']['comment']['nested_page_reverse'] = true; 	// Определяет порядок вывода страниц. true - последние комментарии на первой странице, false - последние комментарии на последней странице
// Модуль Talk
$config['module']['talk']['per_page']   = 15;           // Число приватных сообщений на одну страницу
$config['module']['talk']['reload']     = false;
$config['module']['talk']['request']    = 60;
$config['module']['talk']['period']     = 20000;
$config['module']['talk']['max_errors'] = 4;
$config['module']['talk']['encrypt']    = 'huddlebro'; // Ключ XXTEA шифрования идентификаторов в ссылках
// Модуль Lang
$config['module']['lang']['delete_undefined'] = true;   // Если установлена true, то модуль будет автоматически удалять из языковых конструкций переменные вида %%var%%, по которым не была произведена замена
// Модуль Notify
$config['module']['notify']['delayed']        = false;  // Указывает на необходимость использовать режим отложенной рассылки сообщений на email
$config['module']['notify']['insert_single']  = false;  // Если опция установлена в true, систему будет собирать записи заданий удаленной публикации, для вставки их в базу единым INSERT
$config['module']['notify']['per_process']    = 10;     // Количество отложенных заданий, обрабатываемых одним крон-процессом
// Модуль Image
$config['module']['image']['default']['watermark_use']        = false;
$config['module']['image']['default']['watermark_type']       = 'text';
$config['module']['image']['default']['watermark_position']   = '0,24';
$config['module']['image']['default']['watermark_text']       = '(c) LiveStreet';
$config['module']['image']['default']['watermark_font']       = 'arial';
$config['module']['image']['default']['watermark_font_color'] = '255,255,255';
$config['module']['image']['default']['watermark_font_size']  = '10';
$config['module']['image']['default']['watermark_font_alfa']  = '0';
$config['module']['image']['default']['watermark_back_color'] = '0,0,0';
$config['module']['image']['default']['watermark_back_alfa']  = '40';
$config['module']['image']['default']['watermark_image']      = false;
$config['module']['image']['default']['watermark_min_width']  = 200;
$config['module']['image']['default']['watermark_min_height'] = 130;
$config['module']['image']['default']['round_corner']         = false;
$config['module']['image']['default']['round_corner_radius']  = '18';
$config['module']['image']['default']['round_corner_rate']    = '40';
$config['module']['image']['default']['path']['watermarks']   = '___path.root.server___/engine/lib/external/LiveImage/watermarks/';
$config['module']['image']['default']['path']['fonts']        = '___path.root.server___/engine/lib/external/LiveImage/fonts/';
$config['module']['image']['default']['jpg_quality']          = 100;  // Число от 0 до 100

$config['module']['image']['foto']['watermark_use']  = false;
$config['module']['image']['foto']['round_corner']   = false;

$config['module']['image']['topic']['watermark_use']  = false;
$config['module']['image']['topic']['round_corner']   = false;
// Модуль Security
$config['module']['security']['key']   = "huddlebuddle_key"; // ключ сессии для хранения security-кода
$config['module']['security']['hash']  = "huddlebuddle_key"; // "примесь" к строке, хешируемой в качестве security-кода

$config['module']['userfeed']['count_default'] = 10; // Число топиков в ленте по умолчанию

$config['module']['stream']['count_default'] = 20; // Число топиков в ленте по умолчанию
$config['module']['stream']['disable_vote_events'] = false;

return $config;
?>

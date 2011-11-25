<?php
/*---------------------------------------------------------------------------
 * @Plugin Name: aceAdminPanel
 * @Plugin Id: aceadminpanel
 * @Plugin URI: 
 * @Description: Advanced Administrator's Panel for LiveStreet/ACE
 * @Version: 1.5.210
 * @Author: Vadim Shemarov (aka aVadim)
 * @Author URI: 
 * @LiveStreet Version: 0.5
 * @File Name: russian.site_settings.php
 * @License: GNU GPL v2, http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *----------------------------------------------------------------------------
 */


/**
 * Языковой файл для модуля (Английский язык)
 */
return array(
    'adm_settings_title' => 'Settings',
    'adm_settings_base' => 'Main',
    'adm_settings_sys' => 'System',
    'adm_settings_acl' => 'Permissions',

    'adm_set_section_site' => 'Site',
    'adm_set_view_skin' => 'Site theme',
    'adm_set_view_name' => 'Site name',
    'adm_set_view_description' => 'Value of description meta tag',
    'adm_set_view_keywords' => 'Value of keywords meta tag',

    'adm_set_section_general' => 'General',
    'adm_set_general_close' => 'Close site',
    'adm_set_general_reg_invite' => 'Registration is allowed via Invites only',
    'adm_set_general_reg_activation' => 'Use activation of new users',

    'adm_set_section_sys_lang' => 'Languages',
    'adm_set_lang_current' => 'Current language',
    'adm_set_lang_default' => 'Default language (if there is no phrase in current language)',

    'adm_set_section_edit' => 'Editing',
    'adm_set_view_tinymce' => 'Use WYSIWYG editor TinyMCE',
    'adm_set_view_noindex' => '"Hide" links from search engines',
    'adm_set_view_img_resize_width' => 'Width (in pixels) of the compressed images in text',
    'adm_set_view_img_max_width' => 'Maximum width (in pixels) of the loaded images',
    'adm_set_view_img_max_height' => 'Maximum height (in pixels) of the loaded images',

    'adm_set_section_sys_cookie'=>'Cookies and sessions',
    'adm_set_sys_cookie_host'=>'Cookies installation host',
    'adm_set_sys_cookie_path'=>'Cookies installation host',
    'adm_set_sys_session_standart'=>'Use a standart session setting engine',
    'adm_set_sys_session_name'=>'Session name',
    'adm_set_sys_session_timeout'=>'Session timeout in seconds',
    'adm_set_sys_session_host'=>'Session host in cookies',
    'adm_set_sys_session_path'=>'Session path in cookies',

    'adm_set_section_sys_mail'=>'Mail Options',
    'adm_set_sys_mail_type'=>'Which type of sending to use',
    'adm_set_sys_mail_from_email'=>'Notifications sender address',
    'adm_set_sys_mail_from_name'=>'Notifications sender name',
    'adm_set_sys_mail_charset'=>'Messages encoding',
    'adm_set_sys_mail_smtp_host'=>'SMTP Settings - host',
    'adm_set_sys_mail_smtp_port'=>'SMTP Settings - port',
    'adm_set_sys_mail_smtp_user'=>'SMTP Settings - user',
    'adm_set_sys_mail_smtp_password'=>'SMTP Settings - password',
    'adm_set_sys_mail_smtp_auth'=>'Use authentication when sending',
    'adm_set_sys_mail_include_comment'=>'Include comment text in notificatin messages',
    'adm_set_sys_mail_include_talk'=>'Include private messages text in notifications messages',

    'adm_set_section_sys_logs' => 'Logs Settings',
    'adm_set_sys_logs_sql_query' => 'Enable logging of all SQL queries',
    'adm_set_sys_logs_sql_query_file' => 'SQL queries log file',
    'adm_set_sys_logs_sql_error' => 'Anable logging of error SQL queries',
    'adm_set_sys_logs_sql_error_file' => 'Error SQL queries log file',
    'adm_set_sys_logs_profiler' => 'Enable profiling',
    'adm_set_sys_logs_profiler_file' => 'Profiling file',
    'adm_set_sys_logs_cron_file' => 'Cron tasks log file',

    'adm_set_section_acl' => 'Permissions',
    'adm_set_acl_create_blog_rating' => 'Rating to create a collective blog',
    'adm_set_acl_create_comment_rating' => 'Rating to add comments',
    'adm_set_acl_create_comment_limit_time' => 'Time (in seconds) to the next comment post. No limits if 0',
    'adm_set_acl_create_comment_limit_time_rating' => 'Rating to have no limits on comments posting time',
    'adm_set_acl_create_topic_limit_time' => 'Time (in seconds) to the next topic creation. No limits if 0',
    'adm_set_acl_create_topic_limit_time_rating' => 'Rating to have no limits on topic creation time',
    'adm_set_acl_create_talk_limit_time' => 'Time (in seconds) to the next private message sending. No limits if 0',
    'adm_set_acl_create_talk_limit_time_rating' => 'Rating to have no limits on message sending time',
    'adm_set_acl_create_talk_comment_limit_time' => 'Time (in seconds) to the next private message sending',
    'adm_set_acl_create_talk_comment_limit_time_rating' => 'Rating to have no limits on message sending time',
    'adm_set_acl_vote_blog_rating' => 'Rating to vote for blogs',
    'adm_set_acl_vote_topic_rating' => 'Rating to vote for topics',
    'adm_set_acl_vote_comment_rating' => 'Rating to vote for comments',
    'adm_set_acl_vote_user_rating' => 'Rating to vote for users',
    'adm_set_acl_vote_topic_limit_time' => 'Time limit for topic voting (in seconds)',
    'adm_set_acl_vote_comment_limit_time' => 'Time limit for comments voting (in seconds)',

);
// EOF
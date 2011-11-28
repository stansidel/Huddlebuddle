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
 * @File Name: english.php
 * @License: GNU GPL v2, http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *----------------------------------------------------------------------------
 */

/**
 * Языковой файл для модуля (Английский язык)
 */
return array(
    'adm_title' => 'Admin Panel',
    'adm_goto_site' => 'Go to Site',
    'adm_need_upgrade' => '<b>ATTENTION!</b> You need to update the module by clicking the link below',
    'adm_denied_title' => 'Access denied',
    'adm_denied_text' => 'You do not have permissions to use this mode',
    'adm_banned1_text' => 'You do not have permissions to access this site till %%date%%',
    'adm_banned2_text' => 'You do not have permissions to access this site',
    'adm_banned3_text' => 'Your IP is blacklisted',
    'adm_user_login' => 'User login',
    'adm_user_not_found' => 'User %%user%% is not found',
    'adm_user_ip' => 'User IP',
    'adm_user_ip_seek_notice' => 'Eg, 83.167.100.46 or 83.167.*.* ',
    'adm_user_regdate_seek_notice' => 'Eg, 2009-2 or 2009-3-31',

    'adm_menu_about' => 'About',
    'adm_menu_params' => 'Settings',

    'adm_menu_site' => 'Site',
    'adm_menu_statistics' => 'Statistics',
    'adm_menu_plugins' => 'Plugins',
    'adm_menu_delegates' => 'Delegates',
    'adm_menu_settings' => 'Settings',
    'adm_menu_config' => 'Configuration',
    'adm_menu_logs' => 'Logs',
    'adm_menu_close_site' => 'The site is closed',
    'adm_menu_cache' => 'Cahce',
    'adm_menu_reset' => 'Reset data',
    'adm_menu_reset_cache' => 'Reset cahce',
    'adm_menu_reset_config' => 'Reset configuration',

    'adm_menu_themes' => 'Themes',
    'adm_menu_installed' => 'Installed',
    'adm_theme_activate' => 'Activate',

    'adm_menu_languages' => 'Languages',
    'adm_menu_installed' => 'Installed',

    'adm_menu_pages' => 'Pages',
    'adm_menu_pages_list' => 'Page List',
    'adm_menu_pages_new' => 'Add Page',
    'adm_menu_pages_options' => 'Page Options',

    'adm_menu_blogs' => 'Blogs',
    'adm_menu_blogs_list' => 'Blogs List',

    'adm_menu_users' => 'Users',
    'adm_menu_users_profile' => 'Profile',
    'adm_menu_users_list' => 'Users List',
    'adm_menu_users_banlist' => 'Ban List',
    'adm_banlist_ids' => 'Users',
    'adm_banlist_ips' => 'IPs',

    'adm_menu_users_fields' => 'Additional User Fields',

    'adm_site_statistics' => 'Site statistics',
    'adm_site_stat_users' => 'Users:',
    'adm_site_stat_blogs' => 'Blogs:',
    'adm_site_stat_topics' => 'Topics:',
    'adm_site_stat_comments' => 'Comments:',

    'adm_site_info' => 'Site Info',
    'adm_site_info_skin' => 'Current Skin',
    'adm_site_info_web' => 'Site URL',

    'adm_active_plugins' => 'Active plugins',

    'adm_params_title' => 'Admin Panel Settings',
    'adm_plugins_title' => 'Activate/Deactivate plugins',

    'adm_users_list' => 'Users',
    'adm_admins_list' => 'Admins',
    'adm_users_date_reg' => 'Registration Date',
    'adm_users_ip_reg' => 'Registration IP',
    'adm_users_activated' => 'Activated',
    'adm_users_last_activity' => 'Last Activity',
    'adm_users_banned' => 'Banned',
    'adm_users_activate' => 'Activate',
    'adm_users_action' => 'Action',
    'adm_users_ban' => 'Ban',
    'adm_users_unban' => 'Unban',
    'adm_cannot_ban_self' => 'You cannot ban yourself',
    'adm_cannot_be_banned' => 'You cannot make a banned user administrator',
    'adm_already_added' => 'This user is already an administrator',
    'adm_cannot_ban_admin' => 'Ypu cannot ban an administrator',
    'adm_cannot_with_admin' => 'The action cannot be made on admin',
    'adm_users_del' => 'Delete',
    'adm_users_del_warning' => 'ATTENTION! You are going to delete ALL the user\'s blogs, topics, comments and votes when deleting the user. Comments of other users, that were written in reply to the deleting comment, may also be deleted',
    'adm_users_del_confirm' => 'Confirm user deletion',
    'adm_cannot_del_self' => 'You cannot delete yourself',
    'adm_cannot_del_admin' => 'You cannot delete an administrator',
    'adm_cannot_del_confirm' => 'You have not confirmed user deletion',
    'adm_user_deleted' => 'User %%user%% has been deleted',
    'adm_msg_sent_ok' => 'The message has been successfully sent',

    'adm_user_voted' => 'Voted',
    'adm_user_voted_users' => 'For users',
    'adm_user_voted_topics' => 'For topics',
    'adm_user_voted_blogs' => 'For blogs',
    'adm_user_voted_comments' => 'For comments',
    'adm_user_wrote_topics' => 'Published topics',
    'adm_user_wrote_comments' => 'Published comments',
    'adm_comment_edit' => 'Edit comment',

    'adm_param_items_per_page' => 'Lines per page',
    'adm_param_items_per_page_notice' => 'Lines, per page in tables (users, ban lists, etc)',
    'adm_param_votes_per_page' => 'Number of last votes in the profile',
    'adm_param_votes_per_page_notice' => 'Number of last votes in the profile in each table - votes for other users, topics, commentsssssssssssssssss, etc',
    'adm_param_edit_footer' => 'Edited topics/comments sign',
    'adm_param_edit_footer_notice' => 'Sign automatically added to topics and comments when edittedin the Admin Panel',
    'adm_param_vote_value' => 'Admin vote power',
    'adm_param_vote_value_notice' => 'Value of the "powered vote" accessable from the user\'s profile in the Admin Panel',

    'adm_vote_error' => 'Admin voting error',
    'adm_repeat_vote_error' => 'Repeated admin voting error',

    'adm_ban_upto' => 'Ban till',
    'adm_ban_unlim' => 'Unlimited ban',
    'adm_ban_for' => 'Ban for',
    'adm_ban_days' => 'days',
    'adm_ban_comment' => 'Ban comment',

    'adm_pages' => 'Pages',
    'adm_pages_new' => 'New page',
    'adm_pages_options' => 'Page Options',
    'adm_page_options_urls' => 'Denied URLs',
    'adm_page_options_urls_notice' => 'URLs (comma separated) that cannot be used when creating a page',

    'adm_themes' => 'Themes',
    'adm_close_open_site' => 'Close/open site',
    'adm_site_closed' => 'The site is closed',
    'adm_site_openned' => 'The site is open',
    'adm_close_site_notice' => 'You can close your site for visitors. Only admins have access to the site.',
    'adm_close_site_text_notice' => 'Write a message for visitors of the closed site',
    'adm_close_site_file_notice' => 'Or put the name of an HTML file (at the root dir) the users will be redirected to',
    'adm_close_site_text_empty' => 'The message cannot be empty',
    'adm_close_site_file_empty' => 'The file name cannot be ampty',

    'adm_yes' => 'yes',
    'adm_no' => 'no',
    'adm_include' => 'Include',
    'adm_exclude' => 'Exclude',
    'adm_seek' => 'Seek',
    'adm_save' => 'Save',
    'adm_reset' => 'Reset',
    'adm_continue' => 'Continue',
    'adm_saved_ok' => 'Data saved',
    'adm_saved_err' => 'Saving data error',
    'adm_file_not_found' => 'File is not found',
    'adm_err_read' => 'Reading error',
    'adm_err_read_dir' => 'Directory reading error',
    'adm_err_read_file' => 'File reading error',
    'adm_err_copy_file' => 'Error while copying file %%file%%',
    'adm_err_wrong_ip' => 'Wrong IP address',
    'adm_config_err_read' => 'Error while reading config file',
    'adm_config_err_backup' => 'Error while creating the backup file',
    'adm_config_err_save' => 'Error while saving config file',
    'adm_config_save_ok' => 'Changes in the configuration have been saved',
    'adm_themes_err_read' => 'Themes reading error',
    'adm_themes_select_skin' => 'Choose theme',
    'adm_themes_activate_skin' => 'Activate theme',
    'adm_themes_activate_label' => 'Choose a theme for activation',
    'adm_themes_activate_notice' => 'Choose a theme from the list of installed themes for activation',
    'adm_themes_need_files' => 'The following files are needed for correct functionality:',
    'adm_themes_need_files_copy' => 'Copy them from the current theme??',
    'adm_themes_changed' => 'The theme has been saved. You should reload the page',
    'adm_activate_language' => 'Activate language',
    'adm_compare_language' => 'Compare language files',
    'adm_languages_select' => 'Choose language',
    'adm_languages_activate' => 'Activate',
    'adm_languages_compare' => 'Compare',
    'adm_languages_default' => 'Default',
    'adm_languages_activate_label' => 'Choose a language for activation',
    'adm_languages_activate_notice' => 'Choose a language from the list of installed languages for activation',
    'adm_language_not_found' => 'The language is not found',
    'adm_current_language' => 'Current language',
    'adm_selected_language' => 'Chosen language',

    'adm_send_copy_self' => 'Send the copy to yourself',
    'adm_send_err_to_user' => 'Error while sending a message to %%user%%',
    'adm_send_common_message' => 'Send a common message',
    'adm_send_separate_messages' => 'Send separate messages',
    'adm_send_common_notice' => 'The users will recieve the common message and any answer to that will be seen by all the other users',
    'adm_send_separate_notice' => 'Each user will recieve a separate message',

    'adm_logs_title' => 'Logs Settings',
    'adm_logs_users_enable_title' => 'User actions log',
    'adm_logs_users_enable_notice' => 'You can turn user actions logging on or off',
    'adm_logs_turned_on' => 'On',
    'adm_logs_turned_off' => 'Off',
    'adm_logs_users_file' => 'Log filename',
    'adm_logs_users_file_notice' => 'Write the name of the file in logs directory',
    'adm_logs_users_debug' => 'Enable debug info',
    'adm_logs_users_debug_notice' => 'Debug info will be included to the log file (call stack)',
    'adm_logs_users_logins' => 'Log actions of selectied users only',
    'adm_logs_users_logins_notice' => 'List of users\' logins separated by commas without spaces.If setted, the log is enabled for these users only, otherwise for all users',

    'adm_cache_title' => 'Cahcing settings',
    'adm_cache_not_used' => 'Not used',
    'adm_cache_file' => 'File cache',
    'adm_cache_memory' => 'Use Memcached',
    'adm_cache_type' => 'Cache type',
    'adm_cache_type_notice' => 'Write "none" to disable caching. "memory" uses memcached',
    'adm_cache_prefix' => 'Cahce prefix',
    'adm_cache_prefix_notice' => 'Use it if sites utilize common cache storage',
    'adm_cache_clean' => 'Clear Cache',
    'adm_cache_clean_notice' => 'Mark if you want to clear cache',

    'adm_logs_admin_enable_title' => 'Admin actions log',
    'adm_logs_admin_enable_notice' => 'You may turn admin actions logging on or off',
    'adm_logs_admin_file' => 'Admin actions log file name',
    'adm_logs_admin_file_notice' => 'Naem of the file in logs directory',

    'adm_logs_max_size' => 'Maximal log file size',
    'adm_logs_max_size_notice' => 'When the log file size reaches the given amount a copy of the file is made and a new log file creates. If 0 the new file creates every day',
    'adm_logs_max_files' => 'Amount of log file copies',
    'adm_logs_max_files_notice' => 'Number of the archive log files stored on the site',

    'adm_blog_edit' => 'Edit blog',
    'adm_blog_delete' => 'Remove blog',
    'adm_blog_del_confirm' => 'Blog &quot;%%blog%%&quot; will be deleted permanently including all its elements. \nContinue?',

    'adm_topic_edit' => 'Edit topic',
    'adm_topic_delete' => 'Delete topic',
    'adm_topic_del_confirm' => 'Topic &quot;%%topic%%&quot; will be deleted permanently including all its elements. \nContinue?',

    'adm_invite_code' => 'Invite\'s code',
    'adm_invite_user_from' => 'Sender',
    'adm_invite_user_to' => 'Reciever',
    'adm_invite_date_add' => 'Creation date',
    'adm_invite_date_used' => 'Using date',
    'adm_send_invite_mail' => 'Send invites to e-mail',
    'adm_make_invite_text' => 'How many invites we should create',
    'adm_invite_mode_mail' => 'Send invites to e-mail',
    'adm_invite_mode_text' => 'Generate and show invites',
    'adm_invite_submit' => 'Generate invites',
    'adm_invaite_mail_empty' => 'You should specify  at least one e-mail',
    'adm_invaite_text_empty' => 'Required number of invites shuold be more than 0',
    'adm_invaite_mail_done' => '%%num%% new Invites have been sent',
    'adm_invaite_text_done' => '%%num%% new Invites have been generated',

    'adm_param_check_password' => 'Test admin password',
    'adm_param_check_password_notice' => 'Test the admin\'s password strength if checked',

    'adm_password_quality' => 'Your password is very weak! You should change it!',

    'adm_act_activate' => 'Activate',
    'adm_act_deactivate' => 'Deactivate',

    'adm_action_ok' => 'Action is done',
    'adm_action_err' => 'Action error',

    'adm_cache_title' => 'Cache Settings',
    'adm_cache_type' => 'Cache type',
    'adm_cache_type_notice' => '<b>memory</b> uses memcached',
    'adm_cache_prefix' => 'Cahce prefix',
    'adm_cache_prefix_notice' => 'Should be unique for each site to have several site in a common storage',
    'adm_cache_clear_data' => 'Clear data cache',
    'adm_cache_clear_data_notice' => 'Clear data cache',
    'adm_cache_clear_headfiles' => 'Clear js и css files cache',
    'adm_cache_clear_headfiles_notice' => 'Clear js и css files cache',
    'adm_cache_clear_smarty' => 'Clear Smarty cache',
    'adm_cache_clear_smarty_notice' => 'Clear cache of compiled files of Smarty',

    'adm_reset_config_data' => 'Reset configuration',
    'adm_reset_config_data_notice' => 'All the changes you have done in the Admin Panel will be reset to it\'s initial values (that is values saved in config files)',

    'adm_plugin_file_not_found' => 'Plugin file <b>%%file%%</b> is not found',
    'adm_plugin_havenot_getversion_method' => 'The required plugin <b>%%plugin%%</b> does not return version number (no <b>GetVersion()</b> version)',
    'adm_plugin_activation_reqversion_error_eq' => 'You should have activated plugin <b>%%plugin%%</b> version <b>%%version%%</b> to work with this plugin',
    'adm_plugin_activation_reqversion_error_ge' => 'You should have activated plugin <b>%%plugin%%</b> version equal or higher than <b>%%version%%</b> to work with this plugin',
    'adm_plugin_activation_reqversion_error_gt' => 'You should have activated plugin <b>%%plugin%%</b> version higher than <b>%%version%%</b> to work with this plugin',
    'adm_plugin_activation_reqversion_error_le' => 'You should have activated plugin <b>%%plugin%%</b> version not higher than <b>%%version%%</b> to work with this plugin',
    'adm_plugin_activation_reqversion_error_lt' => 'You should have activated plugin <b>%%plugin%%</b> version lower than <b>%%version%%</b> to work with this plugin',

    'adm_action_for_admin_only' => 'This action can be done by admins only',

    'adm_cannot_clear_dir' => 'Cannot clear directory %%dir%%. You should do it manually',

    'adm_plugin_priority_notice' => 'The plugins will be loaded in order they are placed in the table. You may change the order using the arrows on the right.',
    'adm_plugin_priority_up' => 'Up',
    'adm_plugin_priority_down' => 'Down',

    'adm_execute' => 'Execute',

    'adm_menu_list' => 'List',
    'adm_menu_options' => 'Options',

    'adm_plugin_write_error' => 'Error while writing file <b>%%file%%</b>',

    'adm_text_about' =>
    'Author: aVadim<br/>
        E-mail: vadim483@gmail.com<br/>
        ',
    'adm_text_donate' =>
    'If you want to contribute to the development of the plugin feel free to send money to 
        <b>Z178319650868</b> или <b>R312496642374</b>.',
);

// EOF
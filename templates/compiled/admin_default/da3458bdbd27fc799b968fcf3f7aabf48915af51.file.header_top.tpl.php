<?php /* Smarty version Smarty-3.0.8, created on 2011-11-11 06:14:45
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/header_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17376588514ebc93255f8022-26222480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da3458bdbd27fc799b968fcf3f7aabf48915af51' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/header_top.tpl',
      1 => 1317821040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17376588514ebc93255f8022-26222480',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_cfg')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_hook')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.hook.php';
?><!-- Header -->
<div id="header">
    <div class="logo"><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->getVariable('sWebPluginSkin')->value;?>
images/logo.png" alt="<?php echo $_smarty_tpl->getVariable('sAdminTitle')->value;?>
"/> <?php echo $_smarty_tpl->getVariable('sAdminTitle')->value;?>
</div>

    <ul class="nav-main">
        <li><a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->getVariable('aLang')->value['adm_goto_site'];?>
</a></li>
        <?php echo smarty_function_hook(array('run'=>'main_menu'),$_smarty_tpl);?>

    </ul>

    <div class="profile">
        <a href="<?php echo $_smarty_tpl->getVariable('oUserCurrent')->value->getUserWebPath();?>
" class="avatar"><img src="<?php echo $_smarty_tpl->getVariable('oUserCurrent')->value->getProfileAvatarPath(48);?>
"
                                                                        alt="<?php echo $_smarty_tpl->getVariable('oUserCurrent')->value->getLogin();?>
"/></a>
        <ul>
            <li>
                <a href="<?php echo $_smarty_tpl->getVariable('oUserCurrent')->value->getUserWebPath();?>
" class="author"><?php echo $_smarty_tpl->getVariable('oUserCurrent')->value->getLogin();?>
</a>
                (<a href="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
exit/?security_ls_key=<?php echo $_smarty_tpl->getVariable('LIVESTREET_SECURITY_KEY')->value;?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['exit'];?>
</a>)
            </li>
            <li>
                <?php if ($_smarty_tpl->getVariable('iUserCurrentCountTalkNew')->value){?>
                    <a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
" class="message" id="new_messages"
                       title="<?php echo $_smarty_tpl->getVariable('aLang')->value['user_privat_messages_new'];?>
"><?php echo $_smarty_tpl->getVariable('iUserCurrentCountTalkNew')->value;?>
</a>
                    <?php }else{ ?>
                    <a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
" class="message-empty" id="new_messages">&nbsp;</a>
                <?php }?>
                <?php echo $_smarty_tpl->getVariable('aLang')->value['user_settings'];?>

                <a href="<?php echo smarty_function_router(array('page'=>'settings'),$_smarty_tpl);?>
profile/" class="author"><?php echo $_smarty_tpl->getVariable('aLang')->value['user_settings_profile'];?>
</a> |
                <a href="<?php echo smarty_function_router(array('page'=>'settings'),$_smarty_tpl);?>
tuning/" class="author"><?php echo $_smarty_tpl->getVariable('aLang')->value['user_settings_tuning'];?>
</a>
            </li>
            <li><?php echo $_smarty_tpl->getVariable('aLang')->value['user_rating'];?>
 <strong><?php echo $_smarty_tpl->getVariable('oUserCurrent')->value->getRating();?>
</strong></li>
            <?php echo smarty_function_hook(array('run'=>'userbar_item'),$_smarty_tpl);?>

        </ul>
    </div>

</div>
<!-- /Header -->
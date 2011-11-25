<?php /* Smarty version Smarty-3.0.8, created on 2011-11-11 06:14:44
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/menu.admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3011197504ebc9324b66582-08386022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ee185d78d9de0df9aa9b615b257ceb5f3f3d8a9' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/menu.admin.tpl',
      1 => 1317821040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3011197504ebc9324b66582-08386022',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.hook.php';
?><ul class="menu">

    <li <?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='info'){?>class="active"<?php }?>>
        <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_title;?>
</a>
    <?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='info'){?>
        <ul class="sub-menu">
            <li <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='about'||$_smarty_tpl->getVariable('sMenuSubItemSelect')->value==''){?>class="active"<?php }?>>
                <div><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
info/about/"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_menu_about;?>
</a></div>
            </li>
            <li <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='params'){?>class="active"<?php }?>>
                <div><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
info/params/"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_menu_params;?>
</a></div>
            </li>
            <li <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='phpinfo'){?>class="active"<?php }?>>
                <div><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
info/phpinfo/">PHP Info</a></div>
            </li>
        </ul>
    <?php }?>
    </li>

<?php if (!$_smarty_tpl->getVariable('bNeedUpgrade')->value){?>
    <li <?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='site'){?>class="active"<?php }?>>
        <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
site/"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_menu_site;?>
</a>
        <?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='site'){?>
            <ul class="sub-menu">
                <li <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='settings'){?>class="active"<?php }?>>
                    <div><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
site/settings/"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_menu_settings;?>
</a></div>
                </li>
                <li <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='reset'){?>class="active"<?php }?>>
                    <div><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
site/reset/"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_menu_reset;?>
</a></div>
                </li>
            </ul>
        <?php }?>
    </li>

    <?php if ($_smarty_tpl->getVariable('aPluginActive')->value['page']){?>
        <li <?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='pages'){?>class="active"<?php }?>>
            <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
pages/"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_menu_pages;?>
</a>
            <?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='pages'){?>
                <ul class="sub-menu">
                    <li <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='list'){?>class="active"<?php }?>>
                        <div><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
pages/list/"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_menu_pages_list;?>
</a></div>
                    </li>
                    <li <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='new'){?>class="active"<?php }?>>
                        <div><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
pages/new/"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_menu_pages_new;?>
</a></div>
                    </li>
                    <li <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='options'){?>class="active"<?php }?>>
                        <div><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
pages/options/"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_menu_pages_options;?>
</a></div>
                    </li>
                </ul>
            <?php }?>
        </li>
    <?php }?>

    <?php if ($_smarty_tpl->getVariable('aPluginActive')->value['aceblogextender']&&$_smarty_tpl->getVariable('oConfig')->value->GetValue('plugin.aceblogextender.category.enable')){?>
        <li <?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='categories'){?>class="active"<?php }?>>
            <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
categories/"><?php echo $_smarty_tpl->getVariable('oLang')->value->mblog_categories;?>
</a>
            <?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='categories'){?>
                <ul class="sub-menu">
                    <li <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='list'){?>class="active"<?php }?>>
                        <div><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
categories/list/"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_menu_pages_list;?>
</a></div>
                    </li>
                    <li <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='new'){?>class="active"<?php }?>>
                        <div><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
categories/new/"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_menu_pages_new;?>
</a></div>
                    </li>
                </ul>
            <?php }?>
        </li>
    <?php }?>

    <li <?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='blogs'){?>class="active"<?php }?>>
        <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
blogs/"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_menu_blogs;?>
</a>
        <?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='blogs'){?>
            <ul class="sub-menu">
                <li <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='list'){?>class="active"<?php }?>>
                    <div><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
blogs/list/"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_menu_blogs_list;?>
</a></div>
                </li>
            </ul>
        <?php }?>
    </li>

    <li <?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='users'){?>class="active"<?php }?>>
        <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
users/"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_menu_users;?>
</a>
        <?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='users'){?>
            <ul class="sub-menu">
                <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='profile'){?>
                    <li <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='profile'){?>class="active"<?php }?>>
                        <div>
                            <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
users/profile/<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getLogin();?>
/"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_menu_users_profile;?>
</a>
                        </div>
                    </li><?php }?>
                <li <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='list'){?>class="active"<?php }?>>
                    <div><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
users/list/"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_menu_users_list;?>
</a></div>
                </li>
                <li <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='banlist'){?>class="active"<?php }?>>
                    <div><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
users/banlist/"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_menu_users_banlist;?>
</a></div>
                </li>
                <li <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='invites'){?>class="active"<?php }?>>
                    <div><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
users/invites/"><?php echo $_smarty_tpl->getVariable('oLang')->value->settings_menu_invite;?>
</a></div>
                </li>
                <li <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='fields'){?>class="active"<?php }?>>
                    <div><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
users/fields/"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_menu_users_fields;?>
</a></div>
                </li>
            </ul>
        <?php }?>
    </li>

    <li>|</li>

    <li <?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='plugins'){?>class="active"<?php }?>>
        <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
plugins/"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_menu_plugins;?>
</a>
        <?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='plugins'){?>
            <ul class="sub-menu">
                <li <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='list'){?>class="active"<?php }?>>
                    <div><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
plugins/list/"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_menu_list;?>
</a></div>
                </li>
                <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='config'){?>
                    <li class="active">
                        <div><a href="#"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_menu_settings;?>
</a></div>
                    </li>
                <?php }?>
            </ul>
        <?php }?>
    </li>

    <?php if ($_smarty_tpl->getVariable('aLang')->value['hookets_menu_hookets']){?>
    <li><a href="<?php echo smarty_function_router(array('page'=>'hookets'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['hookets_menu_hookets'];?>
</a></li>
    <?php }?>

    <!--li <?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='tools'){?>class="active"<?php }?>>
        <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
tools/"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_menu_tools;?>
</a>
    <?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='tools'){?>
        <ul class="sub-menu" >
            <li <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='comments'){?>class="active"<?php }?>><div><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
tools/comments/"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_tools_comments;?>
</a></div></li>
        </ul>
    <?php }?>
    </li -->

<?php }?>

<?php echo smarty_function_hook(array('run'=>'menu_admin'),$_smarty_tpl);?>


</ul>

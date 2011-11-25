<?php /* Smarty version Smarty-3.0.8, created on 2011-11-25 05:59:09
         compiled from "/var/www/alpha.huddlebuddle.org/templates/skin/huddlebuddle/header_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20184533124ecf047d914614-10539326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7be81167b02cbcaa7c88fe89ed4af5b7e7dbcd8d' => 
    array (
      0 => '/var/www/alpha.huddlebuddle.org/templates/skin/huddlebuddle/header_top.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20184533124ecf047d914614-10539326',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/alpha.huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/alpha.huddlebuddle.org/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_cfg')) include '/var/www/alpha.huddlebuddle.org/engine/modules/viewer/plugs/function.cfg.php';
?><div id="header">
	<?php if ($_smarty_tpl->getVariable('oUserCurrent')->value){?>
		<div class="profile">
			<a href="<?php echo $_smarty_tpl->getVariable('oUserCurrent')->value->getUserWebPath();?>
"><img src="<?php echo $_smarty_tpl->getVariable('oUserCurrent')->value->getProfileAvatarPath(48);?>
" alt="<?php echo $_smarty_tpl->getVariable('oUserCurrent')->value->getLogin();?>
" class="avatar" /></a>
			<ul>
				<li>
					<a href="<?php echo $_smarty_tpl->getVariable('oUserCurrent')->value->getUserWebPath();?>
" class="username"><?php echo $_smarty_tpl->getVariable('oUserCurrent')->value->getLogin();?>
</a> 
					(<a href="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
exit/?security_ls_key=<?php echo $_smarty_tpl->getVariable('LIVESTREET_SECURITY_KEY')->value;?>
" class="logout"><?php echo $_smarty_tpl->getVariable('aLang')->value['exit'];?>
</a>)
				</li>
				<li>
					<?php if ($_smarty_tpl->getVariable('iUserCurrentCountTalkNew')->value){?>
						<a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
" class="message new" id="new_messages" title="<?php echo $_smarty_tpl->getVariable('aLang')->value['user_privat_messages_new'];?>
"><?php echo $_smarty_tpl->getVariable('iUserCurrentCountTalkNew')->value;?>
</a>
					<?php }else{ ?>
						<a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
" id="new_messages" class="message"></a>
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
	<?php }else{ ?>
		<div class="auth">
			<a href="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
" id="login_form_show" class="login-link"><?php echo $_smarty_tpl->getVariable('aLang')->value['user_login_submit'];?>
</a> <?php echo $_smarty_tpl->getVariable('aLang')->value['or'];?>
 
			<a href="<?php echo smarty_function_router(array('page'=>'registration'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['registration_submit'];?>
</a>
		</div>
	<?php }?>
	

	<a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
" class="logo"><img src="<?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/HB.png" alt="HuddleBuddle"></a>
	
		
	<ul class="pages">
		<li <?php if ($_smarty_tpl->getVariable('sMenuHeadItemSelect')->value=='blog'){?>class="active"<?php }?>><a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['topic_title'];?>
</a></li>
		<li <?php if ($_smarty_tpl->getVariable('sMenuHeadItemSelect')->value=='blogs'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'blogs'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['blogs'];?>
</a></li>
		<li <?php if ($_smarty_tpl->getVariable('sMenuHeadItemSelect')->value=='people'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['people'];?>
</a></li>
		<?php if ($_smarty_tpl->getVariable('oUserCurrent')->value){?>
			<li <?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='stream'){?>class="active"<?php }?>>
				<a href="<?php echo smarty_function_router(array('page'=>'stream'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['stream_personal_title'];?>
</a>
			</li>
		<?php }?>
						
		<?php echo smarty_function_hook(array('run'=>'main_menu'),$_smarty_tpl);?>

	</ul>
</div>
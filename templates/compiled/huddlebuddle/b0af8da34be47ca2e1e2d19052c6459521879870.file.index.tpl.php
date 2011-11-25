<?php /* Smarty version Smarty-3.0.8, created on 2011-11-14 12:46:38
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionLogin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16751913334ec0e37edc83c1-22620353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0af8da34be47ca2e1e2d19052c6459521879870' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionLogin/index.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16751913334ec0e37edc83c1-22620353',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.hook.php';
?><?php $_smarty_tpl->tpl_vars["noSidebar"] = new Smarty_variable(true, null, null);?>
<?php $_template = new Smarty_Internal_Template('header.light.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>


<div class="center">
	<?php if ($_smarty_tpl->getVariable('bLoginError')->value){?>
		<p class="system-messages-error"><?php echo $_smarty_tpl->getVariable('aLang')->value['user_login_bad'];?>
</p>
	<?php }?>

	<form action="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
" method="POST">
		<h2><?php echo $_smarty_tpl->getVariable('aLang')->value['user_authorization'];?>
</h2>

		<?php echo smarty_function_hook(array('run'=>'form_login_begin'),$_smarty_tpl);?>


		<p><label><?php echo $_smarty_tpl->getVariable('aLang')->value['user_login'];?>
<br /><input type="text" name="login" class="input-text" /></label></p>
		<p><label><?php echo $_smarty_tpl->getVariable('aLang')->value['user_password'];?>
<br /><input type="password" name="password" class="input-text" /></label></p>
		
		<input type="submit" name="submit_login" class="button button-login" value="<?php echo $_smarty_tpl->getVariable('aLang')->value['user_login_submit'];?>
" />
		<label><input type="checkbox" name="remember" checked class="checkbox" /><?php echo $_smarty_tpl->getVariable('aLang')->value['user_login_remember'];?>
</label>
		
		<br /><br />
		<p><a href="<?php echo smarty_function_router(array('page'=>'registration'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['user_registration'];?>
</a><br />
		<a href="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
reminder/"><?php echo $_smarty_tpl->getVariable('aLang')->value['user_password_reminder'];?>
</a></p>

		<?php echo smarty_function_hook(array('run'=>'form_login_end'),$_smarty_tpl);?>

	</form>


	<?php if ($_smarty_tpl->getVariable('oConfig')->value->GetValue('general.reg.invite')){?>
		<br /><br />
		<form action="<?php echo smarty_function_router(array('page'=>'registration'),$_smarty_tpl);?>
invite/" method="POST">
			<h2><?php echo $_smarty_tpl->getVariable('aLang')->value['registration_invite'];?>
</h2>

			<p><label><?php echo $_smarty_tpl->getVariable('aLang')->value['registration_invite_code'];?>
<br />
			<input type="text" name="invite_code" /></label></p>
			<input type="submit" name="submit_invite" value="<?php echo $_smarty_tpl->getVariable('aLang')->value['registration_invite_check'];?>
" />
		</form>
	<?php }?>
</div>


<?php $_template = new Smarty_Internal_Template('footer.light.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
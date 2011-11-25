<?php /* Smarty version Smarty-3.0.8, created on 2011-11-15 06:34:29
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionRegistration/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16178511094ec1ddc5c9a4e0-78530433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53f0d2f94c1af2d97a9eaa08ce97153ed51cc44f' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionRegistration/index.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16178511094ec1ddc5c9a4e0-78530433',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_cfg')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.cfg.php';
?><?php $_smarty_tpl->tpl_vars["noSidebar"] = new Smarty_variable(true, null, null);?>
<?php $_template = new Smarty_Internal_Template('header.light.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>


<div class="center">
	<form action="<?php echo smarty_function_router(array('page'=>'registration'),$_smarty_tpl);?>
" method="POST">
		<h2><?php echo $_smarty_tpl->getVariable('aLang')->value['registration'];?>
</h2>

		<?php echo smarty_function_hook(array('run'=>'form_registration_begin'),$_smarty_tpl);?>


		<p><label><?php echo $_smarty_tpl->getVariable('aLang')->value['registration_login'];?>
<br />
		<input type="text" name="login" value="<?php echo $_smarty_tpl->getVariable('_aRequest')->value['login'];?>
" class="input-text input-wide" /><br />
		<span class="note"><?php echo $_smarty_tpl->getVariable('aLang')->value['registration_login_notice'];?>
</span></label></p>

		<p><label><?php echo $_smarty_tpl->getVariable('aLang')->value['registration_mail'];?>
<br />
		<input type="text" name="mail" value="<?php echo $_smarty_tpl->getVariable('_aRequest')->value['mail'];?>
" class="input-text input-wide" /><br />
		<span class="note"><?php echo $_smarty_tpl->getVariable('aLang')->value['registration_mail_notice'];?>
</span></label></p>

		<p><label><?php echo $_smarty_tpl->getVariable('aLang')->value['registration_password'];?>
<br />
		<input type="password" name="password" value="" class="input-text input-wide" /><br />
		<span class="note"><?php echo $_smarty_tpl->getVariable('aLang')->value['registration_password_notice'];?>
</span></label></p>

		<p><label><?php echo $_smarty_tpl->getVariable('aLang')->value['registration_password_retry'];?>
<br />
		<input type="password" value="" id="repass" name="password_confirm" class="input-text input-wide" /></label></p>

		<?php echo $_smarty_tpl->getVariable('aLang')->value['registration_captcha'];?>
<br />
		<img src="<?php echo smarty_function_cfg(array('name'=>'path.root.engine_lib'),$_smarty_tpl);?>
/external/kcaptcha/index.php?<?php echo $_smarty_tpl->getVariable('_sPhpSessionName')->value;?>
=<?php echo $_smarty_tpl->getVariable('_sPhpSessionId')->value;?>
" onclick="this.src='<?php echo smarty_function_cfg(array('name'=>'path.root.engine_lib'),$_smarty_tpl);?>
/external/kcaptcha/index.php?<?php echo $_smarty_tpl->getVariable('_sPhpSessionName')->value;?>
=<?php echo $_smarty_tpl->getVariable('_sPhpSessionId')->value;?>
&n='+Math.random();" />

		<p><input type="text" name="captcha" value="" maxlength="3" class="input-text input-100" /></p>

		<?php echo smarty_function_hook(array('run'=>'form_registration_end'),$_smarty_tpl);?>


		<input type="submit" name="submit_register" class="button" value="<?php echo $_smarty_tpl->getVariable('aLang')->value['registration_submit'];?>
" />
	</form>
</div>


<?php $_template = new Smarty_Internal_Template('footer.light.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
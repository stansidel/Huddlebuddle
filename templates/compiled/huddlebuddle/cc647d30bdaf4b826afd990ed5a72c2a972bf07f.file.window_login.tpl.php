<?php /* Smarty version Smarty-3.0.8, created on 2011-11-14 12:38:49
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/window_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2531694824ec0e1a9139941-54916807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc647d30bdaf4b826afd990ed5a72c2a972bf07f' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/window_login.tpl',
      1 => 1319444580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2531694824ec0e1a9139941-54916807',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.hook.php';
?><?php if (!$_smarty_tpl->getVariable('oUserCurrent')->value){?>
	<div class="login-form jqmWindow" id="login_form">
		<a href="#" class="close jqmClose"></a>
		
		<form action="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
" method="POST">
			<h3><?php echo $_smarty_tpl->getVariable('aLang')->value['user_authorization'];?>
</h3>

			<?php echo smarty_function_hook(array('run'=>'form_login_popup_begin'),$_smarty_tpl);?>


			<p><label><?php echo $_smarty_tpl->getVariable('aLang')->value['user_login'];?>
:<br />
			<input type="text" class="input-text" name="login" id="login-input"/></label></p>
			
			<p><label><?php echo $_smarty_tpl->getVariable('aLang')->value['user_password'];?>
:<br />
			<input type="password" name="password" class="input-text" /></label></p>
			
			<label class="label-remember"><input type="checkbox" name="remember" class="checkbox" checked /><?php echo $_smarty_tpl->getVariable('aLang')->value['user_login_remember'];?>
</label>

			<?php echo smarty_function_hook(array('run'=>'form_login_popup_end'),$_smarty_tpl);?>


			<input type="submit" name="submit_login" class="button" value="<?php echo $_smarty_tpl->getVariable('aLang')->value['user_login_submit'];?>
" /><br /><br />
			
			<a href="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
reminder/"><?php echo $_smarty_tpl->getVariable('aLang')->value['user_password_reminder'];?>
</a><br />
			<a href="<?php echo smarty_function_router(array('page'=>'registration'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['user_registration'];?>
</a>
		</form>
	</div>
<?php }?>
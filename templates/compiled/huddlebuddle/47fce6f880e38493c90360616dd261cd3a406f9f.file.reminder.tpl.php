<?php /* Smarty version Smarty-3.0.8, created on 2011-11-18 16:05:51
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionLogin/reminder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9214791824ec6582ff35455-99366196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47fce6f880e38493c90360616dd261cd3a406f9f' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionLogin/reminder.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9214791824ec6582ff35455-99366196',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
?><?php $_smarty_tpl->tpl_vars["noSidebar"] = new Smarty_variable(true, null, null);?>
<?php $_template = new Smarty_Internal_Template('header.light.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>


<div class="center">
	<form action="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
reminder/" method="POST">
		<h2><?php echo $_smarty_tpl->getVariable('aLang')->value['password_reminder'];?>
</h2>

		<p><label for="mail"><?php echo $_smarty_tpl->getVariable('aLang')->value['password_reminder_email'];?>
<br />
		<input type="text" name="mail" id="name" class="input-200" /></label></p>	

		<input type="submit" name="submit_reminder" class="button" value="<?php echo $_smarty_tpl->getVariable('aLang')->value['password_reminder_submit'];?>
" />
	</form>
</div>


<?php $_template = new Smarty_Internal_Template('footer.light.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
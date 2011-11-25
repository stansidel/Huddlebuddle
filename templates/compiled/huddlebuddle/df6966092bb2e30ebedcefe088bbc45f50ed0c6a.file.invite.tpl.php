<?php /* Smarty version Smarty-3.0.8, created on 2011-11-15 15:09:38
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionRegistration/invite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11209460424ec25682068446-95561836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df6966092bb2e30ebedcefe088bbc45f50ed0c6a' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionRegistration/invite.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11209460424ec25682068446-95561836',
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
	<form action="<?php echo smarty_function_router(array('page'=>'registration'),$_smarty_tpl);?>
invite/" method="POST">
		<h2><?php echo $_smarty_tpl->getVariable('aLang')->value['registration_invite'];?>
</h2>

		<p><label><?php echo $_smarty_tpl->getVariable('aLang')->value['registration_invite_code'];?>
<br />
		<input type="text" name="invite_code" class="input-200" /></label></p>

		<input type="submit" name="submit_invite" value="<?php echo $_smarty_tpl->getVariable('aLang')->value['registration_invite_check'];?>
" />
	</form>
</div>


<?php $_template = new Smarty_Internal_Template('footer.light.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
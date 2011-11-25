<?php /* Smarty version Smarty-3.0.8, created on 2011-11-16 09:20:31
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionTalk/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19424922494ec3562f14edd4-82921153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34fcdc1c21334f22fe49071d27f1e3911d75dac9' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionTalk/add.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19424922494ec3562f14edd4-82921153',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_hook')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.hook.php';
?><?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('menu','talk'); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>


<h2><?php echo $_smarty_tpl->getVariable('aLang')->value['talk_create'];?>
</h2>

<form action="" method="POST" enctype="multipart/form-data">
	<?php echo smarty_function_hook(array('run'=>'form_add_talk_begin'),$_smarty_tpl);?>

	
	<input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->getVariable('LIVESTREET_SECURITY_KEY')->value;?>
" />

	<p><label for="talk_users"><?php echo $_smarty_tpl->getVariable('aLang')->value['talk_create_users'];?>
:</label><br />
	<input type="text" class="input-wide autocomplete-users" id="talk_users" name="talk_users" value="<?php echo $_smarty_tpl->getVariable('_aRequest')->value['talk_users'];?>
" /></p>

	<p><label for="talk_title"><?php echo $_smarty_tpl->getVariable('aLang')->value['talk_create_title'];?>
:</label><br />
	<input type="text" class="input-wide" id="talk_title" name="talk_title" value="<?php echo $_smarty_tpl->getVariable('_aRequest')->value['talk_title'];?>
" /></p>

	<p><label for="talk_text"><?php echo $_smarty_tpl->getVariable('aLang')->value['talk_create_text'];?>
:</label>
	<textarea name="talk_text" id="talk_text" rows="12" class="input-wide"><?php echo $_smarty_tpl->getVariable('_aRequest')->value['talk_text'];?>
</textarea></p>
	
	<?php echo smarty_function_hook(array('run'=>'form_add_talk_end'),$_smarty_tpl);?>

	
	<input type="submit" value="<?php echo $_smarty_tpl->getVariable('aLang')->value['talk_create_submit'];?>
" name="submit_talk_add" />
</form>


<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
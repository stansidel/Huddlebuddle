<?php /* Smarty version Smarty-3.0.8, created on 2011-11-15 09:36:46
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionError/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17339472954ec2087ebfe672-11069547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd24e34249923c880e199193e5e7297040d27ae6' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionError/index.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17339472954ec2087ebfe672-11069547',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cfg')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.cfg.php';
?><?php $_smarty_tpl->tpl_vars["noSidebar"] = new Smarty_variable(true, null, null);?>
<?php $_template = new Smarty_Internal_Template('header.light.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('noShowSystemMessage',true); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>


<div class="center">
	<?php if ($_smarty_tpl->getVariable('aMsgError')->value[0]['title']){?>
		<h2><?php echo $_smarty_tpl->getVariable('aLang')->value['error'];?>
: <?php echo $_smarty_tpl->getVariable('aMsgError')->value[0]['title'];?>
</h2>
	<?php }?>

	<p><?php echo $_smarty_tpl->getVariable('aMsgError')->value[0]['msg'];?>
</p>
	<p><a href="javascript:history.go(-1);"><?php echo $_smarty_tpl->getVariable('aLang')->value['site_history_back'];?>
</a>, <a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['site_go_main'];?>
</a></p>
</div>


<?php $_template = new Smarty_Internal_Template('footer.light.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php /* Smarty version Smarty-3.0.8, created on 2011-11-23 19:38:57
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/page/templates/skin/default/actions/ActionPage/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16366872644ecd21a1f401e4-01868999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ba7d679b47d92fbe6e2c38d36a6fdd39e1ffe4a' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/page/templates/skin/default/actions/ActionPage/page.tpl',
      1 => 1317821040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16366872644ecd21a1f401e4-01868999',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_smarty_tpl->tpl_vars["noSidebar"] = new Smarty_variable(true, null, null);?>
<?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<div class="topic">
	<div class="content">
		<?php if ($_smarty_tpl->getVariable('oConfig')->value->GetValue('view.tinymce')){?>
			<?php echo $_smarty_tpl->getVariable('oPage')->value->getText();?>

		<?php }else{ ?>
			<?php if ($_smarty_tpl->getVariable('oPage')->value->getAutoBr()){?>
				<?php echo nl2br($_smarty_tpl->getVariable('oPage')->value->getText());?>

			<?php }else{ ?>
				<?php echo $_smarty_tpl->getVariable('oPage')->value->getText();?>

			<?php }?>
		<?php }?>
	</div>
</div>

<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
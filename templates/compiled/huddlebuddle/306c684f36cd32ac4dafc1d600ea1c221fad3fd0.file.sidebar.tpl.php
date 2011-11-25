<?php /* Smarty version Smarty-3.0.8, created on 2011-11-14 12:38:49
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20511365254ec0e1a9de6823-97091939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '306c684f36cd32ac4dafc1d600ea1c221fad3fd0' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/sidebar.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20511365254ec0e1a9de6823-97091939',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_insert_block')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/insert.block.php';
?><div id="sidebar">
	<?php if (isset($_smarty_tpl->getVariable('aBlocks',null,true,false)->value['right'])){?>
		<?php  $_smarty_tpl->tpl_vars['aBlock'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aBlocks')->value['right']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['aBlock']->key => $_smarty_tpl->tpl_vars['aBlock']->value){
?>
			<?php if ($_smarty_tpl->tpl_vars['aBlock']->value['type']=='block'){?>
				<?php echo smarty_insert_block(array('block' => $_smarty_tpl->tpl_vars['aBlock']->value['name'], 'params' => $_smarty_tpl->tpl_vars['aBlock']->value['params']),$_smarty_tpl);?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['aBlock']->value['type']=='template'){?>
				<?php $_template = new Smarty_Internal_Template($_smarty_tpl->tpl_vars['aBlock']->value['name'], $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('params',$_smarty_tpl->tpl_vars['aBlock']->value['params']); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
			<?php }?>
		<?php }} ?>
	<?php }?>
</div>
<?php /* Smarty version Smarty-3.0.8, created on 2011-11-25 05:59:10
         compiled from "/var/www/alpha.huddlebuddle.org/templates/skin/huddlebuddle/block.tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16052876434ecf047eea6e17-66887134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f22611f9902637ae9349b91b30ab0ab4c59b054' => 
    array (
      0 => '/var/www/alpha.huddlebuddle.org/templates/skin/huddlebuddle/block.tags.tpl',
      1 => 1319444580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16052876434ecf047eea6e17-66887134',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/alpha.huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_modifier_escape')) include '/var/www/alpha.huddlebuddle.org/engine/lib/external/Smarty/libs/plugins/modifier.escape.php';
?><div class="block tags">
	<ul class="cloud">						
		<?php  $_smarty_tpl->tpl_vars['oTag'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aTags')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oTag']->key => $_smarty_tpl->tpl_vars['oTag']->value){
?>
			<li><a class="w<?php echo $_smarty_tpl->getVariable('oTag')->value->getSize();?>
" rel="tag" href="<?php echo smarty_function_router(array('page'=>'tag'),$_smarty_tpl);?>
<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oTag')->value->getText(),'url');?>
/"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oTag')->value->getText(),'html');?>
</a></li>	
		<?php }} ?>
	</ul>
</div>
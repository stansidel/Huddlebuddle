<?php /* Smarty version Smarty-3.0.8, created on 2011-11-11 06:14:45
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/page/templates/skin/default/main_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18871443944ebc93257313f2-25312451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67a87d6771c9c8982978fd709e1569af45e9ba42' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/page/templates/skin/default/main_menu.tpl',
      1 => 1317821040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18871443944ebc93257313f2-25312451',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
?><?php  $_smarty_tpl->tpl_vars['oPage'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aPagesMain')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oPage']->key => $_smarty_tpl->tpl_vars['oPage']->value){
?>
	<li <?php if ($_smarty_tpl->getVariable('sAction')->value=='page'&&$_smarty_tpl->getVariable('sEvent')->value==$_smarty_tpl->getVariable('oPage')->value->getUrl()){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'page'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->getVariable('oPage')->value->getUrlFull();?>
/" ><?php echo $_smarty_tpl->getVariable('oPage')->value->getTitle();?>
</a></li>
<?php }} ?>	
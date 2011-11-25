<?php /* Smarty version Smarty-3.0.8, created on 2011-11-11 06:14:45
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/system_message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4222604444ebc93259ce933-55075173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe4319950a5a14a7ae60b76f5da7e80242ccfe60' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/system_message.tpl',
      1 => 1317821040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4222604444ebc93259ce933-55075173',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('aMsgError')->value){?>
<div id="system_messages_error">
<ul>
<?php  $_smarty_tpl->tpl_vars['aMsg'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aMsgError')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['aMsg']->key => $_smarty_tpl->tpl_vars['aMsg']->value){
?>
	<li>
		<?php if ($_smarty_tpl->tpl_vars['aMsg']->value['title']!=''){?>
			<b><?php echo $_smarty_tpl->tpl_vars['aMsg']->value['title'];?>
</b>:
		<?php }?>
		<?php echo $_smarty_tpl->tpl_vars['aMsg']->value['msg'];?>

	</li>
<?php }} ?>
</ul>
</div>
<?php }?>

<?php if ($_smarty_tpl->getVariable('aMsgNotice')->value){?>
<br>
<br>
<div id="system_messages_notice">
<ul>
<?php  $_smarty_tpl->tpl_vars['aMsg'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aMsgNotice')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['aMsg']->key => $_smarty_tpl->tpl_vars['aMsg']->value){
?>
	<li>
		<?php if ($_smarty_tpl->tpl_vars['aMsg']->value['title']!=''){?>
			<b><?php echo $_smarty_tpl->tpl_vars['aMsg']->value['title'];?>
</b>:
		<?php }?>
		<?php echo $_smarty_tpl->tpl_vars['aMsg']->value['msg'];?>

	</li>
<?php }} ?>
</ul>
</div>
<?php }?>
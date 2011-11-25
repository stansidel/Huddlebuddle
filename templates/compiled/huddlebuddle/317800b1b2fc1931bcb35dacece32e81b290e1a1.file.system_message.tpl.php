<?php /* Smarty version Smarty-3.0.8, created on 2011-11-14 12:38:49
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/system_message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13376301304ec0e1a91be596-22364143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '317800b1b2fc1931bcb35dacece32e81b290e1a1' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/system_message.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13376301304ec0e1a91be596-22364143',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!$_smarty_tpl->getVariable('noShowSystemMessage')->value){?>
	<?php if ($_smarty_tpl->getVariable('aMsgError')->value){?>
		<ul class="system-message-error">
		<?php  $_smarty_tpl->tpl_vars['aMsg'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aMsgError')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['aMsg']->key => $_smarty_tpl->tpl_vars['aMsg']->value){
?>
			<li>
				<?php if ($_smarty_tpl->tpl_vars['aMsg']->value['title']!=''){?>
					<strong><?php echo $_smarty_tpl->tpl_vars['aMsg']->value['title'];?>
</strong>:
				<?php }?>
				<?php echo $_smarty_tpl->tpl_vars['aMsg']->value['msg'];?>

			</li>
		<?php }} ?>
		</ul>
	<?php }?>


	<?php if ($_smarty_tpl->getVariable('aMsgNotice')->value){?>
		<ul class="system-message-notice">
		<?php  $_smarty_tpl->tpl_vars['aMsg'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aMsgNotice')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['aMsg']->key => $_smarty_tpl->tpl_vars['aMsg']->value){
?>
			<li>
				<?php if ($_smarty_tpl->tpl_vars['aMsg']->value['title']!=''){?>
					<strong><?php echo $_smarty_tpl->tpl_vars['aMsg']->value['title'];?>
</strong>:
				<?php }?>
				<?php echo $_smarty_tpl->tpl_vars['aMsg']->value['msg'];?>

			</li>
		<?php }} ?>
		</ul>
	<?php }?>
<?php }?>
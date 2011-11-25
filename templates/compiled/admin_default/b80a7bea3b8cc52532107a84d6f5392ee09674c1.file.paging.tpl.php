<?php /* Smarty version Smarty-3.0.8, created on 2011-11-11 06:14:52
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default//paging.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11899093664ebc932c531514-58364296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b80a7bea3b8cc52532107a84d6f5392ee09674c1' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default//paging.tpl',
      1 => 1317821040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11899093664ebc932c531514-58364296',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('aPaging')->value&&$_smarty_tpl->getVariable('aPaging')->value['iCountPage']>1){?> 
<div id="pagination">
    <ul>
        <li><?php echo $_smarty_tpl->getVariable('aLang')->value['paging'];?>
:</li>

	<?php if ($_smarty_tpl->getVariable('aPaging')->value['iCurrentPage']>1){?>
        <li><a href="<?php echo $_smarty_tpl->getVariable('aPaging')->value['sBaseUrl'];?>
/<?php echo $_smarty_tpl->getVariable('aPaging')->value['sGetParams'];?>
">&larr;</a></li>
	<?php }?>
	<?php  $_smarty_tpl->tpl_vars['iPage'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aPaging')->value['aPagesLeft']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['iPage']->key => $_smarty_tpl->tpl_vars['iPage']->value){
?>
        <li><a href="<?php echo $_smarty_tpl->getVariable('aPaging')->value['sBaseUrl'];?>
/page<?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
/<?php echo $_smarty_tpl->getVariable('aPaging')->value['sGetParams'];?>
"><?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
</a></li>
	<?php }} ?>
        <li class="active"><?php echo $_smarty_tpl->getVariable('aPaging')->value['iCurrentPage'];?>
</li>
	<?php  $_smarty_tpl->tpl_vars['iPage'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aPaging')->value['aPagesRight']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['iPage']->key => $_smarty_tpl->tpl_vars['iPage']->value){
?>
        <li><a href="<?php echo $_smarty_tpl->getVariable('aPaging')->value['sBaseUrl'];?>
/page<?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
/<?php echo $_smarty_tpl->getVariable('aPaging')->value['sGetParams'];?>
"><?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
</a></li>
	<?php }} ?>
	<?php if ($_smarty_tpl->getVariable('aPaging')->value['iCurrentPage']<$_smarty_tpl->getVariable('aPaging')->value['iCountPage']){?>
        <li><a href="<?php echo $_smarty_tpl->getVariable('aPaging')->value['sBaseUrl'];?>
/page<?php echo $_smarty_tpl->getVariable('aPaging')->value['iCountPage'];?>
/<?php echo $_smarty_tpl->getVariable('aPaging')->value['sGetParams'];?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['paging_last'];?>
</a></li>
	<?php }?>					
    </ul>
</div>
<?php }?>
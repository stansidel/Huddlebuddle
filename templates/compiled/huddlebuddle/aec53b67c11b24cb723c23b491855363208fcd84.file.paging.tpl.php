<?php /* Smarty version Smarty-3.0.8, created on 2011-11-25 05:59:10
         compiled from "/var/www/alpha.huddlebuddle.org/templates/skin/huddlebuddle/paging.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4803749114ecf047e83dda3-97137987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aec53b67c11b24cb723c23b491855363208fcd84' => 
    array (
      0 => '/var/www/alpha.huddlebuddle.org/templates/skin/huddlebuddle/paging.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4803749114ecf047e83dda3-97137987',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('aPaging')->value&&$_smarty_tpl->getVariable('aPaging')->value['iCountPage']>1){?> 
	<div class="pagination">
		<p>
			&larr;				
			<?php if ($_smarty_tpl->getVariable('aPaging')->value['iPrevPage']){?>
				<a href="<?php echo $_smarty_tpl->getVariable('aPaging')->value['sBaseUrl'];?>
/page<?php echo $_smarty_tpl->getVariable('aPaging')->value['iPrevPage'];?>
/<?php echo $_smarty_tpl->getVariable('aPaging')->value['sGetParams'];?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['paging_previos'];?>
</a>
			<?php }else{ ?>
				<?php echo $_smarty_tpl->getVariable('aLang')->value['paging_previos'];?>

			<?php }?>
			&nbsp; &nbsp;
			<?php if ($_smarty_tpl->getVariable('aPaging')->value['iNextPage']){?>
				<a href="<?php echo $_smarty_tpl->getVariable('aPaging')->value['sBaseUrl'];?>
/page<?php echo $_smarty_tpl->getVariable('aPaging')->value['iNextPage'];?>
/<?php echo $_smarty_tpl->getVariable('aPaging')->value['sGetParams'];?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['paging_next'];?>
</a>
			<?php }else{ ?>
				<?php echo $_smarty_tpl->getVariable('aLang')->value['paging_next'];?>

			<?php }?>
			&rarr;
		</p>
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
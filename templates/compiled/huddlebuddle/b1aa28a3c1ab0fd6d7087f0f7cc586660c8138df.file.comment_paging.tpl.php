<?php /* Smarty version Smarty-3.0.8, created on 2011-11-14 12:38:49
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/comment_paging.tpl" */ ?>
<?php /*%%SmartyHeaderCode:677746194ec0e1a9a77cb1-53098484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1aa28a3c1ab0fd6d7087f0f7cc586660c8138df' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/comment_paging.tpl',
      1 => 1319444580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '677746194ec0e1a9a77cb1-53098484',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('aPagingCmt')->value&&$_smarty_tpl->getVariable('aPagingCmt')->value['iCountPage']>1){?>
	<?php if ($_smarty_tpl->getVariable('aPagingCmt')->value['sGetParams']){?>
		<?php $_smarty_tpl->tpl_vars["sGetSep"] = new Smarty_variable('&', null, null);?>
	<?php }else{ ?>
		<?php $_smarty_tpl->tpl_vars["sGetSep"] = new Smarty_variable('?', null, null);?>
	<?php }?>
	<div class="pagination pagination-comments">				
		<ul>
			<li><?php echo $_smarty_tpl->getVariable('aLang')->value['paging'];?>
:</li>				
				
			<?php if ($_smarty_tpl->getVariable('oConfig')->value->GetValue('module.comment.nested_page_reverse')){?>
			
				<?php if ($_smarty_tpl->getVariable('aPagingCmt')->value['iCurrentPage']>1){?>
					<li><a href="<?php echo $_smarty_tpl->getVariable('aPagingCmt')->value['sGetParams'];?>
<?php echo $_smarty_tpl->getVariable('sGetSep')->value;?>
cmtpage=1">&larr;</a></li>
				<?php }?>
				<?php  $_smarty_tpl->tpl_vars['iPage'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aPagingCmt')->value['aPagesLeft']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['iPage']->key => $_smarty_tpl->tpl_vars['iPage']->value){
?>
					<li><a href="<?php echo $_smarty_tpl->getVariable('aPagingCmt')->value['sGetParams'];?>
<?php echo $_smarty_tpl->getVariable('sGetSep')->value;?>
cmtpage=<?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
</a></li>
				<?php }} ?>
				<li class="active"><?php echo $_smarty_tpl->getVariable('aPagingCmt')->value['iCurrentPage'];?>
</li>
				<?php  $_smarty_tpl->tpl_vars['iPage'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aPagingCmt')->value['aPagesRight']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['iPage']->key => $_smarty_tpl->tpl_vars['iPage']->value){
?>
					<li><a href="<?php echo $_smarty_tpl->getVariable('aPagingCmt')->value['sGetParams'];?>
<?php echo $_smarty_tpl->getVariable('sGetSep')->value;?>
cmtpage=<?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
</a></li>
				<?php }} ?>
				<?php if ($_smarty_tpl->getVariable('aPagingCmt')->value['iCurrentPage']<$_smarty_tpl->getVariable('aPagingCmt')->value['iCountPage']){?>
					<li><a href="<?php echo $_smarty_tpl->getVariable('aPagingCmt')->value['sGetParams'];?>
<?php echo $_smarty_tpl->getVariable('sGetSep')->value;?>
cmtpage=<?php echo $_smarty_tpl->getVariable('aPagingCmt')->value['iCountPage'];?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['paging_last'];?>
</a></li>
				<?php }?>
			
			<?php }else{ ?>
			
				<?php if ($_smarty_tpl->getVariable('aPagingCmt')->value['iCurrentPage']<$_smarty_tpl->getVariable('aPagingCmt')->value['iCountPage']){?>
					<li><a href="<?php echo $_smarty_tpl->getVariable('aPagingCmt')->value['sGetParams'];?>
<?php echo $_smarty_tpl->getVariable('sGetSep')->value;?>
cmtpage=<?php echo $_smarty_tpl->getVariable('aPagingCmt')->value['iCountPage'];?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['paging_last'];?>
</a></li>
				<?php }?>
				
				<?php  $_smarty_tpl->tpl_vars['iPage'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aPagingCmt')->value['aPagesRight']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['iPage']->key => $_smarty_tpl->tpl_vars['iPage']->value){
?>
					<li><a href="<?php echo $_smarty_tpl->getVariable('aPagingCmt')->value['sGetParams'];?>
<?php echo $_smarty_tpl->getVariable('sGetSep')->value;?>
cmtpage=<?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
</a></li>
				<?php }} ?>
				<li class="active"><?php echo $_smarty_tpl->getVariable('aPagingCmt')->value['iCurrentPage'];?>
</li>
				<?php  $_smarty_tpl->tpl_vars['iPage'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aPagingCmt')->value['aPagesLeft']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['iPage']->key => $_smarty_tpl->tpl_vars['iPage']->value){
?>
					<li><a href="<?php echo $_smarty_tpl->getVariable('aPagingCmt')->value['sGetParams'];?>
<?php echo $_smarty_tpl->getVariable('sGetSep')->value;?>
cmtpage=<?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
</a></li>
				<?php }} ?>
				
				<?php if ($_smarty_tpl->getVariable('aPagingCmt')->value['iCurrentPage']>1){?>
					<li><a href="<?php echo $_smarty_tpl->getVariable('aPagingCmt')->value['sGetParams'];?>
<?php echo $_smarty_tpl->getVariable('sGetSep')->value;?>
cmtpage=1">&rarr;</a></li>
				<?php }?>
			
			<?php }?>
			
		</ul>
	</div>
<?php }?>
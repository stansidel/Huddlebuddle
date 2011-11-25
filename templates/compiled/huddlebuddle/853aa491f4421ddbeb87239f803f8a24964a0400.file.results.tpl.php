<?php /* Smarty version Smarty-3.0.8, created on 2011-11-15 06:37:05
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionSearch/results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19317123154ec1de61dce934-53691251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '853aa491f4421ddbeb87239f803f8a24964a0400' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionSearch/results.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19317123154ec1de61dce934-53691251',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/lib/external/Smarty/libs/plugins/modifier.escape.php';
if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
?><?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>


<h2><?php echo $_smarty_tpl->getVariable('aLang')->value['search_results'];?>
: <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('aReq')->value['q'],'html');?>
</h2>

<ul class="switcher">
<?php  $_smarty_tpl->tpl_vars['iCount'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['sType'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aRes')->value['aCounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['iCount']->key => $_smarty_tpl->tpl_vars['iCount']->value){
 $_smarty_tpl->tpl_vars['sType']->value = $_smarty_tpl->tpl_vars['iCount']->key;
?>
	<li <?php if ($_smarty_tpl->getVariable('aReq')->value['sType']==$_smarty_tpl->tpl_vars['sType']->value){?>class="active"<?php }?>>					
		<a href="<?php echo smarty_function_router(array('page'=>'search'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['sType']->value;?>
/?q=<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('aReq')->value['q'],'html');?>
">
			<?php echo $_smarty_tpl->tpl_vars['iCount']->value;?>
 
			<?php if ($_smarty_tpl->tpl_vars['sType']->value=="topics"){?>
				<?php echo $_smarty_tpl->getVariable('aLang')->value['search_results_count_topics'];?>

			<?php }elseif($_smarty_tpl->tpl_vars['sType']->value=="comments"){?>
				<?php echo $_smarty_tpl->getVariable('aLang')->value['search_results_count_comments'];?>

			<?php }?>
		</a>
	</li>				
<?php }} ?>
</ul>

<?php if ($_smarty_tpl->getVariable('bIsResults')->value){?>
	<?php if ($_smarty_tpl->getVariable('aReq')->value['sType']=='topics'){?>
		<?php $_template = new Smarty_Internal_Template('topic_list.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	<?php }elseif($_smarty_tpl->getVariable('aReq')->value['sType']=='comments'){?>
		<?php $_template = new Smarty_Internal_Template('comment_list.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	<?php }?>
<?php }else{ ?>
	<?php echo $_smarty_tpl->getVariable('aLang')->value['search_results_empty'];?>

<?php }?>


<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
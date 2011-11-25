<?php /* Smarty version Smarty-3.0.8, created on 2011-11-15 00:07:04
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionTalk/inbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5490197554ec182f8d68274-09599924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9abd4c65d79f21f8164e6f4b5127a7f75e2c68f2' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionTalk/inbox.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5490197554ec182f8d68274-09599924',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_modifier_escape')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/lib/external/Smarty/libs/plugins/modifier.escape.php';
if (!is_callable('smarty_function_date_format')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.date_format.php';
?><?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('menu','talk');$_template->assign('noShowSystemMessage',false); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>


<form action="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
" method="post" id="form_talks_list">
	<input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->getVariable('LIVESTREET_SECURITY_KEY')->value;?>
" />

	<table class="table table-people table-talk">
		<thead>
			<tr>
				<td width="20"><input type="checkbox" name="" onclick="ls.tools.checkAll('form_talks_checkbox', this);"></td>
				<td width="150"><?php echo $_smarty_tpl->getVariable('aLang')->value['talk_inbox_target'];?>
</td>
				<td width="20"></td>
				<td><?php echo $_smarty_tpl->getVariable('aLang')->value['talk_inbox_title'];?>
</td>
				<td width="170" align="center"><?php echo $_smarty_tpl->getVariable('aLang')->value['talk_inbox_date'];?>
</td>
			</tr>
		</thead>

		<tbody>
		<?php  $_smarty_tpl->tpl_vars['oTalk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aTalks')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oTalk']->key => $_smarty_tpl->tpl_vars['oTalk']->value){
?>
			<?php $_smarty_tpl->tpl_vars["oTalkUserAuthor"] = new Smarty_variable($_smarty_tpl->getVariable('oTalk')->value->getTalkUser(), null, null);?>
			<tr>
				<td><input type="checkbox" name="talk_del[<?php echo $_smarty_tpl->getVariable('oTalk')->value->getId();?>
]" class="form_talks_checkbox" /></td>
				<td>
					<?php  $_smarty_tpl->tpl_vars['oTalkUser'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('oTalk')->value->getTalkUsers(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oTalkUser']->key => $_smarty_tpl->tpl_vars['oTalkUser']->value){
?>
						<?php if ($_smarty_tpl->getVariable('oTalkUser')->value->getUserId()!=$_smarty_tpl->getVariable('oUserCurrent')->value->getId()){?>
						<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->getVariable('oTalkUser')->value->getUser(), null, null);?>
							<a href="<?php echo $_smarty_tpl->getVariable('oUser')->value->getUserWebPath();?>
" class="username <?php if ($_smarty_tpl->getVariable('oTalkUser')->value->getUserActive()!=$_smarty_tpl->getVariable('TALK_USER_ACTIVE')->value){?>inactive<?php }?>"><?php echo $_smarty_tpl->getVariable('oUser')->value->getLogin();?>
</a>
						<?php }?>
					<?php }} ?>
				</td>
				<td align="center">
					<a href="#" onclick="return ls.favourite.toggle(<?php echo $_smarty_tpl->getVariable('oTalk')->value->getId();?>
,this,'talk');" class="favourite <?php if ($_smarty_tpl->getVariable('oTalk')->value->getIsFavourite()){?>active<?php }?>"></a>
				</td>
				<td>
					<?php if ($_smarty_tpl->getVariable('oTalkUserAuthor')->value->getCommentCountNew()||!$_smarty_tpl->getVariable('oTalkUserAuthor')->value->getDateLast()){?>
						<a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
read/<?php echo $_smarty_tpl->getVariable('oTalk')->value->getId();?>
/"><strong><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oTalk')->value->getTitle(),'html');?>
</strong></a>
					<?php }else{ ?>
						<a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
read/<?php echo $_smarty_tpl->getVariable('oTalk')->value->getId();?>
/"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oTalk')->value->getTitle(),'html');?>
</a>
					<?php }?>
					&nbsp;
					<?php if ($_smarty_tpl->getVariable('oTalk')->value->getCountComment()){?>
						<?php echo $_smarty_tpl->getVariable('oTalk')->value->getCountComment();?>
 <?php if ($_smarty_tpl->getVariable('oTalkUserAuthor')->value->getCommentCountNew()){?><span class="green">+<?php echo $_smarty_tpl->getVariable('oTalkUserAuthor')->value->getCommentCountNew();?>
</span><?php }?>
					<?php }?>
				</td>
				<td align="center" class="date"><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->getVariable('oTalk')->value->getDate()),$_smarty_tpl);?>
</td>
			</tr>
		<?php }} ?>
		</tbody>
	</table>

	<input type="submit" name="submit_talk_del" value="<?php echo $_smarty_tpl->getVariable('aLang')->value['talk_inbox_delete'];?>
" onclick="return ($('.form_talks_checkbox:checked').length==0)?false:confirm('<?php echo $_smarty_tpl->getVariable('aLang')->value['talk_inbox_delete_confirm'];?>
');" />
</form>

			
<?php $_template = new Smarty_Internal_Template('paging.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('aPaging',($_smarty_tpl->getVariable('aPaging')->value)); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php /* Smarty version Smarty-3.0.8, created on 2011-11-16 09:19:48
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionBlog/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18962671904ec35604197915-27783008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bcdfadd3145200f10548a2a961e2f42170c96c2' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionBlog/admin.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18962671904ec35604197915-27783008',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template('menu.blog_edit.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<?php if ($_smarty_tpl->getVariable('aBlogUsers')->value){?>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->getVariable('LIVESTREET_SECURITY_KEY')->value;?>
" />
		<table class="table">
			<thead>
				<tr>
					<td><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_admin_users'];?>
</td>
					<td width="10%"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_admin_users_administrator'];?>
</td>
					<td width="10%"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_admin_users_moderator'];?>
</td>
					<td width="10%"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_admin_users_reader'];?>
</td>
					<td width="10%"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_admin_users_bun'];?>
</td>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['oBlogUser'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aBlogUsers')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oBlogUser']->key => $_smarty_tpl->tpl_vars['oBlogUser']->value){
?>
					<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->getVariable('oBlogUser')->value->getUser(), null, null);?>
					<tr>
						<td><a href="<?php echo $_smarty_tpl->getVariable('oUser')->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->getVariable('oUser')->value->getLogin();?>
</a></td>
						<?php if ($_smarty_tpl->getVariable('oUser')->value->getId()==$_smarty_tpl->getVariable('oUserCurrent')->value->getId()){?>
							<td colspan="3" align="center"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_admin_users_current_administrator'];?>
</td>
						<?php }else{ ?>
							<td align="center"><input type="radio" name="user_rank[<?php echo $_smarty_tpl->getVariable('oUser')->value->getId();?>
]" value="administrator" <?php if ($_smarty_tpl->getVariable('oBlogUser')->value->getIsAdministrator()){?>checked<?php }?> /></td>
							<td align="center"><input type="radio" name="user_rank[<?php echo $_smarty_tpl->getVariable('oUser')->value->getId();?>
]" value="moderator" <?php if ($_smarty_tpl->getVariable('oBlogUser')->value->getIsModerator()){?>checked<?php }?> /></td>
							<td align="center"><input type="radio" name="user_rank[<?php echo $_smarty_tpl->getVariable('oUser')->value->getId();?>
]" value="reader" <?php if ($_smarty_tpl->getVariable('oBlogUser')->value->getUserRole()==$_smarty_tpl->getVariable('BLOG_USER_ROLE_USER')->value){?>checked<?php }?> /></td>
							<td align="center"><input type="radio" name="user_rank[<?php echo $_smarty_tpl->getVariable('oUser')->value->getId();?>
]" value="ban" <?php if ($_smarty_tpl->getVariable('oBlogUser')->value->getUserRole()==$_smarty_tpl->getVariable('BLOG_USER_ROLE_BAN')->value){?>checked<?php }?> /></td>
						<?php }?>
					</tr>
				<?php }} ?>
			</tbody>
		</table>

		<input type="submit" name="submit_blog_admin" value="<?php echo $_smarty_tpl->getVariable('aLang')->value['blog_admin_users_submit'];?>
" />
	</form>
	<br>
	<?php $_template = new Smarty_Internal_Template('paging.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('aPaging',$_smarty_tpl->getVariable('aPaging')->value); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php }else{ ?>
	<?php echo $_smarty_tpl->getVariable('aLang')->value['blog_admin_users_empty'];?>

<?php }?>


<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
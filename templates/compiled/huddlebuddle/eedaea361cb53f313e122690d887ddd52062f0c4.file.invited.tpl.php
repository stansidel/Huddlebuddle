<?php /* Smarty version Smarty-3.0.8, created on 2011-11-16 09:19:48
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionBlog/invited.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7544134934ec356045e26e4-98516585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eedaea361cb53f313e122690d887ddd52062f0c4' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionBlog/invited.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7544134934ec356045e26e4-98516585',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="block">
	<form onsubmit="return ls.blog.addInvite(<?php echo $_smarty_tpl->getVariable('oBlogEdit')->value->getId();?>
);">
		<p><label><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_admin_user_add_label'];?>
<br />
		<input type="text" id="blog_admin_user_add" name="add" class="input-200 autocomplete-users" /></label></p>
	</form>

	
	<h2><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_admin_user_invited'];?>
</h2>

	<div id="invited_list_block">
		<?php if ($_smarty_tpl->getVariable('aBlogUsersInvited')->value){?>
			<ul class="list" id="invited_list">
				<?php  $_smarty_tpl->tpl_vars['oBlogUser'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aBlogUsersInvited')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oBlogUser']->key => $_smarty_tpl->tpl_vars['oBlogUser']->value){
?>
					<?php $_smarty_tpl->tpl_vars['oUser'] = new Smarty_variable($_smarty_tpl->getVariable('oBlogUser')->value->getUser(), null, null);?>
					<li><a href="<?php echo $_smarty_tpl->getVariable('oUser')->value->getUserWebPath();?>
" class="user"><?php echo $_smarty_tpl->getVariable('oUser')->value->getLogin();?>
</a> - <a href="#" onclick="return ls.blog.repeatInvite(<?php echo $_smarty_tpl->getVariable('oUser')->value->getId();?>
, <?php echo $_smarty_tpl->getVariable('oBlogEdit')->value->getId();?>
);"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_user_invite_readd'];?>
</a></li>						
				<?php }} ?>
			</ul>
		<?php }?>
	</div>
</div>
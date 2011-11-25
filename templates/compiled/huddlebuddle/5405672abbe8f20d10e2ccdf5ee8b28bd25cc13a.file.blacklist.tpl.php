<?php /* Smarty version Smarty-3.0.8, created on 2011-11-15 00:07:05
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionTalk/blacklist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20107314784ec182f91ac356-64732627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5405672abbe8f20d10e2ccdf5ee8b28bd25cc13a' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionTalk/blacklist.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20107314784ec182f91ac356-64732627',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="block">
	<h2><?php echo $_smarty_tpl->getVariable('aLang')->value['talk_blacklist_title'];?>
</h2>
	

	<form onsubmit="return ls.talk.addToBlackList();">
		<p><label><?php echo $_smarty_tpl->getVariable('aLang')->value['talk_balcklist_add_label'];?>
:<br />
		<input type="text" id="talk_blacklist_add" name="add" class="input-wide autocomplete-users" /></label></p>
	</form>


	<div id="black_list_block">
		<?php if ($_smarty_tpl->getVariable('aUsersBlacklist')->value){?>
			<ul class="list" id="black_list">
				<?php  $_smarty_tpl->tpl_vars['oUser'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aUsersBlacklist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oUser']->key => $_smarty_tpl->tpl_vars['oUser']->value){
?>
					<li id="blacklist_item_<?php echo $_smarty_tpl->getVariable('oUser')->value->getId();?>
_area"><a href="<?php echo $_smarty_tpl->getVariable('oUser')->value->getUserWebPath();?>
" class="user"><?php echo $_smarty_tpl->getVariable('oUser')->value->getLogin();?>
</a> - <a href="#" id="blacklist_item_<?php echo $_smarty_tpl->getVariable('oUser')->value->getId();?>
" class="delete"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_delete'];?>
</a></li>
				<?php }} ?>
			</ul>
		<?php }?>
	</div>
</div>
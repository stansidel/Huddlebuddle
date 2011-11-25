<?php /* Smarty version Smarty-3.0.8, created on 2011-11-16 09:20:31
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionTalk/friends.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2818369934ec3562f38a257-95205283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79b8a64d997f8c84ebe3b234bc789ee9c25aa531' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionTalk/friends.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2818369934ec3562f38a257-95205283',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="block">
	<h2><?php echo $_smarty_tpl->getVariable('aLang')->value['block_friends'];?>
</h2>

	<?php if ($_smarty_tpl->getVariable('aUsersFriend')->value){?>
		<div class="block-content">
			<ul class="list" id="friends">
				<?php  $_smarty_tpl->tpl_vars['oFriend'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aUsersFriend')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oFriend']->key => $_smarty_tpl->tpl_vars['oFriend']->value){
?>
					<li><input id="talk_friend_<?php echo $_smarty_tpl->getVariable('oFriend')->value->getId();?>
" type="checkbox" name="friend[<?php echo $_smarty_tpl->getVariable('oFriend')->value->getId();?>
]" class="checkbox" /><label for="talk_friend_<?php echo $_smarty_tpl->getVariable('oFriend')->value->getId();?>
" id="talk_friend_<?php echo $_smarty_tpl->getVariable('oFriend')->value->getId();?>
_label"><?php echo $_smarty_tpl->getVariable('oFriend')->value->getLogin();?>
</label></li>
				<?php }} ?>
			</ul>
		</div>
		
		<div class="bottom">
			<a href="#" id="friend_check_all"><?php echo $_smarty_tpl->getVariable('aLang')->value['block_friends_check'];?>
</a> | 
			<a href="#" id="friend_uncheck_all"><?php echo $_smarty_tpl->getVariable('aLang')->value['block_friends_uncheck'];?>
</a>
		</div>
	<?php }else{ ?>
		<?php echo $_smarty_tpl->getVariable('aLang')->value['block_friends_empty'];?>

	<?php }?>
</div>
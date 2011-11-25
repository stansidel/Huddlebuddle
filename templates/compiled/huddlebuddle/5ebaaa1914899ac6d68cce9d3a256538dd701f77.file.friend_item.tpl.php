<?php /* Smarty version Smarty-3.0.8, created on 2011-11-16 09:20:14
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionProfile/friend_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:308627754ec3561e87b946-58767883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ebaaa1914899ac6d68cce9d3a256538dd701f77' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionProfile/friend_item.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308627754ec3561e87b946-58767883',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('oUserFriend')->value&&($_smarty_tpl->getVariable('oUserFriend')->value->getFriendStatus()==$_smarty_tpl->getVariable('USER_FRIEND_ACCEPT')->value+$_smarty_tpl->getVariable('USER_FRIEND_OFFER')->value||$_smarty_tpl->getVariable('oUserFriend')->value->getFriendStatus()==$_smarty_tpl->getVariable('USER_FRIEND_ACCEPT')->value+$_smarty_tpl->getVariable('USER_FRIEND_ACCEPT')->value)){?>
	<li id="delete_friend_item"><a href="#"  title="<?php echo $_smarty_tpl->getVariable('aLang')->value['user_friend_del'];?>
" onclick="return ls.user.removeFriend(this,<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getId();?>
,'del');"><?php echo $_smarty_tpl->getVariable('aLang')->value['user_friend_del'];?>
</a></li>
<?php }elseif($_smarty_tpl->getVariable('oUserFriend')->value&&$_smarty_tpl->getVariable('oUserFriend')->value->getStatusTo()==$_smarty_tpl->getVariable('USER_FRIEND_REJECT')->value&&$_smarty_tpl->getVariable('oUserFriend')->value->getStatusFrom()==$_smarty_tpl->getVariable('USER_FRIEND_OFFER')->value&&$_smarty_tpl->getVariable('oUserFriend')->value->getUserTo()==$_smarty_tpl->getVariable('oUserCurrent')->value->getId()){?>
	<li id="add_friend_item"><a href="#"  title="<?php echo $_smarty_tpl->getVariable('aLang')->value['user_friend_add'];?>
" onclick="return ls.user.addFriend(this,<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getId();?>
,'accept');"><?php echo $_smarty_tpl->getVariable('aLang')->value['user_friend_add'];?>
</a></li>
<?php }elseif($_smarty_tpl->getVariable('oUserFriend')->value&&$_smarty_tpl->getVariable('oUserFriend')->value->getFriendStatus()==$_smarty_tpl->getVariable('USER_FRIEND_OFFER')->value+$_smarty_tpl->getVariable('USER_FRIEND_REJECT')->value&&$_smarty_tpl->getVariable('oUserFriend')->value->getUserTo()!=$_smarty_tpl->getVariable('oUserCurrent')->value->getId()){?>
	<li><?php echo $_smarty_tpl->getVariable('aLang')->value['user_friend_offer_reject'];?>
</li>							
<?php }elseif($_smarty_tpl->getVariable('oUserFriend')->value&&$_smarty_tpl->getVariable('oUserFriend')->value->getFriendStatus()==$_smarty_tpl->getVariable('USER_FRIEND_OFFER')->value+$_smarty_tpl->getVariable('USER_FRIEND_NULL')->value&&$_smarty_tpl->getVariable('oUserFriend')->value->getUserFrom()==$_smarty_tpl->getVariable('oUserCurrent')->value->getId()){?>
	<li><?php echo $_smarty_tpl->getVariable('aLang')->value['user_friend_offer_send'];?>
</li>						
<?php }elseif($_smarty_tpl->getVariable('oUserFriend')->value&&$_smarty_tpl->getVariable('oUserFriend')->value->getFriendStatus()==$_smarty_tpl->getVariable('USER_FRIEND_OFFER')->value+$_smarty_tpl->getVariable('USER_FRIEND_NULL')->value&&$_smarty_tpl->getVariable('oUserFriend')->value->getUserTo()==$_smarty_tpl->getVariable('oUserCurrent')->value->getId()){?>
	<li id="add_friend_item"><a href="#"  title="<?php echo $_smarty_tpl->getVariable('aLang')->value['user_friend_add'];?>
" onclick="return ls.user.addFriend(this,<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getId();?>
,'accept');"><?php echo $_smarty_tpl->getVariable('aLang')->value['user_friend_add'];?>
</a></li>
<?php }elseif(!$_smarty_tpl->getVariable('oUserFriend')->value){?>	
	<li id="add_friend_item"><a href="#"  title="<?php echo $_smarty_tpl->getVariable('aLang')->value['user_friend_add'];?>
" id="add_friend_show"><?php echo $_smarty_tpl->getVariable('aLang')->value['user_friend_add'];?>
</a>						</li>

	<form id="add_friend_form" class="add-friend-form jqmWindow" onsubmit="return ls.user.addFriend(this,<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getId();?>
,'add');">
		<a href="#" class="close jqmClose"></a>
		
		<label for="add_friend_text"><?php echo $_smarty_tpl->getVariable('aLang')->value['user_friend_add_text_label'];?>
</label><br />
		<textarea id="add_friend_text" rows="3"></textarea>
		
		<input type="submit" value="<?php echo $_smarty_tpl->getVariable('aLang')->value['user_friend_add_submit'];?>
" />
	</form>	
<?php }else{ ?>
	<li id="add_friend_item"><a href="#" title="<?php echo $_smarty_tpl->getVariable('aLang')->value['user_friend_add'];?>
" onclick="return ls.user.addFriend(this,<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getId();?>
,'link');"><?php echo $_smarty_tpl->getVariable('aLang')->value['user_friend_add'];?>
</a></li>
<?php }?>
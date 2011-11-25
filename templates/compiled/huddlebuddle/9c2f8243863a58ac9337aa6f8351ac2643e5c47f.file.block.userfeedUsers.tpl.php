<?php /* Smarty version Smarty-3.0.8, created on 2011-11-16 10:17:44
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/block.userfeedUsers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13432346774ec363980c1891-99915411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c2f8243863a58ac9337aa6f8351ac2643e5c47f' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/block.userfeedUsers.tpl',
      1 => 1319444580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13432346774ec363980c1891-99915411',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('oUserCurrent')->value){?>

<script language="JavaScript" type="text/javascript">
    jQuery(document).ready( function() {
        ls.autocomplete.add(jQuery('#userfeed_users_complete'), aRouter['ajax']+'autocompleter/user/?security_ls_key='+LIVESTREET_SECURITY_KEY);
        jQuery('#userfeed_users_complete').keydown(function (event) {
            if (event.which == 13) {
                ls.userfeed.appendUser()
            }
        });
     });
</script>



<div class="block stream-settings">
	<h2><?php echo $_smarty_tpl->getVariable('aLang')->value['userfeed_block_users_title'];?>
</h2>
	
	<p class="note"><?php echo $_smarty_tpl->getVariable('aLang')->value['userfeed_settings_note_follow_user'];?>
</p>
	
	<div class="stream-settings-userlist">
		<p><input type="text" id="userfeed_users_complete" autocomplete="off" onclick/>
		<a href="javascript:ls.userfeed.appendUser()"><?php echo $_smarty_tpl->getVariable('aLang')->value['userfeed_block_users_append'];?>
</a></p>
		
                   <?php if (count($_smarty_tpl->getVariable('aUserfeedSubscribedUsers')->value)){?>
                        <ul id="userfeed_block_users_list">

			<?php  $_smarty_tpl->tpl_vars['oUser'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aUserfeedSubscribedUsers')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oUser']->key => $_smarty_tpl->tpl_vars['oUser']->value){
?>
				<?php $_smarty_tpl->tpl_vars['iUserId'] = new Smarty_variable($_smarty_tpl->getVariable('oUser')->value->getId(), null, null);?>
				<?php if (!isset($_smarty_tpl->getVariable('aUserfeedFriends',null,true,false)->value[$_smarty_tpl->getVariable('iUserId',null,true,false)->value])){?>
					<li><input class="userfeedUserCheckbox input-checkbox"
								type="checkbox"
								id="usf_u_<?php echo $_smarty_tpl->getVariable('iUserId')->value;?>
"
								checked="checked"
								onClick="if ($(this).attr('checked')) { ls.userfeed.subscribe('users',<?php echo $_smarty_tpl->getVariable('iUserId')->value;?>
) } else { ls.userfeed.unsubscribe('users',<?php echo $_smarty_tpl->getVariable('iUserId')->value;?>
) } " />
						<a href="<?php echo $_smarty_tpl->getVariable('oUser')->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->getVariable('oUser')->value->getLogin();?>
</a>
					</li>
				<?php }?>
			<?php }} ?>
                       </ul>
		<?php }else{ ?>
                        <ul id="userfeed_block_users_list"></ul>
                        <p id="userfeed_no_subscribed_users"><?php echo $_smarty_tpl->getVariable('aLang')->value['userfeed_no_subscribed_users'];?>
</p>
                    <?php }?>
	</div>
	
	
	<?php if (count($_smarty_tpl->getVariable('aUserfeedFriends')->value)){?>
		<h3><?php echo $_smarty_tpl->getVariable('aLang')->value['userfeed_block_users_friends'];?>
</h3>
		
		<p class="note"><?php echo $_smarty_tpl->getVariable('aLang')->value['userfeed_settings_note_follow_friend'];?>
</p>
		
		<ul class="stream-settings-friends">
			<?php  $_smarty_tpl->tpl_vars['oUser'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aUserfeedFriends')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oUser']->key => $_smarty_tpl->tpl_vars['oUser']->value){
?>
				<?php $_smarty_tpl->tpl_vars['iUserId'] = new Smarty_variable($_smarty_tpl->getVariable('oUser')->value->getId(), null, null);?>
				<li><input class="userfeedUserCheckbox input-checkbox"
							type="checkbox"
							id="usf_u_<?php echo $_smarty_tpl->getVariable('iUserId')->value;?>
"
							<?php if (isset($_smarty_tpl->getVariable('aUserfeedSubscribedUsers',null,true,false)->value[$_smarty_tpl->getVariable('iUserId',null,true,false)->value])){?> checked="checked"<?php }?>
							onClick="if ($(this).attr('checked')) { ls.userfeed.subscribe('users',<?php echo $_smarty_tpl->getVariable('iUserId')->value;?>
) } else { ls.userfeed.unsubscribe('users',<?php echo $_smarty_tpl->getVariable('iUserId')->value;?>
) } " />
					<a href="<?php echo $_smarty_tpl->getVariable('oUser')->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->getVariable('oUser')->value->getLogin();?>
</a>
				</li>
			<?php }} ?>
		</ul>
	<?php }?>
</div>
<?php }?>
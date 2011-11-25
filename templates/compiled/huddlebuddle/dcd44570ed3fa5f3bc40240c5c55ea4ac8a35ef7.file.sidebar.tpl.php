<?php /* Smarty version Smarty-3.0.8, created on 2011-11-16 09:20:14
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionProfile/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7882205044ec3561e7b8472-88684041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcd44570ed3fa5f3bc40240c5c55ea4ac8a35ef7' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionProfile/sidebar.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7882205044ec3561e7b8472-88684041',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_modifier_escape')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/lib/external/Smarty/libs/plugins/modifier.escape.php';
?><?php if ($_smarty_tpl->getVariable('oUserProfile')->value){?>

<?php if ($_smarty_tpl->getVariable('oUserCurrent')->value&&$_smarty_tpl->getVariable('oUserCurrent')->value->getId()!=$_smarty_tpl->getVariable('oUserProfile')->value->getId()){?>
	<div class="block">				
		<ul id="profile_actions">
			<?php $_template = new Smarty_Internal_Template('actions/ActionProfile/friend_item.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('oUserFriend',$_smarty_tpl->getVariable('oUserProfile')->value->getUserFriend()); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
			<li><a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
add/?talk_users=<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getLogin();?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['user_write_prvmsg'];?>
</a></li>						
		</ul>
	</div>
<?php }?>


<div class="block contacts nostyle">
	<?php if ($_smarty_tpl->getVariable('oUserProfile')->value->getProfileIcq()){?>
		<h2><?php echo $_smarty_tpl->getVariable('aLang')->value['profile_social_contacts'];?>
</h2>
		<ul>
			<?php if ($_smarty_tpl->getVariable('oUserProfile')->value->getProfileIcq()){?>
				<li class="icq"><a href="http://www.icq.com/people/about_me.php?uin=<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oUserProfile')->value->getProfileIcq(),'html');?>
" target="_blank"><?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getProfileIcq();?>
</a></li>
			<?php }?>					
		</ul>
	<?php }?>
	
	<br />
	
	<?php if ($_smarty_tpl->getVariable('oUserProfile')->value->getProfileFoto()){?>
		<img src="<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getProfileFoto();?>
" alt="photo" />
	<?php }?>
</div>

<?php }?>
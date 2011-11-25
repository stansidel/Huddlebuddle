<?php /* Smarty version Smarty-3.0.8, created on 2011-11-15 16:46:32
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/menu.profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6763552964ec26d38589e84-00487389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4be418f98f7fa2f11e2dd4f86ca1ff1b4fde8de8' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/menu.profile.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6763552964ec26d38589e84-00487389',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.hook.php';
?><ul class="menu">
	<li <?php if ($_smarty_tpl->getVariable('sAction')->value=='profile'){?>class="active"<?php }?>>
		<a href="<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['user_menu_profile'];?>
</a>
		<?php if ($_smarty_tpl->getVariable('sAction')->value=='profile'){?>
			<ul class="sub-menu">
				<li <?php if ($_smarty_tpl->getVariable('aParams')->value[0]=='whois'||$_smarty_tpl->getVariable('aParams')->value[0]==''){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['user_menu_profile_whois'];?>
</a></li>
				<li <?php if ($_smarty_tpl->getVariable('aParams')->value[0]=='favourites'&&$_smarty_tpl->getVariable('aParams')->value[1]!='comments'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'profile'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getLogin();?>
/favourites/"><?php echo $_smarty_tpl->getVariable('aLang')->value['user_menu_profile_favourites'];?>
</a><?php if ($_smarty_tpl->getVariable('iCountTopicFavourite')->value){?> (<?php echo $_smarty_tpl->getVariable('iCountTopicFavourite')->value;?>
)<?php }?></li>
				<li <?php if ($_smarty_tpl->getVariable('aParams')->value[1]=='comments'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'profile'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getLogin();?>
/favourites/comments/"><?php echo $_smarty_tpl->getVariable('aLang')->value['user_menu_profile_favourites_comments'];?>
</a><?php if ($_smarty_tpl->getVariable('iCountCommentFavourite')->value){?> (<?php echo $_smarty_tpl->getVariable('iCountCommentFavourite')->value;?>
)<?php }?></li>
				<?php echo smarty_function_hook(array('run'=>'menu_profile_profile_item'),$_smarty_tpl);?>

			</ul>
		<?php }?>
	</li>
	<li <?php if ($_smarty_tpl->getVariable('sAction')->value=='my'){?>class="active"<?php }?>>
		<a href="<?php echo smarty_function_router(array('page'=>'my'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getLogin();?>
/"><?php echo $_smarty_tpl->getVariable('aLang')->value['user_menu_publication'];?>
 <?php if (($_smarty_tpl->getVariable('iCountCommentUser')->value+$_smarty_tpl->getVariable('iCountTopicUser')->value)>0){?> (<?php echo $_smarty_tpl->getVariable('iCountCommentUser')->value+$_smarty_tpl->getVariable('iCountTopicUser')->value;?>
)<?php }?></a>
		<?php if ($_smarty_tpl->getVariable('sAction')->value=='my'){?>
			<ul class="sub-menu">
				<li <?php if ($_smarty_tpl->getVariable('aParams')->value[0]=='blog'||$_smarty_tpl->getVariable('aParams')->value[0]==''){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'my'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getLogin();?>
/"><?php echo $_smarty_tpl->getVariable('aLang')->value['user_menu_publication_blog'];?>
</a><?php if ($_smarty_tpl->getVariable('iCountTopicUser')->value){?> (<?php echo $_smarty_tpl->getVariable('iCountTopicUser')->value;?>
)<?php }?></li>
				<li <?php if ($_smarty_tpl->getVariable('aParams')->value[0]=='comment'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'my'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getLogin();?>
/comment/"><?php echo $_smarty_tpl->getVariable('aLang')->value['user_menu_publication_comment'];?>
</a><?php if ($_smarty_tpl->getVariable('iCountCommentUser')->value){?> (<?php echo $_smarty_tpl->getVariable('iCountCommentUser')->value;?>
)<?php }?></li>
				<?php echo smarty_function_hook(array('run'=>'menu_profile_my_item'),$_smarty_tpl);?>

			</ul>
		<?php }?>
	</li>
	
	<?php echo smarty_function_hook(array('run'=>'menu_profile'),$_smarty_tpl);?>

</ul>
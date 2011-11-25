<?php /* Smarty version Smarty-3.0.8, created on 2011-11-14 12:47:37
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/menu.topic_action.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15512516414ec0e3b9c21dc2-06624814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14b49f57163a08df93004d3c206407f741576b6f' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/menu.topic_action.tpl',
      1 => 1319444580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15512516414ec0e3b9c21dc2-06624814',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cfg')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.hook.php';
?><ul class="menu">
	<li <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='add'){?>class="active"<?php }?>>
		<a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
/<?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='add_blog'){?>topic<?php }else{ ?><?php echo $_smarty_tpl->getVariable('sMenuItemSelect')->value;?>
<?php }?>/add/"><?php echo $_smarty_tpl->getVariable('aLang')->value['topic_menu_add'];?>
</a>
		<?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='add'){?>
			<ul class="sub-menu" >
				<li <?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='topic'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->getVariable('sMenuSubItemSelect')->value;?>
/"><?php echo $_smarty_tpl->getVariable('aLang')->value['topic_menu_add_topic'];?>
</a></li>
				<li <?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='question'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'question'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->getVariable('sMenuSubItemSelect')->value;?>
/"><?php echo $_smarty_tpl->getVariable('aLang')->value['topic_menu_add_question'];?>
</a></li>
				<li <?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='link'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'link'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->getVariable('sMenuSubItemSelect')->value;?>
/"><?php echo $_smarty_tpl->getVariable('aLang')->value['topic_menu_add_link'];?>
</a></li>
				<?php echo smarty_function_hook(array('run'=>'menu_topic_action_add_item'),$_smarty_tpl);?>

				<li <?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='add_blog'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
add/"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_menu_create'];?>
</a></li>
			</ul>
		<?php }?>
	</li>

	<li <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='saved'){?>class="active"<?php }?>>
		<a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
saved/"><?php echo $_smarty_tpl->getVariable('aLang')->value['topic_menu_saved'];?>
</a>
		<?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='saved'){?>
			<ul class="sub-menu" >
				<?php echo smarty_function_hook(array('run'=>'menu_topic_action_saved_item'),$_smarty_tpl);?>

			</ul>
		<?php }?>
	</li>

	<?php echo smarty_function_hook(array('run'=>'menu_topic_action'),$_smarty_tpl);?>

</ul>
		
		
		


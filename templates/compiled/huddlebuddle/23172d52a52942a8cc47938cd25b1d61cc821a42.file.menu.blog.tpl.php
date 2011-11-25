<?php /* Smarty version Smarty-3.0.8, created on 2011-11-25 05:59:09
         compiled from "/var/www/alpha.huddlebuddle.org/templates/skin/huddlebuddle/menu.blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13589710474ecf047dca3a72-60410000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23172d52a52942a8cc47938cd25b1d61cc821a42' => 
    array (
      0 => '/var/www/alpha.huddlebuddle.org/templates/skin/huddlebuddle/menu.blog.tpl',
      1 => 1319444580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13589710474ecf047dca3a72-60410000',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cfg')) include '/var/www/alpha.huddlebuddle.org/engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_router')) include '/var/www/alpha.huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/alpha.huddlebuddle.org/engine/modules/viewer/plugs/function.hook.php';
?><ul class="menu">
	<li <?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='index'){?>class="active"<?php }?>>
		<a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
/"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_menu_all'];?>
</a> <?php if ($_smarty_tpl->getVariable('iCountTopicsNew')->value>0){?><a href="<?php echo smarty_function_router(array('page'=>'new'),$_smarty_tpl);?>
" class="new">+<?php echo $_smarty_tpl->getVariable('iCountTopicsNew')->value;?>
</a><?php }?>
		<?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='index'){?>
			<ul class="sub-menu">
				<li <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='good'){?>class="active"<?php }?>><a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
/"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_menu_all_good'];?>
</a></li>
				<?php if ($_smarty_tpl->getVariable('iCountTopicsNew')->value>0){?><li <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='new'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'new'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_menu_all_new'];?>
</a> +<?php echo $_smarty_tpl->getVariable('iCountTopicsNew')->value;?>
</li><?php }?>
				<?php echo smarty_function_hook(array('run'=>'menu_blog_index_item'),$_smarty_tpl);?>

			</ul>
		<?php }?>
	</li>

	<li <?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='blog'){?>class="active"<?php }?>>
		<a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_menu_collective'];?>
</a> <?php if ($_smarty_tpl->getVariable('iCountTopicsCollectiveNew')->value>0){?><a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
new/" class="new">+<?php echo $_smarty_tpl->getVariable('iCountTopicsCollectiveNew')->value;?>
</a><?php }?>
		<?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='blog'){?>
			<ul class="sub-menu">
				<li <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='good'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('sMenuSubBlogUrl')->value;?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_menu_collective_good'];?>
</a></li>
				<?php if ($_smarty_tpl->getVariable('iCountTopicsBlogNew')->value>0){?><li <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='new'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('sMenuSubBlogUrl')->value;?>
new/"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_menu_collective_new'];?>
</a> +<?php echo $_smarty_tpl->getVariable('iCountTopicsBlogNew')->value;?>
</li><?php }?>
				<li <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='bad'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('sMenuSubBlogUrl')->value;?>
bad/"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_menu_collective_bad'];?>
</a></li>
				<?php echo smarty_function_hook(array('run'=>'menu_blog_blog_item'),$_smarty_tpl);?>

			</ul>
		<?php }?>
	</li>

	<li <?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='log'){?>class="active"<?php }?>>
		<a href="<?php echo smarty_function_router(array('page'=>'personal_blog'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_menu_personal'];?>
</a> <?php if ($_smarty_tpl->getVariable('iCountTopicsPersonalNew')->value>0){?><a href="<?php echo smarty_function_router(array('page'=>'personal_blog'),$_smarty_tpl);?>
new/" class="new">+<?php echo $_smarty_tpl->getVariable('iCountTopicsPersonalNew')->value;?>
</a><?php }?>
		<?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='log'){?>
			<ul class="sub-menu">
				<li <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='good'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'personal_blog'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_menu_personal_good'];?>
</a></li>
				<?php if ($_smarty_tpl->getVariable('iCountTopicsPersonalNew')->value>0){?><li <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='new'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'personal_blog'),$_smarty_tpl);?>
new/"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_menu_personal_new'];?>
</a> +<?php echo $_smarty_tpl->getVariable('iCountTopicsPersonalNew')->value;?>
</li><?php }?>
				<li <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='bad'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'personal_blog'),$_smarty_tpl);?>
bad/"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_menu_personal_bad'];?>
</a></li>
				<?php echo smarty_function_hook(array('run'=>'menu_blog_log_item'),$_smarty_tpl);?>

			</ul>
		<?php }?>
	</li>
	
	<?php if ($_smarty_tpl->getVariable('oUserCurrent')->value){?>
		<li <?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='feed'){?>class="active"<?php }?>>
			<a href="<?php echo smarty_function_router(array('page'=>'feed'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['userfeed_title'];?>
</a>
		</li>
	<?php }?>
	
	<li <?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='top'){?>class="active"<?php }?>>
		<a href="<?php echo smarty_function_router(array('page'=>'top'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_menu_top'];?>
</a>
		<?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='top'){?>
			<ul class="sub-menu" style="left: -55px;">											
				<li <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='blog'){?>class="active"<?php }?>><div><a href="<?php echo smarty_function_router(array('page'=>'top'),$_smarty_tpl);?>
blog/"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_menu_top_blog'];?>
</a></div></li>
				<li <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='topic'){?>class="active"<?php }?>><div><a href="<?php echo smarty_function_router(array('page'=>'top'),$_smarty_tpl);?>
topic/"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_menu_top_topic'];?>
</a></div></li>
				<li <?php if ($_smarty_tpl->getVariable('sMenuSubItemSelect')->value=='comment'){?>class="active"<?php }?>><div><a href="<?php echo smarty_function_router(array('page'=>'top'),$_smarty_tpl);?>
comment/"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_menu_top_comment'];?>
</a></div></li>
				<?php echo smarty_function_hook(array('run'=>'menu_blog_top_item'),$_smarty_tpl);?>

			</ul>
		<?php }?>
	</li>

	<?php echo smarty_function_hook(array('run'=>'menu_blog'),$_smarty_tpl);?>

</ul>
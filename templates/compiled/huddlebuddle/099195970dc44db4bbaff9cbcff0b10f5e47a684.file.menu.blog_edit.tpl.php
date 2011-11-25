<?php /* Smarty version Smarty-3.0.8, created on 2011-11-16 09:19:44
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/menu.blog_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17547881424ec356001155d4-51974209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '099195970dc44db4bbaff9cbcff0b10f5e47a684' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/menu.blog_edit.tpl',
      1 => 1319444580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17547881424ec356001155d4-51974209',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.hook.php';
?><h2><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_admin'];?>
: <a href="<?php echo $_smarty_tpl->getVariable('oBlogEdit')->value->getUrlFull();?>
"><?php echo $_smarty_tpl->getVariable('oBlogEdit')->value->getTitle();?>
</a></h2>

<ul class="switcher">
	<li <?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='profile'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
edit/<?php echo $_smarty_tpl->getVariable('oBlogEdit')->value->getId();?>
/"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_admin_profile'];?>
</a></li>
	<li <?php if ($_smarty_tpl->getVariable('sMenuItemSelect')->value=='admin'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
admin/<?php echo $_smarty_tpl->getVariable('oBlogEdit')->value->getId();?>
/"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_admin_users'];?>
</a></li>

	<?php echo smarty_function_hook(array('run'=>'menu_blog_edit_admin_item'),$_smarty_tpl);?>

</ul>
<?php echo smarty_function_hook(array('run'=>'menu_blog_edit'),$_smarty_tpl);?>

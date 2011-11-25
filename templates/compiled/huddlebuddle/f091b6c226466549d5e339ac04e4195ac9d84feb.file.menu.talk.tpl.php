<?php /* Smarty version Smarty-3.0.8, created on 2011-11-15 00:06:50
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/menu.talk.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9946625134ec182ea4cabb5-24803307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f091b6c226466549d5e339ac04e4195ac9d84feb' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/menu.talk.tpl',
      1 => 1319444580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9946625134ec182ea4cabb5-24803307',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.hook.php';
?><ul class="menu">
	<li class="active"><a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['talk_menu_inbox'];?>
</a>
		<ul class="sub-menu">					
			<li <?php if ($_smarty_tpl->getVariable('sEvent')->value=='inbox'){?>class="active"<?php }?>><div><a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['talk_menu_inbox_list'];?>
</a></div></li>
			<li <?php if ($_smarty_tpl->getVariable('sEvent')->value=='add'){?>class="active"<?php }?>><div><a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
add/"><?php echo $_smarty_tpl->getVariable('aLang')->value['talk_menu_inbox_create'];?>
</a></div></li>
			<li <?php if ($_smarty_tpl->getVariable('sEvent')->value=='favourites'){?>class="active"<?php }?>><div><a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
favourites/"><?php echo $_smarty_tpl->getVariable('aLang')->value['talk_menu_inbox_favourites'];?>
</a><?php if ($_smarty_tpl->getVariable('iCountTalkFavourite')->value){?> (<?php echo $_smarty_tpl->getVariable('iCountTalkFavourite')->value;?>
)<?php }?></div></li>
			<?php echo smarty_function_hook(array('run'=>'menu_talk_talk_item'),$_smarty_tpl);?>

		</ul>
	</li>
	<?php echo smarty_function_hook(array('run'=>'menu_talk'),$_smarty_tpl);?>

</ul>
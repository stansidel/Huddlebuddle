<?php /* Smarty version Smarty-3.0.8, created on 2011-11-25 05:59:11
         compiled from "/var/www/alpha.huddlebuddle.org/templates/skin/huddlebuddle/block.blogs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7876199084ecf047f0ca366-53124829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0931e5207b4ed26049e3b0ec5473c43593e24e95' => 
    array (
      0 => '/var/www/alpha.huddlebuddle.org/templates/skin/huddlebuddle/block.blogs.tpl',
      1 => 1319444580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7876199084ecf047f0ca366-53124829',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/alpha.huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
?><div class="block blogs" id="block_blogs">
	<h2><?php echo $_smarty_tpl->getVariable('aLang')->value['block_blogs'];?>
</h2>
	
	
	<ul class="switcher">
		<li id="block_blogs_item_top" class="active"><?php echo $_smarty_tpl->getVariable('aLang')->value['block_blogs_top'];?>
</li>
		<?php if ($_smarty_tpl->getVariable('oUserCurrent')->value){?>
			<li id="block_blogs_item_join"><?php echo $_smarty_tpl->getVariable('aLang')->value['block_blogs_join'];?>
</li>
			<li id="block_blogs_item_self"><?php echo $_smarty_tpl->getVariable('aLang')->value['block_blogs_self'];?>
</li>
		<?php }?>
	</ul>
	
	
	<div class="block-content" id="block_blogs_content">
		<?php echo $_smarty_tpl->getVariable('sBlogsTop')->value;?>

	</div>

	
	<div class="bottom">
		<a href="<?php echo smarty_function_router(array('page'=>'blogs'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['block_blogs_all'];?>
</a>
	</div>
</div>

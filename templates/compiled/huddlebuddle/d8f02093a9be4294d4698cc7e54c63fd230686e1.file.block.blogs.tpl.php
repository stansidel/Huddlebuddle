<?php /* Smarty version Smarty-3.0.8, created on 2011-11-14 12:38:50
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/block.blogs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9543118994ec0e1aa0b1379-72828196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8f02093a9be4294d4698cc7e54c63fd230686e1' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/block.blogs.tpl',
      1 => 1319444580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9543118994ec0e1aa0b1379-72828196',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
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

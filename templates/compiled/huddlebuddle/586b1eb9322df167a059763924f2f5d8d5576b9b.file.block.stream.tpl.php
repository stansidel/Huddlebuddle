<?php /* Smarty version Smarty-3.0.8, created on 2011-11-25 05:59:10
         compiled from "/var/www/alpha.huddlebuddle.org/templates/skin/huddlebuddle/block.stream.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4317734884ecf047ede8d07-73565806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '586b1eb9322df167a059763924f2f5d8d5576b9b' => 
    array (
      0 => '/var/www/alpha.huddlebuddle.org/templates/skin/huddlebuddle/block.stream.tpl',
      1 => 1319444580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4317734884ecf047ede8d07-73565806',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_hook')) include '/var/www/alpha.huddlebuddle.org/engine/modules/viewer/plugs/function.hook.php';
?><div class="block stream" id="block_stream">
	<h2><?php echo $_smarty_tpl->getVariable('aLang')->value['block_stream'];?>
</h2>
	
	
	<ul class="switcher">						
		<li id="block_stream_item_comment" class="active"><?php echo $_smarty_tpl->getVariable('aLang')->value['block_stream_comments'];?>
</li>
		<li id="block_stream_item_topic"><?php echo $_smarty_tpl->getVariable('aLang')->value['block_stream_topics'];?>
</li>
		
		<?php echo smarty_function_hook(array('run'=>'block_stream_nav_item'),$_smarty_tpl);?>

	</ul>					
	
	
	<div class="block-content" id="block_stream_content">
		<?php echo $_smarty_tpl->getVariable('sStreamComments')->value;?>

	</div>
</div>


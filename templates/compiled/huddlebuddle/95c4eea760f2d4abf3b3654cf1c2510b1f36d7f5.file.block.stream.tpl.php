<?php /* Smarty version Smarty-3.0.8, created on 2011-11-14 12:38:49
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/block.stream.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5825258634ec0e1a9e79ef9-77794902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95c4eea760f2d4abf3b3654cf1c2510b1f36d7f5' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/block.stream.tpl',
      1 => 1319444580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5825258634ec0e1a9e79ef9-77794902',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_hook')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.hook.php';
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


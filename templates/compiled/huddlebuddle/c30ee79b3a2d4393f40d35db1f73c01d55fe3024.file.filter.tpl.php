<?php /* Smarty version Smarty-3.0.8, created on 2011-11-15 00:07:05
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionTalk/filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18071899294ec182f912b2c2-56921032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c30ee79b3a2d4393f40d35db1f73c01d55fe3024' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionTalk/filter.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18071899294ec182f912b2c2-56921032',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
?><div class="block">
	<h2><?php echo $_smarty_tpl->getVariable('aLang')->value['talk_filter_title'];?>
</h2>

	<div class="block-content">
		<form action="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
" method="GET" name="talk_filter_form">
			<p><label for="talk_filter_sender"><?php echo $_smarty_tpl->getVariable('aLang')->value['talk_filter_label_sender'];?>
:</label><br />
			<input type="text" id="talk_filter_sender" name="sender" value="<?php echo $_smarty_tpl->getVariable('_aRequest')->value['sender'];?>
" class="input-wide autocomplete-users" /><br />
			<span class="note"><?php echo $_smarty_tpl->getVariable('aLang')->value['talk_filter_notice_sender'];?>
</span></p>

			<p><label for="talk_filter_keyword"><?php echo $_smarty_tpl->getVariable('aLang')->value['talk_filter_label_keyword'];?>
:</label><br />
			<input type="text" id="talk_filter_keyword" name="keyword" value="<?php echo $_smarty_tpl->getVariable('_aRequest')->value['keyword'];?>
" class="input-wide" /><br />
			<span class="note"><?php echo $_smarty_tpl->getVariable('aLang')->value['talk_filter_notice_keyword'];?>
</span></p>

			<p><label for="talk_filter_start"><?php echo $_smarty_tpl->getVariable('aLang')->value['talk_filter_label_date'];?>
:</label><br />
			<input type="text" id="talk_filter_start" name="start" value="<?php echo $_smarty_tpl->getVariable('_aRequest')->value['start'];?>
" style="width: 43%" class="date-picker" readonly="readonly" /> &mdash;
			<input type="text" id="talk_filter_end" name="end" value="<?php echo $_smarty_tpl->getVariable('_aRequest')->value['end'];?>
" style="width: 43%" class="date-picker" readonly="readonly" /></p>

			<input type="submit" name="submit_talk_filter" value="<?php echo $_smarty_tpl->getVariable('aLang')->value['talk_filter_submit'];?>
" />
		</form>
	</div>
</div>
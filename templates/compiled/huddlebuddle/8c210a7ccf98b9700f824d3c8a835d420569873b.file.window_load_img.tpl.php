<?php /* Smarty version Smarty-3.0.8, created on 2011-11-14 12:38:49
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/window_load_img.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14029029964ec0e1a9c38645-41593173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c210a7ccf98b9700f824d3c8a835d420569873b' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/window_load_img.tpl',
      1 => 1319444580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14029029964ec0e1a9c38645-41593173',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_hook')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.hook.php';
?><form method="POST" action="" class="upload-form popup jqmWindow" enctype="multipart/form-data" id="form_upload_img">
	<h3><?php echo $_smarty_tpl->getVariable('aLang')->value['uploadimg'];?>
</h3>
	<p>
		<label><?php echo $_smarty_tpl->getVariable('aLang')->value['uploadimg_file'];?>
:<br />
		<input type="file" name="img_file" id="img_file" value="" class="input-wide" /></label>
	</p>
	<p>
		<label><?php echo $_smarty_tpl->getVariable('aLang')->value['uploadimg_url'];?>
:<br />
		<input type="text" name="img_url" value="http://" class="input-wide" /></label>
	</p>
	<?php echo smarty_function_hook(array('run'=>"uploadimg_source"),$_smarty_tpl);?>

	<p>
		<label for="align"><?php echo $_smarty_tpl->getVariable('aLang')->value['uploadimg_align'];?>
:</label>
		<select name="align" class="input-wide">
			<option value=""><?php echo $_smarty_tpl->getVariable('aLang')->value['uploadimg_align_no'];?>
</option>
			<option value="left"><?php echo $_smarty_tpl->getVariable('aLang')->value['uploadimg_align_left'];?>
</option>
			<option value="right"><?php echo $_smarty_tpl->getVariable('aLang')->value['uploadimg_align_right'];?>
</option>
			<option value="center"><?php echo $_smarty_tpl->getVariable('aLang')->value['uploadimg_align_center'];?>
</option>
		</select>
	</p>
	<p><label><?php echo $_smarty_tpl->getVariable('aLang')->value['uploadimg_title'];?>
:<br />
	<input type="text" class="input-wide" name="title" value="" /></label></p>
	<?php echo smarty_function_hook(array('run'=>"uploadimg_additional"),$_smarty_tpl);?>

	<input type="button" value="<?php echo $_smarty_tpl->getVariable('aLang')->value['uploadimg_submit'];?>
" class="button" onclick="ls.ajaxUploadImg('form_upload_img','<?php echo $_smarty_tpl->getVariable('sToLoad')->value;?>
');" />
	<input type="button" value="<?php echo $_smarty_tpl->getVariable('aLang')->value['uploadimg_cancel'];?>
" class="button jqmClose" />
</form>
	
<?php /* Smarty version Smarty-3.0.8, created on 2011-11-23 19:47:51
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/window_load_img.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9354470434ecd23b703d9d9-84783415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34c4c0c97994baeed0c4714c4c5442e5bf9f05fc' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/window_load_img.tpl',
      1 => 1317821040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9354470434ecd23b703d9d9-84783415',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div style="display: none;">
<div class="login-popup upload-image" id="window_load_img">
	<div class="login-popup-top"><a href="#" class="close-block" onclick="return false;"></a></div>
	<div class="content">
		<form method="POST" action="" enctype="multipart/form-data" id="form_upload_img" >
			<h3><?php echo $_smarty_tpl->getVariable('aLang')->value['uploadimg'];?>
</h3>
			<p><label for="img_file"><?php echo $_smarty_tpl->getVariable('aLang')->value['uploadimg_file'];?>
:</label><br /><input type="file" name="img_file" value="" class="w100p" /></p>
			<p><label for="img_url"><?php echo $_smarty_tpl->getVariable('aLang')->value['uploadimg_url'];?>
:</label><br /><input  type="text" name="img_url" value="http://" class="w100p"/></p>
			<p><label for="align"><?php echo $_smarty_tpl->getVariable('aLang')->value['uploadimg_align'];?>
:</label><br />				
				<select name="align" class="w100p">
					<option value=""><?php echo $_smarty_tpl->getVariable('aLang')->value['uploadimg_align_no'];?>
</option>
					<option value="left"><?php echo $_smarty_tpl->getVariable('aLang')->value['uploadimg_align_left'];?>
</option>
					<option value="right"><?php echo $_smarty_tpl->getVariable('aLang')->value['uploadimg_align_right'];?>
</option>
				</select>
			</p>
			<p style="margin-bottom: 20px;"><label for="title"><?php echo $_smarty_tpl->getVariable('aLang')->value['uploadimg_title'];?>
:</label><br /><input type="text" class="w100p" name="title" value="" /></p>
			<input type="button" value="<?php echo $_smarty_tpl->getVariable('aLang')->value['uploadimg_submit'];?>
" onclick="ajaxUploadImg(document.getElementById('form_upload_img'),'<?php echo $_smarty_tpl->getVariable('sToLoad')->value;?>
');">
			<input type="button" value="<?php echo $_smarty_tpl->getVariable('aLang')->value['uploadimg_cancel'];?>
" onclick="hideImgUploadForm(); return false;">
		</form>
	</div>
	<div class="login-popup-bottom"></div>
</div>
</div>
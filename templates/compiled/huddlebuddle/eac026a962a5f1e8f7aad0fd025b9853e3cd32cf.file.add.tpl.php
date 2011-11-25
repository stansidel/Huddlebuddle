<?php /* Smarty version Smarty-3.0.8, created on 2011-11-15 06:37:38
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionBlog/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16633399844ec1de824ffe39-22734871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eac026a962a5f1e8f7aad0fd025b9853e3cd32cf' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionBlog/add.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16633399844ec1de824ffe39-22734871',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cfg')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_lang_load')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.lang_load.php';
if (!is_callable('smarty_function_hook')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.hook.php';
?><?php if ($_smarty_tpl->getVariable('sEvent')->value=='add'){?>
	<?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('menu','topic_action'); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php }else{ ?>
	<?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php }?>


<?php if ($_smarty_tpl->getVariable('sEvent')->value=='add'){?>
	<h2><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_create'];?>
</h2>
<?php }else{ ?>
	<?php $_template = new Smarty_Internal_Template('menu.blog_edit.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php }?>


<?php if ($_smarty_tpl->getVariable('oConfig')->value->GetValue('view.tinymce')){?>
	<script type="text/javascript" src="<?php echo smarty_function_cfg(array('name'=>'path.root.engine_lib'),$_smarty_tpl);?>
/external/tinymce-jq/tiny_mce.js"></script>

	<script type="text/javascript">
	
	tinyMCE.init({
		mode : "textareas",
		theme : "advanced",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_buttons1 : "lshselect,bold,italic,underline,strikethrough,|,bullist,numlist,|,undo,redo,|,lslink,unlink,lsvideo,lsimage,pagebreak,code",
		theme_advanced_buttons2 : "",
		theme_advanced_buttons3 : "",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,
		theme_advanced_resize_horizontal : 0,
		theme_advanced_resizing_use_cookie : 0,
		theme_advanced_path : false,
		object_resizing : true,
		force_br_newlines : true,
		forced_root_block : '', // Needed for 3.x
		force_p_newlines : false,    
		plugins : "lseditor,safari,inlinepopups,media,pagebreak",
		convert_urls : false,
		extended_valid_elements : "embed[src|type|allowscriptaccess|allowfullscreen|width|height]",
		pagebreak_separator :"<cut>",
		media_strict : false,
		language : TINYMCE_LANG,
		inline_styles:false,
		formats : {
			underline : {inline : 'u', exact : true},
			 strikethrough : {inline : 's', exact : true}
		}
	});
	
	</script>
<?php }else{ ?>
	<?php $_template = new Smarty_Internal_Template('window_load_img.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('sToLoad','topic_text'); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	<script type="text/javascript">
	jQuery(document).ready(function($){
		ls.lang.load(<?php echo smarty_function_lang_load(array('name'=>"panel_b,panel_i,panel_u,panel_s,panel_url,panel_url_promt,panel_code,panel_video,panel_image,panel_cut,panel_quote,panel_list,panel_list_ul,panel_list_ol,panel_title,panel_clear_tags,panel_video_promt,panel_list_li"),$_smarty_tpl);?>
);
		// Подключаем редактор		
		$('#blog_description').markItUp(getMarkitupSettings());
	});
	</script>
<?php }?>

<form action="" method="POST" enctype="multipart/form-data">
	<?php echo smarty_function_hook(array('run'=>'form_add_blog_begin'),$_smarty_tpl);?>

	<input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->getVariable('LIVESTREET_SECURITY_KEY')->value;?>
" />

	<p><label for="blog_title"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_create_title'];?>
:</label><br />
	<input type="text" id="blog_title" name="blog_title" value="<?php echo $_smarty_tpl->getVariable('_aRequest')->value['blog_title'];?>
" class="input-wide" /><br />
	<span class="note"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_create_title_notice'];?>
</span></p>

	<p><label for="blog_url"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_create_url'];?>
:</label><br />
	<input type="text" id="blog_url" name="blog_url" value="<?php echo $_smarty_tpl->getVariable('_aRequest')->value['blog_url'];?>
" class="input-wide" <?php if ($_smarty_tpl->getVariable('_aRequest')->value['blog_id']){?>disabled<?php }?> /><br />
	<span class="note"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_create_url_notice'];?>
</span></p>

	<p><label for="blog_type"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_create_type'];?>
:</label><br />
	<select name="blog_type" id="blog_type" class="input-200" onChange="ls.blog.loadInfoType(jQuery(this).val());">
		<option value="open" <?php if ($_smarty_tpl->getVariable('_aRequest')->value['blog_type']=='open'){?>selected<?php }?>><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_create_type_open'];?>
</option>
		<option value="close" <?php if ($_smarty_tpl->getVariable('_aRequest')->value['blog_type']=='close'){?>selected<?php }?>><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_create_type_close'];?>
</option>
	</select><br />
	<span class="note" id="blog_type_note"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_create_type_open_notice'];?>
</span>
	<span id="blog_type_note_open" style="display:none;"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_create_type_open_notice'];?>
</span>
	<span id="blog_type_note_close" style="display:none;"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_create_type_close_notice'];?>
</span></p>
	<script type="text/javascript">
	jQuery(document).ready(function($){
		ls.blog.loadInfoType($('#blog_type').val());
	});
	</script>

	<p><label for="blog_description"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_create_description'];?>
:</label><br />
	<textarea name="blog_description" id="blog_description" rows="20" class="input-wide"><?php echo $_smarty_tpl->getVariable('_aRequest')->value['blog_description'];?>
</textarea><br />
	<span class="note"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_create_description_notice'];?>
</span></p>

	<p><label for="blog_limit_rating_topic"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_create_rating'];?>
:</label><br />
	<input type="text" id="blog_limit_rating_topic" name="blog_limit_rating_topic" value="<?php echo $_smarty_tpl->getVariable('_aRequest')->value['blog_limit_rating_topic'];?>
" class="input-100" /><br />
	<span class="note"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_create_rating_notice'];?>
</span></p>

	<p>
	<?php if ($_smarty_tpl->getVariable('oBlogEdit')->value&&$_smarty_tpl->getVariable('oBlogEdit')->value->getAvatar()){?>
		<img src="<?php echo $_smarty_tpl->getVariable('oBlogEdit')->value->getAvatarPath(48);?>
" />
		<img src="<?php echo $_smarty_tpl->getVariable('oBlogEdit')->value->getAvatarPath(24);?>
" />
		<label><input type="checkbox" id="avatar_delete" name="avatar_delete" value="on"> &mdash; <?php echo $_smarty_tpl->getVariable('aLang')->value['blog_create_avatar_delete'];?>
</label><br /><br />
	<?php }?>
	<label for="avatar"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_create_avatar'];?>
:</label><br />
	<input type="file" name="avatar" id="avatar"></p>

	<?php echo smarty_function_hook(array('run'=>'form_add_blog_end'),$_smarty_tpl);?>


	<input type="submit" name="submit_blog_add" value="<?php echo $_smarty_tpl->getVariable('aLang')->value['blog_create_submit'];?>
" />
	<input type="hidden" name="blog_id" value="<?php echo $_smarty_tpl->getVariable('_aRequest')->value['blog_id'];?>
" />
</form>


<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php /* Smarty version Smarty-3.0.8, created on 2011-11-14 12:47:37
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionTopic/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9999177064ec0e3b98d39d2-78609580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '964b4462816dab4bbafd84421250e4d2d7d867ea' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionTopic/add.tpl',
      1 => 1320511600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9999177064ec0e3b98d39d2-78609580',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cfg')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_lang_load')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.lang_load.php';
if (!is_callable('smarty_function_hook')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_modifier_escape')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/lib/external/Smarty/libs/plugins/modifier.escape.php';
?><?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('menu','topic_action'); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template('window_load_img.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('sToLoad','topic_text'); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>


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
		ls.lang.load(<?php echo smarty_function_lang_load(array('name'=>"panel_b,panel_i,panel_u,panel_s,panel_url,panel_url_promt,panel_code,panel_video,panel_image,panel_cut,panel_quote,panel_list,panel_list_ul,panel_list_ol,panel_title,panel_clear_tags,panel_video_promt,panel_list_li,panel_image_promt,panel_user,panel_user_promt"),$_smarty_tpl);?>
);
		// Подключаем редактор		
		$('#topic_text').markItUp(getMarkitupSettings());
	});
	</script>
<?php }?>



<div class="topic" style="display: none;">
	<div class="content" id="text_preview"></div>
</div>


<?php if ($_smarty_tpl->getVariable('sEvent')->value=='add'){?>
	<h2><?php echo $_smarty_tpl->getVariable('aLang')->value['topic_topic_create'];?>
</h2>
<?php }else{ ?>
	<h2><?php echo $_smarty_tpl->getVariable('aLang')->value['topic_topic_edit'];?>
</h2>
<?php }?>

<form action="" method="POST" enctype="multipart/form-data">
	<?php echo smarty_function_hook(array('run'=>'form_add_topic_topic_begin'),$_smarty_tpl);?>


	<input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->getVariable('LIVESTREET_SECURITY_KEY')->value;?>
" />

	<p><label for="blog_id"><?php echo $_smarty_tpl->getVariable('aLang')->value['topic_create_blog'];?>
</label><br />
	<select name="blog_id" id="blog_id" onChange="ls.blog.loadInfo($(this).val());" class="input-wide">
		<option value="0"><?php echo $_smarty_tpl->getVariable('aLang')->value['topic_create_blog_personal'];?>
</option>
		<?php  $_smarty_tpl->tpl_vars['oBlog'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aBlogsAllow')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oBlog']->key => $_smarty_tpl->tpl_vars['oBlog']->value){
?>
			<option value="<?php echo $_smarty_tpl->getVariable('oBlog')->value->getId();?>
" <?php if ($_smarty_tpl->getVariable('_aRequest')->value['blog_id']==$_smarty_tpl->getVariable('oBlog')->value->getId()){?>selected<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oBlog')->value->getTitle(),'html');?>
</option>
		<?php }} ?>
	</select></p>

	<script language="JavaScript" type="text/javascript">
		jQuery(document).ready(function($){
			ls.blog.loadInfo($('#blog_id').val());
		});
    </script>
	
	<p><label for="topic_title"><?php echo $_smarty_tpl->getVariable('aLang')->value['topic_create_title'];?>
:</label><br />
	<input type="text" id="topic_title" name="topic_title" value="<?php echo $_smarty_tpl->getVariable('_aRequest')->value['topic_title'];?>
" class="input-wide" /><br />
	<span class="note"><?php echo $_smarty_tpl->getVariable('aLang')->value['topic_create_title_notice'];?>
</span></p>

	<label for="topic_text"><?php echo $_smarty_tpl->getVariable('aLang')->value['topic_create_text'];?>
<?php if (!$_smarty_tpl->getVariable('oConfig')->value->GetValue('view.tinymce')){?> (<?php echo $_smarty_tpl->getVariable('aLang')->value['topic_create_text_notice'];?>
)<?php }?>:</label>
	<textarea name="topic_text" id="topic_text" rows="20" class="input-wide"><?php echo $_smarty_tpl->getVariable('_aRequest')->value['topic_text'];?>
</textarea><br />

	<p><label for="topic_tags"><?php echo $_smarty_tpl->getVariable('aLang')->value['topic_create_tags'];?>
:</label><br />
	<input type="text" id="topic_tags" name="topic_tags" value="<?php echo $_smarty_tpl->getVariable('_aRequest')->value['topic_tags'];?>
" class="input-wide autocomplete-tags-sep" /><br />
	<span class="note"><?php echo $_smarty_tpl->getVariable('aLang')->value['topic_create_tags_notice'];?>
</span></p>
	
	<p><label for="topic_source_author"><?php echo $_smarty_tpl->getVariable('aLang')->value['topic_source_author'];?>
:</label><br />
                                        <input type="text" id="topic_source_author" name="topic_source_author" value="<?php echo $_smarty_tpl->getVariable('_aRequest')->value['topic_source_author'];?>
" class="input-wide" /><br />
                                <span class="note"><?php echo $_smarty_tpl->getVariable('aLang')->value['topic_source_author_notice'];?>
</span></p>
	
	<p><label for="topic_source"><?php echo $_smarty_tpl->getVariable('aLang')->value['topic_source'];?>
:</label><br />
                                        <input type="text" id="topic_source" name="topic_source" value="<?php echo $_smarty_tpl->getVariable('_aRequest')->value['topic_source'];?>
" class="input-wide" /><br />
                                <span class="note"><?php echo $_smarty_tpl->getVariable('aLang')->value['topic_source_notice'];?>
</span></p>

	
        <?php if ($_smarty_tpl->getVariable('oUserCurrent')->value->isAdministrator()||$_smarty_tpl->getVariable('oConfig')->value->getValue("module.topic.user_block_comments")){?>
            <p><label for="topic_forbid_comment"><input type="checkbox" id="topic_forbid_comment" name="topic_forbid_comment" class="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('_aRequest')->value['topic_forbid_comment']==1){?>checked<?php }?> />
            <?php echo $_smarty_tpl->getVariable('aLang')->value['topic_create_forbid_comment'];?>
</label><br />
            <span class="note"><?php echo $_smarty_tpl->getVariable('aLang')->value['topic_create_forbid_comment_notice'];?>
</span></p>
        <?php }?>

	<?php if ($_smarty_tpl->getVariable('oUserCurrent')->value->isAdministrator()){?>
		<p><label for="topic_publish_index"><input type="checkbox" id="topic_publish_index" name="topic_publish_index" class="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('_aRequest')->value['topic_publish_index']==1){?>checked<?php }?> />
		<?php echo $_smarty_tpl->getVariable('aLang')->value['topic_create_publish_index'];?>
</label><br />
		<span class="note"><?php echo $_smarty_tpl->getVariable('aLang')->value['topic_create_publish_index_notice'];?>
</span></p>
	<?php }?>

	<?php echo smarty_function_hook(array('run'=>'form_add_topic_topic_end'),$_smarty_tpl);?>


	<p class="buttons">
		<input type="submit" name="submit_topic_publish" value="<?php echo $_smarty_tpl->getVariable('aLang')->value['topic_create_submit_publish'];?>
" class="right" />
		<input type="submit" name="submit_preview" value="<?php echo $_smarty_tpl->getVariable('aLang')->value['topic_create_submit_preview'];?>
" onclick="jQuery('#text_preview').parent().show(); ls.tools.textPreview('topic_text',false); return false;" />&nbsp;
		<input type="submit" name="submit_topic_save" value="<?php echo $_smarty_tpl->getVariable('aLang')->value['topic_create_submit_save'];?>
" />
	</p>	
</form>


<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
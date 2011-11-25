<?php /* Smarty version Smarty-3.0.8, created on 2011-11-14 12:38:49
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/comment_tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9181704794ec0e1a97e8832-96921776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1907e9b09dae03791022a93443d57680794983a' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/comment_tree.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9181704794ec0e1a97e8832-96921776',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_cfg')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_lang_load')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.lang_load.php';
?><?php if ($_smarty_tpl->getVariable('oUserCurrent')->value){?>
	<div class="update" id="update" style="<?php if ($_smarty_tpl->getVariable('aPagingCmt')->value&&$_smarty_tpl->getVariable('aPagingCmt')->value['iCountPage']>1){?>display:none;<?php }?>">
		<div class="update-comments" id="update-comments" onclick="ls.comments.load(<?php echo $_smarty_tpl->getVariable('iTargetId')->value;?>
,'<?php echo $_smarty_tpl->getVariable('sTargetType')->value;?>
'); return false;"></div>
		<div class="new-comments" id="new_comments_counter" style="display: none;" onclick="ls.comments.goToNextComment();"></div>
		<input type="hidden" id="comment_last_id" value="<?php echo $_smarty_tpl->getVariable('iMaxIdComment')->value;?>
" />
		<input type="hidden" id="comment_use_paging" value="<?php if ($_smarty_tpl->getVariable('aPagingCmt')->value&&$_smarty_tpl->getVariable('aPagingCmt')->value['iCountPage']>1){?>1<?php }?>" />
	</div>
<?php }?>
	
<div class="comments-header">
	<h3><?php echo $_smarty_tpl->getVariable('aLang')->value['comment_title'];?>
 (<span id="count-comments"><?php echo $_smarty_tpl->getVariable('iCountComment')->value;?>
</span>)</h3>
	<?php if ($_smarty_tpl->getVariable('sTargetType')->value=='topic'){?>
	<a href="<?php echo smarty_function_router(array('page'=>'rss'),$_smarty_tpl);?>
comments/<?php echo $_smarty_tpl->getVariable('iTargetId')->value;?>
/" class="rss">RSS</a>
	<?php }?>
	<a href="#" onclick="ls.comments.collapseCommentAll(); return false;" onfocus="blur();"><?php echo $_smarty_tpl->getVariable('aLang')->value['comment_collapse'];?>
</a> /
	<a href="#" onclick="ls.comments.expandCommentAll(); return false;" onfocus="blur();"><?php echo $_smarty_tpl->getVariable('aLang')->value['comment_expand'];?>
</a>
</div>

<a name="comments"></a>
	
	
<div class="comments" id="comments">
	<?php $_smarty_tpl->tpl_vars["nesting"] = new Smarty_variable("-1", null, null);?>
	<?php  $_smarty_tpl->tpl_vars['oComment'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aComments')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['oComment']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['oComment']->iteration=0;
 $_smarty_tpl->tpl_vars['oComment']->index=-1;
if ($_smarty_tpl->tpl_vars['oComment']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oComment']->key => $_smarty_tpl->tpl_vars['oComment']->value){
 $_smarty_tpl->tpl_vars['oComment']->iteration++;
 $_smarty_tpl->tpl_vars['oComment']->index++;
 $_smarty_tpl->tpl_vars['oComment']->first = $_smarty_tpl->tpl_vars['oComment']->index === 0;
 $_smarty_tpl->tpl_vars['oComment']->last = $_smarty_tpl->tpl_vars['oComment']->iteration === $_smarty_tpl->tpl_vars['oComment']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['rublist']['first'] = $_smarty_tpl->tpl_vars['oComment']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['rublist']['last'] = $_smarty_tpl->tpl_vars['oComment']->last;
?>
		<?php $_smarty_tpl->tpl_vars["cmtlevel"] = new Smarty_variable($_smarty_tpl->getVariable('oComment')->value->getLevel(), null, null);?>
		
		<?php if ($_smarty_tpl->getVariable('cmtlevel')->value>$_smarty_tpl->getVariable('oConfig')->value->GetValue('module.comment.max_tree')){?>
			<?php $_smarty_tpl->tpl_vars["cmtlevel"] = new Smarty_variable($_smarty_tpl->getVariable('oConfig')->value->GetValue('module.comment.max_tree'), null, null);?>
		<?php }?>
		
		<?php if ($_smarty_tpl->getVariable('nesting')->value<$_smarty_tpl->getVariable('cmtlevel')->value){?> 
		<?php }elseif($_smarty_tpl->getVariable('nesting')->value>$_smarty_tpl->getVariable('cmtlevel')->value){?>    	
			<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['name'] = 'closelist1';
$_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('nesting')->value-$_smarty_tpl->getVariable('cmtlevel')->value+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist1']['total']);
?></div><?php endfor; endif; ?>
		<?php }elseif(!$_smarty_tpl->getVariable('smarty')->value['foreach']['rublist']['first']){?>
			</div>
		<?php }?>
		
		<div class="comment-wrapper" id="comment_wrapper_id_<?php echo $_smarty_tpl->getVariable('oComment')->value->getId();?>
">
		
		<?php $_template = new Smarty_Internal_Template('comment.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
		
		<?php $_smarty_tpl->tpl_vars["nesting"] = new Smarty_variable($_smarty_tpl->getVariable('cmtlevel')->value, null, null);?>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['rublist']['last']){?>
			<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['name'] = 'closelist2';
$_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('nesting')->value+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['closelist2']['total']);
?></div><?php endfor; endif; ?>    
		<?php }?>
	<?php }} ?>
</div>				
	
<?php $_template = new Smarty_Internal_Template('comment_paging.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('aPagingCmt',$_smarty_tpl->getVariable('aPagingCmt')->value); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<?php if ($_smarty_tpl->getVariable('bAllowNewComment')->value){?>
	<?php echo $_smarty_tpl->getVariable('sNoticeNotAllow')->value;?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->getVariable('oUserCurrent')->value){?>
		<div class="reply-area">
			<h4 class="reply-header" id="add_comment_root"><a href="#" onclick="ls.comments.toggleCommentForm(0); return false;"><?php echo $_smarty_tpl->getVariable('sNoticeCommentAdd')->value;?>
</a></h4>
			
			<div id="reply_0" class="reply">
				<?php if ($_smarty_tpl->getVariable('oConfig')->value->GetValue('view.tinymce')){?>
					<script type="text/javascript" src="<?php echo smarty_function_cfg(array('name'=>'path.root.engine_lib'),$_smarty_tpl);?>
/external/tinymce/tiny_mce.js"></script>
					

					<script type="text/javascript">
					tinyMCE.init({
						mode : "textareas",
						theme : "advanced",
						theme_advanced_toolbar_location : "top",
						theme_advanced_toolbar_align : "left",
						theme_advanced_buttons1 : "bold,italic,underline,strikethrough,lslink,lsquote",
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
						},
						setup : function(ed) {
							// Display an alert onclick
							ed.onKeyPress.add(function(ed, e) {
								key = e.keyCode || e.which;
								if(e.ctrlKey && (key == 13)) {
									$('#comment-button-submit').click();
									return false;
								}
							});
						 }
					});
					</script>
					
				<?php }else{ ?>
					<?php $_template = new Smarty_Internal_Template('window_load_img.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('sToLoad','form_comment_text'); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
					<script type="text/javascript">
					jQuery(document).ready(function($){
						ls.lang.load(<?php echo smarty_function_lang_load(array('name'=>"panel_b,panel_i,panel_u,panel_s,panel_url,panel_url_promt,panel_code,panel_video,panel_image,panel_cut,panel_quote,panel_list,panel_list_ul,panel_list_ol,panel_title,panel_clear_tags,panel_video_promt,panel_list_li,panel_image_promt"),$_smarty_tpl);?>
);
						// Подключаем редактор
						$('#form_comment_text').markItUp(getMarkitupCommentSettings());
					});
					</script>
				<?php }?>
				
				
				<?php if ($_smarty_tpl->getVariable('oUserCurrent')->value){?>
					<div class="comment-preview" id="comment_preview_0" style="display: none;"><div class="comment-inner"><div class="content"></div></div></div>					
				<?php }?>
				
				<form action="" method="POST" id="form_comment" onsubmit="return false;" enctype="multipart/form-data">
					<textarea name="comment_text" id="form_comment_text" class="input-wide"></textarea>
					<input type="button" value="<?php echo $_smarty_tpl->getVariable('aLang')->value['comment_preview'];?>
" onclick="ls.comments.preview();" />
					<input type="submit" name="submit_comment" value="<?php echo $_smarty_tpl->getVariable('aLang')->value['comment_add'];?>
" id="comment-button-submit" onclick="ls.comments.add('form_comment',<?php echo $_smarty_tpl->getVariable('iTargetId')->value;?>
,'<?php echo $_smarty_tpl->getVariable('sTargetType')->value;?>
'); return false;" />
					<input type="hidden" name="reply" value="0" id="form_comment_reply" />
					<input type="hidden" name="cmt_target_id" value="<?php echo $_smarty_tpl->getVariable('iTargetId')->value;?>
" />
				</form>
			</div>
		</div>
	<?php }else{ ?>
		<?php echo $_smarty_tpl->getVariable('aLang')->value['comment_unregistered'];?>

	<?php }?>
<?php }?>	



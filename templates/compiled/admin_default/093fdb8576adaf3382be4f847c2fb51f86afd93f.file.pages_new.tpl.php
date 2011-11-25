<?php /* Smarty version Smarty-3.0.8, created on 2011-11-23 19:47:50
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default//actions/ActionAdmin/pages_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:638063294ecd23b6af8e49-42061870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '093fdb8576adaf3382be4f847c2fb51f86afd93f' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default//actions/ActionAdmin/pages_new.tpl',
      1 => 1317821040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '638063294ecd23b6af8e49-42061870',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cfg')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
?><?php $_template = new Smarty_Internal_Template('window_load_img.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('sToLoad','page_text'); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<?php if ($_smarty_tpl->getVariable('oConfig')->value->GetValue('view.tinymce')){?>
<script type="text/javascript" src="<?php echo smarty_function_cfg(array('name'=>'path.root.engine_lib'),$_smarty_tpl);?>
/external/tinymce_3.2.7/tiny_mce.js"></script>
    
    <script type="text/javascript">
        tinyMCE.init({
            mode : "textareas",
            theme : "advanced",
            theme_advanced_toolbar_location : "top",
            theme_advanced_toolbar_align : "left",
            theme_advanced_buttons1 : "lshselect,bold,italic,underline,strikethrough,|,bullist,numlist,|,undo,redo,|,lslink,unlink,lsvideo,lsimage,code",
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
            plugins : "lseditor,safari,inlinepopups,media",
            convert_urls : false,
            extended_valid_elements : "embed[src|type|allowscriptaccess|allowfullscreen|width|height]",
            language : TINYMCE_LANG
        });
    </script>
    
<?php }?>

<form action="" method="POST">
    <input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->getVariable('LIVESTREET_SECURITY_KEY')->value;?>
"/>

    <p><label for="page_pid"><?php echo $_smarty_tpl->getVariable('oLang')->value->page_create_parent_page;?>
</label>
        <select name="page_pid" id="page_pid">
            <option value="0"></option>
        <?php  $_smarty_tpl->tpl_vars['oPage'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aPages')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oPage']->key => $_smarty_tpl->tpl_vars['oPage']->value){
?>
            <option style="margin-left: <?php echo $_smarty_tpl->getVariable('oPage')->value->getLevel()*20;?>
px;" value="<?php echo $_smarty_tpl->getVariable('oPage')->value->getId();?>
"
                    <?php if ($_smarty_tpl->getVariable('_aRequest')->value['page_pid']==$_smarty_tpl->getVariable('oPage')->value->getId()){?>selected<?php }?>><?php echo $_smarty_tpl->getVariable('oPage')->value->getTitle();?>
(/<?php echo $_smarty_tpl->getVariable('oPage')->value->getUrlFull();?>

                /)
            </option>
        <?php }} ?>
        </select>
    </p>

    <p><label for="page_title"><?php echo $_smarty_tpl->getVariable('oLang')->value->page_create_title;?>
:</label>
        <input type="text" id="page_title" name="page_title" value="<?php echo $_smarty_tpl->getVariable('_aRequest')->value['page_title'];?>
" class="w100p"/><br/>
    </p>

    <p><label for="page_url"><?php echo $_smarty_tpl->getVariable('oLang')->value->page_create_url;?>
:</label>
        <input type="text" id="page_url" name="page_url" value="<?php echo $_smarty_tpl->getVariable('_aRequest')->value['page_url'];?>
" class="w100p"/><br/>
    </p>

    <p><label for="page_other_url">Переадресация на страницу:</label><br/>
        <input type="text" id="page_other_url" name="page_other_url" value="<?php echo $_smarty_tpl->getVariable('_aRequest')->value['page_other_url'];?>
" class="w100p"/><br/>
    </p>


<p><label for="page_text"><?php echo $_smarty_tpl->getVariable('oLang')->value->page_create_text;?>
:</label>
<?php if (!$_smarty_tpl->getVariable('oConfig')->value->GetValue('view.tinymce')){?>
    <div class="panel_form" style="background: #eaecea; ">
        <a href="#" onclick="lsPanel.putTagAround('page_text','b'); return false;" class="button"><img
                src="<?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/panel/bold.png" width="20" height="20"
                title="<?php echo $_smarty_tpl->getVariable('aLang')->value['panel_b'];?>
" alt="<?php echo $_smarty_tpl->getVariable('aLang')->value['panel_b'];?>
"/></a>
        <a href="#" onclick="lsPanel.putTagAround('page_text','i'); return false;" class="button"><img
                src="<?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/panel/italic.png" width="20" height="20"
                title="<?php echo $_smarty_tpl->getVariable('aLang')->value['panel_i'];?>
" alt="<?php echo $_smarty_tpl->getVariable('aLang')->value['panel_i'];?>
"/></a>
        <a href="#" onclick="lsPanel.putTagAround('page_text','u'); return false;" class="button"><img
                src="<?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/panel/underline.png" width="20" height="20"
                title="<?php echo $_smarty_tpl->getVariable('aLang')->value['panel_u'];?>
" alt="<?php echo $_smarty_tpl->getVariable('aLang')->value['panel_u'];?>
"/></a>
        <a href="#" onclick="lsPanel.putTagAround('page_text','s'); return false;" class="button"><img
                src="<?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/panel/strikethrough.png" width="20" height="20"
                title="<?php echo $_smarty_tpl->getVariable('aLang')->value['panel_s'];?>
" alt="<?php echo $_smarty_tpl->getVariable('aLang')->value['panel_s'];?>
"/></a>
        &nbsp;
        <a href="#" onclick="lsPanel.putTagUrl('page_text','Введите ссылку'); return false;" class="button"><img
                src="<?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/panel/link.png" width="20" height="20"
                title="<?php echo $_smarty_tpl->getVariable('aLang')->value['panel_url'];?>
" alt="<?php echo $_smarty_tpl->getVariable('aLang')->value['panel_url'];?>
"/></a>
        <a href="#" onclick="lsPanel.putTagAround('page_text','code'); return false;" class="button"><img
                src="<?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/panel/code.png" width="30" height="20"
                title="<?php echo $_smarty_tpl->getVariable('aLang')->value['panel_code'];?>
" alt="<?php echo $_smarty_tpl->getVariable('aLang')->value['panel_code'];?>
"/></a>
        <a href="#" onclick="lsPanel.putTagAround('page_text','video'); return false;" class="button"><img
                src="<?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/panel/video.png" width="20" height="20"
                title="<?php echo $_smarty_tpl->getVariable('aLang')->value['panel_video'];?>
" alt="<?php echo $_smarty_tpl->getVariable('aLang')->value['panel_video'];?>
"/></a>

        <a href="#" onclick="showImgUploadForm(); return false;" class="button"><img
                src="<?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/panel/img.png" width="20" height="20"
                title="<?php echo $_smarty_tpl->getVariable('aLang')->value['panel_image'];?>
" alt="<?php echo $_smarty_tpl->getVariable('aLang')->value['panel_image'];?>
"/></a>
        <a href="#" onclick="lsPanel.putText('page_text','<cut>'); return false;" class="button"><img
                src="<?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/panel/cut.png" width="20" height="20"
                title="<?php echo $_smarty_tpl->getVariable('aLang')->value['panel_cut'];?>
" alt="<?php echo $_smarty_tpl->getVariable('aLang')->value['panel_cut'];?>
"/></a>
    </div>
<?php }?>
    <textarea name="page_text" id="page_text" rows="20"><?php echo $_smarty_tpl->getVariable('_aRequest')->value['page_text'];?>
</textarea></p>

    <p><label for="page_seo_keywords"><?php echo $_smarty_tpl->getVariable('oLang')->value->page_create_seo_keywords;?>
:</label><br/>
        <input type="text" id="page_seo_keywords" name="page_seo_keywords" value="<?php echo $_smarty_tpl->getVariable('_aRequest')->value['page_seo_keywords'];?>
"
               class="w100p"/><br/>
        <span class="form_note"><?php echo $_smarty_tpl->getVariable('oLang')->value->page_create_seo_keywords_notice;?>
</span>
    </p>

    <p><label for="page_seo_description"><?php echo $_smarty_tpl->getVariable('oLang')->value->page_create_seo_description;?>
:</label><br/>
        <input type="text" id="page_seo_description" name="page_seo_description"
               value="<?php echo $_smarty_tpl->getVariable('_aRequest')->value['page_seo_description'];?>
" class="w100p"/><br/>
        <span class="form_note"><?php echo $_smarty_tpl->getVariable('oLang')->value->page_create_seo_description_notice;?>
</span>
    </p>

    <p>
        <label for="page_sort"><?php echo $_smarty_tpl->getVariable('aLang')->value['page_create_sort'];?>
:</label><br/>
        <input type="text" id="page_sort" name="page_sort" value="<?php echo $_smarty_tpl->getVariable('_aRequest')->value['page_sort'];?>
" class="w100p"/><br/>
        <span class="form_note"><?php echo $_smarty_tpl->getVariable('aLang')->value['page_create_sort_notice'];?>
</span>
    </p>

    <p>
        <input type="checkbox" id="page_auto_br" name="page_auto_br" value="1" class="checkbox"
               <?php if ($_smarty_tpl->getVariable('_aRequest')->value['page_auto_br']==1){?>checked<?php }?>/>
        <label for="page_main"> &mdash; <?php echo $_smarty_tpl->getVariable('aLang')->value['page_create_auto_br'];?>
</label>
    </p>

    <p>
        <input type="checkbox" id="page_active" name="page_active" value="1" class="checkbox"
               <?php if ($_smarty_tpl->getVariable('_aRequest')->value['page_active']==1){?>checked<?php }?>/>
        <label for="page_active"> &mdash; <?php echo $_smarty_tpl->getVariable('oLang')->value->page_create_active;?>
</label>
    </p>

    <p>
        <input type="checkbox" id="page_main" name="page_main" value="1" class="checkbox"
               <?php if ($_smarty_tpl->getVariable('_aRequest')->value['page_main']==1){?>checked<?php }?>/>
        <label for="page_main"> &mdash; <?php echo $_smarty_tpl->getVariable('aLang')->value['page_create_main'];?>
</label>
    </p>

    <p class="buttons">
        <input type="submit" name="submit_page_save" value="<?php echo $_smarty_tpl->getVariable('oLang')->value->page_create_submit_save;?>
"/>&nbsp;
        <input type="submit" name="submit_page_cancel" value="<?php echo $_smarty_tpl->getVariable('oLang')->value->page_create_submit_cancel;?>
"
               onclick="window.location='<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
pages/'; return false;"/>&nbsp;
    </p>

    <input type="hidden" name="page_id" value="<?php echo $_smarty_tpl->getVariable('_aRequest')->value['page_id'];?>
"/>
</form>
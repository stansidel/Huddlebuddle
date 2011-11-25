<?php /* Smarty version Smarty-3.0.8, created on 2011-11-11 06:14:58
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/actions/ActionAdmin/blogs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17714708744ebc9332dd3539-66752951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '824ef10079ce1565b34bf443844a3db2cd562857' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/actions/ActionAdmin/blogs.tpl',
      1 => 1317821040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17714708744ebc9332dd3539-66752951',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_modifier_escape')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/lib/external/Smarty/libs/plugins/modifier.escape.php';
if (!is_callable('smarty_function_cfg')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.cfg.php';
?><?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('showWhiteBack',true); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<script type="text/javascript">
    var sWebPluginSkin = "<?php echo $_smarty_tpl->getVariable('sWebPluginSkin')->value;?>
";
    var sWebPluginPath = "<?php echo $_smarty_tpl->getVariable('sWebPluginPath')->value;?>
";
</script>

<h3><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_menu_blogs;?>
</h3>
<div class="topic">

    <ul class="block-nav -box">
        <li <?php if ($_smarty_tpl->getVariable('sMode')->value=='all'||$_smarty_tpl->getVariable('sMode')->value==''){?>class="active"<?php }?>><strong></strong><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
blogs/list/">all (<?php echo $_smarty_tpl->getVariable('iBlogsTotal')->value;?>
)</a></li>
        <?php  $_smarty_tpl->tpl_vars['aBlogType'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aBlogTypes')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['aBlogType']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['aBlogType']->iteration=0;
if ($_smarty_tpl->tpl_vars['aBlogType']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['aBlogType']->key => $_smarty_tpl->tpl_vars['aBlogType']->value){
 $_smarty_tpl->tpl_vars['aBlogType']->iteration++;
 $_smarty_tpl->tpl_vars['aBlogType']->last = $_smarty_tpl->tpl_vars['aBlogType']->iteration === $_smarty_tpl->tpl_vars['aBlogType']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['last'] = $_smarty_tpl->tpl_vars['aBlogType']->last;
?>
        <li <?php if ($_smarty_tpl->getVariable('sMode')->value==$_smarty_tpl->tpl_vars['aBlogType']->value['blog_type']){?>class="active"<?php }?>>
            <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
blogs/list/<?php echo $_smarty_tpl->tpl_vars['aBlogType']->value['blog_type'];?>
/"><?php echo $_smarty_tpl->tpl_vars['aBlogType']->value['blog_type'];?>
 (<?php echo $_smarty_tpl->tpl_vars['aBlogType']->value['blog_cnt'];?>
)</a>
            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['last']){?><em></em><?php }?>
        </li>
        <?php }} ?>
    </ul>

    <table class="admin-table">
        <thead>
            <tr>
                <th width="40px">&nbsp;</th>
                <th width="50px">Blog ID</th>
                <th>User</th>
                <th>Title</th>
                <th>Date</th>
                <th>Type</th>
                <th>Users</th>
                <th>Votes</th>
                <th>Rating</th>
            </tr>
        </thead>

        <tbody>
        <?php  $_smarty_tpl->tpl_vars['aBlog'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aBlogs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['el2']['iteration']=0;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['aBlog']->key => $_smarty_tpl->tpl_vars['aBlog']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['el2']['iteration']++;
?>
            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['el2']['iteration']%2==0){?>
            <?php $_smarty_tpl->tpl_vars['className'] = new Smarty_variable('', null, null);?>
            <?php }else{ ?>
            <?php $_smarty_tpl->tpl_vars['className'] = new Smarty_variable('colored', null, null);?>
            <?php }?>
            <?php $_smarty_tpl->tpl_vars['sBlogTitle'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['aBlog']->value['blog_title'],'html'), null, null);?>
            <tr class="<?php echo $_smarty_tpl->getVariable('className')->value;?>
">
                <td class="name">
                    <?php if ($_smarty_tpl->tpl_vars['aBlog']->value['blog_type']=='personal'){?>
                    <img src="<?php echo $_smarty_tpl->getVariable('sWebPluginSkin')->value;?>
/images/edit_no.gif" alt="" />
                    <?php }else{ ?>
                    <a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
edit/<?php echo $_smarty_tpl->tpl_vars['aBlog']->value['blog_id'];?>
/" title="<?php echo $_smarty_tpl->getVariable('oLang')->value->adm_blog_edit;?>
"><img src="<?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/edit.gif" alt="" /></a>
                    <?php }?>
                    <a href="#" title="<?php echo $_smarty_tpl->getVariable('oLang')->value->adm_blog_delete;?>
" onclick="AdminBlogDelete('<?php echo $_smarty_tpl->getVariable('oLang')->value->adm_blog_del_confirm;?>
','<?php echo $_smarty_tpl->getVariable('sBlogTitle')->value;?>
','<?php echo $_smarty_tpl->tpl_vars['aBlog']->value['blog_id'];?>
'); return false;"><img src="<?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/delete.gif" alt="" /></a>
                </td>
                <td class="number"><?php echo $_smarty_tpl->tpl_vars['aBlog']->value['blog_id'];?>
</td>
                <td>
                    <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
users/profile/<?php echo $_smarty_tpl->tpl_vars['aBlog']->value['user_login'];?>
"><?php echo $_smarty_tpl->tpl_vars['aBlog']->value['user_login'];?>
</a>
                </td>
                <td class="name">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['aBlog']->value['blog_url_full'];?>
"><?php echo $_smarty_tpl->getVariable('sBlogTitle')->value;?>
</a>
                </td>
                <td class="center"><?php echo $_smarty_tpl->tpl_vars['aBlog']->value['blog_date_add'];?>
</td>
                <td class="center"><?php if ($_smarty_tpl->tpl_vars['aBlog']->value['blog_type']!='personal'){?><b><?php }?><?php echo $_smarty_tpl->tpl_vars['aBlog']->value['blog_type'];?>
<?php if ($_smarty_tpl->tpl_vars['aBlog']->value['blog_type']!='personal'){?></b><?php }?></td>
                <td class="number"><?php echo $_smarty_tpl->tpl_vars['aBlog']->value['blog_count_user'];?>
</td>
                <td class="number"><?php echo $_smarty_tpl->tpl_vars['aBlog']->value['blog_count_vote'];?>
</td>
                <td class="number"><?php echo $_smarty_tpl->tpl_vars['aBlog']->value['blog_rating'];?>
</td>
            </tr>
        <?php }} ?>
        </tbody>
    </table>
    <?php $_template = new Smarty_Internal_Template('paging.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</div>

<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
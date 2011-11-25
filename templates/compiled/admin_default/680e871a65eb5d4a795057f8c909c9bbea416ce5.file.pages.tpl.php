<?php /* Smarty version Smarty-3.0.8, created on 2011-11-23 19:47:40
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/actions/ActionAdmin/pages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19072501224ecd23ac14e611-21454534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '680e871a65eb5d4a795057f8c909c9bbea416ce5' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/actions/ActionAdmin/pages.tpl',
      1 => 1317821040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19072501224ecd23ac14e611-21454534',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_cfg')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.cfg.php';
?><?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<h3>
<?php echo $_smarty_tpl->getVariable('oLang')->value->adm_pages;?>

<?php if ($_smarty_tpl->getVariable('aParams')->value[0]=='new'){?>
    &rarr; <?php echo $_smarty_tpl->getVariable('oLang')->value->adm_pages_new;?>

    <?php }elseif($_smarty_tpl->getVariable('aParams')->value[0]=='edit'){?>
    &rarr; <?php echo $_smarty_tpl->getVariable('oLang')->value->page_edit;?>
 «<?php echo $_smarty_tpl->getVariable('oPageEdit')->value->getTitle();?>
»
    <?php }elseif($_smarty_tpl->getVariable('aParams')->value[0]=='options'){?>
    &rarr; <?php echo $_smarty_tpl->getVariable('oLang')->value->adm_pages_options;?>

<?php }?>
</h3>
<div class="topic">

<?php if ($_smarty_tpl->getVariable('include_tpl')->value){?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('include_tpl')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php }else{ ?>

    <table class="admin-table">
        <tr>
            <th><?php echo $_smarty_tpl->getVariable('aLang')->value['page_admin_action'];?>
</th>
            <th>ID</th>
            <th><?php echo $_smarty_tpl->getVariable('oLang')->value->page_admin_title;?>
</th>
            <th style="width:250px;"><?php echo $_smarty_tpl->getVariable('oLang')->value->page_admin_url;?>
</th>
            <th><?php echo $_smarty_tpl->getVariable('oLang')->value->page_admin_main;?>
</th>
            <th></th>
        </tr>


        <?php  $_smarty_tpl->tpl_vars['oPage'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aPages')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['oPage']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['oPage']->iteration=0;
 $_smarty_tpl->tpl_vars['oPage']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['el2']['iteration']=0;
if ($_smarty_tpl->tpl_vars['oPage']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oPage']->key => $_smarty_tpl->tpl_vars['oPage']->value){
 $_smarty_tpl->tpl_vars['oPage']->iteration++;
 $_smarty_tpl->tpl_vars['oPage']->index++;
 $_smarty_tpl->tpl_vars['oPage']->first = $_smarty_tpl->tpl_vars['oPage']->index === 0;
 $_smarty_tpl->tpl_vars['oPage']->last = $_smarty_tpl->tpl_vars['oPage']->iteration === $_smarty_tpl->tpl_vars['oPage']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['el2']['first'] = $_smarty_tpl->tpl_vars['oPage']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['el2']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['el2']['last'] = $_smarty_tpl->tpl_vars['oPage']->last;
?>
            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['el2']['iteration']%2==0){?>
                <?php $_smarty_tpl->tpl_vars['className'] = new Smarty_variable('', null, null);?>
                <?php }else{ ?>
                <?php $_smarty_tpl->tpl_vars['className'] = new Smarty_variable('colored', null, null);?>
            <?php }?>
            <tr class="<?php echo $_smarty_tpl->getVariable('className')->value;?>
" onmouseover="this.className='colored_sel';"
                onmouseout="this.className='<?php echo $_smarty_tpl->getVariable('className')->value;?>
';">
                <td align="center">
                    <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
pages/edit/<?php echo $_smarty_tpl->getVariable('oPage')->value->getId();?>
/"><img
                            src="<?php echo $_smarty_tpl->getVariable('sWebPluginSkin')->value;?>
images/edit.gif" alt="<?php echo $_smarty_tpl->getVariable('oLang')->value->page_admin_action_edit;?>
"
                            title="<?php echo $_smarty_tpl->getVariable('oLang')->value->page_admin_action_edit;?>
"/></a>
                    &nbsp;
                    <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
pages/delete/?page_id=<?php echo $_smarty_tpl->getVariable('oPage')->value->getId();?>
&security_ls_key=<?php echo $_smarty_tpl->getVariable('LIVESTREET_SECURITY_KEY')->value;?>
"
                       onclick="return confirm('«<?php echo $_smarty_tpl->getVariable('oPage')->value->getTitle();?>
»: <?php echo $_smarty_tpl->getVariable('oLang')->value->page_admin_action_delete_confirm;?>
');"><img
                            src="<?php echo $_smarty_tpl->getVariable('sWebPluginSkin')->value;?>
images/delete.gif" alt="<?php echo $_smarty_tpl->getVariable('oLang')->value->page_admin_action_delete;?>
"
                            title="<?php echo $_smarty_tpl->getVariable('oLang')->value->page_admin_action_delete;?>
"/></a>
                    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['el2']['first']){?>
                        <img src="<?php echo $_smarty_tpl->getVariable('sWebPluginSkin')->value;?>
images/up_no.png" alt="<?php echo $_smarty_tpl->getVariable('aLang')->value['page_admin_sort_up'];?>
"
                             title="<?php echo $_smarty_tpl->getVariable('aLang')->value['page_admin_sort_up'];?>
 (<?php echo $_smarty_tpl->getVariable('oPage')->value->getSort();?>
)"/>
                    <?php }else{ ?>
                        <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
pages/sort/<?php echo $_smarty_tpl->getVariable('oPage')->value->getId();?>
/?security_ls_key=<?php echo $_smarty_tpl->getVariable('LIVESTREET_SECURITY_KEY')->value;?>
"><img
                                src="<?php echo $_smarty_tpl->getVariable('sWebPluginSkin')->value;?>
images/up.png" alt="<?php echo $_smarty_tpl->getVariable('aLang')->value['page_admin_sort_up'];?>
"
                                title="<?php echo $_smarty_tpl->getVariable('aLang')->value['page_admin_sort_up'];?>
 (<?php echo $_smarty_tpl->getVariable('oPage')->value->getSort();?>
)"/></a>
                    <?php }?>
                    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['el2']['last']){?>
                        <img src="<?php echo $_smarty_tpl->getVariable('sWebPluginSkin')->value;?>
images/down_no.png" alt="<?php echo $_smarty_tpl->getVariable('aLang')->value['page_admin_sort_down'];?>
"
                             title="<?php echo $_smarty_tpl->getVariable('aLang')->value['page_admin_sort_down'];?>
 (<?php echo $_smarty_tpl->getVariable('oPage')->value->getSort();?>
)"/>
                        <?php }else{ ?>
                        <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
pages/sort/<?php echo $_smarty_tpl->getVariable('oPage')->value->getId();?>
/down/?security_ls_key=<?php echo $_smarty_tpl->getVariable('LIVESTREET_SECURITY_KEY')->value;?>
"><img
                                src="<?php echo $_smarty_tpl->getVariable('sWebPluginSkin')->value;?>
images/down.png" alt="<?php echo $_smarty_tpl->getVariable('aLang')->value['page_admin_sort_down'];?>
"
                                title="<?php echo $_smarty_tpl->getVariable('aLang')->value['page_admin_sort_down'];?>
 (<?php echo $_smarty_tpl->getVariable('oPage')->value->getSort();?>
)"/></a>
                    <?php }?>
                </td>
                <td class="number">
                    <?php echo $_smarty_tpl->getVariable('oPage')->value->getId();?>

                </td>
                <td class="name">
                    <div class="<?php if ($_smarty_tpl->getVariable('oPage')->value->getActive()){?>active<?php }else{ ?>unactive<?php }?>"></div>
                    <img src="<?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/<?php if ($_smarty_tpl->getVariable('oPage')->value->getLevel()==0){?>folder<?php }else{ ?>new<?php }?>_16x16.gif"
                         alt="" title="" style="margin-left: <?php echo $_smarty_tpl->getVariable('oPage')->value->getLevel()*20;?>
px;"/>
                    <?php if ($_smarty_tpl->getVariable('oPage')->value->getActive()){?><a
                            href="<?php echo smarty_function_router(array('page'=>'page'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->getVariable('oPage')->value->getUrlFull();?>
/"><?php }?><?php echo $_smarty_tpl->getVariable('oPage')->value->getTitle();?>
<?php if ($_smarty_tpl->getVariable('oPage')->value->getActive()){?></a><?php }?>
                </td>
                <td>
                    /<?php echo $_smarty_tpl->getVariable('oPage')->value->getUrlFull();?>
/
                </td>
                <td class="center">
                    <?php if ($_smarty_tpl->getVariable('oPage')->value->getMain()){?>
                    <?php echo $_smarty_tpl->getVariable('aLang')->value['page_admin_active_yes'];?>

                <?php }else{ ?>
                    <?php echo $_smarty_tpl->getVariable('aLang')->value['page_admin_active_no'];?>

                <?php }?>
                </td>
                <td class="<?php if ($_smarty_tpl->getVariable('oPage')->value->getActive()){?>deactivate<?php }else{ ?>activate<?php }?>">
                    <strong>
                        <?php if ($_smarty_tpl->getVariable('oPage')->value->getActive()){?>
                            <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
pages/?page_id=<?php echo $_smarty_tpl->getVariable('oPage')->value->getId();?>
&action=deactivate&security_ls_key=<?php echo $_smarty_tpl->getVariable('LIVESTREET_SECURITY_KEY')->value;?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['adm_act_deactivate'];?>
</a>
                            <?php }else{ ?>
                            <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
pages/?page_id=<?php echo $_smarty_tpl->getVariable('oPage')->value->getId();?>
&action=activate&security_ls_key=<?php echo $_smarty_tpl->getVariable('LIVESTREET_SECURITY_KEY')->value;?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['adm_act_activate'];?>
</a>
                        <?php }?>
                    </strong>
                </td>
            </tr>
        <?php }} ?>

    </table>
<?php }?>


</div>

<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
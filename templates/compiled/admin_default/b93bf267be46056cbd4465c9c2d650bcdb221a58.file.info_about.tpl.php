<?php /* Smarty version Smarty-3.0.8, created on 2011-11-11 06:14:45
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/actions/ActionAdmin/info_about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2963210154ebc9325223844-80773199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b93bf267be46056cbd4465c9c2d650bcdb221a58' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/actions/ActionAdmin/info_about.tpl',
      1 => 1317821040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2963210154ebc9325223844-80773199',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/lib/external/Smarty/libs/plugins/modifier.escape.php';
?><?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<div style="width: 50%; float: left;">
    <h3><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_title;?>
</h3>

    <div class="topic">
        <p>Version: <span class="adm_info_value"><?php echo $_smarty_tpl->getVariable('aPluginInfo')->value['version'];?>
</span></p>
        <p>Current version of LiveStreet: <span class="adm_info_value"><?php echo $_smarty_tpl->getVariable('LS_VERSION')->value;?>
</span></p>

        <br />
    </div>
</div>

<div style="width: 50%; float: left;">
    <h3><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_site_info;?>
</h3>

    <div class="topic">
        <p><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_site_info_web;?>
: <span class="adm_info_value"><?php echo $_smarty_tpl->getVariable('oConfig')->value->GetValue('path.root.web');?>
</span></p>
        <p><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_site_info_skin;?>
: <span class="adm_info_value"><?php echo $_smarty_tpl->getVariable('oConfig')->value->GetValue('aceadminpanel.saved.view.skin');?>
</span></p>

        <br />
    </div>
</div>

<div style="width: 50%; float: left;">
    <h3><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_active_plugins;?>
</h3>

    <div class="topic">
        <?php  $_smarty_tpl->tpl_vars['aPlugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aPlugins')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['aPlugin']->key => $_smarty_tpl->tpl_vars['aPlugin']->value){
?>
        <?php if ($_smarty_tpl->tpl_vars['aPlugin']->value['is_active']){?>
        <p>
            <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('aPlugin')->value['property']->name->data,'html');?>
, v.<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('aPlugin')->value['property']->version,'html');?>

            <?php if (($_smarty_tpl->tpl_vars['aPlugin']->value['update_info'])){?>
            - <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['aPlugin']->value['update_info'],'html');?>

            <?php }?>
        </p>
        <?php }?>
        <?php }} ?>

        <br />
    </div>
</div>

<div style="width: 50%; float: left;">
    <h3><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_site_statistics;?>
</h3>

    <div class="topic">
        <p><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_site_stat_users;?>
 <span class="adm_info_value"><?php echo $_smarty_tpl->getVariable('aSiteStat')->value['users'];?>
</span></p>
        <p><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_site_stat_blogs;?>
 <span class="adm_info_value"><?php echo $_smarty_tpl->getVariable('aSiteStat')->value['blogs'];?>
</span></p>
        <p><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_site_stat_topics;?>
 <span class="adm_info_value"><?php echo $_smarty_tpl->getVariable('aSiteStat')->value['topics'];?>
</span></p>
        <p><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_site_stat_comments;?>
 <span class="adm_info_value"><?php echo $_smarty_tpl->getVariable('aSiteStat')->value['comments'];?>
</span></p>

        <br />
    </div>
</div>

<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
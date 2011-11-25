<?php /* Smarty version Smarty-3.0.8, created on 2011-11-15 09:35:59
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/actions/ActionAdmin/site_settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20720933134ec2084fd6d4e0-43614645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b16b175f961d844c0d2a541cf88bb89fb2b9b3f5' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/actions/ActionAdmin/site_settings.tpl',
      1 => 1317821040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20720933134ec2084fd6d4e0-43614645',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
?><h3><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_settings_title;?>
</h3>
<ul class="block-nav -box">
    <li <?php if ($_smarty_tpl->getVariable('sMenuNavItemSelect')->value=='base'){?>class="active"<?php }?>><strong></strong><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
site/settings/base/"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_settings_base;?>
</a></li>
    <li <?php if ($_smarty_tpl->getVariable('sMenuNavItemSelect')->value=='sys'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
site/settings/sys/"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_settings_sys;?>
</a></li>
    <li <?php if ($_smarty_tpl->getVariable('sMenuNavItemSelect')->value=='acl'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
site/settings/acl/"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_settings_acl;?>
</a><em></em></li>
</ul>

<div class=topic>

    <form action="" method="POST">
        <input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->getVariable('LIVESTREET_SECURITY_KEY')->value;?>
" />
        <?php  $_smarty_tpl->tpl_vars['aItem'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['sConfigKey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aFields')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['aItem']->key => $_smarty_tpl->tpl_vars['aItem']->value){
 $_smarty_tpl->tpl_vars['sConfigKey']->value = $_smarty_tpl->tpl_vars['aItem']->key;
?>
        <p>
            <?php if ($_smarty_tpl->tpl_vars['aItem']->value['type']=='section'){?>
            <?php $_smarty_tpl->tpl_vars["sTitle"] = new Smarty_variable(($_smarty_tpl->tpl_vars['sConfigKey']->value), null, null);?>
            <h4 class="adm_section"><?php echo $_smarty_tpl->getVariable('oLang')->value->Get(($_smarty_tpl->getVariable('sTitle')->value));?>
</h4>
            <?php }else{ ?>
            <?php $_smarty_tpl->tpl_vars["sValue"] = new Smarty_variable($_smarty_tpl->getVariable('oConfig')->value->GetValue(($_smarty_tpl->tpl_vars['aItem']->value['config'])), null, null);?>
            <label for="<?php echo $_smarty_tpl->tpl_vars['sConfigKey']->value;?>
"><?php echo $_smarty_tpl->getVariable('oLang')->value->Get(($_smarty_tpl->tpl_vars['sConfigKey']->value));?>
:</label>
            <?php if ($_smarty_tpl->tpl_vars['aItem']->value['type']=='checkbox'){?>
                <input type="<?php echo $_smarty_tpl->tpl_vars['aItem']->value['type'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['sConfigKey']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['sConfigKey']->value;?>
" value="1" class="<?php echo $_smarty_tpl->tpl_vars['aItem']->value['class'];?>
" <?php if (($_smarty_tpl->getVariable('sValue')->value)){?>checked<?php }?> /><br />
            <?php }elseif($_smarty_tpl->tpl_vars['aItem']->value['type']=='select'){?>
                <select id="<?php echo $_smarty_tpl->tpl_vars['sConfigKey']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['sConfigKey']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['aItem']->value['class'];?>
">
                <?php  $_smarty_tpl->tpl_vars['sOption'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aItem']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['sOption']->key => $_smarty_tpl->tpl_vars['sOption']->value){
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['sOption']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['sOption']->value==$_smarty_tpl->getVariable('sValue')->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['sOption']->value;?>
</option>
                <?php }} ?>
                </select>
            <?php }else{ ?>
            <input type="<?php echo $_smarty_tpl->tpl_vars['aItem']->value['type'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['sConfigKey']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['sConfigKey']->value;?>
" value="<?php echo $_smarty_tpl->getVariable('sValue')->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['aItem']->value['class'];?>
" /><br />
            <?php }?>
            <!-- span class="form_note"><?php echo $_smarty_tpl->getVariable('oLang')->value->Get("adm_set_".($_smarty_tpl->tpl_vars['sConfigKey']->value)."_notice");?>
</span -->
            <?php }?>
        </p>
        <?php }} ?>

        <p class="buttons">
            <input type="submit" name="submit_data_save" value="<?php echo $_smarty_tpl->getVariable('oLang')->value->adm_save;?>
" />&nbsp;
        </p>

    </form>

</div>

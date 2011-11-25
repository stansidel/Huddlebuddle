<?php /* Smarty version Smarty-3.0.8, created on 2011-11-23 19:55:00
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default//actions/ActionAdmin/pages_options.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2241282494ecd2564df6357-61428872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4069f4b7dcd70d61cb22d9646a42fe17c759da2c' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default//actions/ActionAdmin/pages_options.tpl',
      1 => 1317821040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2241282494ecd2564df6357-61428872',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form action="" method="post">
    <input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->getVariable('LIVESTREET_SECURITY_KEY')->value;?>
" />
    <p>
        <label for="param_reserved_urls"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_page_options_urls;?>
:</label>
        <input type="text" id="param_reserved_urls" name="param_reserved_urls" value="<?php echo $_smarty_tpl->getVariable('sParamPageUrlReserved')->value;?>
"  class="w100p" /><br />
        <span class="form_note"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_page_options_urls_notice;?>
</span>
    </p>

    <p class="buttons">
        <input type="submit" name="submit_options_save" value="<?php echo $_smarty_tpl->getVariable('oLang')->value->page_create_submit_save;?>
" />
    </p>
</form>
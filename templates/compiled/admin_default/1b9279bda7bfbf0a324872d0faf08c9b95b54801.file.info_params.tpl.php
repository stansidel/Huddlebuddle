<?php /* Smarty version Smarty-3.0.8, created on 2011-11-15 06:36:07
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/actions/ActionAdmin/info_params.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17817920784ec1de2792c6d9-32149427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b9279bda7bfbf0a324872d0faf08c9b95b54801' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/actions/ActionAdmin/info_params.tpl',
      1 => 1317821040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17817920784ec1de2792c6d9-32149427',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<h3><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_params_title;?>
</h3>
<div class=topic>

    <form action="" method="POST">
        <input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->getVariable('LIVESTREET_SECURITY_KEY')->value;?>
" />
        <p>
            <label for="param_reserved_urls"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_page_options_urls;?>
:</label><br/>
            <input type="text" id="param_reserved_urls" name="param_reserved_urls" value="<?php echo $_smarty_tpl->getVariable('sParamPageUrlReserved')->value;?>
"  class="w100p" /><br />
            <span class="form_note"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_page_options_urls_notice;?>
</span>
        </p>

        <p>
            <label for="param_items_per_page"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_param_items_per_page;?>
:</label>
            <input type="text" id="param_items_per_page" name="param_items_per_page" value="<?php echo $_smarty_tpl->getVariable('sParamItemsPerPage')->value;?>
"  class="w50" /><br />
            <span class="form_note"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_param_items_per_page_notice;?>
</span>
        </p>

        <!-- p>
            <label for="param_votes_per_page"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_param_votes_per_page;?>
:</label>
            <input type="text" id="param_votes_per_page" name="param_votes_per_page" value="<?php echo $_smarty_tpl->getVariable('sParamVotesPerPage')->value;?>
"  class="w100p" /><br />
            <span class="form_note"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_param_votes_per_page_notice;?>
</span>
        </p -->

        <!-- p>
            <label for="param_edit_footer"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_param_edit_footer;?>
:</label>
            <input type="text" id="param_edit_footer" name="param_edit_footer" value="<?php echo $_smarty_tpl->getVariable('sParamEditFooter')->value;?>
"  class="w100p" /><br />
            <span class="form_note"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_param_edit_footer_notice;?>
</span>
        </p -->

        <p>
            <label for="param_vote_value"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_param_vote_value;?>
:</label>
            <input type="text" id="param_vote_value" name="param_vote_value" value="<?php echo $_smarty_tpl->getVariable('nParamVoteValue')->value;?>
"  class="w50" /><br />
            <span class="form_note"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_param_vote_value_notice;?>
</span>
        </p>

        <p>
            <label for="param_check_password"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_param_check_password;?>
:</label>
            <input type="checkbox" id="param_check_password" name="param_check_password" value="1" <?php if (($_smarty_tpl->getVariable('bParamCheckPassword')->value)){?>checked<?php }?> /><br />
            <span class="form_note"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_param_check_password_notice;?>
</span>
        </p>

        <p class="buttons">
            <input type="submit" name="submit_options_save" value="<?php echo $_smarty_tpl->getVariable('oLang')->value->adm_save;?>
" />&nbsp;
        </p>

    </form>

</div>

<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
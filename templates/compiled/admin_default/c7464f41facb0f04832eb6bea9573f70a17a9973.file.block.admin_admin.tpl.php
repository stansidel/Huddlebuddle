<?php /* Smarty version Smarty-3.0.8, created on 2011-11-11 06:14:51
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default//block.admin_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13890330224ebc932bc57cc2-84585863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7464f41facb0f04832eb6bea9573f70a17a9973' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default//block.admin_admin.tpl',
      1 => 1317821040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13890330224ebc932bc57cc2-84585863',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_modifier_escape')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/lib/external/Smarty/libs/plugins/modifier.escape.php';
?>
<script type="text/javascript">
js_admin["block_admin"] = {
    "domready":
        function() {
            new Autocompleter.Request.HTML(
                $('user_login_seek'),
                DIR_WEB_ROOT+'/include/ajax/userAutocompleter.php?security_ls_key='+LIVESTREET_SECURITY_KEY,
                {
                    'indicatorClass': 'autocompleter-loading', // class added to the input during request
                    'minLength': 1, // We need at least 1 character
                    'selectMode': 'pick', // Instant completion
                    'multiple': false // Tag support, by default comma separated
                }
            );
            new Autocompleter.Request.HTML(
                $('user_login_admin'),
                DIR_WEB_ROOT+'/include/ajax/userAutocompleter.php?security_ls_key='+LIVESTREET_SECURITY_KEY,
                {
                    'indicatorClass': 'autocompleter-loading', // class added to the input during request
                    'minLength': 1, // We need at least 1 character
                    'selectMode': 'pick', // Instant completion
                    'multiple': false // Tag support, by default comma separated
                }
            );
        }
}

document.addEvent('domready', js_admin["block_admin"].domready);

function AdminAction(n) {
    var i, el;
    for(i=1;i<=3;i++) {
        if (i==n) {
            if ((el=$('admin-block-a'+i))) el.style.display='none';
            if ((el=$('admin-block-t'+i))) el.style.display='';
            if ((el=$('admin-block-d'+i))) el.style.display='';
            if ((n==1) && (el=$('admin_ip1_1'))) el.focus();
        } else {
            if ((el=$('admin-block-a'+i))) el.style.display='';
            if ((el=$('admin-block-t'+i))) el.style.display='none';
            if ((el=$('admin-block-d'+i))) el.style.display='none';
        }
    }
}

function AdminReset() {
    var i, el;
    if ((el=$('user_login_seek'))) el.value='';
    if ((el=$('user_ip1_seek'))) el.value='*';
    if ((el=$('user_ip2_seek'))) el.value='*';
    if ((el=$('user_ip3_seek'))) el.value='*';
    if ((el=$('user_ip4_seek'))) el.value='*';
    if ((el=$('user_regdate_seek'))) el.value='*';
    if ((el=$('admin_form_seek'))) el.submit();
}

function AdminSelect(id) {
    var i, el;
    if ((el=document.getElementById(id))) el.select();
}

function AdminMessageSelect() {
    var talk_id=$('talk_inbox_list').value;

    JsHttpRequest.query(
        DIR_WEB_ROOT+'/include/ajax/admin_gettalk.php',
        { talk_id: talk_id },
        function(result, errors) {
            if (!result) {
                msgErrorBox.alert('Error', 'Please try again later');
            }
            if (result.bStateError) {
                //
            } else {
                if ($('talk_title')) {$('talk_title').value=result.sTitle;}
                if ($('talk_text')) {$('talk_text').value=result.sText;}
            }
        },
        true
    );
}

function AdminMessageSeparate(param) {
    if (param) {
        $('send_separate_notice').style.display='none';
        $('send_common_notice').style.display='';
    } else {
        $('send_separate_notice').style.display='';
        $('send_common_notice').style.display='none';
    }
}

function AdminMessageSubmit(msg) {
    var i, el;
    if ((el=$('users_list'))) {
        if (!el.value) {alert(msg[0]); return false;}
    }
    if ((el=$('talk_title'))) {
        if (el.value.length<2 || el.value.length>200) {alert(msg[1]); return false;}
    }
    if ((el=$('talk_text'))) {
        if (el.value.length<2 || el.value.length>3000) {alert(msg[2]); return false;}
    }
    return true;
}

</script>


<div class="block white">
    <div class="tl"><div class="tr"></div></div>
    <div class="cl"><div class="cr">
            <h2><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_users_action;?>
 &darr;</h2>
            <div>

                <h3><span id="admin-block-a1"><a href="#" onclick="AdminAction(1); return false;"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_seek;?>
</a></span><span id="admin-block-t1" style="display:none;"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_seek;?>
</span></h3>
                <form method="post" action="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
users/" id="admin_form_seek">
                    <input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->getVariable('LIVESTREET_SECURITY_KEY')->value;?>
" />
                    <div id="admin-block-d1" style="margin-left:20px;display:none;">
                        <p>
                            <label for="user_login_seek"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_user_login;?>
</label><br />
                            <input type="text" name="user_login_seek" id="user_login_seek" value="<?php echo $_smarty_tpl->getVariable('sUserLoginSeek')->value;?>
" maxlength="30" style="width:250px;" /><br />
                        </p>
                        <p>
                            <label for="user_ip1_seek"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_user_ip;?>
</label><br />
                            <input type="text" name="user_ip1_seek" id="user_ip1_seek" value="<?php echo $_smarty_tpl->getVariable('aUserIp')->value[0];?>
" maxlength="3" style="width:30px;text-align:center;" onfocus="AdminSelect('user_ip1_seek')" /> .
                            <input type="text" name="user_ip2_seek" id="user_ip2_seek" value="<?php echo $_smarty_tpl->getVariable('aUserIp')->value[1];?>
" maxlength="3" style="width:30px;text-align:center;" onfocus="AdminSelect('user_ip2_seek')" /> .
                            <input type="text" name="user_ip3_seek" id="user_ip3_seek" value="<?php echo $_smarty_tpl->getVariable('aUserIp')->value[2];?>
" maxlength="3" style="width:30px;text-align:center;" onfocus="AdminSelect('user_ip3_seek')" /> .
                            <input type="text" name="user_ip4_seek" id="user_ip4_seek" value="<?php echo $_smarty_tpl->getVariable('aUserIp')->value[3];?>
" maxlength="3" style="width:30px;text-align:center;" onfocus="AdminSelect('user_ip4_seek')" />
                            <br />
                            <span class="form_note"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_user_ip_seek_notice;?>
</span>
                        </p>
                        <p>
                            <label for="user_regdate_seek"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_users_date_reg;?>
</label><br />
                            <input type="text" name="user_regdate_seek" id="user_regdate_seek" value="<?php echo $_smarty_tpl->getVariable('aFilter')->value['regdate'];?>
" maxlength="10" style="width:250px;" /><br />
                            <span class="form_note"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_user_regdate_seek_notice;?>
</span>
                        </p>
                        <!-- p>
                        <label for="user_mail_seek"><?php echo $_smarty_tpl->getVariable('oLang')->value->user_mail;?>
</label><br />
					<input type="text" name="user_mail_seek" id="user_mail_seek" value="<?php echo $_smarty_tpl->getVariable('aFilter')->value['email'];?>
" maxlength="10" style="width:250px;" /><br />
					<span class="form_note"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_user_mail_seek_notice;?>
</span>
                        </p -->
                        <p>
                            <input type="hidden" name="user_list_sort" id="user_list_sort" value="<?php echo $_smarty_tpl->getVariable('sUserListSort')->value;?>
" />
                            <input type="hidden" name="user_list_order" id="user_list_order" value="<?php echo $_smarty_tpl->getVariable('sUserListOrder')->value;?>
" />
                            <input type="hidden" name="adm_user_ref" value="<?php echo $_smarty_tpl->getVariable('sPageRef')->value;?>
" />
                            <input type="hidden" name="adm_user_action" value="adm_user_seek" />
                            <input type="submit" name="adm_action_submit" value="<?php echo $_smarty_tpl->getVariable('oLang')->value->adm_seek;?>
" />
                            <input type="reset" name="adm_action_reset" value="<?php echo $_smarty_tpl->getVariable('oLang')->value->adm_reset;?>
" onclick="AdminReset()" />
                        </p>
                    </div>
                </form>

                <div <?php if ($_smarty_tpl->getVariable('sMode')->value!='admins'){?>style="display:none;"<?php }?>>
                    <h3><span id="admin-block-a2"><a href="#" onclick="AdminAction(2); return false;"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_include;?>
</a></span><span id="admin-block-t2" style="display:none;"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_include;?>
</span></h3>
                    <form method="post" action="">
                        <input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->getVariable('LIVESTREET_SECURITY_KEY')->value;?>
" />
                        <div id="admin-block-d2" style="margin-left:20px;display:none;">
                            <p>
                                <label for="user_login_admin"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_user_login;?>
</label><input type="text" name="user_login_admin" id="user_login_admin" maxlength="30" style="width:250px;" /><br />
                            </p>
                            <p>
                                <input type="hidden" name="adm_user_ref" value="<?php echo $_smarty_tpl->getVariable('sPageRef')->value;?>
" />
                                <input type="hidden" name="adm_user_action" value="adm_user_setadmin" />
                                <input type="submit" name="adm_action_submit" value="<?php echo $_smarty_tpl->getVariable('oLang')->value->adm_include;?>
" />
                            </p>
                        </div>
                    </form>
                    <br />
                </div>

                <div>
                    <h3><span id="admin-block-a3"><a href="#" onclick="AdminAction(3); return false;"><?php echo $_smarty_tpl->getVariable('oLang')->value->user_write_prvmsg;?>
</a></span><span id="admin-block-t3" style="display:none;"><?php echo $_smarty_tpl->getVariable('oLang')->value->user_write_prvmsg;?>
</span></h3>
                    <form method="post" action="">
                        <input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->getVariable('LIVESTREET_SECURITY_KEY')->value;?>
" />
                        <div id="admin-block-d3" style="margin-left:20px;display:none;">
                            <p>
                                <label for="users_list"><?php echo $_smarty_tpl->getVariable('oLang')->value->talk_create_users;?>
:</label><br />
                                <span id="users_list_view"></span>
                                <input type="hidden" name="users_list" id="users_list" /><br />
                            </p>
                            <p>
                                <input type="radio" name="send_common_message" id="send_common_message_yes" value="yes" onclick="AdminMessageSeparate(this.checked)" />
                                <label for="send_common_message_yes"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_send_common_message;?>
</label><br />
                                <input type="radio" name="send_common_message" id="send_common_message_no" value="no" checked onclick="AdminMessageSeparate(!this.checked)" />
                                <label for="send_common_message_no"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_send_separate_messages;?>
</label><br />
                                <span id="send_common_notice" class="form_note" style="display:none;"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_send_common_notice;?>
</span>
                                <span id="send_separate_notice" class="form_note"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_send_separate_notice;?>
</span>
                            </p>
                            <p>
                                <label for="talk_inbox_list"><?php echo $_smarty_tpl->getVariable('oLang')->value->talk_menu_inbox_list;?>
</label><br />
                                <select name="talk_inbox_list" id="talk_inbox_list" onchange="AdminMessageSelect();">
                                    <option value="0">-- <?php echo $_smarty_tpl->getVariable('oLang')->value->talk_menu_inbox_create;?>
 --</option>
                                    <?php if ($_smarty_tpl->getVariable('aTalks')->value){?>
                                    <?php  $_smarty_tpl->tpl_vars['oTalk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aTalks')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oTalk']->key => $_smarty_tpl->tpl_vars['oTalk']->value){
?>
                                    <option value="<?php echo $_smarty_tpl->getVariable('oTalk')->value->getId();?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oTalk')->value->getTitle(),'html');?>
</option>
                                    <?php }} ?>
                                    <?php }?>
                                </select>
                                <br />
                            </p>
                            <p>
                                <label for="talk_title"><?php echo $_smarty_tpl->getVariable('oLang')->value->talk_create_title;?>
:</label><br />
                                <input type="text" name="talk_title" id="talk_title" maxlength="30" style="width:250px;" /><br />
                            </p>
                            <p><label for="talk_text"><?php echo $_smarty_tpl->getVariable('oLang')->value->talk_create_text;?>
:</label><br />
                                <textarea name="talk_text" id="talk_text" cols="80" rows="12"></textarea>
                            </p>
                            <p>
                            <p>
                                <input type="checkbox" name="send_copy_self" id="send_copy_self" checked />
                                <label for="send_copy_self"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_send_copy_self;?>
</label>
                            </p>
                            <input type="hidden" name="adm_user_ref" value="<?php echo $_smarty_tpl->getVariable('sPageRef')->value;?>
" />
                            <input type="hidden" name="adm_user_action" value="adm_user_message" />
                            <input type="submit" name="adm_action_submit" value="<?php echo $_smarty_tpl->getVariable('oLang')->value->talk_create_submit;?>
"
                                   onclick="return AdminMessageSubmit(['<?php echo $_smarty_tpl->getVariable('oLang')->value->talk_create_users_error;?>
', '<?php echo $_smarty_tpl->getVariable('oLang')->value->talk_create_title_error;?>
', '<?php echo $_smarty_tpl->getVariable('oLang')->value->talk_create_text_error;?>
'])" />
                            </p>
                        </div>
                    </form>
                    <br />
                </div>

            </div>
        </div></div>
    <div class="bl"><div class="br"></div></div>
</div>

<?php if ($_smarty_tpl->getVariable('aFilter')->value){?>

<script type="text/javascript">
AdminAction(1);
</script>

<?php }?>

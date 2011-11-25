<?php /* Smarty version Smarty-3.0.8, created on 2011-11-14 10:52:53
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/actions/ActionAdmin//users_profile_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18065532034ec0c8d5174a01-01093690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb96adb706ad4a4e1e3153072d772c769fe9d338' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/actions/ActionAdmin//users_profile_info.tpl',
      1 => 1317821040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18065532034ec0c8d5174a01-01093690',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_modifier_escape')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/lib/external/Smarty/libs/plugins/modifier.escape.php';
if (!is_callable('smarty_function_date_format')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.date_format.php';
?>
<script type="text/javascript">
function AdminEdit(name) {
    var view, edit;
    if ((view=$('v_'+name)) && (edit=$('e_'+name))) {
        var size=view.getSize();
        view.style.display='none';
        edit.style.display='block';
        if (name=='user_profile_about') {
            edit.setStyle('width', size.x);
            if (name=='user_profile_about')
                edit.setStyle('height', size.y*5);
            else
                edit.setStyle('height', size.y);
            edit.focus();
            edit.select();
        } else if (name=='user_profile_site') {
            edit.focus();
        };
        $('edit_submit').disabled=false;
    }
}

function AdminSave(name) {
    var view, edit;
    if ((view=$('v_'+name)) && (edit=$('e_'+name))) {
        view.style.display='block';
        edit.style.display='none';
        if (name=='user_profile_site') {
            var s=$('profile_site').value;
            if (s.substr(0, 7)!='http://') s='http://'+s;
            view.set('html', '<a href="'+s+'">'+
                ($('profile_site_name').value?$('profile_site_name').value:$('profile_site').value)+
                '</a>');
        }
        else if (name=='user_profile_about') {
            view.set('text', edit.value);
        }
        else if (name=='user_profile_email') {
            view.set('text', $('profile_email').value);
        }
        if ($('edit_submit')) {
            $('edit_submit').disabled=true;
        }
    }
}

function AdminEditSubmit() {
    var params=new Hash();

    $('edit_submit').style.display='none';
    $('adm_process').style.display='block';

    params['user_id']=$('user_id').value;
    params['profile_about']=$('e_user_profile_about').value;
    params['profile_site']=$('profile_site').value;
    params['profile_site_name']=$('profile_site_name').value;
    params['profile_email']=$('profile_email').value;
    params['security_ls_key'] = LIVESTREET_SECURITY_KEY;

    new Request.JSON({
        url: aRouter['ajax'] + 'admin/setprofile/',
        noCache: true,
        data: params,
        onSuccess: function(result) {
            $('adm_process').style.display='none';
            $('edit_submit').style.display='';
            if (!result) {
                msgErrorBox.alert('Error', 'Please try again later');
            }
            else if (result.bStateError) {
                msgErrorBox.alert(result.sTitle, result.sText);
            } else {
                msgNoticeBox.alert(result.sTitle, result.sText);
                if ($('e_user_profile_about').style.display=='block') AdminSave('user_profile_about');
                if ($('e_user_profile_site').style.display=='block') AdminSave('user_profile_site');
                if ($('e_user_profile_email').style.display=='block') AdminSave('user_profile_email');
                $('edit_submit').disabled=true;
            }
        },
        onFailure: function() {
            $('adm_process').style.display='none';
            $('edit_submit').style.display='';
            msgErrorBox.alert('Error', 'Please try again later');
        }
    }).send();
}
</script>


<?php $_smarty_tpl->tpl_vars["oSession"] = new Smarty_variable($_smarty_tpl->getVariable('oUserProfile')->value->getSession(), null, null);?>
<?php $_smarty_tpl->tpl_vars["oVote"] = new Smarty_variable($_smarty_tpl->getVariable('oUserProfile')->value->getVote(), null, null);?>

<div class="profile-user -box">

    <h1 class="title"><?php echo $_smarty_tpl->getVariable('oLang')->value->profile_privat;?>
</h1>
    <table style="width:100%;">
        <?php if ($_smarty_tpl->getVariable('oUserProfile')->value->getProfileSex()!='other'){?>
        <tr>
            <td class="var"><?php echo $_smarty_tpl->getVariable('oLang')->value->profile_sex;?>
:</td>
            <td style="width:16px;">&nbsp;</td>
            <td>
                <?php if ($_smarty_tpl->getVariable('oUserProfile')->value->getProfileSex()=='man'){?>
                <?php echo $_smarty_tpl->getVariable('oLang')->value->profile_sex_man;?>

                <?php }else{ ?>
                <?php echo $_smarty_tpl->getVariable('oLang')->value->profile_sex_woman;?>

                <?php }?>
            </td>
        </tr>
        <?php }?>

        <tr>
            <td class="var"><?php echo $_smarty_tpl->getVariable('oLang')->value->profile_birthday;?>
:</td>
            <td style="width:16px;">&nbsp;</td>
            <td><?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getProfileBirthday();?>
</td>
        </tr>

        <tr>
            <td class="var"><?php echo $_smarty_tpl->getVariable('oLang')->value->profile_place;?>
:</td>
            <td>&nbsp;</td>
            <td>
            <?php if ($_smarty_tpl->getVariable('oUserProfile')->value->getProfileCountry()){?>
            <a href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
country/<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oUserProfile')->value->getProfileCountry(),'html');?>
/"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oUserProfile')->value->getProfileCountry(),'html');?>
</a><?php if ($_smarty_tpl->getVariable('oUserProfile')->value->getProfileCity()){?>,<?php }?>
            <?php }?>
            <?php if ($_smarty_tpl->getVariable('oUserProfile')->value->getProfileCity()){?>
            <a href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
city/<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oUserProfile')->value->getProfileCity(),'html');?>
/"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oUserProfile')->value->getProfileCity(),'html');?>
</a>
            <?php }?>
            </td>
        </tr>

        <tr>
            <td class="var"><?php echo $_smarty_tpl->getVariable('oLang')->value->profile_about;?>
:</td>
            <td>
                <a href="#" onclick="AdminEdit('user_profile_about'); return false;"><img src="<?php echo $_smarty_tpl->getVariable('sWebPluginSkin')->value;?>
/images/edit.gif" alt="edit" /></a>
            </td>
            <td class="adm_field">
                <div>
                    <div id="v_user_profile_about" style="padding:4px;"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oUserProfile')->value->getProfileAbout(),'html');?>
</div>
                    <textarea id="e_user_profile_about" rows="" cols="" style="overflow: auto;display:none;padding:4px;border:1px solid #CCC;background:#EEE;"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oUserProfile')->value->getProfileAbout(),'html');?>
</textarea>
                </div>
            </td>
        </tr>

        <tr>
            <td class="var"><?php echo $_smarty_tpl->getVariable('oLang')->value->profile_site;?>
:</td>
            <td>
                <a href="#" onclick="AdminEdit('user_profile_site'); return false;"><img src="<?php echo $_smarty_tpl->getVariable('sWebPluginSkin')->value;?>
/images/edit.gif" alt="edit" /></a>
            </td>
            <td class="adm_field">
                <div id="v_user_profile_site">
                    <noindex>
                        <a href="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oUserProfile')->value->getProfileSite(true),'html');?>
" rel="nofollow">
                            <?php if ($_smarty_tpl->getVariable('oUserProfile')->value->getProfileSiteName()){?>
                            <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oUserProfile')->value->getProfileSiteName(),'html');?>

                            <?php }else{ ?>
                            <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oUserProfile')->value->getProfileSite(),'html');?>

                            <?php }?>
                        </a>
                    </noindex>
                </div>
                <div  id="e_user_profile_site" style="display:none;">
                    <input type="text" class="adm_edit" style="width:200px;" id="profile_site" name="profile_site" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oUserProfile')->value->getProfileSite(),'html');?>
"/> <label for="profile_site">&mdash; <?php echo $_smarty_tpl->getVariable('oLang')->value->settings_profile_site_url;?>
</label><br />
                    <input type="text" class="adm_edit" style="width:200px;" id="profile_site_name" name="profile_site_name" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oUserProfile')->value->getProfileSiteName(),'html');?>
"/> <label for="profile_site_name">&mdash; <?php echo $_smarty_tpl->getVariable('oLang')->value->settings_profile_site_name;?>
</label>
                </div>
            </td>
        </tr>

        <tr>
            <td class="var"><?php echo $_smarty_tpl->getVariable('oLang')->value->settings_profile_mail;?>
:</td>
            <td>
                <a href="#" onclick="AdminEdit('user_profile_email'); return false;"><img src="<?php echo $_smarty_tpl->getVariable('sWebPluginSkin')->value;?>
/images/edit.gif" alt="edit" /></a>
            </td>
            <td class="adm_field">
                <div id="v_user_profile_email">
                    <noindex>
                        <a href="mailto:<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oUserProfile')->value->getMail(),'hex');?>
" rel="nofollow">
                            <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oUserProfile')->value->getMail(),'html');?>

                        </a>
                    </noindex>
                </div>
                <div  id="e_user_profile_email" style="display:none;">
                    <input type="text" class="adm_edit" style="width:200px;" id="profile_email" name="profile_email" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oUserProfile')->value->getMail(),'html');?>
"/>
                </div>
            </td>
        </tr>

        <tr>
            <td>
            </td>
            <td>&nbsp;</td>
            <td>
                <input type="hidden" id="user_id" value="<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getId();?>
" />
                <input type="button" id="edit_submit" value="<?php echo $_smarty_tpl->getVariable('oLang')->value->adm_save;?>
" onclick="AdminEditSubmit();" disabled />
                <div id="adm_process" style="text-align:left;display:none;">
                    <img src="<?php echo $_smarty_tpl->getVariable('sWebPluginSkin')->value;?>
/images/adm_process.gif" alt="" />
                </div>
            </td>
        </tr>
    </table>
    <br />

    <br />
    <h1 class="title"><?php echo $_smarty_tpl->getVariable('oLang')->value->profile_activity;?>
</h1>
    <table>
        <tr>
            <td class="var"><?php echo $_smarty_tpl->getVariable('oLang')->value->profile_date_registration;?>
:</td>
            <td><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->getVariable('oUserProfile')->value->getDateRegister()),$_smarty_tpl);?>
 (ip:<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getIpRegister();?>
)</td>
        </tr>
        <tr>
            <td class="var"><?php echo $_smarty_tpl->getVariable('oLang')->value->profile_date_last;?>
:</td>
            <td>
                <?php if ($_smarty_tpl->getVariable('oSession')->value){?>
                <?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->getVariable('oSession')->value->getDateLast()),$_smarty_tpl);?>
 (ip:<?php echo $_smarty_tpl->getVariable('oSession')->value->getIpLast();?>
)
                <?php }?>
            </td>
        </tr>

        <tr>
            <td class="var"><?php echo $_smarty_tpl->getVariable('oLang')->value->profile_friends;?>
:</td>
            <td class="friends">
                <?php if ($_smarty_tpl->getVariable('aUsersFrend')->value){?>
                <?php  $_smarty_tpl->tpl_vars['oUserFrend'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aUsersFrend')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oUserFrend']->key => $_smarty_tpl->tpl_vars['oUserFrend']->value){
?>
                <a href="<?php echo $_smarty_tpl->getVariable('oUserFrend')->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->getVariable('oUserFrend')->value->getLogin();?>
</a>&nbsp;
                <?php }} ?>
                <?php }?>
            </td>
        </tr>

        <tr>
            <td class="var"><?php echo $_smarty_tpl->getVariable('oLang')->value->profile_friends_self;?>
:</td>
            <td class="friends">
                <?php if ($_smarty_tpl->getVariable('aUsersSelfFrend')->value){?>
                <?php  $_smarty_tpl->tpl_vars['oUserFrend'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aUsersSelfFrend')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oUserFrend']->key => $_smarty_tpl->tpl_vars['oUserFrend']->value){
?>
                <a href="<?php echo $_smarty_tpl->getVariable('oUserFrend')->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->getVariable('oUserFrend')->value->getLogin();?>
</a>&nbsp;
                <?php }} ?>
                <?php }?>
            </td>
        </tr>

        <?php if ($_smarty_tpl->getVariable('USER_USE_INVITE')->value&&$_smarty_tpl->getVariable('oUserInviteFrom')->value){?>
        <tr>
            <td class="var"><?php echo $_smarty_tpl->getVariable('oLang')->value->profile_invite_from;?>
:</td>
            <td class="friends">
                <a href="<?php echo $_smarty_tpl->getVariable('oUserInviteFrom')->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->getVariable('oUserInviteFrom')->value->getLogin();?>
</a>&nbsp;
            </td>
        </tr>
        <?php }?>

        <?php if ($_smarty_tpl->getVariable('USER_USE_INVITE')->value&&$_smarty_tpl->getVariable('aUsersInvite')->value){?>
        <tr>
            <td class="var"><?php echo $_smarty_tpl->getVariable('oLang')->value->profile_invite_to;?>
:</td>
            <td class="friends">
                <?php  $_smarty_tpl->tpl_vars['oUserInvite'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aUsersInvite')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oUserInvite']->key => $_smarty_tpl->tpl_vars['oUserInvite']->value){
?>
                <a href="<?php echo $_smarty_tpl->getVariable('oUserInvite')->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->getVariable('oUserInvite')->value->getLogin();?>
</a>&nbsp;
                <?php }} ?>
            </td>
        </tr>
        <?php }?>

        <tr>
            <td class="var"><?php echo $_smarty_tpl->getVariable('oLang')->value->profile_blogs_self;?>
:</td>
            <td>
                <?php if ($_smarty_tpl->getVariable('aBlogsOwner')->value){?>
                <?php  $_smarty_tpl->tpl_vars['oBlog'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aBlogsOwner')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['oBlog']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['oBlog']->iteration=0;
if ($_smarty_tpl->tpl_vars['oBlog']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oBlog']->key => $_smarty_tpl->tpl_vars['oBlog']->value){
 $_smarty_tpl->tpl_vars['oBlog']->iteration++;
 $_smarty_tpl->tpl_vars['oBlog']->last = $_smarty_tpl->tpl_vars['oBlog']->iteration === $_smarty_tpl->tpl_vars['oBlog']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blog_owner']['last'] = $_smarty_tpl->tpl_vars['oBlog']->last;
?>
                <a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->getVariable('oBlog')->value->getUrl();?>
/"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oBlog')->value->getTitle(),'html');?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['blog_owner']['last']){?>, <?php }?>
                <?php }} ?>
                <?php }else{ ?>
                <?php echo $_smarty_tpl->getVariable('oLang')->value->adm_no;?>

                <?php }?>
            </td>
        </tr>

        <tr>
            <td class="var"><?php echo $_smarty_tpl->getVariable('oLang')->value->profile_blogs_administration;?>
:</td>
            <td>
                <?php if ($_smarty_tpl->getVariable('aBlogsAdministration')->value){?>
                <?php  $_smarty_tpl->tpl_vars['oBlogUser'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aBlogsAdministration')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['oBlogUser']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['oBlogUser']->iteration=0;
if ($_smarty_tpl->tpl_vars['oBlogUser']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oBlogUser']->key => $_smarty_tpl->tpl_vars['oBlogUser']->value){
 $_smarty_tpl->tpl_vars['oBlogUser']->iteration++;
 $_smarty_tpl->tpl_vars['oBlogUser']->last = $_smarty_tpl->tpl_vars['oBlogUser']->iteration === $_smarty_tpl->tpl_vars['oBlogUser']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blog_user']['last'] = $_smarty_tpl->tpl_vars['oBlogUser']->last;
?>
                <?php $_smarty_tpl->tpl_vars["oBlog"] = new Smarty_variable($_smarty_tpl->getVariable('oBlogUser')->value->getBlog(), null, null);?>
                <a href="<?php echo $_smarty_tpl->getVariable('oBlog')->value->getUrlFull();?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oBlog')->value->getBlogTitle(),'html');?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['blog_user']['last']){?>, <?php }?>
                <?php }} ?>
                <?php }else{ ?>
                <?php echo $_smarty_tpl->getVariable('oLang')->value->adm_no;?>

                <?php }?>
            </td>
        </tr>

        <tr>
            <td class="var"><?php echo $_smarty_tpl->getVariable('oLang')->value->profile_blogs_moderation;?>
:</td>
            <td>
                <?php if ($_smarty_tpl->getVariable('aBlogsModeration')->value){?>
                <?php  $_smarty_tpl->tpl_vars['oBlogUser'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aBlogsModeration')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['oBlogUser']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['oBlogUser']->iteration=0;
if ($_smarty_tpl->tpl_vars['oBlogUser']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oBlogUser']->key => $_smarty_tpl->tpl_vars['oBlogUser']->value){
 $_smarty_tpl->tpl_vars['oBlogUser']->iteration++;
 $_smarty_tpl->tpl_vars['oBlogUser']->last = $_smarty_tpl->tpl_vars['oBlogUser']->iteration === $_smarty_tpl->tpl_vars['oBlogUser']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blog_user']['last'] = $_smarty_tpl->tpl_vars['oBlogUser']->last;
?>
                <?php $_smarty_tpl->tpl_vars["oBlog"] = new Smarty_variable($_smarty_tpl->getVariable('oBlogUser')->value->getBlog(), null, null);?>
                <a href="<?php echo $_smarty_tpl->getVariable('oBlog')->value->getUrlFull();?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oBlog')->value->getBlogTitle(),'html');?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['blog_user']['last']){?>, <?php }?>
                <?php }} ?>
                <?php }else{ ?>
                <?php echo $_smarty_tpl->getVariable('oLang')->value->adm_no;?>

                <?php }?>
            </td>
        </tr>

        <tr>
            <td class="var"><?php echo $_smarty_tpl->getVariable('oLang')->value->profile_blogs_join;?>
:</td>
            <td>
                <?php if ($_smarty_tpl->getVariable('aBlogsUser')->value){?>
                <?php  $_smarty_tpl->tpl_vars['oBlogUser'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aBlogsUser')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['oBlogUser']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['oBlogUser']->iteration=0;
if ($_smarty_tpl->tpl_vars['oBlogUser']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oBlogUser']->key => $_smarty_tpl->tpl_vars['oBlogUser']->value){
 $_smarty_tpl->tpl_vars['oBlogUser']->iteration++;
 $_smarty_tpl->tpl_vars['oBlogUser']->last = $_smarty_tpl->tpl_vars['oBlogUser']->iteration === $_smarty_tpl->tpl_vars['oBlogUser']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blog_user']['last'] = $_smarty_tpl->tpl_vars['oBlogUser']->last;
?>
                <?php $_smarty_tpl->tpl_vars["oBlog"] = new Smarty_variable($_smarty_tpl->getVariable('oBlogUser')->value->getBlog(), null, null);?>
                <a href="<?php echo $_smarty_tpl->getVariable('oBlog')->value->getUrlFull();?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oBlog')->value->getBlogTitle(),'html');?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['blog_user']['last']){?>, <?php }?>
                <?php }} ?>
                <?php }else{ ?>
                <?php echo $_smarty_tpl->getVariable('oLang')->value->adm_no;?>

                <?php }?>
            </td>
        </tr>

        <tr>
            <td class="var"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_user_wrote_topics;?>
:</td>
            <td>
                <?php if ($_smarty_tpl->getVariable('oUserProfile')->value->GetCountTopics()){?><?php echo $_smarty_tpl->getVariable('oUserProfile')->value->GetCountTopics();?>
<?php }else{ ?>0<?php }?>
                <?php if ($_smarty_tpl->getVariable('aLastTopicList')->value){?>
                (
                <?php  $_smarty_tpl->tpl_vars['oTopic'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aLastTopicList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['oTopic']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['oTopic']->iteration=0;
if ($_smarty_tpl->tpl_vars['oTopic']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oTopic']->key => $_smarty_tpl->tpl_vars['oTopic']->value){
 $_smarty_tpl->tpl_vars['oTopic']->iteration++;
 $_smarty_tpl->tpl_vars['oTopic']->last = $_smarty_tpl->tpl_vars['oTopic']->iteration === $_smarty_tpl->tpl_vars['oTopic']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['topic_user']['last'] = $_smarty_tpl->tpl_vars['oTopic']->last;
?>
                <a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->getVariable('oTopic')->value->getId();?>
.html"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oTopic')->value->getTitle(),'html');?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['topic_user']['last']){?>, <?php }?>
                <?php }} ?>
                )
                <?php }?>
            </td>
        </tr>

        <tr>
            <td class="var"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_user_wrote_comments;?>
:</td>
            <td>
                <?php if ($_smarty_tpl->getVariable('oUserProfile')->value->GetCountComments()){?><?php echo $_smarty_tpl->getVariable('oUserProfile')->value->GetCountComments();?>
<?php }else{ ?>0<?php }?>
            </td>
        </tr>

    </table>
</div>

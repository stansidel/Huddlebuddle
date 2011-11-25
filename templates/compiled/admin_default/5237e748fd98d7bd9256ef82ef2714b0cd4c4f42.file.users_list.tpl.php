<?php /* Smarty version Smarty-3.0.8, created on 2011-11-11 06:14:52
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default//actions/ActionAdmin/users_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13371000624ebc932c073c99-82572901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5237e748fd98d7bd9256ef82ef2714b0cd4c4f42' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default//actions/ActionAdmin/users_list.tpl',
      1 => 1317821040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13371000624ebc932c073c99-82572901',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_date_format')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.date_format.php';
?>
<script type="text/javascript">
function AdminSort(sort, order) {
  var i, el;
  if (document.getElementById) {
    if ((el=document.getElementById('user_list_sort'))) el.value=sort;
    if ((el=document.getElementById('user_list_order'))) el.value=order;
    if ((el=document.getElementById('admin_form_seek'))) el.submit();
  }
}

function AdminSortToggle(sort, order) {
    AdminSort(sort, (order==1)?2:1);
}

function AdminSelectUser(checked, id_login) {
    var i, el, pos, len;
    var login=id_login.substr(6, 255);
    if (document.getElementById) {
        if ((el=document.getElementById('users_list'))) {
            pos=el.value.indexOf(login+', ');
            if (pos==0) {len=login.length+2;}
            else {
                pos=el.value.indexOf(', '+login+', ');
                if (pos>0) {pos+=1; len=login.length+2;}
            }
            if (checked && pos==-1) {
                el.value+=login+', ';
            } else if (!checked && pos!=-1) {
                if (pos==0) el.value=el.value.substr(len, 255);
                else el.value=el.value.substr(0, pos)+el.value.substr(pos+len, 255);
            }
            $('users_list_view').set('text', el.value);
            return;
        }
    }
}

function AdminSelectAll(checked) {
    var i, el;
    if (document.getElementsByTagName) {
        var list=document.getElementsByTagName("input");
        for (i=0; i<list.length; i++) {
            el = list[i];
            if (el.id && el.id.substr(0, 6)=='login_') {
                if ((el.checked=checked)) AdminSelectUser(checked, el.id)
            }
        }
        if (!checked && (el=$('users_list'))) {
            el.value='';
            $('users_list_view').set('text', '');
        }
    }
}
</script>



<h3><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_users_list;?>
 <span>(<?php echo $_smarty_tpl->getVariable('aStat')->value['count_all'];?>
)</span></h3>

<ul class="block-nav -box">
    <li <?php if ($_smarty_tpl->getVariable('sMode')->value=='all'||$_smarty_tpl->getVariable('sMode')->value==''){?>class="active"<?php }?>><strong></strong><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
users/list/">all</a></li>
    <li <?php if ($_smarty_tpl->getVariable('sMode')->value=='admins'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
users/admins/">admins</a><em></em></li>
</ul>

<?php if ($_smarty_tpl->getVariable('aUserList')->value){?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('sTemplatePath')->value)."/paging.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<table class="admin-table">
    <tr>
        <th><input type="checkbox" id="id_0" onclick="AdminSelectAll(this.checked)" /></th>
        <th>
            <?php if ($_smarty_tpl->getVariable('sUserListSort')->value=='id'){?>
            <a href="#" onclick="AdminSortToggle('id', '<?php echo $_smarty_tpl->getVariable('sUserListOrder')->value;?>
'); return false;"><b> id </b></a>
            <?php if ($_smarty_tpl->getVariable('sUserListOrder')->value==1){?><div class="adm_sort_asc"></div><?php }else{ ?><div class="adm_sort_desc"></div><?php }?>
            <?php }else{ ?>
            <div class="adm_sort_none"></div>
            <a href="#" onclick="AdminSortToggle('id'); return false;"> id </a>
            <?php }?>
        </th>
        <th>
            <?php if ($_smarty_tpl->getVariable('sUserListSort')->value=='login'){?>
            <a href="#" onclick="AdminSortToggle('login', '<?php echo $_smarty_tpl->getVariable('sUserListOrder')->value;?>
'); return false;"><b> <?php echo $_smarty_tpl->getVariable('oLang')->value->user;?>
</b></a>
            <?php if ($_smarty_tpl->getVariable('sUserListOrder')->value==1){?><div class="adm_sort_asc"></div><?php }else{ ?><div class="adm_sort_desc"></div><?php }?>
            <?php }else{ ?>
            <div class="adm_sort_none"></div>
            <a href="#" onclick="AdminSortToggle('login'); return false;"> <?php echo $_smarty_tpl->getVariable('oLang')->value->user;?>
 </a>
            <?php }?>
        </th>
        <th>
            <?php if ($_smarty_tpl->getVariable('sUserListSort')->value=='regdate'){?>
            <a href="#" onclick="AdminSortToggle('regdate', '<?php echo $_smarty_tpl->getVariable('sUserListOrder')->value;?>
'); return false;"><b> <?php echo $_smarty_tpl->getVariable('oLang')->value->adm_users_date_reg;?>
 </b></a>
            <?php if ($_smarty_tpl->getVariable('sUserListOrder')->value==1){?><div class="adm_sort_asc"></div><?php }else{ ?><div class="adm_sort_desc"></div><?php }?>
            <?php }else{ ?>
            <div class="adm_sort_none"></div>
            <a href="#" onclick="AdminSortToggle('regdate'); return false;"> <?php echo $_smarty_tpl->getVariable('oLang')->value->adm_users_date_reg;?>
 </a>
            <?php }?>
        </th>
        <th>
            <?php if ($_smarty_tpl->getVariable('sUserListSort')->value=='reg_ip'){?>
            <a href="#" onclick="AdminSortToggle('reg_ip', '<?php echo $_smarty_tpl->getVariable('sUserListOrder')->value;?>
'); return false;"><b> <?php echo $_smarty_tpl->getVariable('oLang')->value->adm_users_ip_reg;?>
 </b></a>
            <?php if ($_smarty_tpl->getVariable('sUserListOrder')->value==1){?><div class="adm_sort_asc"></div><?php }else{ ?><div class="adm_sort_desc"></div><?php }?>
            <?php }else{ ?>
            <div class="adm_sort_none"></div>
            <a href="#" onclick="AdminSortToggle('reg_ip'); return false;"> <?php echo $_smarty_tpl->getVariable('oLang')->value->adm_users_ip_reg;?>
 </a>
            <?php }?>
        </th>
	<?php if ($_smarty_tpl->getVariable('oConfig')->value->GetValue('general.reg.activation')){?>
        <th>
            <?php if ($_smarty_tpl->getVariable('sUserListSort')->value=='activated'){?>
            <a href="#" onclick="AdminSortToggle('activated', '<?php echo $_smarty_tpl->getVariable('sUserListOrder')->value;?>
'); return false;"><b> <?php echo $_smarty_tpl->getVariable('oLang')->value->adm_users_activated;?>
 </b></a>
            <?php if ($_smarty_tpl->getVariable('sUserListOrder')->value==1){?><div class="adm_sort_asc"></div><?php }else{ ?><div class="adm_sort_desc"></div><?php }?>
            <?php }else{ ?>
            <div class="adm_sort_none"></div>
            <a href="#" onclick="AdminSortToggle('activated'); return false;"> <?php echo $_smarty_tpl->getVariable('oLang')->value->adm_users_activated;?>
 </a>
            <?php }?>
        </th>
	<?php }?>
        <th>
            <?php if ($_smarty_tpl->getVariable('sUserListSort')->value=='last_date'){?>
            <a href="#" onclick="AdminSortToggle('last_date', '<?php echo $_smarty_tpl->getVariable('sUserListOrder')->value;?>
'); return false;"><b> <?php echo $_smarty_tpl->getVariable('oLang')->value->adm_users_last_activity;?>
 </b></a>
            <?php if ($_smarty_tpl->getVariable('sUserListOrder')->value==1){?><div class="adm_sort_asc"></div><?php }else{ ?><div class="adm_sort_desc"></div><?php }?>
            <?php }else{ ?>
            <div class="adm_sort_none"></div>
            <a href="#" onclick="AdminSortToggle('last_date'); return false;"> <?php echo $_smarty_tpl->getVariable('oLang')->value->adm_users_last_activity;?>
 </a>
            <?php }?>
        </th>
        <th>
            <?php if ($_smarty_tpl->getVariable('sUserListSort')->value=='last_ip'){?>
            <a href="#" onclick="AdminSortToggle('last_ip', '<?php echo $_smarty_tpl->getVariable('sUserListOrder')->value;?>
'); return false;"><b> Last IP </b></a>
            <?php if ($_smarty_tpl->getVariable('sUserListOrder')->value==1){?><div class="adm_sort_asc"></div><?php }else{ ?><div class="adm_sort_desc"></div><?php }?>
            <?php }else{ ?>
            <div class="adm_sort_none"></div>
            <a href="#" onclick="AdminSortToggle('last_ip'); return false;"> Last IP </a>
            <?php }?>
        </th>
        <th><?php if ($_smarty_tpl->getVariable('sMode')->value!='admins'){?><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_users_banned;?>
<?php }else{ ?>&nbsp;<?php }?></th>
    </tr>

    <?php  $_smarty_tpl->tpl_vars['oUser'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aUserList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['el2']['iteration']=0;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oUser']->key => $_smarty_tpl->tpl_vars['oUser']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['el2']['iteration']++;
?>
    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['el2']['iteration']%2==0){?>
         <?php $_smarty_tpl->tpl_vars['className'] = new Smarty_variable('', null, null);?>
    <?php }else{ ?>
         <?php $_smarty_tpl->tpl_vars['className'] = new Smarty_variable('colored', null, null);?>
    <?php }?>
    <?php if ($_smarty_tpl->getVariable('oConfig')->value->GetValue('general.reg.activation')&&!$_smarty_tpl->getVariable('oUser')->value->getDateActivate()){?>
        <?php $_smarty_tpl->tpl_vars['classIcon'] = new Smarty_variable('adm_noactive', null, null);?>
    <?php }elseif($_smarty_tpl->getVariable('oUser')->value->IsBannedByLogin()){?>
        <?php $_smarty_tpl->tpl_vars['classIcon'] = new Smarty_variable('adm_banned', null, null);?>
    <?php }elseif($_smarty_tpl->getVariable('oUser')->value->isAdministrator()){?>
        <?php $_smarty_tpl->tpl_vars['classIcon'] = new Smarty_variable('adm_admin', null, null);?>
    <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars['classIcon'] = new Smarty_variable('adm_user', null, null);?>
    <?php }?>
    <tr class="<?php echo $_smarty_tpl->getVariable('className')->value;?>
">
        <td class="center">
            <?php if ($_smarty_tpl->getVariable('oUserCurrent')->value->GetId()!=$_smarty_tpl->getVariable('oUser')->value->getId()){?>
            <input type="checkbox" id="login_<?php echo $_smarty_tpl->getVariable('oUser')->value->GetLogin();?>
" onclick="AdminSelectUser(this.checked, this.id)" />
            <?php }else{ ?>
            &nbsp;
            <?php }?>
        </td>
        <td class="number"> <?php echo $_smarty_tpl->getVariable('oUser')->value->getId();?>
 &nbsp;</td>
        <td <?php if ($_smarty_tpl->getVariable('oUserCurrent')->value->GetId()==$_smarty_tpl->getVariable('oUser')->value->getId()){?>style="font-weight:bold;"<?php }?>>
            <div class="<?php echo $_smarty_tpl->getVariable('classIcon')->value;?>
" style="background-image: url(<?php echo $_smarty_tpl->getVariable('sWebPluginSkin')->value;?>
/images/adm_icons.png)"></div>
            <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
users/profile/<?php echo $_smarty_tpl->getVariable('oUser')->value->getLogin();?>
/" class="link"><?php echo $_smarty_tpl->getVariable('oUser')->value->getLogin();?>
</a> </td>
        <td class="center"><?php echo $_smarty_tpl->getVariable('oUser')->value->getDateRegister();?>
</td>
        <td class="center"><?php echo $_smarty_tpl->getVariable('oUser')->value->getIpRegister();?>
</td>
	<?php if ($_smarty_tpl->getVariable('oConfig')->value->GetValue('general.reg.activation')){?>
        <td>&nbsp;
            <?php if ($_smarty_tpl->getVariable('oUser')->value->getDateActivate()){?><?php echo $_smarty_tpl->getVariable('oUser')->value->getDateActivate();?>

            <?php }else{ ?><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
users/activate/<?php echo $_smarty_tpl->getVariable('oUser')->value->getLogin();?>
/?security_ls_key=<?php echo $_smarty_tpl->getVariable('LIVESTREET_SECURITY_KEY')->value;?>
"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_users_activate;?>
</a><?php }?>
        </td>
        <?php }?>
        <td class="center">
            <?php $_smarty_tpl->tpl_vars["oSession"] = new Smarty_variable($_smarty_tpl->getVariable('oUser')->value->getSession(), null, null);?>
            <?php if ($_smarty_tpl->getVariable('oSession')->value){?><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->getVariable('oSession')->value->getDateLast()),$_smarty_tpl);?>
<?php }?>
        </td>
        <td class="center">
            <?php if ($_smarty_tpl->getVariable('oSession')->value){?><?php echo $_smarty_tpl->getVariable('oSession')->value->getIpLast();?>
<?php }?>
        </td>
	<?php if ($_smarty_tpl->getVariable('sMode')->value=='admins'){?>
        <td class="center">
            <?php if ($_smarty_tpl->getVariable('oUser')->value->GetLogin()!='admin'){?>
            <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
users/admins/del/?user_login=<?php echo $_smarty_tpl->getVariable('oUser')->value->getLogin();?>
&security_ls_key=<?php echo $_smarty_tpl->getVariable('LIVESTREET_SECURITY_KEY')->value;?>
" class="link"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_exclude;?>
</a>&nbsp;
            <?php }?>
        </td>
	<?php }else{ ?>
        <td class="center"><?php if ($_smarty_tpl->getVariable('oUser')->value->isBanned()){?><?php if ($_smarty_tpl->getVariable('oUser')->value->getBanLine()){?><?php echo $_smarty_tpl->getVariable('oUser')->value->getBanLine();?>
<?php }else{ ?>unlim<?php }?><?php }?></td>
	<?php }?>
    </tr>
    <?php }} ?>
</table>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('sTemplatePath')->value)."/paging.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php }else{ ?>
    <?php echo $_smarty_tpl->getVariable('oLang')->value->user_empty;?>

<?php }?>

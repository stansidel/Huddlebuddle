<?php /* Smarty version Smarty-3.0.8, created on 2011-11-14 10:52:52
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default//block.admin_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19071432604ec0c8d4a6b466-48217282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '796b56a05072535c87d673da6f651801120299b0' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default//block.admin_user.tpl',
      1 => 1317821040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19071432604ec0c8d4a6b466-48217282',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/lib/external/Smarty/libs/plugins/modifier.escape.php';
if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
?><script type="text/javascript">
    var sWebPluginSkin = "<?php echo $_smarty_tpl->getVariable('sWebPluginSkin')->value;?>
";
    var sWebPluginPath = "<?php echo $_smarty_tpl->getVariable('sWebPluginPath')->value;?>
";
</script>

<script type="text/javascript">
    function AdminUserAction(n) {
        var i, el;
        if (document.getElementById) {
            for (i = 1; i <= 3; i++) {
                if (i == n) {
                    if ((el = document.getElementById('a' + i))) el.style.display = 'none';
                    if ((el = document.getElementById('t' + i))) el.style.display = '';
                    if ((el = document.getElementById('d' + i))) el.style.display = '';
                    if ((n == 2) && (el = document.getElementById('ban_days'))) el.focus();
                } else {
                    if ((el = document.getElementById('a' + i))) el.style.display = '';
                    if ((el = document.getElementById('t' + i))) el.style.display = 'none';
                    if ((el = document.getElementById('d' + i))) el.style.display = 'none';
                }
            }
        }
    }

    function AdminUserDelConfirm(msg_ask, msg_confirm) {
        var i, el;
        if (document.getElementById) {
            if ((el = document.getElementById('admin_user_del_confirm')) && !el.checked) {
                alert(msg_confirm);
                return false;
            }
            if (!confirm(msg_ask)) {
                return false;
            }
        }
        return true;
    }

</script>

<style type="text/css">
    .profile-user .voting a.adm_plus {
        background-image: url(/plugins/aceadminpanel/templates/skin/admin_default/images/adm_icons.png);
    }

    .profile-user .voting a.adm_plus:hover {
        background-image: url(/plugins/aceadminpanel/templates/skin/admin_default/images/adm_icons.png);
    }

    .profile-user .voting a.adm_minus {
        background-image: url(/plugins/aceadminpanel/templates/skin/admin_default/images/adm_icons.png);
    }

    .profile-user .voting a.adm_minus:hover {
        background-image: url(/plugins/aceadminpanel/templates/skin/admin_default/images/adm_icons.png);
    }
</style>


<?php $_smarty_tpl->tpl_vars["oSession"] = new Smarty_variable($_smarty_tpl->getVariable('oUserProfile')->value->getSession(), null, null);?>
<?php $_smarty_tpl->tpl_vars["oVote"] = new Smarty_variable($_smarty_tpl->getVariable('oUserProfile')->value->getVote(), null, null);?>

<div class="block white">
    <div class="tl">
        <div class="tr"></div>
    </div>
    <div class="cl">
        <div class="cr">

            <div class="profile-user">
                <div class="name">
                    <img src="<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getProfileAvatarPath(100);?>
" alt="avatar" class="avatar"/>

                    <div>
                        <div class="status">
                            <div class="<?php if (!$_smarty_tpl->getVariable('oUserProfile')->value->getDateActivate()){?>adm_noactive<?php }elseif($_smarty_tpl->getVariable('oUserProfile')->value->IsBannedByLogin()){?>adm_banned<?php }elseif($_smarty_tpl->getVariable('oUserProfile')->value->isAdministrator()){?>adm_admin<?php }else{ ?>adm_user<?php }?>"
                                 style="background-image: url(<?php echo $_smarty_tpl->getVariable('sWebPluginSkin')->value;?>
/images/adm_icons.png)"></div>
                        </div>
                        <p class="nickname">ID: <?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getId();?>
</p>

                        <p class="nickname"><?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getLogin();?>
</p>
                    <?php if ($_smarty_tpl->getVariable('oUserProfile')->value->getProfileName()){?>
                        <p class="realname"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oUserProfile')->value->getProfileName(),'html');?>
</p>
                    <?php }?>
                    </div>

                    <div class="strength">
                        <div class="clear" style="text-align:center;"><?php echo $_smarty_tpl->getVariable('oLang')->value->user_skill;?>
</div>
                        <div class="total" id="user_skill_<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getId();?>
"><?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getSkill();?>
</div>
                    </div>


                    <div class="voting <?php if ($_smarty_tpl->getVariable('oUserProfile')->value->getRating()>=0){?>positive<?php }else{ ?>negative<?php }?> <?php if (!$_smarty_tpl->getVariable('oUserCurrent')->value||$_smarty_tpl->getVariable('oUserProfile')->value->getId()==$_smarty_tpl->getVariable('oUserCurrent')->value->getId()){?>guest<?php }?> <?php if ($_smarty_tpl->getVariable('oVote')->value){?> voted <?php if ($_smarty_tpl->getVariable('oUserProfile')->value->getUserVoteDelta()>0){?>plus<?php }elseif($_smarty_tpl->getVariable('oUserProfile')->value->getUserVoteDelta()<0){?>minus<?php }?><?php }?>">
                        <div class="clear" style="text-align:center;"><?php echo $_smarty_tpl->getVariable('oLang')->value->user_rating;?>
</div>

                        <a href="#" class="adm_plus"
                           onclick="AdminVote(<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getId();?>
, this, <?php echo $_smarty_tpl->getVariable('nParamVoteValue')->value;?>
, 'user'); return false;"
                           style="background-image: url(<?php echo $_smarty_tpl->getVariable('sWebPluginSkin')->value;?>
/images/adm_icons.png)"
                           title="+<?php echo $_smarty_tpl->getVariable('nParamVoteValue')->value;?>
"></a>
                        <a href="#" class="plus"
                           onclick="AdminVote(<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getId();?>
, this, 1,'user'); return false;" title="+1"></a>

                        <div class="total"><?php if ($_smarty_tpl->getVariable('oUserProfile')->value->getRating()>0){?>+<?php }?><?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getRating();?>
</div>
                        <a href="#" class="minus"
                           onclick="AdminVote(<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getId();?>
, this, -1,'user'); return false;" title="-1"></a>
                        <a href="#" class="adm_minus"
                           onclick="AdminVote(<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getId();?>
, this, -<?php echo $_smarty_tpl->getVariable('nParamVoteValue')->value;?>
, 'user'); return false;"
                           style="background-image: url(<?php echo $_smarty_tpl->getVariable('sWebPluginSkin')->value;?>
/images/adm_icons.png)"
                           title="-<?php echo $_smarty_tpl->getVariable('nParamVoteValue')->value;?>
"></a>

                        <div class="text"><?php echo $_smarty_tpl->getVariable('oLang')->value->user_vote_count;?>
:</div>
                        <div class="count"><?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getCountVote();?>
</div>
                    </div>
                </div>

                <div class="vote-stat">
                    <table width="100%">
                        <tr>
                            <th colspan="3"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_user_voted;?>
 (cnt/sum)</th>
                        </tr>
                        <tr>
                            <td align="center"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_user_voted_topics;?>
</td>
                            <td align="center" style="color:#390;"><?php echo $_smarty_tpl->getVariable('aUserVoteStat')->value['cnt_topics_p'];?>

                                /<?php echo $_smarty_tpl->getVariable('aUserVoteStat')->value['sum_topics_p'];?>
</td>
                            <td align="center" style="color:#f00;"><?php echo $_smarty_tpl->getVariable('aUserVoteStat')->value['cnt_topics_m'];?>

                                /<?php echo $_smarty_tpl->getVariable('aUserVoteStat')->value['sum_topics_m'];?>
</td>
                        </tr>
                        <tr>
                            <td align="center"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_user_voted_users;?>
</td>
                            <td align="center" style="color:#390;"><?php echo $_smarty_tpl->getVariable('aUserVoteStat')->value['cnt_users_p'];?>

                                /<?php echo $_smarty_tpl->getVariable('aUserVoteStat')->value['sum_users_p'];?>
</td>
                            <td align="center" style="color:#f00;"><?php echo $_smarty_tpl->getVariable('aUserVoteStat')->value['cnt_users_m'];?>

                                /<?php echo $_smarty_tpl->getVariable('aUserVoteStat')->value['sum_users_m'];?>
</td>
                        </tr>
                        <tr>
                            <td align="center"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_user_voted_comments;?>
</td>
                            <td align="center" style="color:#390;"><?php echo $_smarty_tpl->getVariable('aUserVoteStat')->value['cnt_comments_p'];?>

                                /<?php echo $_smarty_tpl->getVariable('aUserVoteStat')->value['sum_comments_p'];?>
</td>
                            <td align="center" style="color:#f00;"><?php echo $_smarty_tpl->getVariable('aUserVoteStat')->value['cnt_comments_m'];?>

                                /<?php echo $_smarty_tpl->getVariable('aUserVoteStat')->value['sum_comments_m'];?>
</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="clear">&nbsp;</div>
        <?php if ($_smarty_tpl->getVariable('oUserProfile')->value->IsBannedByLogin()){?>
            <div style="border-top:1px solid #CCC;text-align:center;">
                <?php echo $_smarty_tpl->getVariable('oLang')->value->adm_ban_upto;?>

                : <?php if ($_smarty_tpl->getVariable('oUserProfile')->value->getBanLine()){?><?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getBanLine();?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_ban_unlim;?>
<?php }?>
            </div>
        <?php }?>
            <hr/>

            <h1><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_users_action;?>
 &darr;</h1>

            <div style="margin-left:20px;">
            <?php if ($_smarty_tpl->getVariable('oUserProfile')->value->IsBannedByLogin()){?>
                <h4><span id="a1"><a href="#" onclick="AdminUserAction(1); return false;"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_users_unban;?>
</a></span><span
                        id="t1" style="display:none;"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_users_unban;?>
</span></h4>

                <form method="post" action="<?php echo $_smarty_tpl->getVariable('sPageRef')->value;?>
">
                    <input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->getVariable('LIVESTREET_SECURITY_KEY')->value;?>
"/>

                    <div id="d1" style="margin-left:20px;display:none;border-bottom:1px solid #CCC;">
                        <br/>
                        <?php if ($_smarty_tpl->getVariable('oUserProfile')->value->getBanLine()){?>
                            <?php echo $_smarty_tpl->getVariable('oLang')->value->adm_ban_upto;?>
 <?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getBanLine();?>
 <br/>
                            <?php }else{ ?>
                            <?php echo $_smarty_tpl->getVariable('oLang')->value->adm_ban_unlim;?>
 <br/>
                        <?php }?>
                        <?php echo $_smarty_tpl->getVariable('oLang')->value->adm_ban_comment;?>
: <?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getBanComment();?>
<br/>
                        <br/>
                        <input type="hidden" name="ban_login" id="ban_login" value="<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getLogin();?>
"/>
                        <input type="hidden" name="adm_user_ref" value="<?php echo $_smarty_tpl->getVariable('sPageRef')->value;?>
"/>
                        <input type="hidden" name="adm_user_action" value="adm_unban_user"/>
                        <input type="submit" name="adm_action_submit" value="<?php echo $_smarty_tpl->getVariable('oLang')->value->adm_users_unban;?>
"/>
                        <br/><br/>
                    </div>
                </form>
                <?php }else{ ?>
                <h4><span id="a2"><a href="#"
                                     onclick="AdminUserAction(2); return false;"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_users_ban;?>
</a></span><span
                        id="t2" style="display:none;"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_users_ban;?>
</span></h4>

                <form method="post" action="<?php echo $_smarty_tpl->getVariable('sPageRef')->value;?>
">
                    <input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->getVariable('LIVESTREET_SECURITY_KEY')->value;?>
"/>

                    <div id="d2" style="margin-left:20px;display:none;border-bottom:1px solid #CCC;">
                        <br/>
                        <input type="hidden" name="ban_login" id="ban_login" value="<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getLogin();?>
"/>
                        <input type="radio" name="ban_period" value="days" checked/><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_ban_for;?>
 <input
                            type="text" name="ban_days" id="ban_days"
                            style="width:25px;padding:0;text-align:right;"/> <?php echo $_smarty_tpl->getVariable('oLang')->value->adm_ban_days;?>
<br/>
                        <input type="radio" name="ban_period" value="unlim"/><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_ban_unlim;?>
 <br/><br/>
                        <label for="ban_comment"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_ban_comment;?>
</label> <input type="text" name="ban_comment"
                                                                                          maxlength="255"
                                                                                          style="width:200px;"/><br/>
                        <br/>
                        <input type="hidden" name="adm_user_ref" value="<?php echo $_smarty_tpl->getVariable('sPageRef')->value;?>
"/>
                        <input type="hidden" name="adm_user_action" value="adm_ban_user"/>
                        <input type="submit" name="adm_action_submit" value="<?php echo $_smarty_tpl->getVariable('oLang')->value->adm_users_ban;?>
"/>
                        <br/><br/>
                    </div>
                </form>
            <?php }?>

                <h4>
                    <span id="a3">
                        <a href="#" onclick="AdminUserAction(3); return false;"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_users_del;?>
</a>
                    </span>
                    <span id="t3" style="display:none;"><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_users_del;?>
</span>
                </h4>
                <br/>

                <form method="post" action="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
users/">
                    <input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->getVariable('LIVESTREET_SECURITY_KEY')->value;?>
"/>

                    <div id="d3" style="margin-left:20px;display:none;">
                        <br/>

                        <div class="msg-warning">
                        <?php echo $_smarty_tpl->getVariable('oLang')->value->adm_users_del_warning;?>

                        </div>
                        <input type="hidden" name="adm_del_login" id="ban_login" value="<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getLogin();?>
"/>
                        <br/>
                        <input type="checkbox" name="adm_user_del_confirm"
                               id="admin_user_del_confirm"/><?php echo $_smarty_tpl->getVariable('oLang')->value->adm_users_del_confirm;?>
 <br/>
                        <br/>
                        <input type="hidden" name="adm_user_ref" value="<?php echo $_smarty_tpl->getVariable('sPageRef')->value;?>
"/>
                        <input type="hidden" name="adm_user_action" value="adm_del_user"/>
                        <input type="submit" name="adm_action_submit" value="<?php echo $_smarty_tpl->getVariable('oLang')->value->adm_users_del;?>
"
                               onclick="return AdminUserDelConfirm('<?php echo $_smarty_tpl->getVariable('oLang')->value->adm_users_del_warning;?>
', '<?php echo $_smarty_tpl->getVariable('oLang')->value->adm_users_del_confirm;?>
');"/>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="bl">
        <div class="br"></div>
    </div>
</div>

<?php /* Smarty version Smarty-3.0.8, created on 2011-11-16 09:20:13
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionProfile/whois.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20753110974ec3561de47154-19785902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e6eb06b8f1255b696a4533834a5d79f9f4b2086' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionProfile/whois.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20753110974ec3561de47154-19785902',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/lib/external/Smarty/libs/plugins/modifier.escape.php';
if (!is_callable('smarty_function_date_format')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.date_format.php';
if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.hook.php';
?><?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('menu',"profile"); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<?php $_smarty_tpl->tpl_vars["oSession"] = new Smarty_variable($_smarty_tpl->getVariable('oUserProfile')->value->getSession(), null, null);?>
<?php $_smarty_tpl->tpl_vars["oVote"] = new Smarty_variable($_smarty_tpl->getVariable('oUserProfile')->value->getVote(), null, null);?>
			
<div class="user-profile">
	<div class="strength">
		<div class="text"><?php echo $_smarty_tpl->getVariable('aLang')->value['user_skill'];?>
</div>
		<div class="total" id="user_skill_<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getId();?>
"><?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getSkill();?>
</div>
	</div>


	<div id="vote_area_user_<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getId();?>
" class="voting <?php if ($_smarty_tpl->getVariable('oUserProfile')->value->getRating()>=0){?>positive<?php }else{ ?>negative<?php }?> <?php if (!$_smarty_tpl->getVariable('oUserCurrent')->value||$_smarty_tpl->getVariable('oUserProfile')->value->getId()==$_smarty_tpl->getVariable('oUserCurrent')->value->getId()){?>guest<?php }?> <?php if ($_smarty_tpl->getVariable('oVote')->value){?> voted <?php if ($_smarty_tpl->getVariable('oVote')->value->getDirection()>0){?>plus<?php }elseif($_smarty_tpl->getVariable('oVote')->value->getDirection()<0){?>minus<?php }?><?php }?>">
		<div class="text"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_rating'];?>
</div>
		<a href="#" class="plus" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getId();?>
,this,1,'user');"></a>
		<div id="vote_total_user_<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getId();?>
" class="total" title="<?php echo $_smarty_tpl->getVariable('aLang')->value['user_vote_count'];?>
: <?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getCountVote();?>
"><?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getRating();?>
</div>
		<a href="#" class="minus" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getId();?>
,this,-1,'user');"></a>
		<div class="text"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_vote_count'];?>
: <span><?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getCountVote();?>
</span></div>
	</div>


	<img src="<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getProfileAvatarPath(100);?>
" alt="avatar" class="avatar" />
	<h3><?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getLogin();?>
</h3>
	<?php if ($_smarty_tpl->getVariable('oUserProfile')->value->getProfileName()){?>
		<p class="realname"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oUserProfile')->value->getProfileName(),'html');?>
	</p>				
	<?php }?>										
</div>


<?php if ($_smarty_tpl->getVariable('oUserProfile')->value->getProfileSex()!='other'||$_smarty_tpl->getVariable('oUserProfile')->value->getProfileBirthday()||($_smarty_tpl->getVariable('oUserProfile')->value->getProfileCountry()||$_smarty_tpl->getVariable('oUserProfile')->value->getProfileRegion()||$_smarty_tpl->getVariable('oUserProfile')->value->getProfileCity())||$_smarty_tpl->getVariable('oUserProfile')->value->getProfileAbout()||$_smarty_tpl->getVariable('oUserProfile')->value->getProfileSite()||count($_smarty_tpl->getVariable('aUserFields')->value)){?>
	<h2 class="user-profile-header"><?php echo $_smarty_tpl->getVariable('aLang')->value['profile_privat'];?>
</h2>
	
	<table class="user-profile-table">		
		<?php if ($_smarty_tpl->getVariable('oUserProfile')->value->getProfileSex()!='other'){?>
			<tr>
				<td class="var"><?php echo $_smarty_tpl->getVariable('aLang')->value['profile_sex'];?>
:</td>
				<td>
					<?php if ($_smarty_tpl->getVariable('oUserProfile')->value->getProfileSex()=='man'){?>
						<?php echo $_smarty_tpl->getVariable('aLang')->value['profile_sex_man'];?>

					<?php }else{ ?>
						<?php echo $_smarty_tpl->getVariable('aLang')->value['profile_sex_woman'];?>

					<?php }?>
				</td>
			</tr>
		<?php }?>
			
		<?php if ($_smarty_tpl->getVariable('oUserProfile')->value->getProfileBirthday()){?>
			<tr>
				<td class="var"><?php echo $_smarty_tpl->getVariable('aLang')->value['profile_birthday'];?>
:</td>
				<td><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->getVariable('oUserProfile')->value->getProfileBirthday(),'format'=>"j F Y"),$_smarty_tpl);?>
</td>
			</tr>
		<?php }?>
		
		<?php if (($_smarty_tpl->getVariable('oUserProfile')->value->getProfileCountry()||$_smarty_tpl->getVariable('oUserProfile')->value->getProfileRegion()||$_smarty_tpl->getVariable('oUserProfile')->value->getProfileCity())){?>
			<tr>
				<td class="var"><?php echo $_smarty_tpl->getVariable('aLang')->value['profile_place'];?>
:</td>
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
		<?php }?>
							
		<?php if ($_smarty_tpl->getVariable('oUserProfile')->value->getProfileAbout()){?>					
			<tr>
				<td class="var"><?php echo $_smarty_tpl->getVariable('aLang')->value['profile_about'];?>
:</td>
				<td><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oUserProfile')->value->getProfileAbout(),'html');?>
</td>
			</tr>	
		<?php }?>
		
		<?php if ($_smarty_tpl->getVariable('oUserProfile')->value->getProfileSite()){?>
			<tr>
				<td class="var"><?php echo $_smarty_tpl->getVariable('aLang')->value['profile_site'];?>
:</td>
				<td>
					<a href="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oUserProfile')->value->getProfileSite(true),'html');?>
" rel="nofollow">
						<?php if ($_smarty_tpl->getVariable('oUserProfile')->value->getProfileSiteName()){?>
							<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oUserProfile')->value->getProfileSiteName(),'html');?>

						<?php }else{ ?>
							<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oUserProfile')->value->getProfileSite(),'html');?>

						<?php }?>
					</a>
				</td>
			</tr>
		<?php }?>
                <?php if (count($_smarty_tpl->getVariable('aUserFields')->value)){?>
                    <?php  $_smarty_tpl->tpl_vars['oField'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aUserFields')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oField']->key => $_smarty_tpl->tpl_vars['oField']->value){
?>
                        <tr>
                            <td class="var"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oField')->value->getTitle(),'html');?>
:</td>
                            <td><?php echo $_smarty_tpl->getVariable('oField')->value->getValue(true,true);?>
</td>
                        </tr>
                    <?php }} ?>
                <?php }?>
		<?php echo smarty_function_hook(array('run'=>'profile_whois_privat_item','oUserProfile'=>$_smarty_tpl->getVariable('oUserProfile')->value),$_smarty_tpl);?>

	</table>
<?php }?>

<?php echo smarty_function_hook(array('run'=>'profile_whois_item','oUserProfile'=>$_smarty_tpl->getVariable('oUserProfile')->value),$_smarty_tpl);?>

<br />
<br />

<h2 class="user-profile-header"><?php echo $_smarty_tpl->getVariable('aLang')->value['profile_activity'];?>
</h2>
<table class="user-profile-table">
	<?php if ($_smarty_tpl->getVariable('aUsersFriend')->value){?>
		<tr>
			<td class="var"><?php echo $_smarty_tpl->getVariable('aLang')->value['profile_friends'];?>
:</td>
			<td>
				<?php  $_smarty_tpl->tpl_vars['oUser'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aUsersFriend')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oUser']->key => $_smarty_tpl->tpl_vars['oUser']->value){
?>        						
					<a href="<?php echo $_smarty_tpl->getVariable('oUser')->value->getUserWebPath();?>
" class="user"><?php echo $_smarty_tpl->getVariable('oUser')->value->getLogin();?>
</a>
				<?php }} ?>
			</td>
		</tr>
	<?php }?>
	
	<?php if ($_smarty_tpl->getVariable('oConfig')->value->GetValue('general.reg.invite')&&$_smarty_tpl->getVariable('oUserInviteFrom')->value){?>
		<tr>
			<td class="var"><?php echo $_smarty_tpl->getVariable('aLang')->value['profile_invite_from'];?>
:</td>
			<td>							       						
				<a href="<?php echo $_smarty_tpl->getVariable('oUserInviteFrom')->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->getVariable('oUserInviteFrom')->value->getLogin();?>
</a>&nbsp;         					
			</td>
		</tr>
	<?php }?>
	
	<?php if ($_smarty_tpl->getVariable('oConfig')->value->GetValue('general.reg.invite')&&$_smarty_tpl->getVariable('aUsersInvite')->value){?>
		<tr>
			<td class="var"><?php echo $_smarty_tpl->getVariable('aLang')->value['profile_invite_to'];?>
:</td>
			<td>
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
	
	<?php if ($_smarty_tpl->getVariable('aBlogsOwner')->value){?>
		<tr>
			<td class="var"><?php echo $_smarty_tpl->getVariable('aLang')->value['profile_blogs_self'];?>
:</td>
			<td>							
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
			</td>
		</tr>
	<?php }?>
	
	<?php if ($_smarty_tpl->getVariable('aBlogAdministrators')->value){?>
		<tr>
			<td class="var"><?php echo $_smarty_tpl->getVariable('aLang')->value['profile_blogs_administration'];?>
:</td>
			<td>
				<?php  $_smarty_tpl->tpl_vars['oBlogUser'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aBlogAdministrators')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['oBlogUser']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['oBlogUser']->iteration=0;
if ($_smarty_tpl->tpl_vars['oBlogUser']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oBlogUser']->key => $_smarty_tpl->tpl_vars['oBlogUser']->value){
 $_smarty_tpl->tpl_vars['oBlogUser']->iteration++;
 $_smarty_tpl->tpl_vars['oBlogUser']->last = $_smarty_tpl->tpl_vars['oBlogUser']->iteration === $_smarty_tpl->tpl_vars['oBlogUser']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blog_user']['last'] = $_smarty_tpl->tpl_vars['oBlogUser']->last;
?>
					<?php $_smarty_tpl->tpl_vars["oBlog"] = new Smarty_variable($_smarty_tpl->getVariable('oBlogUser')->value->getBlog(), null, null);?>
					<a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->getVariable('oBlog')->value->getUrl();?>
/"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oBlog')->value->getTitle(),'html');?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['blog_user']['last']){?>, <?php }?>
				<?php }} ?>
			</td>
		</tr>
	<?php }?>
	
	<?php if ($_smarty_tpl->getVariable('aBlogModerators')->value){?>
		<tr>
			<td class="var"><?php echo $_smarty_tpl->getVariable('aLang')->value['profile_blogs_moderation'];?>
:</td>
			<td>
				<?php  $_smarty_tpl->tpl_vars['oBlogUser'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aBlogModerators')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['oBlogUser']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['oBlogUser']->iteration=0;
if ($_smarty_tpl->tpl_vars['oBlogUser']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oBlogUser']->key => $_smarty_tpl->tpl_vars['oBlogUser']->value){
 $_smarty_tpl->tpl_vars['oBlogUser']->iteration++;
 $_smarty_tpl->tpl_vars['oBlogUser']->last = $_smarty_tpl->tpl_vars['oBlogUser']->iteration === $_smarty_tpl->tpl_vars['oBlogUser']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blog_user']['last'] = $_smarty_tpl->tpl_vars['oBlogUser']->last;
?>
					<?php $_smarty_tpl->tpl_vars["oBlog"] = new Smarty_variable($_smarty_tpl->getVariable('oBlogUser')->value->getBlog(), null, null);?>
					<a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->getVariable('oBlog')->value->getUrl();?>
/"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oBlog')->value->getTitle(),'html');?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['blog_user']['last']){?>, <?php }?>
				<?php }} ?>
			</td>
		</tr>
	<?php }?>
	
	<?php if ($_smarty_tpl->getVariable('aBlogUsers')->value){?>
		<tr>
			<td class="var"><?php echo $_smarty_tpl->getVariable('aLang')->value['profile_blogs_join'];?>
:</td>
			<td>
				<?php  $_smarty_tpl->tpl_vars['oBlogUser'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aBlogUsers')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['oBlogUser']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['oBlogUser']->iteration=0;
if ($_smarty_tpl->tpl_vars['oBlogUser']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oBlogUser']->key => $_smarty_tpl->tpl_vars['oBlogUser']->value){
 $_smarty_tpl->tpl_vars['oBlogUser']->iteration++;
 $_smarty_tpl->tpl_vars['oBlogUser']->last = $_smarty_tpl->tpl_vars['oBlogUser']->iteration === $_smarty_tpl->tpl_vars['oBlogUser']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blog_user']['last'] = $_smarty_tpl->tpl_vars['oBlogUser']->last;
?>
					<?php $_smarty_tpl->tpl_vars["oBlog"] = new Smarty_variable($_smarty_tpl->getVariable('oBlogUser')->value->getBlog(), null, null);?>
					<a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->getVariable('oBlog')->value->getUrl();?>
/"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oBlog')->value->getTitle(),'html');?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['blog_user']['last']){?>, <?php }?>
				<?php }} ?>
			</td>
		</tr>
	<?php }?>

	<?php echo smarty_function_hook(array('run'=>'profile_whois_activity_item','oUserProfile'=>$_smarty_tpl->getVariable('oUserProfile')->value),$_smarty_tpl);?>

	
	<tr>
		<td class="var"><?php echo $_smarty_tpl->getVariable('aLang')->value['profile_date_registration'];?>
:</td>
		<td><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->getVariable('oUserProfile')->value->getDateRegister()),$_smarty_tpl);?>
</td>
	</tr>	
	
	<?php if ($_smarty_tpl->getVariable('oSession')->value){?>				
		<tr>
			<td class="var"><?php echo $_smarty_tpl->getVariable('aLang')->value['profile_date_last'];?>
:</td>
			<td><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->getVariable('oSession')->value->getDateLast()),$_smarty_tpl);?>
</td>
		</tr>
	<?php }?>
</table>


<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
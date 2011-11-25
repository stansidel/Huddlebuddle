<?php /* Smarty version Smarty-3.0.8, created on 2011-11-15 06:36:39
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionBlog/blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13125611274ec1de47aa6c73-17848326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1075a5efd8d013bfddfa491a1625a9167febbf2f' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionBlog/blog.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13125611274ec1de47aa6c73-17848326',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_modifier_escape')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/lib/external/Smarty/libs/plugins/modifier.escape.php';
?><?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('menu','blog'); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_smarty_tpl->tpl_vars["oUserOwner"] = new Smarty_variable($_smarty_tpl->getVariable('oBlog')->value->getOwner(), null, null);?>
<?php $_smarty_tpl->tpl_vars["oVote"] = new Smarty_variable($_smarty_tpl->getVariable('oBlog')->value->getVote(), null, null);?>



<?php if ($_smarty_tpl->getVariable('oUserCurrent')->value&&$_smarty_tpl->getVariable('oUserCurrent')->value->isAdministrator()){?>
	<form id="blog_delete_form" class="blog-delete-form jqmWindow" action="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
delete/<?php echo $_smarty_tpl->getVariable('oBlog')->value->getId();?>
/" method="POST">
		<a href="#" class="close jqmClose"></a>
	
		<p><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_admin_delete_move'];?>
</p>
		<p><select name="topic_move_to">
			<option value="-1"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_delete_clear'];?>
</option>
			<?php if ($_smarty_tpl->getVariable('aBlogs')->value){?>
				<optgroup label="<?php echo $_smarty_tpl->getVariable('aLang')->value['blogs'];?>
">
					<?php  $_smarty_tpl->tpl_vars['oBlogDelete'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aBlogs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oBlogDelete']->key => $_smarty_tpl->tpl_vars['oBlogDelete']->value){
?>
						<option value="<?php echo $_smarty_tpl->getVariable('oBlogDelete')->value->getId();?>
"><?php echo $_smarty_tpl->getVariable('oBlogDelete')->value->getTitle();?>
</option>
					<?php }} ?>
				</optgroup>
			<?php }?>
		</select></p>
		
		<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('LIVESTREET_SECURITY_KEY')->value;?>
" name="security_ls_key" />
		<input type="submit" value="<?php echo $_smarty_tpl->getVariable('aLang')->value['blog_delete'];?>
" />
	</form>
<?php }?>



<div class="blog">
	<div id="vote_area_blog_<?php echo $_smarty_tpl->getVariable('oBlog')->value->getId();?>
" class="voting <?php if ($_smarty_tpl->getVariable('oBlog')->value->getRating()>=0){?>positive<?php }else{ ?>negative<?php }?> <?php if (!$_smarty_tpl->getVariable('oUserCurrent')->value||$_smarty_tpl->getVariable('oBlog')->value->getOwnerId()==$_smarty_tpl->getVariable('oUserCurrent')->value->getId()){?>guest<?php }?> <?php if ($_smarty_tpl->getVariable('oVote')->value){?> voted <?php if ($_smarty_tpl->getVariable('oVote')->value->getDirection()>0){?>plus<?php }elseif($_smarty_tpl->getVariable('oVote')->value->getDirection()<0){?>minus<?php }?><?php }?>">
		<div class="text"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_rating'];?>
</div>
		<a href="#" class="plus" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->getVariable('oBlog')->value->getId();?>
,this,1,'blog');"></a>
		<div id="vote_total_blog_<?php echo $_smarty_tpl->getVariable('oBlog')->value->getId();?>
" class="total" title="<?php echo $_smarty_tpl->getVariable('aLang')->value['blog_vote_count'];?>
: <?php echo $_smarty_tpl->getVariable('oBlog')->value->getCountVote();?>
"><?php echo $_smarty_tpl->getVariable('oBlog')->value->getRating();?>
</div>
		<a href="#" class="minus" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->getVariable('oBlog')->value->getId();?>
,this,-1,'blog');"></a>
		<div class="text"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_vote_count'];?>
: <span><?php echo $_smarty_tpl->getVariable('oBlog')->value->getCountVote();?>
</span></div>
	</div>
	
	
	<div class="blog-header">
		<img src="<?php echo $_smarty_tpl->getVariable('oBlog')->value->getAvatarPath(24);?>
" alt="avatar" class="avatar" />
		<h2 id="show_blog_info"><a href="#"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oBlog')->value->getTitle(),'html');?>
</a></h2>
	</div>
	
	
	<ul class="actions">
		<li><a href="<?php echo smarty_function_router(array('page'=>'rss'),$_smarty_tpl);?>
blog/<?php echo $_smarty_tpl->getVariable('oBlog')->value->getUrl();?>
/" class="rss"></a></li>
		<?php if ($_smarty_tpl->getVariable('oUserCurrent')->value&&$_smarty_tpl->getVariable('oUserCurrent')->value->getId()!=$_smarty_tpl->getVariable('oBlog')->value->getOwnerId()){?>
			<li><div onclick="ls.blog.toggleJoin(this,<?php echo $_smarty_tpl->getVariable('oBlog')->value->getId();?>
); return false;" class="join <?php if ($_smarty_tpl->getVariable('oBlog')->value->getUserIsJoin()){?>active<?php }?>"></div></li>
		<?php }?>
		<?php if ($_smarty_tpl->getVariable('oUserCurrent')->value&&($_smarty_tpl->getVariable('oUserCurrent')->value->getId()==$_smarty_tpl->getVariable('oBlog')->value->getOwnerId()||$_smarty_tpl->getVariable('oUserCurrent')->value->isAdministrator()||$_smarty_tpl->getVariable('oBlog')->value->getUserIsAdministrator())){?>
			<li>
				<a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
edit/<?php echo $_smarty_tpl->getVariable('oBlog')->value->getId();?>
/" title="<?php echo $_smarty_tpl->getVariable('aLang')->value['blog_edit'];?>
" class="edit"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_edit'];?>
</a></li>
				<?php if ($_smarty_tpl->getVariable('oUserCurrent')->value->isAdministrator()){?>
					<li><a href="#" title="<?php echo $_smarty_tpl->getVariable('aLang')->value['blog_delete'];?>
" id="blog_delete_show" class="delete"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_delete'];?>
</a>
				<?php }else{ ?>
					<a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
delete/<?php echo $_smarty_tpl->getVariable('oBlog')->value->getId();?>
/?security_ls_key=<?php echo $_smarty_tpl->getVariable('LIVESTREET_SECURITY_KEY')->value;?>
" title="<?php echo $_smarty_tpl->getVariable('aLang')->value['blog_delete'];?>
" onclick="return confirm('<?php echo $_smarty_tpl->getVariable('aLang')->value['blog_admin_delete_confirm'];?>
');" ><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_delete'];?>
</a>
				<?php }?>
			</li>
		<?php }?>
	</ul>
	
	
	<div class="blog-info" id="blog_info">
		<h3><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_about'];?>
</h3>
		<p><?php echo nl2br($_smarty_tpl->getVariable('oBlog')->value->getDescription());?>
</p>			
		
		
		<div class="blog-wrapper">
			<div class="blog-admins">
				<h3><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_user_administrators'];?>
 (<?php echo $_smarty_tpl->getVariable('iCountBlogAdministrators')->value;?>
)</h3>

				<ul class="user-list">
					<li>
						<a href="<?php echo $_smarty_tpl->getVariable('oUserOwner')->value->getUserWebPath();?>
"><img src="<?php echo $_smarty_tpl->getVariable('oUserOwner')->value->getProfileAvatarPath(48);?>
" alt="avatar" title="<?php echo $_smarty_tpl->getVariable('oUserOwner')->value->getLogin();?>
"/></a>
						<a href="<?php echo $_smarty_tpl->getVariable('oUserOwner')->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->getVariable('oUserOwner')->value->getLogin();?>
</a>
					</li>
					<?php if ($_smarty_tpl->getVariable('aBlogAdministrators')->value){?>			
						<?php  $_smarty_tpl->tpl_vars['oBlogUser'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aBlogAdministrators')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oBlogUser']->key => $_smarty_tpl->tpl_vars['oBlogUser']->value){
?>
							<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->getVariable('oBlogUser')->value->getUser(), null, null);?>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('oUser')->value->getUserWebPath();?>
"><img src="<?php echo $_smarty_tpl->getVariable('oUser')->value->getProfileAvatarPath(48);?>
" alt=""  title="<?php echo $_smarty_tpl->getVariable('oUser')->value->getLogin();?>
"/></a>
								<a href="<?php echo $_smarty_tpl->getVariable('oUser')->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->getVariable('oUser')->value->getLogin();?>
</a>
							</li>
						<?php }} ?>	
					<?php }?>	
				</ul>
			</div>
			
			<div class="blog-mods">
				<h3><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_user_moderators'];?>
 (<?php echo $_smarty_tpl->getVariable('iCountBlogModerators')->value;?>
)</h3>
				<?php if ($_smarty_tpl->getVariable('aBlogModerators')->value){?>
					<ul class="user-list">
						<?php  $_smarty_tpl->tpl_vars['oBlogUser'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aBlogModerators')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oBlogUser']->key => $_smarty_tpl->tpl_vars['oBlogUser']->value){
?>  
						<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->getVariable('oBlogUser')->value->getUser(), null, null);?>								
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('oUser')->value->getUserWebPath();?>
"><img src="<?php echo $_smarty_tpl->getVariable('oUser')->value->getProfileAvatarPath(48);?>
" alt=""  title="<?php echo $_smarty_tpl->getVariable('oUser')->value->getLogin();?>
"/></a>
								<a href="<?php echo $_smarty_tpl->getVariable('oUser')->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->getVariable('oUser')->value->getLogin();?>
</a>
							</li>
						<?php }} ?>	
					</ul>					
				<?php }else{ ?>
					<?php echo $_smarty_tpl->getVariable('aLang')->value['blog_user_moderators_empty'];?>

				<?php }?>
			</div>
		</div>

		
		
		
		<h3><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_user_readers'];?>
 (<?php echo $_smarty_tpl->getVariable('iCountBlogUsers')->value;?>
)</h3>
		<?php if ($_smarty_tpl->getVariable('aBlogUsers')->value){?>
			<?php  $_smarty_tpl->tpl_vars['oBlogUser'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aBlogUsers')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oBlogUser']->key => $_smarty_tpl->tpl_vars['oBlogUser']->value){
?>
			<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->getVariable('oBlogUser')->value->getUser(), null, null);?>
				<a href="<?php echo $_smarty_tpl->getVariable('oUser')->value->getUserWebPath();?>
" class="user"><?php echo $_smarty_tpl->getVariable('oUser')->value->getLogin();?>
</a>
			<?php }} ?>
			<?php if (count($_smarty_tpl->getVariable('aBlogUsers')->value)<$_smarty_tpl->getVariable('iCountBlogUsers')->value){?>
				<br /><br /><a href="<?php echo $_smarty_tpl->getVariable('oBlog')->value->getUrlFull();?>
users/"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_user_readers_all'];?>
</a>
			<?php }?>
		<?php }else{ ?>
			<?php echo $_smarty_tpl->getVariable('aLang')->value['blog_user_readers_empty'];?>

		<?php }?>		
	</div>
</div>


<?php if ($_smarty_tpl->getVariable('bCloseBlog')->value){?>
	<div class="padding"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_close_show'];?>
</div>
<?php }else{ ?>
	<?php $_template = new Smarty_Internal_Template('topic_list.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php }?>


<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
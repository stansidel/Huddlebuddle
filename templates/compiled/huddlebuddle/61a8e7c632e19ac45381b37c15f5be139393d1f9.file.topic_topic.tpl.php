<?php /* Smarty version Smarty-3.0.8, created on 2011-11-14 12:38:49
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/topic_topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3152561794ec0e1a927cfb5-78412361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61a8e7c632e19ac45381b37c15f5be139393d1f9' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/topic_topic.tpl',
      1 => 1320563648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3152561794ec0e1a927cfb5-78412361',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cfg')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_modifier_escape')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/lib/external/Smarty/libs/plugins/modifier.escape.php';
if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_date_format')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.date_format.php';
if (!is_callable('smarty_function_hook')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.hook.php';
?><?php $_smarty_tpl->tpl_vars["oBlog"] = new Smarty_variable($_smarty_tpl->getVariable('oTopic')->value->getBlog(), null, null);?>
<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->getVariable('oTopic')->value->getUser(), null, null);?>
<?php $_smarty_tpl->tpl_vars["oVote"] = new Smarty_variable($_smarty_tpl->getVariable('oTopic')->value->getVote(), null, null);?>

<div class="topic">
	<h1 class="title">
		<?php if ($_smarty_tpl->getVariable('oTopic')->value->getPublish()==0){?>   
			<img src="<?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/draft.png" title="<?php echo $_smarty_tpl->getVariable('aLang')->value['topic_unpublish'];?>
" alt="<?php echo $_smarty_tpl->getVariable('aLang')->value['topic_unpublish'];?>
" />
		<?php }?>
		<?php if ($_smarty_tpl->getVariable('bTopicList')->value){?>
			<a href="<?php echo $_smarty_tpl->getVariable('oTopic')->value->getUrl();?>
" class="title-topic"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oTopic')->value->getTitle(),'html');?>
</a>
		<?php }else{ ?>
			<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oTopic')->value->getTitle(),'html');?>

		<?php }?>
	</h1>
	
	<a href="#" onclick="return ls.favourite.toggle(<?php echo $_smarty_tpl->getVariable('oTopic')->value->getId();?>
,this,'topic');" class="favourite <?php if ($_smarty_tpl->getVariable('oUserCurrent')->value&&$_smarty_tpl->getVariable('oTopic')->value->getIsFavourite()){?>active<?php }?>"></a>

	
	
	<div class="info-top">
		<a href="<?php echo $_smarty_tpl->getVariable('oBlog')->value->getUrlFull();?>
" class="title-blog"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oBlog')->value->getTitle(),'html');?>
</a>
	
		<span class="actions">                                                                   
                            <?php if ($_smarty_tpl->getVariable('oUserCurrent')->value&&($_smarty_tpl->getVariable('oUserCurrent')->value->getId()==$_smarty_tpl->getVariable('oTopic')->value->getUserId()||$_smarty_tpl->getVariable('oUserCurrent')->value->isAdministrator()||$_smarty_tpl->getVariable('oBlog')->value->getUserIsAdministrator()||$_smarty_tpl->getVariable('oBlog')->value->getUserIsModerator()||$_smarty_tpl->getVariable('oBlog')->value->getOwnerId()==$_smarty_tpl->getVariable('oUserCurrent')->value->getId())){?>
				<a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->getVariable('oTopic')->value->getType();?>
/edit/<?php echo $_smarty_tpl->getVariable('oTopic')->value->getId();?>
/" title="<?php echo $_smarty_tpl->getVariable('aLang')->value['topic_edit'];?>
" class="edit"><?php echo $_smarty_tpl->getVariable('aLang')->value['topic_edit'];?>
</a>
			<?php }?>
			<?php if ($_smarty_tpl->getVariable('oUserCurrent')->value&&($_smarty_tpl->getVariable('oUserCurrent')->value->isAdministrator()||$_smarty_tpl->getVariable('oBlog')->value->getUserIsAdministrator()||$_smarty_tpl->getVariable('oBlog')->value->getOwnerId()==$_smarty_tpl->getVariable('oUserCurrent')->value->getId())){?>
				<a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
delete/<?php echo $_smarty_tpl->getVariable('oTopic')->value->getId();?>
/?security_ls_key=<?php echo $_smarty_tpl->getVariable('LIVESTREET_SECURITY_KEY')->value;?>
" title="<?php echo $_smarty_tpl->getVariable('aLang')->value['topic_delete'];?>
" onclick="return confirm('<?php echo $_smarty_tpl->getVariable('aLang')->value['topic_delete_confirm'];?>
');" class="delete"><?php echo $_smarty_tpl->getVariable('aLang')->value['topic_delete'];?>
</a>
			<?php }?>
		</span>
	</div>


	<div class="content">
		<?php if ($_smarty_tpl->getVariable('bTopicList')->value){?>
			<?php echo $_smarty_tpl->getVariable('oTopic')->value->getTextShort();?>

			<?php if ($_smarty_tpl->getVariable('oTopic')->value->getTextShort()!=$_smarty_tpl->getVariable('oTopic')->value->getText()){?>
				<br><br><a href="<?php echo $_smarty_tpl->getVariable('oTopic')->value->getUrl();?>
#cut" title="<?php echo $_smarty_tpl->getVariable('aLang')->value['topic_read_more'];?>
">
				<?php if ($_smarty_tpl->getVariable('oTopic')->value->getCutText()){?>
					<?php echo $_smarty_tpl->getVariable('oTopic')->value->getCutText();?>

				<?php }else{ ?>
					<?php echo $_smarty_tpl->getVariable('aLang')->value['topic_read_more'];?>

				<?php }?>                           
				</a>
			<?php }?>
		<?php }else{ ?>
			 <?php echo $_smarty_tpl->getVariable('oTopic')->value->getText();?>

		<?php }?>
	</div> 



	<ul class="tags">
		<?php  $_smarty_tpl->tpl_vars['sTag'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('oTopic')->value->getTagsArray(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['sTag']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['sTag']->iteration=0;
if ($_smarty_tpl->tpl_vars['sTag']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['sTag']->key => $_smarty_tpl->tpl_vars['sTag']->value){
 $_smarty_tpl->tpl_vars['sTag']->iteration++;
 $_smarty_tpl->tpl_vars['sTag']->last = $_smarty_tpl->tpl_vars['sTag']->iteration === $_smarty_tpl->tpl_vars['sTag']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tags_list']['last'] = $_smarty_tpl->tpl_vars['sTag']->last;
?>
			<li><a href="<?php echo smarty_function_router(array('page'=>'tag'),$_smarty_tpl);?>
<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sTag']->value,'url');?>
/"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sTag']->value,'html');?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['tags_list']['last']){?>, <?php }?></li>
		<?php }} ?>                                                             
	</ul>



	<ul class="info">
		<li id="vote_area_topic_<?php echo $_smarty_tpl->getVariable('oTopic')->value->getId();?>
" class="voting <?php if ($_smarty_tpl->getVariable('oVote')->value||($_smarty_tpl->getVariable('oUserCurrent')->value&&$_smarty_tpl->getVariable('oTopic')->value->getUserId()==$_smarty_tpl->getVariable('oUserCurrent')->value->getId())||strtotime($_smarty_tpl->getVariable('oTopic')->value->getDateAdd())<time()-$_smarty_tpl->getVariable('oConfig')->value->GetValue('acl.vote.topic.limit_time')){?><?php if ($_smarty_tpl->getVariable('oTopic')->value->getRating()>0){?>positive<?php }elseif($_smarty_tpl->getVariable('oTopic')->value->getRating()<0){?>negative<?php }?><?php }?> <?php if (!$_smarty_tpl->getVariable('oUserCurrent')->value||$_smarty_tpl->getVariable('oTopic')->value->getUserId()==$_smarty_tpl->getVariable('oUserCurrent')->value->getId()||strtotime($_smarty_tpl->getVariable('oTopic')->value->getDateAdd())<time()-$_smarty_tpl->getVariable('oConfig')->value->GetValue('acl.vote.topic.limit_time')){?>guest<?php }?><?php if ($_smarty_tpl->getVariable('oVote')->value){?> voted <?php if ($_smarty_tpl->getVariable('oVote')->value->getDirection()>0){?>plus<?php }elseif($_smarty_tpl->getVariable('oVote')->value->getDirection()<0){?>minus<?php }?><?php }?>">
			<a href="#" class="plus" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->getVariable('oTopic')->value->getId();?>
,this,1,'topic');"></a>
			<span id="vote_total_topic_<?php echo $_smarty_tpl->getVariable('oTopic')->value->getId();?>
" class="total" title="<?php echo $_smarty_tpl->getVariable('aLang')->value['topic_vote_count'];?>
: <?php echo $_smarty_tpl->getVariable('oTopic')->value->getCountVote();?>
"><?php if ($_smarty_tpl->getVariable('oVote')->value||($_smarty_tpl->getVariable('oUserCurrent')->value&&$_smarty_tpl->getVariable('oTopic')->value->getUserId()==$_smarty_tpl->getVariable('oUserCurrent')->value->getId())||strtotime($_smarty_tpl->getVariable('oTopic')->value->getDateAdd())<time()-$_smarty_tpl->getVariable('oConfig')->value->GetValue('acl.vote.topic.limit_time')){?> <?php echo $_smarty_tpl->getVariable('oTopic')->value->getRating();?>
 <?php }else{ ?> <a href="#" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->getVariable('oTopic')->value->getId();?>
,this,0,'topic');">?</a> <?php }?></span>
			<a href="#" class="minus" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->getVariable('oTopic')->value->getId();?>
,this,-1,'topic');"></a>
		</li>
		<li class="date"><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->getVariable('oTopic')->value->getDateAdd()),$_smarty_tpl);?>
</li>
		<?php if ($_smarty_tpl->getVariable('oTopic')->value->getSource()){?><li class="source"><a href="<?php echo $_smarty_tpl->getVariable('oTopic')->value->getSource();?>
"><?php if ($_smarty_tpl->getVariable('oTopic')->value->getSource()){?><?php echo $_smarty_tpl->getVariable('oTopic')->value->getSourceAuthor();?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('oTopic')->value->getSource();?>
<?php }?></a></li><?php }?>
		<li class="username"><?php $_template = new Smarty_Internal_Template("topic_author.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?></li>
		<?php if ($_smarty_tpl->getVariable('bTopicList')->value){?>
			<li class="comments-link">
				<?php if ($_smarty_tpl->getVariable('oTopic')->value->getCountComment()>0){?>
					<a href="<?php echo $_smarty_tpl->getVariable('oTopic')->value->getUrl();?>
#comments" title="<?php echo $_smarty_tpl->getVariable('aLang')->value['topic_comment_read'];?>
"><?php echo $_smarty_tpl->getVariable('oTopic')->value->getCountComment();?>
 <span><?php if ($_smarty_tpl->getVariable('oTopic')->value->getCountCommentNew()){?>+<?php echo $_smarty_tpl->getVariable('oTopic')->value->getCountCommentNew();?>
<?php }?></span></a>
				<?php }else{ ?>
					<a href="<?php echo $_smarty_tpl->getVariable('oTopic')->value->getUrl();?>
#comments" title="<?php echo $_smarty_tpl->getVariable('aLang')->value['topic_comment_add'];?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['topic_comment_add'];?>
</a>
				<?php }?>
			</li>
		<?php }?>
		<?php echo smarty_function_hook(array('run'=>'topic_show_info','topic'=>$_smarty_tpl->getVariable('oTopic')->value),$_smarty_tpl);?>

	</ul>
	<?php if (!$_smarty_tpl->getVariable('bTopicList')->value){?>
		<?php echo smarty_function_hook(array('run'=>'topic_show_end','topic'=>$_smarty_tpl->getVariable('oTopic')->value),$_smarty_tpl);?>

	<?php }?>
</div>
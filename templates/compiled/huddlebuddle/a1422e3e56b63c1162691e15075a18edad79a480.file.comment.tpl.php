<?php /* Smarty version Smarty-3.0.8, created on 2011-11-15 16:43:57
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/comment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9833261184ec26c9d79b389-69751708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1422e3e56b63c1162691e15075a18edad79a480' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/comment.tpl',
      1 => 1319444580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9833261184ec26c9d79b389-69751708',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_date_format')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.date_format.php';
if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.hook.php';
?><?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->getVariable('oComment')->value->getUser(), null, null);?>
<?php $_smarty_tpl->tpl_vars["oVote"] = new Smarty_variable($_smarty_tpl->getVariable('oComment')->value->getVote(), null, null);?>

<div id="comment_id_<?php echo $_smarty_tpl->getVariable('oComment')->value->getId();?>
" class="comment <?php if (!$_smarty_tpl->getVariable('oUserCurrent')->value||($_smarty_tpl->getVariable('oUserCurrent')->value&&!$_smarty_tpl->getVariable('oUserCurrent')->value->isAdministrator())){?>not-admin<?php }?> <?php if ($_smarty_tpl->getVariable('oComment')->value->getDelete()){?> deleted<?php }elseif($_smarty_tpl->getVariable('oUserCurrent')->value&&$_smarty_tpl->getVariable('oComment')->value->getUserId()==$_smarty_tpl->getVariable('oUserCurrent')->value->getId()){?> self<?php }elseif($_smarty_tpl->getVariable('sDateReadLast')->value<=$_smarty_tpl->getVariable('oComment')->value->getDate()){?> new<?php }?>" >
<?php if (!$_smarty_tpl->getVariable('oComment')->value->getDelete()||$_smarty_tpl->getVariable('bOneComment')->value||($_smarty_tpl->getVariable('oUserCurrent')->value&&$_smarty_tpl->getVariable('oUserCurrent')->value->isAdministrator())){?>
	<a name="comment<?php echo $_smarty_tpl->getVariable('oComment')->value->getId();?>
" ></a>
	
	
	<div class="folding"></div>
	
	
	<div id="comment_content_id_<?php echo $_smarty_tpl->getVariable('oComment')->value->getId();?>
" class="content">
		<?php if ($_smarty_tpl->getVariable('oComment')->value->isBad()){?>
			<div style="display: none;" id="comment_text_<?php echo $_smarty_tpl->getVariable('oComment')->value->getId();?>
">
				<?php echo $_smarty_tpl->getVariable('oComment')->value->getText();?>

			</div>
			 <a href="#" onclick="jQuery('#comment_text_<?php echo $_smarty_tpl->getVariable('oComment')->value->getId();?>
').show();jQuery(this).hide();return false;"><?php echo $_smarty_tpl->getVariable('aLang')->value['comment_bad_open'];?>
</a>
		<?php }else{ ?>	
			<?php echo $_smarty_tpl->getVariable('oComment')->value->getText();?>

		<?php }?>
	</div>
	
	
	<?php if ($_smarty_tpl->getVariable('oComment')->value->getTargetType()!='talk'){?>						
		<div id="vote_area_comment_<?php echo $_smarty_tpl->getVariable('oComment')->value->getId();?>
" class="voting <?php if ($_smarty_tpl->getVariable('oComment')->value->getRating()>0){?>positive<?php }elseif($_smarty_tpl->getVariable('oComment')->value->getRating()<0){?>negative<?php }?> <?php if (!$_smarty_tpl->getVariable('oUserCurrent')->value||$_smarty_tpl->getVariable('oComment')->value->getUserId()==$_smarty_tpl->getVariable('oUserCurrent')->value->getId()||strtotime($_smarty_tpl->getVariable('oComment')->value->getDate())<time()-$_smarty_tpl->getVariable('oConfig')->value->GetValue('acl.vote.comment.limit_time')){?>guest<?php }?>   <?php if ($_smarty_tpl->getVariable('oVote')->value){?> voted <?php if ($_smarty_tpl->getVariable('oVote')->value->getDirection()>0){?>plus<?php }else{ ?>minus<?php }?><?php }?>  ">
			<a href="#" class="plus" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->getVariable('oComment')->value->getId();?>
,this,1,'comment');"></a>
			<span id="vote_total_comment_<?php echo $_smarty_tpl->getVariable('oComment')->value->getId();?>
" class="total"><?php if ($_smarty_tpl->getVariable('oComment')->value->getRating()>0){?>+<?php }?><?php echo $_smarty_tpl->getVariable('oComment')->value->getRating();?>
</span>
			<a href="#" class="minus" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->getVariable('oComment')->value->getId();?>
,this,-1,'comment');"></a>
		</div>
	<?php }?>
	
	
	<ul class="info">
                <?php $_template = new Smarty_Internal_Template("comment_author.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
                <li class="date"><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->getVariable('oComment')->value->getDate()),$_smarty_tpl);?>
</li>
		<?php if ($_smarty_tpl->getVariable('oUserCurrent')->value&&!$_smarty_tpl->getVariable('oComment')->value->getDelete()&&!$_smarty_tpl->getVariable('bAllowNewComment')->value){?>
			<li><a href="#" onclick="ls.comments.toggleCommentForm(<?php echo $_smarty_tpl->getVariable('oComment')->value->getId();?>
); return false;" class="reply-link"><?php echo $_smarty_tpl->getVariable('aLang')->value['comment_answer'];?>
</a></li>
		<?php }?>
		<li><a href="<?php if ($_smarty_tpl->getVariable('oConfig')->value->GetValue('module.comment.nested_per_page')){?><?php echo smarty_function_router(array('page'=>'comments'),$_smarty_tpl);?>
<?php }else{ ?>#comment<?php }?><?php echo $_smarty_tpl->getVariable('oComment')->value->getId();?>
" class="comment-link"></a></li>	
		<?php if ($_smarty_tpl->getVariable('oComment')->value->getPid()){?>
			<li class="goto-comment-parent"><a href="#" onclick="ls.comments.goToParentComment(<?php echo $_smarty_tpl->getVariable('oComment')->value->getId();?>
,<?php echo $_smarty_tpl->getVariable('oComment')->value->getPid();?>
); return false;" title="<?php echo $_smarty_tpl->getVariable('aLang')->value['comment_goto_parent'];?>
">↑</a></li>
		<?php }?>
		<li class="goto-comment-child"><a href="#" title="<?php echo $_smarty_tpl->getVariable('aLang')->value['comment_goto_child'];?>
">↓</a></li>
		<?php if ($_smarty_tpl->getVariable('oUserCurrent')->value&&!$_smarty_tpl->getVariable('bNoCommentFavourites')->value){?>
			<li><a href="#" onclick="return ls.favourite.toggle(<?php echo $_smarty_tpl->getVariable('oComment')->value->getId();?>
,this,'comment');" class="favourite <?php if ($_smarty_tpl->getVariable('oComment')->value->getIsFavourite()){?>active<?php }?>"></a></li>
		<?php }?>
		<?php if (!$_smarty_tpl->getVariable('oComment')->value->getDelete()&&$_smarty_tpl->getVariable('oUserCurrent')->value&&$_smarty_tpl->getVariable('oUserCurrent')->value->isAdministrator()){?>
			<li><a href="#" class="delete" onclick="ls.comments.toggle(this,<?php echo $_smarty_tpl->getVariable('oComment')->value->getId();?>
); return false;"><?php echo $_smarty_tpl->getVariable('aLang')->value['comment_delete'];?>
</a></li>
		<?php }?>
		<?php if ($_smarty_tpl->getVariable('oComment')->value->getDelete()&&$_smarty_tpl->getVariable('oUserCurrent')->value&&$_smarty_tpl->getVariable('oUserCurrent')->value->isAdministrator()){?>   										
			<li><a href="#" class="repair" onclick="ls.comments.toggle(this,<?php echo $_smarty_tpl->getVariable('oComment')->value->getId();?>
); return false;"><?php echo $_smarty_tpl->getVariable('aLang')->value['comment_repair'];?>
</a></li>
		<?php }?>
		<?php echo smarty_function_hook(array('run'=>'comment_action','comment'=>$_smarty_tpl->getVariable('oComment')->value),$_smarty_tpl);?>

	</ul>
<?php }else{ ?>				
	<?php echo $_smarty_tpl->getVariable('aLang')->value['comment_was_delete'];?>

<?php }?>
<?php if ($_smarty_tpl->getVariable('oUserCurrent')->value){?>
	<div class="comment-preview" id="comment_preview_<?php echo $_smarty_tpl->getVariable('oComment')->value->getId();?>
" style="display: none;"></div>					
	<div class="reply" id="reply_<?php echo $_smarty_tpl->getVariable('oComment')->value->getId();?>
" style="display: none;"></div>	
<?php }?>	
</div>
<?php /* Smarty version Smarty-3.0.8, created on 2011-11-15 00:06:50
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionTalk/read.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16638019584ec182ea2e0a47-02387129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bbdbb34c9eda74386f98b233dfa5185aca4a40f' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionTalk/read.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16638019584ec182ea2e0a47-02387129',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/lib/external/Smarty/libs/plugins/modifier.escape.php';
if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_date_format')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.date_format.php';
?><?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('menu','talk');$_template->assign('showUpdateButton',true); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->getVariable('oTalk')->value->getUser(), null, null);?>


<div class="topic">
	<h2 class="title"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oTalk')->value->getTitle(),'html');?>
</h2>

	<ul class="actions">
		<li><a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
delete/<?php echo $_smarty_tpl->getVariable('oTalk')->value->getId();?>
/?security_ls_key=<?php echo $_smarty_tpl->getVariable('LIVESTREET_SECURITY_KEY')->value;?>
" onclick="return confirm('<?php echo $_smarty_tpl->getVariable('aLang')->value['talk_inbox_delete_confirm'];?>
');" class="delete"><?php echo $_smarty_tpl->getVariable('aLang')->value['talk_inbox_delete'];?>
</a></li>
	</ul>

	<div class="content">
		<?php echo $_smarty_tpl->getVariable('oTalk')->value->getText();?>

	</div>

	<ul class="info">
		<li class="username"><a href="<?php echo $_smarty_tpl->getVariable('oUser')->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->getVariable('oUser')->value->getLogin();?>
</a></li>
		<li class="date"><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->getVariable('oTalk')->value->getDate()),$_smarty_tpl);?>
</li>
		<li><a href="#" onclick="return ls.favourite.toggle(<?php echo $_smarty_tpl->getVariable('oTalk')->value->getId();?>
,this,'talk');" class="favourite <?php if ($_smarty_tpl->getVariable('oTalk')->value->getIsFavourite()){?>active<?php }?>"></a></li>
	</ul>
</div>

<?php $_smarty_tpl->tpl_vars["oTalkUser"] = new Smarty_variable($_smarty_tpl->getVariable('oTalk')->value->getTalkUser(), null, null);?>

<?php if (!$_smarty_tpl->getVariable('bNoComments')->value){?>
<?php $_template = new Smarty_Internal_Template('comment_tree.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('iTargetId',$_smarty_tpl->getVariable('oTalk')->value->getId());$_template->assign('sTargetType','talk');$_template->assign('iCountComment',$_smarty_tpl->getVariable('oTalk')->value->getCountComment());$_template->assign('sDateReadLast',$_smarty_tpl->getVariable('oTalkUser')->value->getDateLast());$_template->assign('sNoticeCommentAdd',$_smarty_tpl->getVariable('aLang')->value['topic_comment_add']);$_template->assign('bNoCommentFavourites',true); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php }?>
			
			
<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
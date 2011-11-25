<?php /* Smarty version Smarty-3.0.8, created on 2011-11-14 12:38:48
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionBlog/topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19049061864ec0e1a883e359-41254578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f26cd0a1d0cd5df1154bf484f4ab4729b19c224d' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionBlog/topic.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19049061864ec0e1a883e359-41254578',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('menu','blog');$_template->assign('showUpdateButton',true); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>


<?php $_template = new Smarty_Internal_Template('topic.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template('comment_tree.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('iTargetId',$_smarty_tpl->getVariable('oTopic')->value->getId());$_template->assign('sTargetType','topic');$_template->assign('iCountComment',$_smarty_tpl->getVariable('oTopic')->value->getCountComment());$_template->assign('sDateReadLast',$_smarty_tpl->getVariable('oTopic')->value->getDateRead());$_template->assign('bAllowNewComment',$_smarty_tpl->getVariable('oTopic')->value->getForbidComment());$_template->assign('sNoticeNotAllow',$_smarty_tpl->getVariable('aLang')->value['topic_comment_notallow']);$_template->assign('sNoticeCommentAdd',$_smarty_tpl->getVariable('aLang')->value['topic_comment_add']);$_template->assign('aPagingCmt',$_smarty_tpl->getVariable('aPagingCmt')->value); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>	


<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
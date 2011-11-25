<?php /* Smarty version Smarty-3.0.8, created on 2011-11-14 12:39:33
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/topic_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1305711794ec0e1d52f7846-48220978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '138441958736269375f11fd3e32190b02d2b82b2' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/topic_list.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1305711794ec0e1d52f7846-48220978',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_smarty_tpl->tpl_vars["ProfileView"] = new Smarty_variable((($tmp = @$_smarty_tpl->getVariable('ProfileView')->value)===null||$tmp==='' ? false : $tmp), null, null);?>
<?php if (count($_smarty_tpl->getVariable('aTopics')->value)>0){?>
	<?php  $_smarty_tpl->tpl_vars['oTopic'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aTopics')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oTopic']->key => $_smarty_tpl->tpl_vars['oTopic']->value){
?>
           <?php if ($_smarty_tpl->getVariable('ProfileView')->value&&$_smarty_tpl->getVariable('oTopic')->value->getUser()->IsAdministrator()&&$_smarty_tpl->getVariable('oConfig')->value->GetValue('admin_actions.enabled')&&$_smarty_tpl->getVariable('oConfig')->value->GetValue('admin_actions.single_topics')&&!(!$_smarty_tpl->getVariable('oUserCurrent')->value||$_smarty_tpl->getVariable('oUserCurrent')->value->IsAdministrator())){?>
               <?php continue 1?>
           <?php }?>
	   <?php $_smarty_tpl->tpl_vars["sTopicTemplateName"] = new Smarty_variable("topic_".($_smarty_tpl->getVariable('oTopic')->value->getType()).".tpl", null, null);?>
	   <?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('sTopicTemplateName')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('bTopicList',true); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	<?php }} ?>	
		
    <?php $_template = new Smarty_Internal_Template('paging.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('aPaging',($_smarty_tpl->getVariable('aPaging')->value)); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>			
<?php }else{ ?>
	<div class="padding"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_no_topic'];?>
</div>
<?php }?>
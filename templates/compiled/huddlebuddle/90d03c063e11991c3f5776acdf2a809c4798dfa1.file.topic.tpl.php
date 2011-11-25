<?php /* Smarty version Smarty-3.0.8, created on 2011-11-14 12:38:49
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8674203414ec0e1a924fec3-37304490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90d03c063e11991c3f5776acdf2a809c4798dfa1' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/topic.tpl',
      1 => 1319444580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8674203414ec0e1a924fec3-37304490',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_smarty_tpl->tpl_vars["sTopicTemplateName"] = new Smarty_variable("topic_".($_smarty_tpl->getVariable('oTopic')->value->getType()).".tpl", null, null);?>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('sTopicTemplateName')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
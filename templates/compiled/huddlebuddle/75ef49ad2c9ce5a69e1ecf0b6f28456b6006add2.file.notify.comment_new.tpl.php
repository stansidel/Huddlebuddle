<?php /* Smarty version Smarty-3.0.8, created on 2011-11-15 16:43:56
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/notify/english/notify.comment_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3323138434ec26c9c2c1177-45396158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75ef49ad2c9ce5a69e1ecf0b6f28456b6006add2' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/notify/english/notify.comment_new.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3323138434ec26c9c2c1177-45396158',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/lib/external/Smarty/libs/plugins/modifier.escape.php';
if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_cfg')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.cfg.php';
?>The user <a href="<?php echo $_smarty_tpl->getVariable('oUserComment')->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->getVariable('oUserComment')->value->getLogin();?>
</a> left a new comment to your topic <b>«<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oTopic')->value->getTitle(),'html');?>
»</b>, you can read it by clicking on <a href="<?php if ($_smarty_tpl->getVariable('oConfig')->value->GetValue('module.comment.nested_per_page')){?><?php echo smarty_function_router(array('page'=>'comments'),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('oTopic')->value->getUrl();?>
#comment<?php }?><?php echo $_smarty_tpl->getVariable('oComment')->value->getId();?>
">this link</a><br>							
<?php if ($_smarty_tpl->getVariable('oConfig')->value->GetValue('sys.mail.include_comment')){?>
	Message: <i><?php echo $_smarty_tpl->getVariable('oComment')->value->getText();?>
</i>				
<?php }?>				
<br><br>
Best regards, site administration <a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
</a>
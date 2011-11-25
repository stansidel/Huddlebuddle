<?php /* Smarty version Smarty-3.0.8, created on 2011-11-16 09:21:35
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/notify/english/notify.talk_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2291492554ec3566fd717b9-09571507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '404293683f2c82fa50d12b79550f736c7282ffe9' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/notify/english/notify.talk_new.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2291492554ec3566fd717b9-09571507',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_modifier_escape')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/lib/external/Smarty/libs/plugins/modifier.escape.php';
if (!is_callable('smarty_function_cfg')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.cfg.php';
?>You have a new incoming letter from the user <a href="<?php echo $_smarty_tpl->getVariable('oUserFrom')->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->getVariable('oUserFrom')->value->getLogin();?>
</a>, you can read and answer it by clicking on <a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
read/<?php echo $_smarty_tpl->getVariable('oTalk')->value->getId();?>
/"> this link</a><br>
Letter topic: <b><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oTalk')->value->getTitle(),'html');?>
</b><br>
<?php if ($_smarty_tpl->getVariable('oConfig')->value->GetValue('sys.mail.include_talk')){?>
	Message: <i><?php echo $_smarty_tpl->getVariable('oTalk')->value->getText();?>
</i>	<br>			
<?php }?>
Don't forget to register before!
<br><br>
Best regards, site administration <a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
</a>
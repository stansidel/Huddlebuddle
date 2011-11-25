<?php /* Smarty version Smarty-3.0.8, created on 2011-11-16 09:21:52
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/notify/english/notify.user_friend_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6123022304ec35680646617-23949433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7dc5d7865aa89e7f17a0cde19f4620232ae83cf' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/notify/english/notify.user_friend_new.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6123022304ec35680646617-23949433',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cfg')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.cfg.php';
?>The user «<a href="<?php echo $_smarty_tpl->getVariable('oUserFrom')->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->getVariable('oUserFrom')->value->getLogin();?>
</a>»</b> wants to add you to Friends.						
<br /><br />
<i><?php echo $_smarty_tpl->getVariable('sText')->value;?>
</i>
<a href='<?php echo $_smarty_tpl->getVariable('sPath')->value;?>
'>See application</a> (Dont forget to register before!)
<br />
Best regards, site administration <a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
</a>
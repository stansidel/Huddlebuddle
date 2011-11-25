<?php /* Smarty version Smarty-3.0.8, created on 2011-11-15 06:34:55
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/notify/english/notify.registration_activate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7296870354ec1dddf28f648-90541903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e685b21367b329c5459b08e8429c36504788c1f' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/notify/english/notify.registration_activate.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7296870354ec1dddf28f648-90541903',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cfg')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
?>You have been registered on the site <a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
</a><br>
Your credentials:<br>
&nbsp;&nbsp;&nbsp;login: <b><?php echo $_smarty_tpl->getVariable('oUser')->value->getLogin();?>
</b><br>
&nbsp;&nbsp;&nbsp;password: <b><?php echo $_smarty_tpl->getVariable('sPassword')->value;?>
</b><br>
<br>
To complete registration you need to activate your account by clicking this link: 
<a href="<?php echo smarty_function_router(array('page'=>'registration'),$_smarty_tpl);?>
activate/<?php echo $_smarty_tpl->getVariable('oUser')->value->getActivateKey();?>
/"><?php echo smarty_function_router(array('page'=>'registration'),$_smarty_tpl);?>
activate/<?php echo $_smarty_tpl->getVariable('oUser')->value->getActivateKey();?>
/</a>

<br><br>
Best regards, site administration <a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
</a>
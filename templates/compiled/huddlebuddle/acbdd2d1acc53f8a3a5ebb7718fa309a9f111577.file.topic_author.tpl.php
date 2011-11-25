<?php /* Smarty version Smarty-3.0.8, created on 2011-11-14 12:38:49
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/topic_author.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5449280894ec0e1a9737f70-94947107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acbdd2d1acc53f8a3a5ebb7718fa309a9f111577' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/topic_author.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5449280894ec0e1a9737f70-94947107',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_smarty_tpl->tpl_vars['showSingleAdmin'] = new Smarty_variable($_smarty_tpl->getVariable('oConfig')->value->GetValue('admin_actions.enabled')&&$_smarty_tpl->getVariable('oConfig')->value->GetValue('admin_actions.single_topics')&&$_smarty_tpl->getVariable('oUser')->value->isAdministrator(), null, null);?>
<?php if ($_smarty_tpl->getVariable('showSingleAdmin')->value&&(!$_smarty_tpl->getVariable('oUserCurrent')->value||!$_smarty_tpl->getVariable('oUserCurrent')->value->IsAdministrator())){?>
    <a href="<?php echo $_smarty_tpl->getVariable('oConfig')->value->GetValue('admin_actions.url');?>
" <?php echo $_smarty_tpl->getVariable('hbClassLink')->value;?>
><?php echo $_smarty_tpl->getVariable('oConfig')->value->GetValue('admin_actions.name');?>
</a>
<?php }else{ ?>
    <a href="<?php echo $_smarty_tpl->getVariable('oUser')->value->getUserWebPath();?>
" <?php echo $_smarty_tpl->getVariable('hbClassLink')->value;?>
><?php echo $_smarty_tpl->getVariable('oUser')->value->getLogin();?>

        <?php if ($_smarty_tpl->getVariable('showSingleAdmin')->value&&$_smarty_tpl->getVariable('oUserCurrent')->value!=null&&$_smarty_tpl->getVariable('oUserCurrent')->value->IsAdministrator()){?>
            (<?php echo $_smarty_tpl->getVariable('oConfig')->value->GetValue('admin_actions.name');?>
)
        <?php }?></a>
<?php }?>
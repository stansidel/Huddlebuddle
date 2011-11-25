<?php /* Smarty version Smarty-3.0.8, created on 2011-11-25 05:59:10
         compiled from "/var/www/alpha.huddlebuddle.org/templates/skin/huddlebuddle/topic_author.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2878759854ecf047e745374-11805146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f2dc8ebf88b4b7abaf1b449b626c7b3d7b8ec6d' => 
    array (
      0 => '/var/www/alpha.huddlebuddle.org/templates/skin/huddlebuddle/topic_author.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2878759854ecf047e745374-11805146',
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
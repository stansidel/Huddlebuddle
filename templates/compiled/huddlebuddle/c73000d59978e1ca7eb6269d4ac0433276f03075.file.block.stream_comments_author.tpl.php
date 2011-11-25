<?php /* Smarty version Smarty-3.0.8, created on 2011-11-15 16:43:59
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/block.stream_comments_author.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12286988574ec26c9f74e614-19925900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c73000d59978e1ca7eb6269d4ac0433276f03075' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/block.stream_comments_author.tpl',
      1 => 1319444580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12286988574ec26c9f74e614-19925900',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_smarty_tpl->tpl_vars['showSingleAdmin'] = new Smarty_variable($_smarty_tpl->getVariable('oConfig')->value->GetValue('admin_actions.enabled')&&$_smarty_tpl->getVariable('oUser')->value->isAdministrator(), null, null);?>
<?php if (!$_smarty_tpl->getVariable('oComment')->value){?>
    <?php $_smarty_tpl->tpl_vars['showSingleAdmin'] = new Smarty_variable($_smarty_tpl->getVariable('showSingleAdmin')->value&&$_smarty_tpl->getVariable('oConfig')->value->GetValue('admin_actions.single_topics'), null, null);?>
<?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars['showSingleAdmin'] = new Smarty_variable($_smarty_tpl->getVariable('showSingleAdmin')->value&&$_smarty_tpl->getVariable('oConfig')->value->GetValue('admin_actions.single_comments'), null, null);?>
    <?php if ($_smarty_tpl->getVariable('oComment')->value->getTargetType()=="topic"){?>
        <?php $_smarty_tpl->tpl_vars['showSingleAdmin'] = new Smarty_variable($_smarty_tpl->getVariable('showSingleAdmin')->value&&($_smarty_tpl->getVariable('oComment')->value->getTarget()->GetUserId()!=$_smarty_tpl->getVariable('oUser')->value->getId()||$_smarty_tpl->getVariable('oConfig')->value->GetValue('admin_actions.single_topics')), null, null);?>
    <?php }?>
<?php }?>
<?php if ($_smarty_tpl->getVariable('showSingleAdmin')->value&&(!$_smarty_tpl->getVariable('oUserCurrent')->value||!$_smarty_tpl->getVariable('oUserCurrent')->value->IsAdministrator())){?>
    <a href="<?php echo $_smarty_tpl->getVariable('oConfig')->value->GetValue('admin_actions.url');?>
" class="user"><?php echo $_smarty_tpl->getVariable('oConfig')->value->GetValue('admin_actions.name');?>
</a>
<?php }else{ ?>
    <a href="<?php echo $_smarty_tpl->getVariable('oUser')->value->getUserWebPath();?>
" class="user"><?php echo $_smarty_tpl->getVariable('oUser')->value->getLogin();?>

        <?php if ($_smarty_tpl->getVariable('showSingleAdmin')->value&&$_smarty_tpl->getVariable('oUserCurrent')->value!=null&&$_smarty_tpl->getVariable('oUserCurrent')->value->IsAdministrator()){?>
            (<?php echo $_smarty_tpl->getVariable('oConfig')->value->GetValue('admin_actions.name');?>
)
        <?php }?></a>
<?php }?>
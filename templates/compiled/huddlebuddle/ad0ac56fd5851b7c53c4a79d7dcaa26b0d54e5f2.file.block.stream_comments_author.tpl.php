<?php /* Smarty version Smarty-3.0.8, created on 2011-11-25 05:59:10
         compiled from "/var/www/alpha.huddlebuddle.org/templates/skin/huddlebuddle/block.stream_comments_author.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16558380644ecf047ecbf150-69142855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad0ac56fd5851b7c53c4a79d7dcaa26b0d54e5f2' => 
    array (
      0 => '/var/www/alpha.huddlebuddle.org/templates/skin/huddlebuddle/block.stream_comments_author.tpl',
      1 => 1319444580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16558380644ecf047ecbf150-69142855',
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
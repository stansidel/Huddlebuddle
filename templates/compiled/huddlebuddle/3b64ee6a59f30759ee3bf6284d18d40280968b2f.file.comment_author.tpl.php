<?php /* Smarty version Smarty-3.0.8, created on 2011-11-15 16:43:58
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/comment_author.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14829729164ec26c9e616b79-34550169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b64ee6a59f30759ee3bf6284d18d40280968b2f' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/comment_author.tpl',
      1 => 1319444580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14829729164ec26c9e616b79-34550169',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_smarty_tpl->tpl_vars['showSingleAdmin'] = new Smarty_variable($_smarty_tpl->getVariable('oConfig')->value->GetValue('admin_actions.enabled')&&$_smarty_tpl->getVariable('oConfig')->value->GetValue('admin_actions.single_comments')&&$_smarty_tpl->getVariable('oUser')->value->isAdministrator(), null, null);?>
<?php if ($_smarty_tpl->getVariable('oComment')->value->getTargetType()=="topic"){?>
    <?php $_smarty_tpl->tpl_vars['showSingleAdmin'] = new Smarty_variable($_smarty_tpl->getVariable('showSingleAdmin')->value&&($_smarty_tpl->getVariable('oComment')->value->getTarget()->GetUserId()!=$_smarty_tpl->getVariable('oUser')->value->getId()||$_smarty_tpl->getVariable('oConfig')->value->GetValue('admin_actions.single_topics')), null, null);?>
<?php }?>
<?php if ($_smarty_tpl->getVariable('showSingleAdmin')->value&&($_smarty_tpl->getVariable('oUserCurrent')->value==null||!$_smarty_tpl->getVariable('oUserCurrent')->value->IsAdministrator())){?>
    <li class="avatar"><a href="<?php echo $_smarty_tpl->getVariable('oConfig')->value->GetValue('admin_actions.url');?>
"><img src="<?php echo $_smarty_tpl->getVariable('oConfig')->value->GetValue('admin_actions.avatar_url');?>
" alt="avatar" /></a></li>
    <li class="username"><a href="<?php echo $_smarty_tpl->getVariable('oConfig')->value->GetValue('admin_actions.url');?>
"><?php echo $_smarty_tpl->getVariable('oConfig')->value->GetValue('admin_actions.name');?>
</a></li>
<?php }else{ ?>
    <li class="avatar"><a href="<?php echo $_smarty_tpl->getVariable('oUser')->value->getUserWebPath();?>
"><img src="<?php echo $_smarty_tpl->getVariable('oUser')->value->getProfileAvatarPath(24);?>
" alt="avatar" /></a></li>
    <li class="username"><a href="<?php echo $_smarty_tpl->getVariable('oUser')->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->getVariable('oUser')->value->getLogin();?>

        <?php if ($_smarty_tpl->getVariable('showSingleAdmin')->value&&$_smarty_tpl->getVariable('oUserCurrent')->value!=null&&$_smarty_tpl->getVariable('oUserCurrent')->value->IsAdministrator()){?>
            (<?php echo $_smarty_tpl->getVariable('oConfig')->value->GetValue('admin_actions.name');?>
)
        <?php }?></a></li>
<?php }?>
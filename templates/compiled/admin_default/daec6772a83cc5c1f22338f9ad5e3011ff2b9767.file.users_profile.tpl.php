<?php /* Smarty version Smarty-3.0.8, created on 2011-11-14 10:52:53
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default//actions/ActionAdmin/users_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8573610684ec0c8d50703d2-59114570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'daec6772a83cc5c1f22338f9ad5e3011ff2b9767' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default//actions/ActionAdmin/users_profile.tpl',
      1 => 1317821040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8573610684ec0c8d50703d2-59114570',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
?><div class="profile-user">
    <ul class="block-nav -box">
        <li <?php if ($_smarty_tpl->getVariable('sMode')->value=='info'){?>class="active"<?php }?>><strong></strong><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
users/profile/<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getLogin();?>
/info/">info</a></li>
        <li <?php if ($_smarty_tpl->getVariable('sMode')->value=='blogs'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
users/profile/<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getLogin();?>
/blogs/">blogs</a></li>
        <li <?php if ($_smarty_tpl->getVariable('sMode')->value=='topics'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
users/profile/<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getLogin();?>
/topics/">topics</a></li>
        <li <?php if ($_smarty_tpl->getVariable('sMode')->value=='comments'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
users/profile/<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getLogin();?>
/comments/">comments</a></li>
        <li <?php if ($_smarty_tpl->getVariable('sMode')->value=='votes'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
users/profile/<?php echo $_smarty_tpl->getVariable('oUserProfile')->value->getLogin();?>
/votes/">votes</a><em></em></li>
    </ul>

    <?php if ($_smarty_tpl->getVariable('sMode')->value=='topics'){?>
        <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('sTemplatePathAction')->value)."/users_profile_topics.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
    <?php }elseif($_smarty_tpl->getVariable('sMode')->value=='blogs'){?>
        <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('sTemplatePathAction')->value)."/users_profile_blogs.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
    <?php }elseif($_smarty_tpl->getVariable('sMode')->value=='comments'){?>
        <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('sTemplatePathAction')->value)."/users_profile_comments.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
    <?php }elseif($_smarty_tpl->getVariable('sMode')->value=='votes'){?>
        <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('sTemplatePathAction')->value)."/users_profile_votes.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
    <?php }else{ ?>
        <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('sTemplatePathAction')->value)."/users_profile_info.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
    <?php }?>

</div>

<?php /* Smarty version Smarty-3.0.8, created on 2011-11-11 06:14:51
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/actions/ActionAdmin/users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10173799524ebc932ba30039-42884293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52b1a5be5e8b2c5fe212dbea7629cf746eebf6f5' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/actions/ActionAdmin/users.tpl',
      1 => 1317821040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10173799524ebc932ba30039-42884293',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('showWhiteBack',true); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<script type="text/javascript">
    var sWebPluginSkin = "<?php echo $_smarty_tpl->getVariable('sWebPluginSkin')->value;?>
";
    var sWebPluginPath = "<?php echo $_smarty_tpl->getVariable('sWebPluginPath')->value;?>
";
</script>

<?php if ($_smarty_tpl->getVariable('include_tpl')->value){?>
  <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('include_tpl')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php }?>

<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
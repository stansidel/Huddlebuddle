<?php /* Smarty version Smarty-3.0.8, created on 2011-11-15 09:35:59
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/actions/ActionAdmin/site.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1493615124ec2084fbf3cd5-66425457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd72861f58beacbe2fc82cdd971c597d31b7e66cc' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/actions/ActionAdmin/site.tpl',
      1 => 1317821040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1493615124ec2084fbf3cd5-66425457',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<script type="text/javascript">
    var sWebPluginSkin = "<?php echo $_smarty_tpl->getVariable('sWebPluginSkin')->value;?>
";
    var sWebPluginPath = "<?php echo $_smarty_tpl->getVariable('sWebPluginPath')->value;?>
";
</script>

<?php if ($_smarty_tpl->getVariable('tpl_content')->value){?>
    <?php echo $_smarty_tpl->getVariable('tpl_content')->value;?>

<?php }?>
<?php if ($_smarty_tpl->getVariable('tpl_include')->value){?>
    <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_include')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php }?>

<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
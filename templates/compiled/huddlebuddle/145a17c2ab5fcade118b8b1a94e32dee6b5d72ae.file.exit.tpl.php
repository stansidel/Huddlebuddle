<?php /* Smarty version Smarty-3.0.8, created on 2011-11-14 12:46:38
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionLogin/exit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4888136114ec0e37e295c29-01314505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '145a17c2ab5fcade118b8b1a94e32dee6b5d72ae' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionLogin/exit.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4888136114ec0e37e295c29-01314505',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_smarty_tpl->tpl_vars["noSidebar"] = new Smarty_variable(true, null, null);?>
<?php $_template = new Smarty_Internal_Template('header.light.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>


<div class="center">
	<h2><?php echo $_smarty_tpl->getVariable('aLang')->value['user_exit_notice'];?>
</h2>
</div>


<?php $_template = new Smarty_Internal_Template('footer.light.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
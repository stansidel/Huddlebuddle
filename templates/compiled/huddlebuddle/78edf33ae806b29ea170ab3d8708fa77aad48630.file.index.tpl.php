<?php /* Smarty version Smarty-3.0.8, created on 2011-11-25 06:09:14
         compiled from "/var/www/alpha.huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionBlogs/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18772961684ecf06daa80bd8-25555090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78edf33ae806b29ea170ab3d8708fa77aad48630' => 
    array (
      0 => '/var/www/alpha.huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionBlogs/index.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18772961684ecf06daa80bd8-25555090',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('sMenuHeadItemSelect',"blogs"); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<h2><?php echo $_smarty_tpl->getVariable('aLang')->value['blogs'];?>
</h2>

<?php $_template = new Smarty_Internal_Template('blog_list.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template('paging.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('aPaging',($_smarty_tpl->getVariable('aPaging')->value)); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
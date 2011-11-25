<?php /* Smarty version Smarty-3.0.8, created on 2011-11-14 12:38:50
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/block.blogs_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21340389574ec0e1aa03e6d6-50005335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '927697969ad03ce0a88139ce36d3fa192b9978e1' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/block.blogs_top.tpl',
      1 => 1319444580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21340389574ec0e1aa03e6d6-50005335',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_modifier_escape')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/lib/external/Smarty/libs/plugins/modifier.escape.php';
if (!is_callable('smarty_function_cfg')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.cfg.php';
?><ul class="list">
	<?php  $_smarty_tpl->tpl_vars['oBlog'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aBlogs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oBlog']->key => $_smarty_tpl->tpl_vars['oBlog']->value){
?>
		<li>
			<span class="rating"><?php echo $_smarty_tpl->getVariable('oBlog')->value->getRating();?>
</span>
			<a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->getVariable('oBlog')->value->getUrl();?>
/"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oBlog')->value->getTitle(),'html');?>
</a> 
			<?php if ($_smarty_tpl->getVariable('oBlog')->value->getType()=='close'){?><img src="<?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/lock.png" alt="[x]" title="<?php echo $_smarty_tpl->getVariable('aLang')->value['blog_closed'];?>
" /><?php }?>
		</li>
	<?php }} ?>
</ul>				
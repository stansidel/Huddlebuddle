<?php /* Smarty version Smarty-3.0.8, created on 2011-11-16 10:16:31
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionRss/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15338395704ec3634f80d144-21680850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '342215d0b8a15ca3a127b021cd6eaa41fabb020f' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionRss/index.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15338395704ec3634f80d144-21680850',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cfg')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_modifier_escape')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/lib/external/Smarty/libs/plugins/modifier.escape.php';
if (!is_callable('smarty_function_date_format')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.date_format.php';
if (!is_callable('smarty_modifier_replace')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/lib/external/Smarty/libs/plugins/modifier.replace.php';
?><?php echo '<?xml';?> version="1.0" encoding="UTF-8"<?php echo '?>';?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom" xmlns:dc="http://purl.org/dc/elements/1.1/">
<channel>
	<title><?php echo $_smarty_tpl->getVariable('aChannel')->value['title'];?>
</title>
	<link><?php echo $_smarty_tpl->getVariable('aChannel')->value['link'];?>
</link>
	<atom:link href="<?php echo $_smarty_tpl->getVariable('PATH_WEB_CURRENT')->value;?>
/" rel="self" type="application/rss+xml" />
	<description><![CDATA[<?php echo $_smarty_tpl->getVariable('aChannel')->value['description'];?>
]]></description>
	<language><?php echo $_smarty_tpl->getVariable('aChannel')->value['language'];?>
</language>
	<managingEditor><?php echo $_smarty_tpl->getVariable('aChannel')->value['managingEditor'];?>
 (<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
)</managingEditor>
	<webMaster><?php echo $_smarty_tpl->getVariable('aChannel')->value['managingEditor'];?>
 (<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
)</webMaster>
	<copyright><?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
</copyright>
	<generator><?php echo $_smarty_tpl->getVariable('aChannel')->value['generator'];?>
</generator>
<?php  $_smarty_tpl->tpl_vars['oItem'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aItems')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oItem']->key => $_smarty_tpl->tpl_vars['oItem']->value){
?>
		<item>
			<title><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['oItem']->value['title'],'html');?>
</title>
			<guid isPermaLink="true"><?php echo $_smarty_tpl->tpl_vars['oItem']->value['guid'];?>
</guid>
			<link><?php echo $_smarty_tpl->tpl_vars['oItem']->value['link'];?>
</link>
			<dc:creator><?php echo $_smarty_tpl->tpl_vars['oItem']->value['author'];?>
</dc:creator>
			<description><![CDATA[<?php echo $_smarty_tpl->tpl_vars['oItem']->value['description'];?>
]]></description>
			<pubDate><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oItem']->value['pubDate'],'format'=>"r"),$_smarty_tpl);?>
</pubDate>			
			<category><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['oItem']->value['category'],',','</category>
			<category>');?>
</category>
		</item>
<?php }} ?>
</channel>
</rss>

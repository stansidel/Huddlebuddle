<?php /* Smarty version Smarty-3.0.8, created on 2011-11-15 16:52:11
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/block.stream_topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19472778814ec26e8bed7510-24766669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f01780b5713e99a2232a85d2cb2820afcbe083ed' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/block.stream_topic.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19472778814ec26e8bed7510-24766669',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/lib/external/Smarty/libs/plugins/modifier.escape.php';
if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
?><ul class="list">
	<?php  $_smarty_tpl->tpl_vars['oTopic'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('oTopics')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["cmt"]['iteration']=0;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oTopic']->key => $_smarty_tpl->tpl_vars['oTopic']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["cmt"]['iteration']++;
?>
		<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->getVariable('oTopic')->value->getUser(), null, null);?>							
		<?php $_smarty_tpl->tpl_vars["oBlog"] = new Smarty_variable($_smarty_tpl->getVariable('oTopic')->value->getBlog(), null, null);?>
		
		<li <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['cmt']['iteration']%2==1){?>class="even"<?php }?>>
                        <?php $_template = new Smarty_Internal_Template("block.stream_comments_author.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?> &rarr;
			<span class="stream-topic-icon"></span>
			<a href="<?php echo $_smarty_tpl->getVariable('oTopic')->value->getUrl();?>
" class="topic-title"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oTopic')->value->getTitle(),'html');?>
</a>
			<span><?php echo $_smarty_tpl->getVariable('oTopic')->value->getCountComment();?>
</span> &rarr;
			<a href="<?php echo $_smarty_tpl->getVariable('oBlog')->value->getUrlFull();?>
" class="blog-title"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oBlog')->value->getTitle(),'html');?>
</a>
		</li>						
	<?php }} ?>				
</ul>


<div class="bottom">
	<a href="<?php echo smarty_function_router(array('page'=>'new'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['block_stream_topics_all'];?>
</a> | <a href="<?php echo smarty_function_router(array('page'=>'rss'),$_smarty_tpl);?>
new/">RSS</a>
</div>
					
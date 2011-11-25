<?php /* Smarty version Smarty-3.0.8, created on 2011-11-25 05:59:10
         compiled from "/var/www/alpha.huddlebuddle.org/templates/skin/huddlebuddle/block.stream_comment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12209590514ecf047ebc7231-83244873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '446a7bc2d89b879659dc9724f02beadf72d5c539' => 
    array (
      0 => '/var/www/alpha.huddlebuddle.org/templates/skin/huddlebuddle/block.stream_comment.tpl',
      1 => 1319444580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12209590514ecf047ebc7231-83244873',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/alpha.huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_modifier_escape')) include '/var/www/alpha.huddlebuddle.org/engine/lib/external/Smarty/libs/plugins/modifier.escape.php';
?><ul class="list">
	<?php  $_smarty_tpl->tpl_vars['oComment'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aComments')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["cmt"]['iteration']=0;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oComment']->key => $_smarty_tpl->tpl_vars['oComment']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["cmt"]['iteration']++;
?>
		<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->getVariable('oComment')->value->getUser(), null, null);?>
		<?php $_smarty_tpl->tpl_vars["oTopic"] = new Smarty_variable($_smarty_tpl->getVariable('oComment')->value->getTarget(), null, null);?>
		<?php $_smarty_tpl->tpl_vars["oBlog"] = new Smarty_variable($_smarty_tpl->getVariable('oTopic')->value->getBlog(), null, null);?>
		
		<li <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['cmt']['iteration']%2==1){?>class="even"<?php }?>>
                        <?php $_template = new Smarty_Internal_Template("block.stream_comments_author.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?> &rarr;
			<span class="stream-comment-icon"></span>
			<a href="<?php if ($_smarty_tpl->getVariable('oConfig')->value->GetValue('module.comment.nested_per_page')){?><?php echo smarty_function_router(array('page'=>'comments'),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('oTopic')->value->getUrl();?>
#comment<?php }?><?php echo $_smarty_tpl->getVariable('oComment')->value->getId();?>
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
	<a href="<?php echo smarty_function_router(array('page'=>'comments'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('aLang')->value['block_stream_comments_all'];?>
</a> | <a href="<?php echo smarty_function_router(array('page'=>'rss'),$_smarty_tpl);?>
allcomments/">RSS</a>
</div>
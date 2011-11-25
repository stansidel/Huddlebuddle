<?php /* Smarty version Smarty-3.0.8, created on 2011-11-25 05:59:09
         compiled from "/var/www/alpha.huddlebuddle.org/templates/skin/huddlebuddle/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12384472354ecf047dbfafd2-83978138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a72fe0e957f6232e94a8a05e7472ac3b5108d01d' => 
    array (
      0 => '/var/www/alpha.huddlebuddle.org/templates/skin/huddlebuddle/nav.tpl',
      1 => 1319444580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12384472354ecf047dbfafd2-83978138',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/alpha.huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
?><div id="nav">
	<div id="nav-inner">
		<?php if ($_smarty_tpl->getVariable('oUserCurrent')->value&&($_smarty_tpl->getVariable('sAction')->value=='blog'||$_smarty_tpl->getVariable('sAction')->value=='index'||$_smarty_tpl->getVariable('sAction')->value=='new'||$_smarty_tpl->getVariable('sAction')->value=='personal_blog'||$_smarty_tpl->getVariable('sAction')->value=='feed'||$_smarty_tpl->getVariable('sAction')->value=='top')){?>
			<a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
add/" class="button-publish"><span><?php echo $_smarty_tpl->getVariable('aLang')->value['topic_create'];?>
</span></a>
		<?php }?>
	
	
		<?php if ($_smarty_tpl->getVariable('menu')->value){?>
			<?php if (in_array($_smarty_tpl->getVariable('menu')->value,$_smarty_tpl->getVariable('aMenuContainers')->value)){?><?php echo $_smarty_tpl->getVariable('aMenuFetch')->value[$_smarty_tpl->getVariable('menu')->value];?>
<?php }else{ ?><?php $_template = new Smarty_Internal_Template("menu.".($_smarty_tpl->getVariable('menu')->value).".tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?><?php }?>
		<?php }?>
		
		
		<form action="<?php echo smarty_function_router(array('page'=>'search'),$_smarty_tpl);?>
topics/" method="GET" class="search">
			<input class="text" type="text" onblur="if (!value) value=defaultValue" onclick="if (value==defaultValue) value=''" value="<?php echo $_smarty_tpl->getVariable('aLang')->value['search'];?>
" name="q" />
			<input class="search-submit" type="submit" value="" />
		</form>
	</div>
</div>

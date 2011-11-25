<?php /* Smarty version Smarty-3.0.8, created on 2011-11-23 07:07:24
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20391675364ecc717c628252-30159028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd90832d41b36f2d92e5e6b35117a66aa0ae99c61' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/header.tpl',
      1 => 1322021241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20391675364ecc717c628252-30159028',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_hook')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_cfg')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_json')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.json.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html lang="ru">
<head>
	<?php echo smarty_function_hook(array('run'=>'html_head_begin'),$_smarty_tpl);?>

	
	<title><?php echo $_smarty_tpl->getVariable('sHtmlTitle')->value;?>
</title>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="<?php echo $_smarty_tpl->getVariable('sHtmlDescription')->value;?>
" />
	<meta name="keywords" content="<?php echo $_smarty_tpl->getVariable('sHtmlKeywords')->value;?>
" />

	<?php echo $_smarty_tpl->getVariable('aHtmlHeadFiles')->value['css'];?>


	<link href="<?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/favicon.ico" rel="shortcut icon" />
	<link rel="search" type="application/opensearchdescription+xml" href="<?php echo smarty_function_router(array('page'=>'search'),$_smarty_tpl);?>
opensearch/" title="<?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
" />

	<?php if ($_smarty_tpl->getVariable('aHtmlRssAlternate')->value){?>
		<link rel="alternate" type="application/rss+xml" href="<?php echo $_smarty_tpl->getVariable('aHtmlRssAlternate')->value['url'];?>
" title="<?php echo $_smarty_tpl->getVariable('aHtmlRssAlternate')->value['title'];?>
">
	<?php }?>
	
	<?php if ($_smarty_tpl->getVariable('bRefreshToHome')->value){?>
		<meta  HTTP-EQUIV="Refresh" CONTENT="3; URL=<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
/">
	<?php }?>
	
	<script language="JavaScript" type="text/javascript">
	var DIR_WEB_ROOT 			= '<?php echo smarty_function_cfg(array('name'=>"path.root.web"),$_smarty_tpl);?>
';
	var DIR_STATIC_SKIN 		= '<?php echo smarty_function_cfg(array('name'=>"path.static.skin"),$_smarty_tpl);?>
';
	var DIR_ROOT_ENGINE_LIB     = '<?php echo smarty_function_cfg(array('name'=>"path.root.engine_lib"),$_smarty_tpl);?>
'; 
	var LIVESTREET_SECURITY_KEY = '<?php echo $_smarty_tpl->getVariable('LIVESTREET_SECURITY_KEY')->value;?>
';
	var SESSION_ID              = '<?php echo $_smarty_tpl->getVariable('_sPhpSessionId')->value;?>
'; 
	var BLOG_USE_TINYMCE		= '<?php echo smarty_function_cfg(array('name'=>"view.tinymce"),$_smarty_tpl);?>
';

	var TINYMCE_LANG='en';
	<?php if ($_smarty_tpl->getVariable('oConfig')->value->GetValue('lang.current')=='russian'){?>
		TINYMCE_LANG='ru';
	<?php }?>

	var aRouter = new Array();
	<?php  $_smarty_tpl->tpl_vars['sPath'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['sPage'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aRouter')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['sPath']->key => $_smarty_tpl->tpl_vars['sPath']->value){
 $_smarty_tpl->tpl_vars['sPage']->value = $_smarty_tpl->tpl_vars['sPath']->key;
?>
		aRouter['<?php echo $_smarty_tpl->tpl_vars['sPage']->value;?>
'] = '<?php echo $_smarty_tpl->tpl_vars['sPath']->value;?>
';
	<?php }} ?>
	</script>

	<?php echo $_smarty_tpl->getVariable('aHtmlHeadFiles')->value['js'];?>

	
	<script language="JavaScript" type="text/javascript">
		var tinyMCE=false;
		ls.lang.load(<?php echo smarty_function_json(array('var'=>$_smarty_tpl->getVariable('aLangJs')->value),$_smarty_tpl);?>
);
	</script>
	
	<?php echo smarty_function_hook(array('run'=>'html_head_end'),$_smarty_tpl);?>

        
        
        <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setCustomVar',
                           1,
                           'User',
                           '<?php if ($_smarty_tpl->getVariable('oUserCurrent')->value){?><?php echo $_smarty_tpl->getVariable('oUserCurrent')->value->getLogin();?>
<?php }else{ ?>Guest<?php }?>',
                           1]);
          _gaq.push(['_setAccount', 'UA-24182259-3']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>
        
</head>


<body onload="prettyPrint()">
        
        <!-- Yandex.Metrika counter -->
        <div style="display:none;"><script type="text/javascript">
        (function(w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
var yaParams = {'Логин': '<?php if ($_smarty_tpl->getVariable('oUserCurrent')->value){?><?php echo $_smarty_tpl->getVariable('oUserCurrent')->value->getLogin();?>
<?php }else{ ?>Гость<?php }?>'};
                    w.yaCounter10183702 = new Ya.Metrika({id:10183702, params: yaParams, enableAll: true});
                }
                catch(e) { }
            });
        })(window, "yandex_metrika_callbacks");
        </script></div>
        <script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript" defer="defer"></script>
        <noscript><div><img src="//mc.yandex.ru/watch/10183702" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
        
    
	<?php echo smarty_function_hook(array('run'=>'body_begin'),$_smarty_tpl);?>

	<?php $_template = new Smarty_Internal_Template('header_top.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	<?php $_template = new Smarty_Internal_Template('nav.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

	<div id="container">
		<div id="wrapper" class="<?php if ($_smarty_tpl->getVariable('oUserCurrent')->value&&$_smarty_tpl->getVariable('showUpdateButton')->value){?>show-update-button<?php }?> <?php if ($_smarty_tpl->getVariable('showWhiteBack')->value){?>white-back<?php }?>">
			<div id="content" <?php if ($_smarty_tpl->getVariable('noSidebar')->value){?>style="width: 100%"<?php }?>>
				<div id="content-inner">
					<?php $_template = new Smarty_Internal_Template('window_login.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
					<?php $_template = new Smarty_Internal_Template('system_message.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
					
					<?php echo smarty_function_hook(array('run'=>'content_begin'),$_smarty_tpl);?>

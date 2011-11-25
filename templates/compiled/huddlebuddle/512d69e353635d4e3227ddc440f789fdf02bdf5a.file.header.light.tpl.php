<?php /* Smarty version Smarty-3.0.8, created on 2011-11-25 05:47:17
         compiled from "/var/www/alpha.huddlebuddle.org/templates/skin/huddlebuddle/header.light.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8912214024ecf01b553bbe0-84636108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '512d69e353635d4e3227ddc440f789fdf02bdf5a' => 
    array (
      0 => '/var/www/alpha.huddlebuddle.org/templates/skin/huddlebuddle/header.light.tpl',
      1 => 1322016141,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8912214024ecf01b553bbe0-84636108',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_hook')) include '/var/www/alpha.huddlebuddle.org/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_cfg')) include '/var/www/alpha.huddlebuddle.org/engine/modules/viewer/plugs/function.cfg.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html lang="ru">

<head>
	<?php echo smarty_function_hook(array('run'=>'html_head_begin'),$_smarty_tpl);?>

	<title><?php echo $_smarty_tpl->getVariable('sHtmlTitle')->value;?>
</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />	
	
	<?php echo $_smarty_tpl->getVariable('aHtmlHeadFiles')->value['css'];?>

	
	<?php if ($_smarty_tpl->getVariable('bRefreshToHome')->value){?>
		<meta  HTTP-EQUIV="Refresh" CONTENT="3; URL=<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
/">
	<?php }?>

        <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-24182259-3']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>

	<?php echo smarty_function_hook(array('run'=>'html_head_end'),$_smarty_tpl);?>

</head>

<body>

<!-- Yandex.Metrika counter -->
        <div style="display:none;"><script type="text/javascript">
        (function(w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter10183702 = new Ya.Metrika({id:10183702, enableAll: true});
                }
                catch(e) { }
            });
        })(window, "yandex_metrika_callbacks");
        </script></div>
        <script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript" defer="defer"></script>
        <noscript><div><img src="//mc.yandex.ru/watch/10183702" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->

<?php echo smarty_function_hook(array('run'=>'body_begin'),$_smarty_tpl);?>

<div id="container">
	<div id="header-light">
		<a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
" class="logo"><img src="<?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/HB.png" alt="HuddleBuddle"></a>
		</div>
	
	<?php if (!$_smarty_tpl->getVariable('noShowSystemMessage')->value){?>
		<?php $_template = new Smarty_Internal_Template('system_message.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	<?php }?>
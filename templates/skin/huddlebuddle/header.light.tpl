<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html lang="ru">

<head>
	{hook run='html_head_begin'}
	<title>{$sHtmlTitle}</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />	
	
	{$aHtmlHeadFiles.css}
	
	{if $bRefreshToHome}
		<meta  HTTP-EQUIV="Refresh" CONTENT="3; URL={cfg name='path.root.web'}/">
	{/if}
{literal}
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
{/literal}
	{hook run='html_head_end'}
</head>

<body>
{literal}
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
{/literal}
{hook run='body_begin'}
<div id="container">
	<div id="header-light">
		<a href="{cfg name='path.root.web'}" class="logo"><img src="{cfg name='path.static.skin'}/images/HB.png" alt="HuddleBuddle"></a>
		</div>
	
	{if !$noShowSystemMessage}
		{include file='system_message.tpl'}
	{/if}
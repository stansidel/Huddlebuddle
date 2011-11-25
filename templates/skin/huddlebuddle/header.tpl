<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html lang="ru">
<head>
	{hook run='html_head_begin'}
	
	<title>{$sHtmlTitle}</title>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="{$sHtmlDescription}" />
	<meta name="keywords" content="{$sHtmlKeywords}" />

	{$aHtmlHeadFiles.css}

	<link href="{cfg name='path.static.skin'}/images/favicon.ico" rel="shortcut icon" />
	<link rel="search" type="application/opensearchdescription+xml" href="{router page='search'}opensearch/" title="{cfg name='view.name'}" />

	{if $aHtmlRssAlternate}
		<link rel="alternate" type="application/rss+xml" href="{$aHtmlRssAlternate.url}" title="{$aHtmlRssAlternate.title}">
	{/if}
	
	{if $bRefreshToHome}
		<meta  HTTP-EQUIV="Refresh" CONTENT="3; URL={cfg name='path.root.web'}/">
	{/if}
	
	<script language="JavaScript" type="text/javascript">
	var DIR_WEB_ROOT 			= '{cfg name="path.root.web"}';
	var DIR_STATIC_SKIN 		= '{cfg name="path.static.skin"}';
	var DIR_ROOT_ENGINE_LIB     = '{cfg name="path.root.engine_lib"}'; 
	var LIVESTREET_SECURITY_KEY = '{$LIVESTREET_SECURITY_KEY}';
	var SESSION_ID              = '{$_sPhpSessionId}'; 
	var BLOG_USE_TINYMCE		= '{cfg name="view.tinymce"}';

	var TINYMCE_LANG='en';
	{if $oConfig->GetValue('lang.current')=='russian'}
		TINYMCE_LANG='ru';
	{/if}

	var aRouter = new Array();
	{foreach from=$aRouter key=sPage item=sPath}
		aRouter['{$sPage}'] = '{$sPath}';
	{/foreach}
	</script>

	{$aHtmlHeadFiles.js}
	
	<script language="JavaScript" type="text/javascript">
		var tinyMCE=false;
		ls.lang.load({json var=$aLangJs});
	</script>
	
	{hook run='html_head_end'}
        
        {literal}
        <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setCustomVar',
                           1,
                           'User',
                           '{/literal}{if $oUserCurrent}{$oUserCurrent->getLogin()}{else}Guest{/if}{literal}',
                           1]);
          _gaq.push(['_setAccount', 'UA-24182259-3']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>
        {/literal}
</head>


<body onload="prettyPrint()">
        {literal}
        <!-- Yandex.Metrika counter -->
        <div style="display:none;"><script type="text/javascript">
        (function(w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
var yaParams = {'Логин': '{/literal}{if $oUserCurrent}{$oUserCurrent->getLogin()}{else}Гость{/if}{literal}'};
                    w.yaCounter10183702 = new Ya.Metrika({id:10183702, params: yaParams, enableAll: true});
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
	{include file='header_top.tpl'}
	{include file='nav.tpl'}

	<div id="container">
		<div id="wrapper" class="{if $oUserCurrent and $showUpdateButton}show-update-button{/if} {if $showWhiteBack}white-back{/if}">
			<div id="content" {if $noSidebar}style="width: 100%"{/if}>
				<div id="content-inner">
					{include file='window_login.tpl'}
					{include file='system_message.tpl'}
					
					{hook run='content_begin'}
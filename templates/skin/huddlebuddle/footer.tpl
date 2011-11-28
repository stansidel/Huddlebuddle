			{hook run='content_end'}
			</div><!-- /content-inner -->
		</div><!-- /content -->

		{if !$noSidebar}
			{include file='sidebar.tpl'}
		{/if}
	</div><!-- /wrapper -->

	<div id="footer">
		<div id="footer-inner">
			<div class="right">&copy; Powered by <a href="http://livestreetcms.ru">LiveStreet CMS</a></div>
			{if $oUserCurrent and $oUserCurrent->isAdministrator()} <a href="{cfg name='path.root.web'}/admin">{$aLang.admin_title}</a>{/if}
		</div>
	</div>

</div><!-- /container -->

<script type="text/javascript">
SyntaxHighlighter.autoloader(
  'js jscript javascript  {cfg name='path.static.skin'}/js/shBrushJScript.js',
  'applescript            {cfg name='path.static.skin'}/js/shBrushAppleScript.js',
  'cpp c            {cfg name='path.static.skin'}/js/shBrushCpp.js',
  'bash                {cfg name='path.static.skin'}/js/shBrushBash.js',
  'css            {cfg name='path.static.skin'}/js/shBrushCss.js',
  'csharp c-sharp            {cfg name='path.static.skin'}/js/shBrushCSharp.js',
  'java            {cfg name='path.static.skin'}/js/shBrushJava.js',
  'applescript            {cfg name='path.static.skin'}/js/shBrushAppleScript.js',
  'perl pl            {cfg name='path.static.skin'}/js/shBrushPerl.js',
  'php            {cfg name='path.static.skin'}/js/shBrushPhp.js',
  'powershell ps            {cfg name='path.static.skin'}/js/shBrushPowerShell.js',
  'python py            {cfg name='path.static.skin'}/js/shBrushPython.js',
  'ruby rails ror            {cfg name='path.static.skin'}/js/shBrushRuby.js',
  'sql            {cfg name='path.static.skin'}/js/shBrushSql.js',
  'vb visualbasic vbnet            {cfg name='path.static.skin'}/js/shBrushVb.js',
  'xml xhtml html htm xslt            {cfg name='path.static.skin'}/js/shBrushXml.js'
);

SyntaxHighlighter.all();
</script>

{hook run='body_end'}

</body>
</html>
<?php /* Smarty version Smarty-3.0.8, created on 2011-11-15 07:00:16
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1658649804ec1e3d02cd421-38837895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aefa706bedf9e0ff9ad0f5893587be80894b2b8f' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/footer.tpl',
      1 => 1321329614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1658649804ec1e3d02cd421-38837895',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_hook')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_cfg')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.cfg.php';
?>			<?php echo smarty_function_hook(array('run'=>'content_end'),$_smarty_tpl);?>

			</div><!-- /content-inner -->
		</div><!-- /content -->

		<?php if (!$_smarty_tpl->getVariable('noSidebar')->value){?>
			<?php $_template = new Smarty_Internal_Template('sidebar.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
		<?php }?>
	</div><!-- /wrapper -->

	<div id="footer">
		<div id="footer-inner">
			<div class="right">&copy; Powered by <a href="http://livestreetcms.ru">LiveStreet CMS</a></div>
			<?php if ($_smarty_tpl->getVariable('oUserCurrent')->value&&$_smarty_tpl->getVariable('oUserCurrent')->value->isAdministrator()){?> <a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
/admin"><?php echo $_smarty_tpl->getVariable('aLang')->value['admin_title'];?>
</a><?php }?>
		</div>
	</div>

</div><!-- /container -->

<script type="text/javascript">
SyntaxHighlighter.autoloader(
  'js jscript javascript  <?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/js/shBrushJScript.js',
  'applescript            <?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/js/shBrushAppleScript.js',
  'cpp c            <?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/js/shBrushCpp.js',
  'bash                <?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/js/shBrushBash.js',
  'css            <?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/js/shBrushCss.js',
  'csharp c-sharp            <?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/js/shBrushCSharp.js',
  'java            <?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/js/shBrushJava.js',
  'applescript            <?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/js/shBrushAppleScript.js',
  'perl pl            <?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/js/shBrushPerl.js',
  'php            <?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/js/shBrushPhp.js',
  'powershell ps            <?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/js/shBrushPowerShell.js',
  'python py            <?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/js/shBrushPython.js',
  'ruby rails ror            <?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/js/shBrushRuby.js',
  'sql            <?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/js/shBrushSql.js',
  'vb visualbasic vbnet            <?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/js/shBrushVb.js',
  'xml xhtml html htm xslt            <?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/js/shBrushXml.js'
);

SyntaxHighlighter.all();
</script>

<?php echo smarty_function_hook(array('run'=>'body_end'),$_smarty_tpl);?>


</body>
</html>
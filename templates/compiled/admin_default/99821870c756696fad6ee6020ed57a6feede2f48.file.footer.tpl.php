<?php /* Smarty version Smarty-3.0.8, created on 2011-11-11 06:14:45
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11305401584ebc9325a66143-67113502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99821870c756696fad6ee6020ed57a6feede2f48' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/footer.tpl',
      1 => 1317821040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11305401584ebc9325a66143-67113502',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_hook')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_cfg')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.cfg.php';
?><?php echo smarty_function_hook(array('run'=>'content_end'),$_smarty_tpl);?>

</div>
<!-- /Content -->

</div>

<!-- Footer -->
<div id="footer">
    <div class="right">
        © Powered by <a href="http://livestreet.ru" title="Free social engine">«LiveStreet»</a><br/>
        <a href="<?php echo smarty_function_router(array('page'=>'page'),$_smarty_tpl);?>
about/"><?php echo $_smarty_tpl->getVariable('aLang')->value['page_about'];?>
</a>
    </div>
    Design by — <a href="http://www.xeoart.com/">Студия XeoArt</a>&nbsp;<img
        src="<?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/xeoart.gif" border="0">
</div>
<!-- /Footer -->

</div>
<?php echo smarty_function_hook(array('run'=>'body_end'),$_smarty_tpl);?>

</body>
</html>
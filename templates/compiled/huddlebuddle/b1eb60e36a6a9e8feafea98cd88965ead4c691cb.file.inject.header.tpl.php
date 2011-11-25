<?php /* Smarty version Smarty-3.0.8, created on 2011-11-14 12:38:48
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/facebook/templates/skin/default//inject.header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180915154ec0e1a8acdff6-52124253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1eb60e36a6a9e8feafea98cd88965ead4c691cb' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/facebook/templates/skin/default//inject.header.tpl',
      1 => 1317915661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180915154ec0e1a8acdff6-52124253',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cfg')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.cfg.php';
?>        <meta property="og:type" content="artile" />
        <meta property="og:title" content="<?php echo $_smarty_tpl->getVariable('sTitle')->value;?>
" />
        <meta property="og:image" content="<?php echo $_smarty_tpl->getVariable('sImage')->value;?>
" />
        <meta property="fb:app_id" content="<?php echo smarty_function_cfg(array('name'=>"plugin.facebook.application.id"),$_smarty_tpl);?>
" />

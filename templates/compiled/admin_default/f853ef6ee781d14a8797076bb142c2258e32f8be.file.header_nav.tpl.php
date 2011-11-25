<?php /* Smarty version Smarty-3.0.8, created on 2011-11-11 06:14:45
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/header_nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14486565074ebc932578a742-87386410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f853ef6ee781d14a8797076bb142c2258e32f8be' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/header_nav.tpl',
      1 => 1317821040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14486565074ebc932578a742-87386410',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
?><!-- Navigation -->
<div id="nav">

<?php if ($_smarty_tpl->getVariable('menu')->value){?>
    <?php if (in_array($_smarty_tpl->getVariable('menu')->value,$_smarty_tpl->getVariable('aMenuContainers')->value)){?><?php echo $_smarty_tpl->getVariable('aMenuFetch')->value[$_smarty_tpl->getVariable('menu')->value];?>
<?php }else{ ?><?php $_template = new Smarty_Internal_Template("menu.".($_smarty_tpl->getVariable('menu')->value).".tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?><?php }?>
<?php }?>


    <div class="right"></div>
    <!--<a href="#" class="rss" onclick="return false;"></a>-->
    <div class="search">
        <form action="<?php echo smarty_function_router(array('page'=>'search'),$_smarty_tpl);?>
topics/" method="GET">
            <input class="text" type="text" onblur="if (!value) value=defaultValue"
                   onclick="if (value==defaultValue) value=''" value="<?php echo $_smarty_tpl->getVariable('aLang')->value['search'];?>
" name="q"/>
            <input class="button" type="submit" value=""/>
        </form>
    </div>
</div>
<!-- /Navigation -->
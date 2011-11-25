<?php /* Smarty version Smarty-3.0.8, created on 2011-11-11 06:14:45
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1098931874ebc932546ab50-17091956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8eea52436f4fc1287158e564079b1dcdce0377d2' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/header.tpl',
      1 => 1317821040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1098931874ebc932546ab50-17091956',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_hook')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_cfg')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/function.cfg.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="ru" xml:lang="ru">

<head>
<?php echo smarty_function_hook(array('run'=>'html_head_begin'),$_smarty_tpl);?>

    <title><?php echo $_smarty_tpl->getVariable('sHtmlTitle')->value;?>
</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>

<?php echo $_smarty_tpl->getVariable('aHtmlHeadFiles')->value['css'];?>


    <link href="<?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/favicon.ico" rel="shortcut icon"/>


    <script type="text/javascript">
        var DIR_WEB_ROOT = '<?php echo smarty_function_cfg(array('name'=>"path.root.web"),$_smarty_tpl);?>
';
        var DIR_STATIC_SKIN = '<?php echo smarty_function_cfg(array('name'=>"path.static.skin"),$_smarty_tpl);?>
';
        var DIR_ROOT_ENGINE_LIB = '<?php echo smarty_function_cfg(array('name'=>"path.root.engine_lib"),$_smarty_tpl);?>
';
        var BLOG_USE_TINYMCE = '<?php echo smarty_function_cfg(array('name'=>"view.tinymce"),$_smarty_tpl);?>
';
        var TALK_RELOAD_PERIOD = '<?php echo smarty_function_cfg(array('name'=>"module.talk.period"),$_smarty_tpl);?>
';
        var TALK_RELOAD_REQUEST = '<?php echo smarty_function_cfg(array('name'=>"module.talk.request"),$_smarty_tpl);?>
';
        var TALK_RELOAD_MAX_ERRORS = '<?php echo smarty_function_cfg(array('name'=>"module.talk.max_errors"),$_smarty_tpl);?>
';
        var LIVESTREET_SECURITY_KEY = '<?php echo $_smarty_tpl->getVariable('LIVESTREET_SECURITY_KEY')->value;?>
';
        var SESSION_ID = '<?php echo $_smarty_tpl->getVariable('_sPhpSessionId')->value;?>
';

        var TINYMCE_LANG = 'en';
        <?php if ($_smarty_tpl->getVariable('oConfig')->value->GetValue('lang.current')=='russian'){?>
        TINYMCE_LANG = 'ru';
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



    <script type="text/javascript">
        var tinyMCE = false;
        var msgErrorBox = new Roar({
            position: 'upperRight',
            className: 'roar-error',
            margin: {x: 30, y: 10}
        });
        var msgNoticeBox = new Roar({
            position: 'upperRight',
            className: 'roar-notice',
            margin: {x: 30, y: 10}
        });
    </script>


<?php if ($_smarty_tpl->getVariable('oUserCurrent')->value&&$_smarty_tpl->getVariable('oConfig')->value->GetValue('module.talk.reload')){?>
    
        <script type="text/javascript">
            var talkNewMessages = new lsTalkMessagesClass({
                reload: {
                    request: TALK_RELOAD_REQUEST,
                    url: DIR_WEB_ROOT + '/include/ajax/talkNewMessages.php',
                    errors: TALK_RELOAD_MAX_ERRORS
                }
            });
            (function() {
                talkNewMessages.get();
            }).periodical(TALK_RELOAD_PERIOD);
        </script>
    
<?php }?>

<?php echo smarty_function_hook(array('run'=>'html_head_end'),$_smarty_tpl);?>

</head>

<body onload="prettyPrint()">

<?php echo smarty_function_hook(array('run'=>'body_begin'),$_smarty_tpl);?>


<div id="debug" style="border: 2px #dd0000 solid; display: none;"></div>

<div id="container">
<?php $_template = new Smarty_Internal_Template('header_top.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<?php $_template = new Smarty_Internal_Template('header_nav.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

    <div id="wrapper" class="<?php if (!$_smarty_tpl->getVariable('showUpdateButton')->value){?>update-hide<?php }?> <?php if ($_smarty_tpl->getVariable('showWhiteBack')->value){?>white-back<?php }?>">

        <?php if (!$_smarty_tpl->getVariable('bNoSidebar')->value){?>
        <?php $_template = new Smarty_Internal_Template('sidebar.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
        <?php }?>
            
        <!-- Content -->
        <div id="content" class="-box" <?php if ($_smarty_tpl->getVariable('bNoSidebar')->value){?>style="width:100%;"<?php }?>>

        <?php if (!$_smarty_tpl->getVariable('noShowSystemMessage')->value){?>
            <?php $_template = new Smarty_Internal_Template('system_message.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
        <?php }?>

        <?php echo smarty_function_hook(array('run'=>'content_begin'),$_smarty_tpl);?>

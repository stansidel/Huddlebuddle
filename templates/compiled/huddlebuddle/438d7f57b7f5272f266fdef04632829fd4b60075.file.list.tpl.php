<?php /* Smarty version Smarty-3.0.8, created on 2011-11-16 10:17:43
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionUserfeed/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19575882144ec36397c6ad32-36548557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '438d7f57b7f5272f266fdef04632829fd4b60075' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionUserfeed/list.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19575882144ec36397c6ad32-36548557',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('menu','blog'); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>


<?php $_template = new Smarty_Internal_Template('topic_list.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<?php if (count($_smarty_tpl->getVariable('aTopics')->value)){?>
    <?php if (!$_smarty_tpl->getVariable('bDisableGetMoreButton')->value){?>
        <div id="userfeed_loaded_topics"></div>
        <input type="hidden" id="userfeed_last_id" value="<?php echo $_smarty_tpl->getVariable('iUserfeedLastId')->value;?>
" />
        <a class="stream-get-more" id="userfeed_get_more" href="javascript:ls.userfeed.getMore()"><?php echo $_smarty_tpl->getVariable('aLang')->value['userfeed_get_more'];?>
 &darr;</a>
    <?php }?>
<?php }else{ ?>
    <p style="margin-left:30px"><?php echo $_smarty_tpl->getVariable('aLang')->value['userfeed_no_events'];?>
</p>
<?php }?>

<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
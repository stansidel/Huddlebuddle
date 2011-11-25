<?php /* Smarty version Smarty-3.0.8, created on 2011-11-14 12:47:37
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/facebook/templates/skin/default//inject.add_topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2144840034ec0e3b9d98357-22122389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '054c927f2c027c7e17a44dbf50e587907398782f' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/facebook/templates/skin/default//inject.add_topic.tpl',
      1 => 1317915661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2144840034ec0e3b9d98357-22122389',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_declension')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/modules/viewer/plugs/modifier.declension.php';
?><div style="border-top:1px dotted navy;border-bottom:1px dotted navy;padding:5px 0; margin:10px 0;">
<img src="<?php echo $_smarty_tpl->getVariable('sFacebookTemplateWebPathPlugin')->value;?>
images/facebook.jpg" alt="Facebook" align="right">
<?php if ($_smarty_tpl->getVariable('bEditMode')->value&&$_smarty_tpl->getVariable('bPublished')->value){?>
    <p><strong>Этот топик опубликован в Facebook</strong></p>
    <?php if ($_smarty_tpl->getVariable('oUserCurrent')->value&&$_smarty_tpl->getVariable('oUserCurrent')->value->isAdministrator()){?>
        <p><label for="topic_delete_facebook"><input type="checkbox" value="1" class="checkbox" name="topic_delete_facebook" id="topic_delete_facebook"> &mdash; удалить из Facebook</label><br>
        <span class="form_note">Если отметить эту галку, то анонс топика будет удален со страницы в Facebook (опция доступна только администраторам)</span></p>
    <?php }?>
<?php }elseif(!$_smarty_tpl->getVariable('bPublishBlocked')->value){?>
    <?php if ($_smarty_tpl->getVariable('oUserCurrent')->value&&$_smarty_tpl->getVariable('oUserCurrent')->value->isAdministrator()){?>
    <p><label for="topic_publish_facebook"><input type="checkbox" value="1" class="checkbox" name="topic_publish_facebook" id="topic_publish_facebook"> &mdash; опубликовать в Facebook</label><br>
    <span class="form_note">Если отметить эту галку, то анонс топика будет опубликован в Facebook (опция доступна только администраторам)</span></p>
    <?php }else{ ?>
        <?php if ($_smarty_tpl->getVariable('aPluginConfig')->value['strategy']=='STRATEGY_MAIN'){?>
            <p>Если этот топик попадет на главную страницу, анонс на него будет добавлен на <a href="<?php echo $_smarty_tpl->getVariable('aPluginConfig')->value['page']['url'];?>
" target="_blank">страничку нашего сайта в Facebook</a></p>
        <?php }elseif($_smarty_tpl->getVariable('aPluginConfig')->value['strategy']=='STRATEGY_RATING'){?>
            <p>Если за этот топик <?php echo smarty_modifier_declension($_smarty_tpl->getVariable('aPluginConfig')->value['STRATEGY_RATING']['rating'],'проголосует;проголосуют;проголосуют','ru');?>
 <?php echo $_smarty_tpl->getVariable('aPluginConfig')->value['STRATEGY_RATING']['rating'];?>
 <?php echo smarty_modifier_declension($_smarty_tpl->getVariable('aPluginConfig')->value['STRATEGY_RATING']['rating'],'человек;человека;человек','ru');?>
, анос на него будет добавлен на <a href="<?php echo $_smarty_tpl->getVariable('aPluginConfig')->value['page']['url'];?>
" target="_blank">страничку нашего сайта в Facebook</a></p>
        <?php }?>
    <?php }?>
<?php }?>

<?php if (!$_smarty_tpl->getVariable('bPublished')->value&&$_smarty_tpl->getVariable('oUserCurrent')->value&&$_smarty_tpl->getVariable('oUserCurrent')->value->isAdministrator()){?>
    <?php if ($_smarty_tpl->getVariable('bPublishBlocked')->value){?>
    <p><label for="topic_allow_facebook"><input type="checkbox" value="1" class="checkbox" name="topic_allow_facebook" id="topic_allow_facebook"> &mdash; разрешить добавление в Facebook</label><br>
    <span class="form_note">Если отметить эту галку, то анонс топика будет опубликован в Facebook при выполнении условий добавления (опция доступна только администраторам)</span></p>
    <?php }else{ ?>
    <p><label for="topic_deny_facebook"><input type="checkbox" value="1" class="checkbox" name="topic_deny_facebook" id="topic_deny_facebook"> &mdash; заблокировать добавление в Facebook</label><br>
    <span class="form_note">Если отметить эту галку, то анонс топика не попадет в Facebook при выполнении условий добавления (опция доступна только администраторам)</span></p>
    <?php }?>
<?php }?>
</div>
<?php /* Smarty version Smarty-3.0.8, created on 2011-11-15 00:06:50
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionTalk/speakers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7283805674ec182ea58be52-20671851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd454d436a0a90a3c73bc9a0a79f460df883aa7c5' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionTalk/speakers.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7283805674ec182ea58be52-20671851',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="block">
	<h2><?php echo $_smarty_tpl->getVariable('aLang')->value['talk_speaker_title'];?>
</h2>

	<?php if ($_smarty_tpl->getVariable('oTalk')->value->getUserId()==$_smarty_tpl->getVariable('oUserCurrent')->value->getId()||$_smarty_tpl->getVariable('oUserCurrent')->value->isAdministrator()){?>
		<form onsubmit="return ls.talk.addToTalk(<?php echo $_smarty_tpl->getVariable('oTalk')->value->getId();?>
);">
			<p><label><?php echo $_smarty_tpl->getVariable('aLang')->value['talk_speaker_add_label'];?>
:<br />
			<input type="text" id="talk_speaker_add" name="add" class="input-wide autocomplete-users" /></label></p>
			<input type="hidden" id="talk_id" value="<?php echo $_smarty_tpl->getVariable('oTalk')->value->getId();?>
" />
		</form>
	<?php }?>

	<div id="speaker_list_block">
		<?php if ($_smarty_tpl->getVariable('oTalk')->value->getTalkUsers()){?>
			<ul class="list" id="speaker_list">
				<?php  $_smarty_tpl->tpl_vars['oTalkUser'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('oTalk')->value->getTalkUsers(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oTalkUser']->key => $_smarty_tpl->tpl_vars['oTalkUser']->value){
?>
					<?php if ($_smarty_tpl->getVariable('oTalkUser')->value->getUserId()!=$_smarty_tpl->getVariable('oUserCurrent')->value->getId()){?>
					<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->getVariable('oTalkUser')->value->getUser(), null, null);?>
						<?php if ($_smarty_tpl->getVariable('oTalkUser')->value->getUserActive()!=$_smarty_tpl->getVariable('TALK_USER_DELETE_BY_AUTHOR')->value){?>
							<li id="speaker_item_<?php echo $_smarty_tpl->getVariable('oTalkUser')->value->getUserId();?>
_area">
								<a class="user <?php if ($_smarty_tpl->getVariable('oTalkUser')->value->getUserActive()!=$_smarty_tpl->getVariable('TALK_USER_ACTIVE')->value){?>inactive<?php }?>" href="<?php echo $_smarty_tpl->getVariable('oUser')->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->getVariable('oUser')->value->getLogin();?>
</a>
								<?php if ($_smarty_tpl->getVariable('oTalkUser')->value->getUserActive()==$_smarty_tpl->getVariable('TALK_USER_ACTIVE')->value&&($_smarty_tpl->getVariable('oTalk')->value->getUserId()==$_smarty_tpl->getVariable('oUserCurrent')->value->getId()||$_smarty_tpl->getVariable('oUserCurrent')->value->isAdministrator())){?>- <a href="#" id="speaker_item_<?php echo $_smarty_tpl->getVariable('oTalkUser')->value->getUserId();?>
" class="delete"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_delete'];?>
</a><?php }?>
							</li>
						<?php }?>
					<?php }?>
				<?php }} ?>
			</ul>
		<?php }?>
	</div>
</div>
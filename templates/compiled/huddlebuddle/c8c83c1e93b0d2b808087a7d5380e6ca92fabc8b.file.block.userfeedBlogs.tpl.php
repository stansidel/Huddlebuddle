<?php /* Smarty version Smarty-3.0.8, created on 2011-11-16 10:17:43
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/block.userfeedBlogs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8478013154ec36397f048b1-29831510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8c83c1e93b0d2b808087a7d5380e6ca92fabc8b' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/templates/skin/huddlebuddle/block.userfeedBlogs.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8478013154ec36397f048b1-29831510',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/sidelnikov/data/www/huddlebuddle.org/engine/lib/external/Smarty/libs/plugins/modifier.escape.php';
?><?php if ($_smarty_tpl->getVariable('oUserCurrent')->value){?>
<div class="block stream-settings">
	<h2><?php echo $_smarty_tpl->getVariable('aLang')->value['userfeed_block_blogs_title'];?>
</h2>
	
	<p class="sp-note"><?php echo $_smarty_tpl->getVariable('aLang')->value['userfeed_settings_note_follow_blogs'];?>
</p>

	<?php if (count($_smarty_tpl->getVariable('aUserfeedBlogs')->value)){?>
		<ul class="stream-settings-blogs">
			<?php  $_smarty_tpl->tpl_vars['oBlog'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aUserfeedBlogs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oBlog']->key => $_smarty_tpl->tpl_vars['oBlog']->value){
?>
				<?php $_smarty_tpl->tpl_vars['iBlogId'] = new Smarty_variable($_smarty_tpl->getVariable('oBlog')->value->getId(), null, null);?>
				<li><input class="userfeedBlogCheckbox input-checkbox"
							type="checkbox"
							<?php if (isset($_smarty_tpl->getVariable('aUserfeedSubscribedBlogs',null,true,false)->value[$_smarty_tpl->getVariable('iBlogId',null,true,false)->value])){?> checked="checked"<?php }?>
							onClick="if (jQuery(this).attr('checked')) { ls.userfeed.subscribe('blogs',<?php echo $_smarty_tpl->getVariable('iBlogId')->value;?>
) } else { ls.userfeed.unsubscribe('blogs',<?php echo $_smarty_tpl->getVariable('iBlogId')->value;?>
) } " />
					<a href="<?php echo $_smarty_tpl->getVariable('oBlog')->value->getUrlFull();?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oBlog')->value->getTitle(),'html');?>
</a>
				</li>
			<?php }} ?>
		</ul>
	<?php }else{ ?>
             <p><?php echo $_smarty_tpl->getVariable('aLang')->value['userfeed_no_blogs'];?>
</p>
        <?php }?>
</div>
<?php }?>
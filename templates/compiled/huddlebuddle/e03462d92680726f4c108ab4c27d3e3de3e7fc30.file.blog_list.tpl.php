<?php /* Smarty version Smarty-3.0.8, created on 2011-11-25 06:09:14
         compiled from "/var/www/alpha.huddlebuddle.org/templates/skin/huddlebuddle/blog_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9494471744ecf06dab96132-23581288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e03462d92680726f4c108ab4c27d3e3de3e7fc30' => 
    array (
      0 => '/var/www/alpha.huddlebuddle.org/templates/skin/huddlebuddle/blog_list.tpl',
      1 => 1319444580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9494471744ecf06dab96132-23581288',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_router')) include '/var/www/alpha.huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_modifier_escape')) include '/var/www/alpha.huddlebuddle.org/engine/lib/external/Smarty/libs/plugins/modifier.escape.php';
if (!is_callable('smarty_function_cfg')) include '/var/www/alpha.huddlebuddle.org/engine/modules/viewer/plugs/function.cfg.php';
?><table class="table blog-list-table table-people">
	<thead>
		<tr>
			<td><?php echo $_smarty_tpl->getVariable('aLang')->value['blogs_title'];?>
</td>
			<?php if ($_smarty_tpl->getVariable('oUserCurrent')->value){?><td align="center" width="100px"><?php echo $_smarty_tpl->getVariable('aLang')->value['blog_join_leave'];?>
</td><?php }?>
			<td align="center" width="60px"><?php echo $_smarty_tpl->getVariable('aLang')->value['blogs_readers'];?>
</td>														
			<td align="center" width="60px"><?php echo $_smarty_tpl->getVariable('aLang')->value['blogs_rating'];?>
</td>
		</tr>
	</thead>
	
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['oBlog'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aBlogs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oBlog']->key => $_smarty_tpl->tpl_vars['oBlog']->value){
?>
			<?php $_smarty_tpl->tpl_vars["oUserOwner"] = new Smarty_variable($_smarty_tpl->getVariable('oBlog')->value->getOwner(), null, null);?>
			<tr>
				<td>
					<a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->getVariable('oBlog')->value->getUrl();?>
/"><img src="<?php echo $_smarty_tpl->getVariable('oBlog')->value->getAvatarPath(24);?>
" alt="" class="avatar" /></a>
					<a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->getVariable('oBlog')->value->getUrl();?>
/" class="title"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('oBlog')->value->getTitle(),'html');?>
</a>
					<?php if ($_smarty_tpl->getVariable('oBlog')->value->getType()=='close'){?><img src="<?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/lock.png" alt="[x]" title="<?php echo $_smarty_tpl->getVariable('aLang')->value['blog_closed'];?>
" class="private" /><?php }?>
					<p><?php echo $_smarty_tpl->getVariable('aLang')->value['blogs_owner'];?>
: <a href="<?php echo smarty_function_router(array('page'=>'profile'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->getVariable('oUserOwner')->value->getLogin();?>
/" class="user"><?php echo $_smarty_tpl->getVariable('oUserOwner')->value->getLogin();?>
</a></p>
				</td>
				<?php if ($_smarty_tpl->getVariable('oUserCurrent')->value){?>
					<td align="center">
						<?php if ($_smarty_tpl->getVariable('oUserCurrent')->value->getId()!=$_smarty_tpl->getVariable('oBlog')->value->getOwnerId()&&$_smarty_tpl->getVariable('oBlog')->value->getType()=='open'){?>
							<div onclick="ls.blog.toggleJoin(this, <?php echo $_smarty_tpl->getVariable('oBlog')->value->getId();?>
); return false;" class="join <?php if ($_smarty_tpl->getVariable('oBlog')->value->getUserIsJoin()){?>active<?php }?>"></div>
						<?php }else{ ?>
							&mdash;
						<?php }?>
					</td>
				<?php }?>
				<td align="center" id="blog_user_count_<?php echo $_smarty_tpl->getVariable('oBlog')->value->getId();?>
" class="date"><?php echo $_smarty_tpl->getVariable('oBlog')->value->getCountUser();?>
</td>													
				<td align="center" class="rating"><strong><?php echo $_smarty_tpl->getVariable('oBlog')->value->getRating();?>
</strong></td>
			</tr>
		<?php }} ?>
	</tbody>
</table>
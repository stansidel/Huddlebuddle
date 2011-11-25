<?php /* Smarty version Smarty-3.0.8, created on 2011-11-25 05:47:17
         compiled from "/var/www/alpha.huddlebuddle.org/templates/skin/huddlebuddle/statistics_performance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7804498234ecf01b56c8793-11441519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b570893132489a9e68acfbfd5a3f3bdf5fece50' => 
    array (
      0 => '/var/www/alpha.huddlebuddle.org/templates/skin/huddlebuddle/statistics_performance.tpl',
      1 => 1319444580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7804498234ecf01b56c8793-11441519',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('bIsShowStatsPerformance')->value&&$_smarty_tpl->getVariable('oUserCurrent')->value&&$_smarty_tpl->getVariable('oUserCurrent')->value->isAdministrator()){?>
	<div class="stat-performance">	
		<table>
			<tr>
				<td>
					<h4>MySql</h4>
					query: <strong><?php echo $_smarty_tpl->getVariable('aStatsPerformance')->value['sql']['count'];?>
</strong><br />
					time: <strong><?php echo $_smarty_tpl->getVariable('aStatsPerformance')->value['sql']['time'];?>
</strong>
				</td>
				<td>
					<h4>Cache</h4>
					query: <strong><?php echo $_smarty_tpl->getVariable('aStatsPerformance')->value['cache']['count'];?>
</strong><br />
					&mdash; set: <strong><?php echo $_smarty_tpl->getVariable('aStatsPerformance')->value['cache']['count_set'];?>
</strong><br />
					&mdash; get: <strong><?php echo $_smarty_tpl->getVariable('aStatsPerformance')->value['cache']['count_get'];?>
</strong><br />
					time: <strong><?php echo $_smarty_tpl->getVariable('aStatsPerformance')->value['cache']['time'];?>
</strong>
				</td>
				<td>
					<h4>PHP</h4>	
					time load modules: <strong><?php echo $_smarty_tpl->getVariable('aStatsPerformance')->value['engine']['time_load_module'];?>
</strong><br />
					full time: <strong><?php echo $_smarty_tpl->getVariable('iTimeFullPerformance')->value;?>
</strong>
				</td>
			</tr>
		</table>
	</div>
<?php }?>
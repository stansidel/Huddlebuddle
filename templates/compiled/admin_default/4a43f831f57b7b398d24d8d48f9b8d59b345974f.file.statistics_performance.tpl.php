<?php /* Smarty version Smarty-3.0.8, created on 2011-11-11 06:14:45
         compiled from "/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/statistics_performance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5225615094ebc9325aec7e8-78593402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a43f831f57b7b398d24d8d48f9b8d59b345974f' => 
    array (
      0 => '/var/www/sidelnikov/data/www/huddlebuddle.org/plugins/aceadminpanel/templates/skin/admin_default/statistics_performance.tpl',
      1 => 1317821040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5225615094ebc9325aec7e8-78593402',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('bIsShowStatsPerformance')->value&&$_smarty_tpl->getVariable('oUserCurrent')->value&&$_smarty_tpl->getVariable('oUserCurrent')->value->isAdministrator()){?>
    <div class="stat-performance">
        <h2>Statistics performance</h2>
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
                <td>
                    <h4>Memory</h4>
                    memory limit: <strong><?php echo $_smarty_tpl->getVariable('aMemoryStats')->value['memory_limit'];?>
</strong><br />
                    usage: <strong><?php echo $_smarty_tpl->getVariable('aMemoryStats')->value['usage'];?>
</strong><br />
                    peak usage: <strong><?php echo $_smarty_tpl->getVariable('aMemoryStats')->value['peak_usage'];?>
</strong><br />
                </td>
            </tr>
        </table>
    </div>
<?php }?>
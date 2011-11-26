<?php
/*---------------------------------------------------------------------------
 * @Plugin Name: aceAdminPanel
 * @Plugin Id: aceadminpanel
 * @Plugin URI: 
 * @Description: Advanced Administrator's Panel for LiveStreet/ACE
 * @Version: 1.5.210
 * @Author: Vadim Shemarov (aka aVadim)
 * @Author URI: 
 * @LiveStreet Version: 0.5
 * @File Name: Plugin.class.php
 * @License: GNU GPL v2, http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *----------------------------------------------------------------------------
 */

require_once('Plugin.class.php');

class PluginAceadminpanel_ModulePlugin extends ModulePlugin
{
    const PLUGIN_ADMIN_FILE = 'plugins.adm';

    protected $sPluginsDatFile;

    public function Init()
    {
        parent::Init();
        if (version_compare(LS_VERSION, '0.5', '<')) {
            $this->sPluginsDatFile = self::PLUGIN_ACTIVATION_FILE;
        } else {
            $this->sPluginsDatFile = Config::Get('sys.plugins.activation_file');
        }
        if (!$this->sPluginsDatFile) $this->sPluginsDatFile = 'plugins.dat';
    }

    public function Activate($sPlugin)
    {
        $aConditions = array(
            '<' => 'lt', 'lt' => 'lt',
            '<=' => 'le', 'le' => 'le',
            '>' => 'gt', 'gt' => 'gt',
            '>=' => 'ge', 'ge' => 'ge',
            '==' => 'eq', '=' => 'eq', 'eq' => 'eq',
            '!=' => 'ne', '<>' => 'ne', 'ne' => 'ne'
        );
        $aPlugins = $this->GetList();
        if (!isset($aPlugins[$sPlugin])) return null;

        $sPluginName = ucfirst($sPlugin);

        $sFile = admFilePath("{$this->sPluginsDir}{$sPlugin}/Plugin{$sPluginName}.class.php");
        if (is_file($sFile)) {
            require_once($sFile);

            $sClassName = "Plugin{$sPluginName}";
            $oPlugin = new $sClassName;

            /**
             * Проверяем совместимость с версией LS
             */
            if (defined('LS_VERSION')
                and version_compare(LS_VERSION, $aPlugins[$sPlugin]['property']->requires->livestreet, '=<')
            ) {
                $this->Message_AddError(
                    $this->Lang_Get(
                        'plugins_activation_version_error',
                        array(
                             'version' => $aPlugins[$sPlugin]['property']->requires->livestreet)
                    ),
                    $this->Lang_Get('error'),
                    true
                );
                return false;
            }
            // * Проверяем наличие require-плагинов
            if ($aPlugins[$sPlugin]['property']->requires->plugins) {
                $aActivePlugins = $this->GetActivePlugins();
                $iError = 0;
                foreach ($aPlugins[$sPlugin]['property']->requires->plugins->children() as $sReqPlugin) {

                    // * Есть ли требуемый активный плагин
                    if (!in_array($sReqPlugin, $aActivePlugins)) {
                        $iError++;
                        $this->Message_AddError(
                            $this->Lang_Get('plugins_activation_requires_error',
                                            array(
                                                 'plugin' => ucfirst($sReqPlugin)
                                            )
                            ),
                            $this->Lang_Get('error'),
                            true
                        );
                    }
                        // * Проверка требуемой версии, если нужно
                    else {
                        if (isset($sReqPlugin['name'])) $sReqPluginName = (string)$sReqPlugin['name'];
                        else $sReqPluginName = ucfirst($sReqPlugin);

                        if (isset($sReqPlugin['version'])) {
                            $sReqVersion = $sReqPlugin['version'];
                            if (isset($sReqPlugin['condition']) && array_key_exists((string)$sReqPlugin['condition'], $aConditions)) {
                                $sReqCondition = $aConditions[(string)$sReqPlugin['condition']];
                            } else {
                                $sReqCondition = 'eq';
                            }
                            $sClassName = "Plugin{$sReqPlugin}";
                            $oReqPlugin = new $sClassName;

                            // * Версия может задавать константой
                            // * или возвращаться методом плагина GetVersion()
                            if (method_exists($oReqPlugin, 'GetVersion'))
                                $sReqPluginVersion = $oReqPlugin->GetVersion();
                            elseif (Config::Get('plugin.' . strtolower($sReqPlugin) . '.version'))
                                $sReqPluginVersion = Config::Get('plugin.' . strtolower($sReqPlugin) . '.version');
                            elseif (defined(strtoupper('VERSION_' . $sReqPluginName)))
                                $sReqPluginVersion = constant(strtoupper('VERSION_' . $sReqPluginName));
                            elseif (defined(strtoupper($sReqPluginName . '_VERSION')))
                                $sReqPluginVersion = constant(strtoupper($sReqPluginName . '_VERSION'));
                            else
                                $sReqPluginVersion = false;

                            if (!$sReqPluginVersion) {
                                $iError++;
                                $this->Message_AddError(
                                    $this->Lang_Get(
                                        'adm_plugin_havenot_getversion_method',
                                        array('plugin' => $sReqPluginName)
                                    ),
                                    $this->Lang_Get('error'),
                                    true
                                );
                            } else {
                                // * Если требуемый плагин возвращает версию, то проверяем ее
                                if (!version_compare($sReqPluginVersion, $sReqVersion, $sReqCondition)) {
                                    $sTextKey = 'adm_plugin_activation_reqversion_error_' . $sReqCondition;
                                    $iError++;
                                    $this->Message_AddError(
                                        $this->Lang_Get($sTextKey,
                                                        array(
                                                             'plugin' => $sReqPluginName,
                                                             'version' => $sReqVersion
                                                        )
                                        ),
                                        $this->Lang_Get('error'),
                                        true
                                    );
                                }
                            }
                        }
                    }
                }
                if ($iError) {
                    return false;
                }
            }

            // * Проверяем, не вступает ли данный плагин в конфликт с уже активированными
            // * (по поводу объявленных делегатов)
            $aPluginDelegates = $oPlugin->GetDelegates();
            $iError = 0;
            foreach ($this->aDelegates as $sGroup => $aReplaceList) {
                $iCount = 0;
                if (isset($aPluginDelegates[$sGroup])
                    and is_array($aPluginDelegates[$sGroup])
                        and $iCount = count($aOverlap = array_intersect_key($aReplaceList, $aPluginDelegates[$sGroup]))
                ) {
                    $iError += $iCount;
                    foreach ($aOverlap as $sResource => $aConflict) {
                        $this->Message_AddError(
                            $this->Lang_Get('plugins_activation_overlap', array(
                                                                               'resource' => $sResource,
                                                                               'delegate' => $aConflict['delegate'],
                                                                               'plugin' => $aConflict['sign']
                                                                          )),
                            $this->Lang_Get('error'), true
                        );
                    }
                }
                if ($iCount) {
                    return false;
                }
            }
            $bResult = $oPlugin->Activate();
        } else {
            // * Исполняемый файл плагина не найден
            $this->Message_AddError($this->Lang_Get('adm_plugin_file_not_found', array('file' => $sFile)), $this->Lang_Get('error'), true);
            return false;
        }

        if ($bResult) {
            // * Переопределяем список активированных пользователем плагинов
            $aActivePlugins = $this->GetActivePlugins();
            $aActivePlugins[] = $sPlugin;
            $bResult = $this->SetActivePlugins($aActivePlugins);
            if (!$bResult)
                $this->Message_AddError($this->Lang_Get('adm_plugin_write_error', array('file' => $this->sPluginsDatFile)), $this->Lang_Get('error'), true);
        }
        return $bResult;

    } // function Activate(...)

    public function PluginActivated($sPlugin)
    {
        return in_array(strtolower($sPlugin), $this->GetActivePlugins());
    }

    /**
     * Возвращает список плагинов, добавляя им приоритет загрузки
     *
     * @return  array
     */
    public function GetList()
    {
        $aPlugins = array();

        $aPluginList = parent::GetList();
        $aPluginsData = $this->GetPluginsData();
        $aActivePlugins = $this->GetActivePlugins();

        //$nPriority = sizeof($aPluginList);
        //foreach ($aActivePlugins as $sPlugin) {
        //    $aPriority[$sPlugin] = $nPriority--;
        //}
        foreach ($aPluginList as $sPluginCode => $aPliginProps) {
            if (!$aPliginProps['property']->priority) {
                if (isset($aPluginsData[$sPluginCode]) AND isset($aPluginsData[$sPluginCode]['priority'])) {
                    $aPliginProps['priority'] = $aPluginsData[$sPluginCode]['priority'];
                } elseif (isset($aPriority[$sPluginCode])) {
                    $aPliginProps['priority'] = $aPriority[$sPluginCode];
                } else {
                    $aPliginProps['priority'] = 0; //$nPriority;
                }
                //$nPriority = $aPliginProps['priority'] - 1;
            } else {
                $aPliginProps['priority'] = intval($aPliginProps['property']->priority);
            }
            //$aPliginProps['priority'] = 0;
            if ($aPliginProps['is_active'])
                $aPliginProps['adminpanel'] = $this->PluginAceadminpanel_Plugin_GetAdminInfo($aPliginProps);
            else
                $aPliginProps['adminpanel'] = array();
            $aPlugins[$sPluginCode] = $aPliginProps;
        }
        return $aPlugins;
    }

    public function GetAdminInfo($aPlugin)
    {
        $aAdminInfo = array();
        if ($aPlugin['property']->adminpanel) {
            $aAdminInfo = array('class' => (string)$aPlugin['property']->adminpanel->class);
        } else {
            $sPluginClass = 'Plugin' . ucfirst($aPlugin['code']);
            if (method_exists($sPluginClass, 'AdminPanel')) {
                $oPlugin = new $sPluginClass;
                $aAdminInfo = $oPlugin->AdminPanel();
            }
        }
        return $aAdminInfo;
    }

    /**
     * То же, что GetList(), но сортирует плагины по приоритету
     *
     * @param null $bActive
     * @return array
     */
    public function GetPluginList($bActive=null)
    {
        $aPlugins = $this->GetList();
        $aPlugins = $this->SortPluginsByPriority($aPlugins);
        $aPluginList = array();
        foreach ($aPlugins as $sPlugin => $aPlugin) {
            $aPlugin['id'] = $sPlugin;
            $oPlugin = Engine::GetEntity('PluginAceadminpanel_ModulePlugin_EntityPlugin', $aPlugin);
            $aPluginList[$sPlugin] = $oPlugin;
        }
        return $aPluginList;
    }

    public function GetPlugin($sPluginCode)
    {
        $aPliginList = $this->GetPluginList();
        if (isset($aPliginList[$sPluginCode]))
            return $aPliginList[$sPluginCode];
        else
            return null;
    }

    /**
     * Записывает список активных плагинов в файл PLUGINS.DAT
     *
     * @param   array|string    $aPlugins
     * @return  int|bool
     */
    public function SetActivePlugins($aPlugins)
    {
        if (!is_array($aPlugins)) $aPlugins = array($aPlugins);
        $aPlugins = array_unique(array_map('trim', $aPlugins));
        $i = file_put_contents($this->sPluginsDir . $this->sPluginsDatFile, implode(PHP_EOL, $aPlugins));
        return file_put_contents($this->sPluginsDir . $this->sPluginsDatFile, implode(PHP_EOL, $aPlugins));
    }


    public function _PluginCompareByPriority($aPlugin1, $aPlugin2)
    {
        if (!isset($aPlugin1['priority'])) $aPlugin1['priority'] = 0;
        if (!isset($aPlugin2['priority'])) $aPlugin2['priority'] = 0;
        if ($aPlugin1['priority'] == $aPlugin2['priority']) {
            return (($aPlugin1['code'] > $aPlugin2['code']) ? 1 : -1);
        }
        return (($aPlugin1['priority'] > $aPlugin2['priority']) ? -1 : 1);
    }

    public function SortPluginsByPriority($aPlugins)
    {
        uasort($aPlugins, array($this, '_PluginCompareByPriority'));
        return $aPlugins;
        if (!file_exists($this->sPluginsDir . self::PLUGIN_ADMIN_FILE))
            $this->SetPluginsData($aPlugins);
        return $aPlugins;
    }

    public function GetPluginsData()
    {
        $data = @file_get_contents($this->sPluginsDir . self::PLUGIN_ADMIN_FILE);
        if ($data) $aPluginsData = unserialize($data);
        else $aPluginsData = array();

        return $aPluginsData;
    }

    /**
     * Записывает доп. информацию о плагинах в файл PLUGINS.ADM
     *
     * @param   array|string $aPlugins
     */
    public function SetPluginsData($aPlugins)
    {
        $data = array();
        $aPluginList = array();
        foreach ($aPlugins as $aPlugin) {
            $data[$aPlugin['code']] = array('priority' => $aPlugin['priority']);
            if ($aPlugin['is_active'])
                $aPluginList[$aPlugin['priority']] = $aPlugin['code'];
        }
        file_put_contents($this->sPluginsDir . self::PLUGIN_ADMIN_FILE, serialize($data));

        if ($aPluginList) {
            // * Sort by priority and save
            krsort($aPluginList);
            $this->SetActivePlugins(array_values($aPluginList));
        }
    }
}

// EOF
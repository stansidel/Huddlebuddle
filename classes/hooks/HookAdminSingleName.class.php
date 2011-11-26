<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HuddlebuddleHooks
 *
 * @author Станислав
 */
class HookAdminSingleName extends Hook {
    public function RegisterHook() {
		//$this->AddHook('template_topic_show_info','TopicShowInfo',__CLASS__,-1000);
	}

	public function Statistics() {
		$oEngine=Engine::getInstance();
		
		$iTimeInit=$oEngine->GetTimeInit();
		$iTimeFull=round(microtime(true)-$iTimeInit,3);
		$this->Viewer_Assign('iTimeFullPerformance',$iTimeFull);
		
		$aStats=$oEngine->getStats();
		$aStats['cache']['time']=round($aStats['cache']['time'],5);
		$this->Viewer_Assign('aStatsPerformance',$aStats);
		
		$this->Viewer_Assign('bIsShowStatsPerformance',Router::GetIsShowStats());
		return $this->Viewer_Fetch('statistics_performance.tpl');
	}
        
        public function TopicShowInfo($oValues) {
            
            //$showSingleAdmin = $oConfig->GetValue('admin_actions.enabled') && $oConfig->GetValue('admin_actions.single_comments') && $oUser->isAdministrator();
        }
}

?>

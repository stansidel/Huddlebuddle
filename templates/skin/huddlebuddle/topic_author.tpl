{$showSingleAdmin = $oConfig->GetValue('admin_actions.enabled') && $oConfig->GetValue('admin_actions.single_topics') && $oUser->isAdministrator()}
{if $showSingleAdmin && (!$oUserCurrent || !$oUserCurrent->IsAdministrator())}
    <a href="{$oConfig->GetValue('admin_actions.url')}" {$hbClassLink}>{$oConfig->GetValue('admin_actions.name')}</a>
{else}
    <a href="{$oUser->getUserWebPath()}" {$hbClassLink}>{$oUser->getLogin()}
        {if $showSingleAdmin && $oUserCurrent != null && $oUserCurrent->IsAdministrator()}
            ({$oConfig->GetValue('admin_actions.name')})
        {/if}</a>
{/if}
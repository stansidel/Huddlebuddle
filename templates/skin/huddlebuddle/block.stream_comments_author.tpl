{$showSingleAdmin = $oConfig->GetValue('admin_actions.enabled') && $oUser->isAdministrator()}
{if !$oComment}
    {$showSingleAdmin = $showSingleAdmin && $oConfig->GetValue('admin_actions.single_topics')}
{else}
    {$showSingleAdmin = $showSingleAdmin && $oConfig->GetValue('admin_actions.single_comments')}
    {if $oComment->getTargetType() == "topic"}
        {$showSingleAdmin = $showSingleAdmin && ($oComment->getTarget()->GetUserId() != $oUser->getId() || $oConfig->GetValue('admin_actions.single_topics'))}
    {/if}
{/if}
{if $showSingleAdmin && (!$oUserCurrent || !$oUserCurrent->IsAdministrator())}
    <a href="{$oConfig->GetValue('admin_actions.url')}" class="user">{$oConfig->GetValue('admin_actions.name')}</a>
{else}
    <a href="{$oUser->getUserWebPath()}" class="user">{$oUser->getLogin()}
        {if $showSingleAdmin && $oUserCurrent != null && $oUserCurrent->IsAdministrator()}
            ({$oConfig->GetValue('admin_actions.name')})
        {/if}</a>
{/if}
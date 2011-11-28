<<<<<<< HEAD
{$showSingleAdmin = $oConfig->GetValue('admin_actions.enabled') && $oConfig->GetValue('admin_actions.single_comments') && $oUser->isAdministrator()}
{if $oComment->getTargetType() == "topic"}
    {$showSingleAdmin = $showSingleAdmin && ($oComment->getTarget()->GetUserId() != $oUser->getId() || $oConfig->GetValue('admin_actions.single_topics'))}
{/if}
{if $showSingleAdmin && ($oUserCurrent == null || !$oUserCurrent->IsAdministrator())}
    {* Отображаем единое имя для админа, если включены соответствующие настройки и это не комментарий автора текущего топика *}
    <li class="avatar"><a href="{$oConfig->GetValue('admin_actions.url')}"><img src="{$oConfig->GetValue('admin_actions.avatar_url')}" alt="avatar" /></a></li>
    <li class="username"><a href="{$oConfig->GetValue('admin_actions.url')}">{$oConfig->GetValue('admin_actions.name')}</a></li>
{else}
    <li class="avatar"><a href="{$oUser->getUserWebPath()}"><img src="{$oUser->getProfileAvatarPath(24)}" alt="avatar" /></a></li>
    <li class="username"><a href="{$oUser->getUserWebPath()}">{$oUser->getLogin()}
        {if $showSingleAdmin && $oUserCurrent != null && $oUserCurrent->IsAdministrator()}
            ({$oConfig->GetValue('admin_actions.name')})
        {/if}</a></li>
=======
{$showSingleAdmin = $oConfig->GetValue('admin_actions.enabled') && $oConfig->GetValue('admin_actions.single_comments') && $oUser->isAdministrator()}
{if $oComment->getTargetType() == "topic"}
    {$showSingleAdmin = $showSingleAdmin && ($oComment->getTarget()->GetUserId() != $oUser->getId() || $oConfig->GetValue('admin_actions.single_topics'))}
{/if}
{if $showSingleAdmin && ($oUserCurrent == null || !$oUserCurrent->IsAdministrator())}
    {* Отображаем единое имя для админа, если включены соответствующие настройки и это не комментарий автора текущего топика *}
    <li class="avatar"><a href="{$oConfig->GetValue('admin_actions.url')}"><img src="{$oConfig->GetValue('admin_actions.avatar_url')}" alt="avatar" /></a></li>
    <li class="username"><a href="{$oConfig->GetValue('admin_actions.url')}">{$oConfig->GetValue('admin_actions.name')}</a></li>
{else}
    <li class="avatar"><a href="{$oUser->getUserWebPath()}"><img src="{$oUser->getProfileAvatarPath(24)}" alt="avatar" /></a></li>
    <li class="username"><a href="{$oUser->getUserWebPath()}">{$oUser->getLogin()}
        {if $showSingleAdmin && $oUserCurrent != null && $oUserCurrent->IsAdministrator()}
            ({$oConfig->GetValue('admin_actions.name')})
        {/if}</a></li>
>>>>>>> 2ccb00235253ce282d91021c0fbe9e10c7e5284a
{/if}
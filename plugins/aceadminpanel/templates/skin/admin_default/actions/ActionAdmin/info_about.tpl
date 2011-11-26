{include file='header.tpl'}

<div style="width: 50%; float: left;">
    <h3>{$oLang->adm_title}</h3>

    <div class="topic">
        <p>Version: <span class="adm_info_value">{$aPluginInfo.version}</span></p>
        <p>Current version of LiveStreet: <span class="adm_info_value">{$LS_VERSION}</span></p>

        <br />
    </div>
</div>

<div style="width: 50%; float: left;">
    <h3>{$oLang->adm_site_info}</h3>

    <div class="topic">
        <p>{$oLang->adm_site_info_web}: <span class="adm_info_value">{$oConfig->GetValue('path.root.web')}</span></p>
        <p>{$oLang->adm_site_info_skin}: <span class="adm_info_value">{$oConfig->GetValue('aceadminpanel.saved.view.skin')}</span></p>

        <br />
    </div>
</div>

<div style="width: 50%; float: left;">
    <h3>{$oLang->adm_active_plugins}</h3>

    <div class="topic">
        {foreach from=$aPlugins item=aPlugin}
        {if $aPlugin.is_active}
        <p>
            {$aPlugin.property->name->data|escape:'html'}, v.{$aPlugin.property->version|escape:'html'}
            {if ($aPlugin.update_info)}
            - {$aPlugin.update_info|escape:'html'}
            {/if}
        </p>
        {/if}
        {/foreach}

        <br />
    </div>
</div>

<div style="width: 50%; float: left;">
    <h3>{$oLang->adm_site_statistics}</h3>

    <div class="topic">
        <p>{$oLang->adm_site_stat_users} <span class="adm_info_value">{$aSiteStat.users}</span></p>
        <p>{$oLang->adm_site_stat_blogs} <span class="adm_info_value">{$aSiteStat.blogs}</span></p>
        <p>{$oLang->adm_site_stat_topics} <span class="adm_info_value">{$aSiteStat.topics}</span></p>
        <p>{$oLang->adm_site_stat_comments} <span class="adm_info_value">{$aSiteStat.comments}</span></p>

        <br />
    </div>
</div>

{include file='footer.tpl'}
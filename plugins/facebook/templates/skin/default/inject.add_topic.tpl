<div style="border-top:1px dotted navy;border-bottom:1px dotted navy;padding:5px 0; margin:10px 0;">
<img src="{$sFacebookTemplateWebPathPlugin}images/facebook.jpg" alt="Facebook" align="right">
{if $bEditMode && $bPublished}
    {* сюда попадают при редактировании уже опубликованного в FB топика *}
    <p><strong>{$aLang.post_published}</strong></p>
    {if $oUserCurrent and $oUserCurrent->isAdministrator()}
        <p><label for="topic_delete_facebook"><input type="checkbox" value="1" class="checkbox" name="topic_delete_facebook" id="topic_delete_facebook"> &mdash; {$aLang.remove_from_fb}</label><br>
        <span class="form_note">{$aLang.remove_from_fb_note}</span></p>
    {/if}
{elseif !$bPublishBlocked}
    {* сюда попадают при редактировании неопубликованного в FB топика, который не заблокирован от публикации *}
    {if $oUserCurrent and $oUserCurrent->isAdministrator()}
    <p><label for="topic_publish_facebook"><input type="checkbox" value="1" class="checkbox" name="topic_publish_facebook" id="topic_publish_facebook"> &mdash; {$aLang.publish}</label><br>
    <span class="form_note">{$aLang.publish_note}</span></p>
    {else}
        {* сообщение для обычных пользователей *}
        {if $aPluginConfig.strategy=='STRATEGY_MAIN'}
            <p>{$aLang.published_note_part1} <a href="{$aPluginConfig.page.url}" target="_blank">{$aLang.published_note_part2}</a></p>
        {elseif $aPluginConfig.strategy=='STRATEGY_RATING'}
            <p>{$aLang.published_condition_part1} {$aPluginConfig.STRATEGY_RATING.rating} {$aPluginConfig.STRATEGY_RATING.rating|declension:$aLang.published_condition_part2:Config::Get('lang.current')} {$aPluginConfig.STRATEGY_RATING.rating|declension:$aLang.published_condition_part3:Config::Get('lang.current')} {$aLang.published_condition_part4} {$aLang.published_condition_part5} <a href="{$aPluginConfig.page.url}" target="_blank">{$aLang.published_condition_part6}</a></p>
        {/if}
    {/if}
{/if}

{if !$bPublished && $oUserCurrent and $oUserCurrent->isAdministrator()}
    {if $bPublishBlocked}
    <p><label for="topic_allow_facebook"><input type="checkbox" value="1" class="checkbox" name="topic_allow_facebook" id="topic_allow_facebook"> &mdash; {$aLang.enable_publishing}</label><br>
    <span class="form_note">{$aLang.enable_publishing_note}</span></p>
    {else}
    <p><label for="topic_deny_facebook"><input type="checkbox" value="1" class="checkbox" name="topic_deny_facebook" id="topic_deny_facebook"> &mdash; {$aLang.block_publishing}</label><br>
    <span class="form_note">{$aLang.block_publishing_note}</span></p>
    {/if}
{/if}
</div>
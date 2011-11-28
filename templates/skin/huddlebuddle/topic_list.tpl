{assign var="ProfileView" value=$ProfileView|default:false}
{if count($aTopics)>0}
	{foreach from=$aTopics item=oTopic}
           {if $ProfileView && $oTopic->getUser()->IsAdministrator() && $oConfig->GetValue('admin_actions.enabled') && $oConfig->GetValue('admin_actions.single_topics') && !(!$oUserCurrent || $oUserCurrent->IsAdministrator())}
               {continue}
           {/if}
	   {assign var="sTopicTemplateName" value="topic_`$oTopic->getType()`.tpl"}
	   {include file=$sTopicTemplateName bTopicList=true}
	{/foreach}	
		
    {include file='paging.tpl' aPaging="$aPaging"}			
{else}
	<div class="padding">{$aLang.blog_no_topic}</div>
{/if}
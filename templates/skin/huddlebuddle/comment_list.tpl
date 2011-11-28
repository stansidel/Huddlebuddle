{assign var="ProfileView" value=$ProfileView|default:false}
<div class="comments comment-list">
	{foreach from=$aComments item=oComment}
		{assign var="oUser" value=$oComment->getUser()}
		{assign var="oTopic" value=$oComment->getTarget()}
		{assign var="oBlog" value=$oTopic->getBlog()}
		
                {if $ProfileView && $oUser->IsAdministrator() && ($oTopic->GetUserId() != $oUser->getId() || $oConfig->GetValue('admin_actions.single_topics')) && $oConfig->GetValue('admin_actions.enabled') && $oConfig->GetValue('admin_actions.single_comments') && !(!$oUserCurrent || $oUserCurrent->IsAdministrator())}
                   {continue}
                {/if}
		
		<div class="path">
			<a href="{$oTopic->getUrl()}">{$oTopic->getTitle()|escape:'html'}</a> /
			<a href="{$oBlog->getUrlFull()}" class="blog-name">{$oBlog->getTitle()|escape:'html'}</a>
			<a href="{$oTopic->getUrl()}#comments" class="comments-total">{$oTopic->getCountComment()}</a>
		</div>
		
		<div class="comment">
			<div class="voting {if $oComment->getRating()>0}positive{elseif $oComment->getRating()<0}negative{/if} {if !$oUserCurrent || $oComment->getUserId()==$oUserCurrent->getId() ||  strtotime($oComment->getDate())<$smarty.now-$oConfig->GetValue('acl.vote.comment.limit_time')}guest{/if}   {if $oVote} voted {if $oVote->getDirection()>0}plus{else}minus{/if}{/if}  ">
				<span class="total">{if $oComment->getRating()>0}+{/if}{$oComment->getRating()}</span>
			</div>
					
			<div class="content">						
				{if $oComment->isBad()}
					<div style="color: #aaa;">{$oComment->getText()}</div>						
				{else}
					{$oComment->getText()}
				{/if}		
			</div>
			
			
			<ul class="info">
                                {include file="comment_author.tpl"}
				<li class="date">{date_format date=$oComment->getDate()}</li>
				<li><a href="{if $oConfig->GetValue('module.comment.nested_per_page')}{router page='comments'}{else}{$oTopic->getUrl()}#comment{/if}{$oComment->getId()}" class="comment-link"></a></li>
			</ul>	
		</div>
	{/foreach}	
</div>

{include file='paging.tpl' aPaging="$aPaging"}
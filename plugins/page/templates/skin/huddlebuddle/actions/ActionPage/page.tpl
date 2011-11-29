{if !isset($aBlocks.right) || count($aBlocks.right) == 1}
    {assign var="noSidebar" value=true}
{/if}
{include file='header.tpl'}

<div class="topic help">
	<div class="content">
            <h1 class="rules">{if $oParentPage}<a href="{router page='page'}{$oParentPage->getUrlFull()}">{$oParentPage->getTitle()}</a> → {/if}{$oPage->getTitle()}</h1>
                {if $oConfig->GetValue('view.tinymce')}
			{$oPage->getText()}
		{else}
			{if $oPage->getAutoBr()}
				{$oPage->getText()|nl2br}
			{else}
				{$oPage->getText()}
			{/if}
		{/if}
	</div>
</div>

{include file='footer.tpl'}
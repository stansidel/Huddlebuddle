<<<<<<< HEAD
{assign var="noSidebar" value=true}
{include file='header.tpl'}

<div class="topic">
	<div class="content">
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

=======
{assign var="noSidebar" value=true}
{include file='header.tpl'}

<div class="topic">
	<div class="content">
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

>>>>>>> 2ccb00235253ce282d91021c0fbe9e10c7e5284a
{include file='footer.tpl'}
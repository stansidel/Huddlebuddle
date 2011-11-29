{foreach from=$aPages item=oPage name=el2} 
    <li {if $sAction=='page' and $sParams[count($sParams)-1]==$oPage->getUrl()}class="active"{/if}><a href="{router page='page'}{$oPage->getUrlFull()}/">{$oPage->getTitle()}</a></li>
{/foreach}
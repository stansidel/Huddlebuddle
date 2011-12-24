
  {if $aNewTopicsList}
    <!-- Getlasttopics plugin -->
    <link rel="stylesheet" type="text/css" href="{$oConfig->GetValue("path.root.web")}/plugins/getlasttopics/templates/skin/default/css/style.css?UPD=1.0" />
    <div class="NewTopicsContainer">
      <h1>{$aLang.getlasttopics_title}</h1>
      {foreach from=$aNewTopicsList item=oNewTopic name=oNewTopicsI}
      <div class="OneNewTopic {if $smarty.foreach.oNewTopicsI.iteration % 2 == 0}second{/if}">
        <a href="{$oNewTopic->getUrl()}">
          {$oNewTopic->getTitle()|escape:'html'}
        </a>
      </div>
      {/foreach}
    </div>
    <!-- /Getlasttopics plugin -->
  {/if}

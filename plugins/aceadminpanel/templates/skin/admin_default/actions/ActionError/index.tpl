<<<<<<< HEAD
{include file='header.tpl'}

<script type="text/javascript">
    var sWebPluginSkin = "{$sWebPluginSkin}";
    var sWebPluginPath = "{$sWebPluginPath}";
</script>

{if $tpl_content}
    {$tpl_content}
{/if}
{if $tpl_include}
    {include file="$tpl_include"}
{/if}

=======
{include file='header.tpl'}

<script type="text/javascript">
    var sWebPluginSkin = "{$sWebPluginSkin}";
    var sWebPluginPath = "{$sWebPluginPath}";
</script>

{if $tpl_content}
    {$tpl_content}
{/if}
{if $tpl_include}
    {include file="$tpl_include"}
{/if}

>>>>>>> 2ccb00235253ce282d91021c0fbe9e10c7e5284a
{include file='footer.tpl'}
<?php /* Smarty version Smarty-3.0.8, created on 2011-11-25 05:59:16
         compiled from "/var/www/alpha.huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionSearch/opensearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13537509264ecf04846e72f9-07968815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c4991cebe19c7a8dcc1f7b7586820441c94b107' => 
    array (
      0 => '/var/www/alpha.huddlebuddle.org/templates/skin/huddlebuddle/actions/ActionSearch/opensearch.tpl',
      1 => 1319444581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13537509264ecf04846e72f9-07968815',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cfg')) include '/var/www/alpha.huddlebuddle.org/engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_router')) include '/var/www/alpha.huddlebuddle.org/engine/modules/viewer/plugs/function.router.php';
?><OpenSearchDescription xmlns="http://a9.com/-/spec/opensearch/1.1/"> 
	<ShortName><?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
</ShortName> 
	<Description><?php echo $_smarty_tpl->getVariable('sHtmlTitle')->value;?>
</Description> 
	<Contact><?php echo $_smarty_tpl->getVariable('sAdminMail')->value;?>
</Contact> 
	<Url type="text/html" template="<?php echo smarty_function_router(array('page'=>'search'),$_smarty_tpl);?>
topics/?q={searchTerms}" /> 
	<LongName><?php echo $_smarty_tpl->getVariable('sHtmlDescription')->value;?>
</LongName> 
	<Image height="64" width="64" type="image/png"><?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/logo.png</Image> 
	<Image height="16" width="16" type="image/vnd.microsoft.icon"><?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/favicon.ico</Image> 
	<Developer><?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
 (<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
)</Developer> 
	<Attribution> 
		© «<?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
»
	</Attribution> 
	<SyndicationRight>open</SyndicationRight> 
	<AdultContent>false</AdultContent> 
	<Language>ru-ru</Language> 
	<OutputEncoding>UTF-8</OutputEncoding> 
	<InputEncoding>UTF-8</InputEncoding> 
</OpenSearchDescription>
<?php /* Smarty version 2.6.29, created on 2018-10-19 16:58:36
         compiled from include/SugarFields/Fields/New_phone/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/New_phone/DetailView.tpl', 6, false),)), $this); ?>
{php}
global $current_language; $app_list_strings = return_app_list_strings_language($current_language);
$this->assign('APP_LIST', $app_list_strings['phone_type_dom']);
{/php}

{assign var=phones value="^|^"|explode:<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
}

{foreach name=outer item=phone from=$phones}
	{assign var=item value="^,^"|explode:$phone}

	{if $item.2 == '1'}
		<span>{$item.0}</span>
	{else}
		<b>{$item.0}</b>
	{/if}
	{if $item.1 == '1'}&nbsp;<i style="color:blue;">({$APP.LBL_PHONE_MAIN})</i>{/if}
	{if $item.2 == '1'}&nbsp;<i class="error">({$APP.LBL_PHONE_DONT_CALL})</i>{/if}
	&nbsp;(<i>{assign var=it value=$item.3}{$APP_LIST.$it}</i>)
	<br>
{/foreach}
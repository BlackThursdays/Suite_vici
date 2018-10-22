{php}
global $current_language; $app_list_strings = return_app_list_strings_language($current_language);
$this->assign('APP_LIST', $app_list_strings['phone_type_dom']);
{/php}

{assign var=phones value="^|^"|explode:{{sugarvar key='value' string=true}}}

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

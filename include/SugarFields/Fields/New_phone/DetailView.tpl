{php}
    global $current_language; $app_list_strings = return_app_list_strings_language($current_language);
    $this->assign('APP_LIST', $app_list_strings['phone_type_dom']);
{/php}

{assign var=phones value="^|^"|explode:{{sugarvar key='value' string=true}}}

{foreach name=outer item=phone from=$phones}
    {assign var=item value="^,^"|explode:$phone}
    <div>
    {if $item.2 == '1'}
        <span>{$item.0}</span>
    {else}
        <span><b>{$item.0}</b></span>
    {/if}
    {if $item.1 == '1'}&nbsp;<i style="color:blue;">({$APP.LBL_PHONE_MAIN})</i>{/if}
    {if $item.2 == '1'}&nbsp;<i class="error">({$APP.LBL_PHONE_DONT_CALL})</i>{/if}
    &nbsp;(
    <i>{assign var=it value=$item.3}{$APP_LIST.$it}</i>
    )

    {if $item.0 != '' && $item.2 != '1'}
        <button title="Позвонить"
                class="button"
                onclick="displayCCModal('{$item.0}','{$module}', '{$fields.id.value}')"
                style="margin-left: 15px;">
            <img src="themes/default/images/icon_Phone.gif" alt="">
        </button>
    {/if}
    </div>
{/foreach}

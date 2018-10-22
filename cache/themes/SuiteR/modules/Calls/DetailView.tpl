

{if $fields.recurring_source.value != '' && $fields.recurring_source.value != 'Sugar'}
<div class="clear"></div>
<div class="error">{$MOD.LBL_SYNCED_RECURRING_MSG}</div>
{/if}

<script language="javascript">
{literal}
SUGAR.util.doWhen(function(){
    return $("#contentTable").length == 0;
}, SUGAR.themes.actionMenu);
{/literal}
</script>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="formDetailView">
<input type="hidden" name="module" value="{$module}">
<input type="hidden" name="record" value="{$fields.id.value}">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="{$offset}">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="sugar_body_only">
<input type="hidden" name="isSaveAndNew">
<input type="hidden" name="status">
<input type="hidden" name="isSaveFromDetailView">
<input type="hidden" name="isSave">
</form>
<ul id="detail_header_action_menu" class="clickMenu fancymenu" ><li class="sugar_action_button" >{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Calls'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} <ul id class="subnav" ><li>{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Calls'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='{$id}';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} </li><li>{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Calls'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form);" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if} </li><li>{if $fields.status.value != "Held" && $bean->aclAccess("edit")}<input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}" class="button" onclick="var _form = document.getElementById('formDetailView');_form.isSaveFromDetailView.value=true; _form.status.value='Held'; _form.action.value='Save';_form.return_module.value='Calls';_form.isDuplicate.value=true;_form.isSaveAndNew.value=true;_form.return_action.value='EditView'; _form.return_id.value='{$fields.id.value}';_form.submit();" name="button" id="close_create_button" type="button" value="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}"/>{/if}</li><li>{if $fields.status.value != "Held" && $bean->aclAccess("edit")}<input title="{$APP.LBL_CLOSE_BUTTON_TITLE}" accesskey="{$APP.LBL_CLOSE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView');_form.status.value='Held'; _form.action.value='Save';_form.return_module.value='Calls';_form.isSave.value=true;_form.return_action.value='DetailView'; _form.return_id.value='{$fields.id.value}';_form.isSaveFromDetailView.value=true;_form.submit();" name="button1" id="close_button" type="button" value="{$APP.LBL_CLOSE_BUTTON_TITLE}"/>{/if}</li><li><input title="Форма КЦ" class="button" onclick="javascript:window.location='/index.php?action=DetailView&module=Calls&form=call_center&record={$fields.id.value}'" type="submit" value="Форма КЦ"/></li><li>{if $fields.status.value != "Held"}<input title="{$MOD.LBL_RESCHEDULE}" class="button" onclick="get_form();" name="Reschedule" id="reschedule_button" value="{$MOD.LBL_RESCHEDULE}" type="button"/>{/if}</li><li>{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Calls", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}</li></ul></li></ul>
</div>
</td>
<td align="right" width="20%">{$ADMIN_EDIT}
{$PAGINATION}
</td>
</tr>
</table>
{sugar_include include=$includes}
<div id="Calls_detailview_tabs"
class="yui-navset detailview_tabs"
>

<ul class="yui-nav">

<li><a id="tab0" href="javascript:void(0)"><em>{sugar_translate label='LBL_CALL_INFORMATION' module='Calls'}</em></a></li>


<li><a id="tab1" href="javascript:void(0)"><em>{sugar_translate label='LBL_DETAILVIEW_PANEL2' module='Calls'}</em></a></li>

<li><a id="tab2" href="javascript:void(0)"><em>{sugar_translate label='LBL_RESCHEDULE_PANEL' module='Calls'}</em></a></li>

<li><a id="tab3" href="javascript:void(0)"><em>{sugar_translate label='LBL_PANEL_ASSIGNMENT' module='Calls'}</em></a></li>
</ul>
<div class="yui-content">
<div id='tabcontent0'>
<div id='detailpanel_1' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<!-- PANEL CONTAINER HERE.. -->
<table id='LBL_CALL_INFORMATION' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SUBJECT' module='Calls'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="name" field="name" width='37.5%'  >
{if !$fields.name.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if} 
<span class="sugar_field" id="{$fields.name.name}">{$fields.name.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.direction.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_STATUS' module='Calls'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="enum" field="direction" width='37.5%'  >
{if !$fields.direction.hidden}
{counter name="panelFieldCount"}
<span id="direction" class="sugar_field">{$fields.direction.options[$fields.direction.value]} {$fields.status.options[$fields.status.value]}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.date_start.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_TIME' module='Calls'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="datetimecombo" field="date_start" width='37.5%'  >
{if !$fields.date_start.hidden}
{counter name="panelFieldCount"}
<span id="date_start" class="sugar_field">{$fields.date_start.value} {$fields.time_start.value}&nbsp;</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.parent_name.hidden}
{sugar_translate label='LBL_MODULE_NAME' module=$fields.parent_type.value}
{/if}
</td>
<td class="" type="parent" field="parent_name" width='37.5%'  >
{if !$fields.parent_name.hidden}
{counter name="panelFieldCount"}

<input type="hidden" class="sugar_field" id="{$fields.parent_name.name}" value="{$fields.parent_name.value}">
<input type="hidden" class="sugar_field" id="parent_id" value="{$fields.parent_id.value}">
<a href="index.php?module={$fields.parent_type.value}&action=DetailView&record={$fields.parent_id.value}" class="tabDetailViewDFLink">{$fields.parent_name.value}</a>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.duration_hours.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DURATION' module='Calls'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="int" field="duration_hours" width='37.5%'  >
{if !$fields.duration_hours.hidden}
{counter name="panelFieldCount"}
<span id="duration_hours" class="sugar_field">{$fields.duration_hours.value}{$MOD.LBL_HOURS_ABBREV} {$fields.duration_minutes.value}{$MOD.LBL_MINSS_ABBREV}&nbsp;</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.reminders.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_REMINDERS' module='Calls'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="function" field="reminders" width='37.5%'  >
{if !$fields.reminders.hidden}
{counter name="panelFieldCount"}
<span id='reminders_span'>
{$fields.reminders.value}
</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.assigned_user_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO' module='Calls'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="relate" field="assigned_user_name" width='37.5%'  >
{if !$fields.assigned_user_name.hidden}
{counter name="panelFieldCount"}
<span id="assigned_user_name" class="sugar_field">{$fields.assigned_user_name.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
&nbsp;
</td>
<td class="" type="" field="" width='37.5%'  >
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_CALL_INFORMATION").style.display='none';</script>
{/if}
<div id='detailpanel_2' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);">
<img border="0" id="detailpanel_2_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);">
<img border="0" id="detailpanel_2_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_DETAILVIEW_PANEL1' module='Calls'}
<script>
      document.getElementById('detailpanel_2').className += ' expanded';
    </script>
</h4>
<!-- PANEL CONTAINER HERE.. -->
<table id='LBL_DETAILVIEW_PANEL1' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.theme_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_THEME' module='Calls'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="enum" field="theme_c" width='37.5%'  >
{if !$fields.theme_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.theme_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.theme_c.name}" value="{ $fields.theme_c.options }">
{ $fields.theme_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.theme_c.name}" value="{ $fields.theme_c.value }">
{ $fields.theme_c.options[$fields.theme_c.value]}
{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.more_theme_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_MORE_THEME' module='Calls'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="dynamicenum" field="more_theme_c" width='37.5%'  >
{if !$fields.more_theme_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.more_theme_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.more_theme_c.name}" value="{ $fields.more_theme_c.options }">
{ $fields.more_theme_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.more_theme_c.name}" value="{ $fields.more_theme_c.value }">
{ $fields.more_theme_c.options[$fields.more_theme_c.value]}
{/if}
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.result_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_RESULT' module='Calls'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="dynamicenum" field="result_c" width='37.5%'  >
{if !$fields.result_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.result_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.result_c.name}" value="{ $fields.result_c.options }">
{ $fields.result_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.result_c.name}" value="{ $fields.result_c.value }">
{ $fields.result_c.options[$fields.result_c.value]}
{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.description.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='Calls'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="text" field="description" width='37.5%'  >
{if !$fields.description.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.description.name|escape:'html'|url2html|nl2br}">{$fields.description.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(2, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_DETAILVIEW_PANEL1").style.display='none';</script>
{/if}
</div>    <div id='tabcontent1'>
<div id='detailpanel_3' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<!-- PANEL CONTAINER HERE.. -->
<table id='LBL_DETAILVIEW_PANEL2' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.vici_phone_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_VICI_PHONE' module='Calls'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="varchar" field="vici_phone_c" width='37.5%'  >
{if !$fields.vici_phone_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.vici_phone_c.value) <= 0}
{assign var="value" value=$fields.vici_phone_c.default_value }
{else}
{assign var="value" value=$fields.vici_phone_c.value }
{/if} 
<span class="sugar_field" id="{$fields.vici_phone_c.name}">{$fields.vici_phone_c.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.vici_call_group_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_VICI_CALL_GROUP' module='Calls'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="varchar" field="vici_call_group_c" width='37.5%'  >
{if !$fields.vici_call_group_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.vici_call_group_c.value) <= 0}
{assign var="value" value=$fields.vici_call_group_c.default_value }
{else}
{assign var="value" value=$fields.vici_call_group_c.value }
{/if} 
<span class="sugar_field" id="{$fields.vici_call_group_c.name}">{$fields.vici_call_group_c.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.vici_fronter_phone_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_VICI_FRONTER_PHONE' module='Calls'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="varchar" field="vici_fronter_phone_c" width='37.5%'  >
{if !$fields.vici_fronter_phone_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.vici_fronter_phone_c.value) <= 0}
{assign var="value" value=$fields.vici_fronter_phone_c.default_value }
{else}
{assign var="value" value=$fields.vici_fronter_phone_c.value }
{/if} 
<span class="sugar_field" id="{$fields.vici_fronter_phone_c.name}">{$fields.vici_fronter_phone_c.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.vici_channel_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_VICI_CHANNEL' module='Calls'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="varchar" field="vici_channel_c" width='37.5%'  >
{if !$fields.vici_channel_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.vici_channel_c.value) <= 0}
{assign var="value" value=$fields.vici_channel_c.default_value }
{else}
{assign var="value" value=$fields.vici_channel_c.value }
{/if} 
<span class="sugar_field" id="{$fields.vici_channel_c.name}">{$fields.vici_channel_c.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.vici_call_record_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_VICI_CALL_RECORD' module='Calls'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="url" field="vici_call_record_c" width='37.5%'  >
{if !$fields.vici_call_record_c.hidden}
{counter name="panelFieldCount"}

{capture name=getLink assign=link}{$fields.vici_call_record_c.value}{/capture}
{if !empty($link)}
{capture name=getStart assign=linkStart}{$link|substr:0:7}{/capture}
<span class="sugar_field" id="{$fields.vici_call_record_c.name}">
<a href='{$link|to_url}' target='_blank' >{$link}</a>
</span>
{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.vici_uid_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_VICI_UID' module='Calls'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="varchar" field="vici_uid_c" width='37.5%'  >
{if !$fields.vici_uid_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.vici_uid_c.value) <= 0}
{assign var="value" value=$fields.vici_uid_c.default_value }
{else}
{assign var="value" value=$fields.vici_uid_c.value }
{/if} 
<span class="sugar_field" id="{$fields.vici_uid_c.name}">{$fields.vici_uid_c.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.vici_duration_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_VICI_DURATION' module='Calls'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="int" field="vici_duration_c" width='37.5%'  >
{if !$fields.vici_duration_c.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.vici_duration_c.name}">
{assign var="value" value=$fields.vici_duration_c.value }
{$value}
</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
&nbsp;
</td>
<td class="" type="" field="" width='37.5%'  >
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_DETAILVIEW_PANEL2").style.display='none';</script>
{/if}
</div>    <div id='tabcontent2'>
<div id='detailpanel_4' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<!-- PANEL CONTAINER HERE.. -->
<table id='LBL_RESCHEDULE_PANEL' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.reschedule_history.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_RESCHEDULE_HISTORY' module='Calls'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="varchar" field="reschedule_history" width='37.5%'  >
{if !$fields.reschedule_history.hidden}
{counter name="panelFieldCount"}
<span id='reschedule_history_span'>
{$fields.reschedule_history.value}
</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
&nbsp;
</td>
<td class="" type="" field="" width='37.5%'  >
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_RESCHEDULE_PANEL").style.display='none';</script>
{/if}
</div>    <div id='tabcontent3'>
<div id='detailpanel_5' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<!-- PANEL CONTAINER HERE.. -->
<table id='LBL_PANEL_ASSIGNMENT' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.date_entered.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_ENTERED' module='Calls'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="datetime" field="date_entered" width='37.5%'  >
{if !$fields.date_entered.hidden}
{counter name="panelFieldCount"}
<span id="date_entered" class="sugar_field">{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}&nbsp;</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.date_modified.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_MODIFIED' module='Calls'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="datetime" field="date_modified" width='37.5%'  >
{if !$fields.date_modified.hidden}
{counter name="panelFieldCount"}
<span id="date_modified" class="sugar_field">{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}&nbsp;</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_PANEL_ASSIGNMENT").style.display='none';</script>
{/if}
</div>
</div>
</div>

</form>
<script>SUGAR.util.doWhen("document.getElementById('form') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script><script type='text/javascript' src='{sugar_getjspath file='include/javascript/popup_helper.js'}'></script>
<script type="text/javascript" src="{sugar_getjspath file='cache/include/javascript/sugar_grp_yui_widgets.js'}"></script>
<script type="text/javascript">
var Calls_detailview_tabs = new YAHOO.widget.TabView("Calls_detailview_tabs");
Calls_detailview_tabs.selectTab(0);
</script>
<script type="text/javascript" src="include/InlineEditing/inlineEditing.js"></script>
<script type="text/javascript" src="modules/Favorites/favorites.js"></script>
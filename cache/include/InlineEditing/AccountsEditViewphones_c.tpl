{php}
global $current_language; $app_list_strings = return_app_list_strings_language($current_language);
$this->assign('APP_LIST', $app_list_strings['phone_type_dom']);
$select_option_type = '';
foreach ($app_list_strings['phone_type_dom'] as $key=>$val)
{
  $select_option_type .= '<option value="' . $key . '">' . $val . '</option>';
}
{/php}

{assign var=phones value="^|^"|explode:$fields.phones_c.value}
{assign var=phoneCounter value=0}
{assign var=cur_count value=$phones|@count }

<script type="text/javascript" language="javascript">
var cur_count = {$cur_count};

function {$fields.phones_c.name}_sugarField()
{ldelim}
var {$fields.phones_c.name} = '{$fields.phones_c.name}';
return {$fields.phones_c.name};
{rdelim}

function addPhoneRow()
{ldelim}
	cur_count += 1;
	var table = document.getElementById("{$module}phones");
	var rowCount = table.rows.length;
	var newRow = table.insertRow(rowCount);
	newRow.id = "{$module}phoneRow" + cur_count;

	// it's quite ugly code but cross-browser
	var newTD5 = document.createElement('td');
	newTD5.align='center';
	newTD5.innerHTML = '<select name="{$module}phoneFlag3_'+cur_count+'" id="{$module}phoneFlag3_'+cur_count+'" enabled="true">{php}echo $select_option_type;{/php}</select>';
	newRow.appendChild (newTD5);
	var newTD1 = document.createElement('td');
	newTD1.innerHTML = '<input type="text" name="{$module}phoneFlag0_'+cur_count+'" id="{$module}phoneFlag0_'+cur_count+'" size="30" value="">';
	newRow.appendChild (newTD1);
	var newTD2 = document.createElement('td');
	newTD2.innerHTML = '&nbsp;<img onclick="delPhoneRow(\'{$module}phoneRow'+cur_count+'\')" id="{$module}removeButton0" class="id-ff-remove" name="0" src="{sugar_getimagepath file="id-ff-remove-new.png"}">';
	newRow.appendChild (newTD2);
	var newTD3 = document.createElement('td');
	newTD3.align='center';
	newTD3.innerHTML = '<td align="center"><input type="radio" name="{$module}phoneFlag1" value="'+cur_count+'" id="{$module}phoneFlag1_'+cur_count+'" enabled="true">';
	newRow.appendChild (newTD3);
	var newTD4 = document.createElement('td');
	newTD4.align='center';
	newTD4.innerHTML = '<input type="checkbox" name="{$module}phoneFlag2[]" value="'+cur_count+'" id="{$module}phoneFlag2_'+cur_count+'" enabled="true">';
	newRow.appendChild (newTD4);
{rdelim}


function delPhoneRow(row_id)
{ldelim}
	var parent = document.getElementById(row_id).parentNode;
	parent.removeChild(document.getElementById(row_id));
{rdelim}
</script>

<span id="extphone">
<table style="border-spacing: 0pt;">
	<tr>
		<td valign="top" nowrap="">
			<table class="emailaddresses" id="{$module}phones">
				<tr>
					</td>
					<td nowrap="" scope="row">
					<span class="id-ff multiple ownline">
					<button value="Добавить" onclick="javascript:addPhoneRow()" type="button" class="button">
						<img src="{sugar_getimagepath file="id-ff-add-new.png"}">
					</button>
					</span>
					</td>
					<td nowrap="" scope="row">
					 &nbsp;
					</td>
					<td scope="row" NOWRAP>
					    &nbsp;
					</td>
					<td nowrap="" scope="row">
					{$APP.LBL_PHONE_MAIN} 
					</td>
					<td nowrap="" scope="row">
					{$APP.LBL_PHONE_DONT_CALL}
				</tr>
				{foreach name=outer item=phone from=$phones}
				{assign var=item value="^,^"|explode:$phone}
				<tr id="{$module}phoneRow{$phoneCounter}">

					<td align="center">
						<select  name="{$module}phoneFlag3_{$phoneCounter}" id="{$module}phoneFlag3_{$phoneCounter}" enabled="true" >
						  {foreach name=app_li item=val key=key from=$APP_LIST}
						  <option value="{$key}" {if $item.3 == $key}selected=true{/if} >{$val}</option>
						  {/foreach}
						</select>
					</td>

					<td nowrap="NOWRAP">
						<input type="text" name="{$module}phoneFlag0_{$phoneCounter}" id="{$module}phoneFlag0_{$phoneCounter}" size="30" value="{$item.0}">
					</td>
					<td>
						&nbsp;<img onclick="delPhoneRow('{$module}phoneRow{$phoneCounter}')" id="{$module}removeButton0" class="id-ff-remove" name="0" src="{sugar_getimagepath file="id-ff-remove-new.png"}">
					</td>
					<td align="center">
						<input type="radio" name="{$module}phoneFlag1" value="{$phoneCounter}" id="{$module}phoneFlag1_{$phoneCounter}" enabled="true" {if $item.1 == '1'}checked="true"{/if}>
					</td>
					<td align="center">
						<input type="checkbox" name="{$module}phoneFlag2[]" value="{$phoneCounter}" id="{$module}phoneFlag2_{$phoneCounter}" enabled="true" {if $item.2 == '1'}checked="true"{/if}>
					</td>
				</tr>
				{assign var=phoneCounter value=$phoneCounter+1}
				{/foreach}
			</table>
		</td>
	</tr>
</table>
</span>
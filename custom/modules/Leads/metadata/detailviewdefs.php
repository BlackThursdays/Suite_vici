<?php
$viewdefs ['Leads'] =
array (
  'DetailView' =>
  array (
    'templateMeta' =>
    array (
      'form' =>
      array (
        'buttons' =>
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 =>
          array (
            'customCode' => '{if $bean->aclAccess("edit") && !$DISABLE_CONVERT_ACTION}<input title="{$MOD.LBL_CONVERTLEAD_TITLE}" accessKey="{$MOD.LBL_CONVERTLEAD_BUTTON_KEY}" type="button" class="button" onClick="document.location=\'index.php?module=Leads&action=ConvertLead&record={$fields.id.value}\'" name="convert" value="{$MOD.LBL_CONVERTLEAD}">{/if}',
            'sugar_html' =>
            array (
              'type' => 'button',
              'value' => '{$MOD.LBL_CONVERTLEAD}',
              'htmlOptions' =>
              array (
                'title' => '{$MOD.LBL_CONVERTLEAD_TITLE}',
                'accessKey' => '{$MOD.LBL_CONVERTLEAD_BUTTON_KEY}',
                'class' => 'button',
                'onClick' => 'document.location=\'index.php?module=Leads&action=ConvertLead&record={$fields.id.value}\'',
                'name' => 'convert',
                'id' => 'convert_lead_button',
              ),
              'template' => '{if $bean->aclAccess("edit") && !$DISABLE_CONVERT_ACTION}[CONTENT]{/if}',
            ),
          ),
          4 => 'FIND_DUPLICATES',
          5 =>
          array (
            'customCode' => '<input title="{$APP.LBL_MANAGE_SUBSCRIPTIONS}" class="button" onclick="this.form.return_module.value=\'Leads\'; this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Leads\';" type="submit" name="Manage Subscriptions" value="{$APP.LBL_MANAGE_SUBSCRIPTIONS}">',
            'sugar_html' =>
            array (
              'type' => 'submit',
              'value' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
              'htmlOptions' =>
              array (
                'title' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
                'class' => 'button',
                'id' => 'manage_subscriptions_button',
                'onclick' => 'this.form.return_module.value=\'Leads\'; this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Leads\';',
                'name' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
              ),
            ),
          ),
          'AOS_GENLET' =>
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup();" value="{$APP.LBL_GENERATE_LETTER}">',
          ),
        ),
        'headerTpl' => 'modules/Leads/tpls/DetailViewHeader.tpl',
      ),
      'maxColumns' => '2',
      'widths' =>
      array (
        0 =>
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 =>
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'includes' =>
      array (
        0 =>
        array (
          'file' => 'modules/Leads/Lead.js',
        ),
      ),
      'useTabs' => true,
      'tabDefs' =>
      array (
        'LBL_CONTACT_INFORMATION' =>
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL1' =>
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ADVANCED' =>
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' =>
    array (
      'LBL_CONTACT_INFORMATION' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'full_name',
            'label' => 'LBL_NAME',
          ),
//          1 => 'phone_work',
            1=> array(
                'name'=>'phone_work',
                'customCode'=> '<span>{$fields.phone_work.value}</span>
                                <button title="Позвонить" 
                                    class="button" 
                                    onclick="displayCCModal(this, \'Leads\', \'{$fields.id.value}\')" 
                                    style="margin-left: 15px;">
                                    <img src="themes/default/images/icon_Phone.gif" alt="">
                                </button>'
            )
        ),
        1 =>
        array (
          0 => 'title',
          1 => 'phone_mobile',
        ),
        2 =>
        array (
          0 => 'department',
          1 => 'phone_fax',
        ),
        3 =>
        array (
          0 =>
          array (
            'name' => 'account_name',
          ),
          1 => 'website',
        ),
        4 =>
        array (
          0 => 'email1',
          1 =>
          array (
            'name' => 'phones_c',
            'studio' => 'visible',
            'label' => 'LBL_PHONES',
          ),
        ),
        5 =>
        array (
          0 => 'description',
          1 =>
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
      ),
      'lbl_detailview_panel1' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'rnn_c',
            'label' => 'LBL_RNN',
          ),
          1 =>
          array (
            'name' => 'inn_c',
            'label' => 'LBL_INN',
          ),
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'no_code_c',
            'label' => 'LBL_NO_CODE',
          ),
          1 =>
          array (
            'name' => 'oked_code_c',
            'label' => 'LBL_OKED_CODE',
          ),
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'register_date_c',
            'label' => 'LBL_REGISTER_DATE',
          ),
          1 =>
          array (
            'name' => 'oked_name_c',
            'label' => 'LBL_OKED_NAME',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'category_c',
            'studio' => 'visible',
            'label' => 'LBL_CATEGORY',
          ),
          1 => 'lead_source',
        ),
        1 =>
        array (
          0 => 'status',
          1 =>
          array (
            'name' => 'campaign_name',
            'label' => 'LBL_CAMPAIGN',
          ),
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'date_modified',
            'label' => 'LBL_DATE_MODIFIED',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
          ),
          1 =>
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
          ),
        ),
      ),
    ),
  ),
);
?>

<?php
$module_name = 'c_cashes';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'c_cashes_leads_name',
            'label' => 'LBL_C_CASHES_LEADS_FROM_LEADS_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'factory_code',
            'label' => 'LBL_FACTORY_CODE',
          ),
          1 => 
          array (
            'name' => 'issue_date',
            'label' => 'LBL_ISSUE_DATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'operation_date',
            'label' => 'LBL_OPERATION_DATE',
          ),
          1 => 
          array (
            'name' => 'active',
            'label' => 'LBL_ACTIVE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'location',
            'studio' => 'visible',
            'label' => 'LBL_LOCATION',
          ),
          1 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
?>

<?php
$module_name = 'c_cashes';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'C_CASHES_LEADS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_C_CASHES_LEADS_FROM_LEADS_TITLE',
    'id' => 'C_CASHES_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'FACTORY_CODE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FACTORY_CODE',
    'width' => '10%',
    'default' => true,
  ),
  'ISSUE_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_ISSUE_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'LOCATION' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_LOCATION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'OPERATION_DATE' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_OPERATION_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'ACTIVE' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_ACTIVE',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
?>

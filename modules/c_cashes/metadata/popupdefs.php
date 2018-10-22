<?php
$popupMeta = array (
    'moduleMain' => 'c_cashes',
    'varName' => 'c_cashes',
    'orderBy' => 'c_cashes.name',
    'whereClauses' => array (
  'name' => 'c_cashes.name',
),
    'searchInputs' => array (
  0 => 'c_cashes_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
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
  'OPERATION_DATE' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_OPERATION_DATE',
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
  'ACTIVE' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_ACTIVE',
    'width' => '10%',
  ),
),
);

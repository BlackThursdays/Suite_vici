<?php
$dashletData['c_cashesDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'type' => 'assigned_user_name',
    'default' => 'Administrator',
  ),
);
$dashletData['c_cashesDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'factory_code' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FACTORY_CODE',
    'width' => '10%',
    'default' => true,
  ),
  'issue_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_ISSUE_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'operation_date' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_OPERATION_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'location' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_LOCATION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'c_cashes_leads_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_C_CASHES_LEADS_FROM_LEADS_TITLE',
    'id' => 'C_CASHES_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'active' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_ACTIVE',
    'width' => '10%',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);

<?php
// created: 2018-07-12 20:38:39
$dictionary["c_cashes_leads"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'c_cashes_leads' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'c_cashes',
      'rhs_table' => 'c_cashes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'c_cashes_leads_c',
      'join_key_lhs' => 'c_cashes_leadsleads_ida',
      'join_key_rhs' => 'c_cashes_leadsc_cashes_idb',
    ),
  ),
  'table' => 'c_cashes_leads_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'c_cashes_leadsleads_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'c_cashes_leadsc_cashes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'c_cashes_leadsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'c_cashes_leads_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'c_cashes_leadsleads_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'c_cashes_leads_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'c_cashes_leadsc_cashes_idb',
      ),
    ),
  ),
);
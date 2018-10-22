<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-07-23 18:33:56
$dictionary["c_cashes"]["fields"]["accounts_c_cashes_1"] = array (
  'name' => 'accounts_c_cashes_1',
  'type' => 'link',
  'relationship' => 'accounts_c_cashes_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_C_CASHES_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_c_cashes_1accounts_ida',
);
$dictionary["c_cashes"]["fields"]["accounts_c_cashes_1_name"] = array (
  'name' => 'accounts_c_cashes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_C_CASHES_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_c_cashes_1accounts_ida',
  'link' => 'accounts_c_cashes_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["c_cashes"]["fields"]["accounts_c_cashes_1accounts_ida"] = array (
  'name' => 'accounts_c_cashes_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_c_cashes_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_C_CASHES_1_FROM_C_CASHES_TITLE',
);


// created: 2018-07-12 20:38:39
$dictionary["c_cashes"]["fields"]["c_cashes_leads"] = array (
  'name' => 'c_cashes_leads',
  'type' => 'link',
  'relationship' => 'c_cashes_leads',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_C_CASHES_LEADS_FROM_LEADS_TITLE',
  'id_name' => 'c_cashes_leadsleads_ida',
);
$dictionary["c_cashes"]["fields"]["c_cashes_leads_name"] = array (
  'name' => 'c_cashes_leads_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_C_CASHES_LEADS_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'c_cashes_leadsleads_ida',
  'link' => 'c_cashes_leads',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["c_cashes"]["fields"]["c_cashes_leadsleads_ida"] = array (
  'name' => 'c_cashes_leadsleads_ida',
  'type' => 'link',
  'relationship' => 'c_cashes_leads',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_C_CASHES_LEADS_FROM_C_CASHES_TITLE',
);

?>
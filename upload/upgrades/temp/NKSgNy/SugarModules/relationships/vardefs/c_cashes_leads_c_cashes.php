<?php
// created: 2018-07-12 20:33:58
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

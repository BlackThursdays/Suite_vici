<?php
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

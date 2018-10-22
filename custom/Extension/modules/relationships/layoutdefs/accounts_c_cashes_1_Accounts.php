<?php
 // created: 2018-07-23 18:33:56
$layout_defs["Accounts"]["subpanel_setup"]['accounts_c_cashes_1'] = array (
  'order' => 100,
  'module' => 'c_cashes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_C_CASHES_1_FROM_C_CASHES_TITLE',
  'get_subpanel_data' => 'accounts_c_cashes_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);

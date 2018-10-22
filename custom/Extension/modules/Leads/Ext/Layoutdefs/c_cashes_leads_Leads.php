<?php
 // created: 2018-07-12 20:38:39
$layout_defs["Leads"]["subpanel_setup"]['c_cashes_leads'] = array (
  'order' => 100,
  'module' => 'c_cashes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_C_CASHES_LEADS_FROM_C_CASHES_TITLE',
  'get_subpanel_data' => 'c_cashes_leads',
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

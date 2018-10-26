<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


require_once('include/MVC/View/views/view.detail.php');
require_once('custom/call_center/custom_views.php');

class CallsViewDetail extends ViewDetail
{


    /**
     * @see SugarView::display()
     */
    public function display()
    {

        customCallDetailView_($this);

        parent::display();
    }
}

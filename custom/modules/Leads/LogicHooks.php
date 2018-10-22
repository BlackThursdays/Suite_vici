<?php

/**
 * Created by PhpStorm.
 * User: bosyuk
 * Date: 08/10/2018
 * Time: 17:22
 */
class DetailViewScriptHook
{

    public function display_modal($event, $arguments)
    {
        if ($_REQUEST['action'] == 'DetailView') {
            $GLOBALS['log']->fatal("here");
            echo '<script src="custom/call_center/js/display_modal.js"></script>';
        }
    }

}
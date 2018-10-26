<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('custom/call_center/call_center.php');
require_once('custom/call_center/config.php');


switch ($_REQUEST['method']) {
    case 'get_contact':
        $callCenterCRM = new CallCenterCRM;
        $contact = $callCenterCRM->getContactName($_REQUEST['name']);
        $jsonContact = $callCenterCRM->arrayToJson($contact);
        print_r($jsonContact);
        break;
    case 'get_account':
        $callCenterCRM = new CallCenterCRM;
        $account = $callCenterCRM->getAccountName($_REQUEST['name']);
        $jsonAccount = $callCenterCRM->arrayToJson($account);
        print_r($jsonAccount);
        break;
    case 'get_lead':
        $callCenterCRM = new CallCenterCRM;
        $lead = $callCenterCRM->getLeadName($_REQUEST['name']);
        $jsonLead = $callCenterCRM->arrayToJson($lead);
        print_r($jsonLead);
        break;
    case 'get_email':
        $callCenterCRM = new CallCenterCRM;
        $email = $callCenterCRM->getEmail($_REQUEST['id'], $_REQUEST['type']);
        $jsonEmail = $callCenterCRM->arrayToJson($email);
        print_r($jsonEmail);
        break;
    case 'get_product':
        $callCenterCRM = new CallCenterCRM;
        $product = $callCenterCRM->getProduct($_REQUEST['id'], $_REQUEST['type']);
        $jsonProduct = $callCenterCRM->arrayToJson($product);
        print_r($jsonProduct);
        break;
    case 'save':
        $callCenterCRM = new CallCenterCRM;

        // Сохраняем инфо о звонке и клиенте
        $callCenterCRM->saveCallInfo($_REQUEST['call']);
        $callCenterCRM->saveClientInfo($_REQUEST['client'], $_REQUEST['call']);

        // Если есть Название организации  - сохраняем
        if (!empty($_REQUEST['lead']['account_name'])) {
            $callCenterCRM->saveLead($_REQUEST['lead'], $_REQUEST['call']['id']);
        }


        // Сохраняем задачу "Перезвониить клиенту" если не пусто
        if (!empty($_REQUEST['task']['time'])) $callCenterCRM->savePlannedCall($_REQUEST['task']['time'], $_REQUEST['client']);

        //print_r($_REQUEST['call']['theme']['name']);
        break;

    case 'external_dial':
        $callCenterCRM = new CallCenterCRM;
        $response = $callCenterCRM->externalDial($CC_SERVER, $CC_API_USER, $CC_API_PASSWORD, $_REQUEST['phone']);
        $jsonResponse = $callCenterCRM->arrayToJson($response);
        print_r($jsonResponse);
        break;
    case 'create_call':
        $callCenterCRM = new CallCenterCRM;
        $response = $callCenterCRM->createCall($_REQUEST['phone'], $_REQUEST['parent_type'], $_REQUEST['parent_id']);
        $jsonResponse = $callCenterCRM->arrayToJson($response);
        print_r($jsonResponse);
        break;
    //default:
    //    echo "i не равно 0, 1 или 2";
}


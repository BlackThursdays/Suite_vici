<?php
/**
 * Created by PhpStorm.
 * User: bosyuk
 * Date: 23/10/2018
 * Time: 10:06
 */

function customDetailView_($context)
{
    $picture = [
        'Accounts' => './custom/themes/bta/account.png',
        'Contacts' => './custom/themes/bta/contact.png',
        'Leads' => './custom/themes/bta/account.png',
    ];

    // Информация о клиенте/лиде
    if ($context->module == 'Accounts') {
        $method = 'get_account';
        $record_name = $context->bean->name;
        $radio_check = 'account';
    } elseif ($context->module == 'Contacts') {
        $method = 'get_contact';
        $record_name = $context->bean->full_name;
        $radio_check = 'contact';
    } elseif ($context->module == 'Leads') {
        $method = 'get_lead';
        $record_name = $context->bean->account_name;
        $radio_check = 'lead';
    } else {
        $method = 'get_lead';
        $record_name = '';
        $radio_check = 'lead';
    }

    $tmpl_context = [
        'call_type' => 'Исходящий звонок',
        'call_id' => '',
        'method' => $method,
        'client' => [
            'module' => $context->module,
            'id' => $context->bean->id,
            'name' => $record_name,
            'phone' => $_REQUEST['phone'],
            'email' => $context->module->email1,
            'picture' => $picture[$context->module]
        ],
        'radio_check' => $radio_check,
        'picture' => $picture,
        'not_found_client' => 'Клиент отсутствует',
        'immediately_show_modal' => 'false',
        'source_module' => $context->module,
        'source_record' => $context->bean->id,
    ];

    echo require('custom/call_center/call_center_form.php');
}

function customCallDetailView_($context)
{
    $picture = [
        'Accounts' => './custom/themes/bta/account.png',
        'Contacts' => './custom/themes/bta/contact.png',
        'Leads' => './custom/themes/bta/account.png',
    ];

    // Информация о клиенте/лиде
    if ($context->bean->parent_type == 'Accounts' && $context->bean->parent_id) {
        $bean = BeanFactory::getBean("Accounts", $context->bean->parent_id);
        $record_id = $bean->id;
        $record_name = $bean->name;
        $method = 'get_account';
        $module = 'Accounts';
        $client_picture = $picture['Accounts'];
        $client_email = $bean->email1;
        $radio_check = 'account';
    } elseif ($context->bean->parent_type == 'Contacts' && $context->bean->parent_id) {
        $bean = BeanFactory::getBean("Contacts", $context->bean->parent_id);
        $record_id = $bean->id;
        $record_name = $bean->full_name;
        $method = 'get_contact';
        $module = 'Contacts';
        $client_picture = $picture['Contacts'];
        $client_email = $bean->email1;
        $radio_check = 'contact';
    } elseif ($context->bean->parent_type == 'Leads' && $context->bean->parent_id) {
        $bean = BeanFactory::getBean("Leads", $context->bean->parent_id);
        $record_id = $bean->id;
        $record_name = $bean->account_name;
        $method = 'get_lead';
        $module = 'Leads';
        $client_picture = $picture['Leads'];
        $client_email = $bean->email1;
        $radio_check = 'lead';
    } else {
        $record_id = '';
        $record_name = 'Клиент отсутствует';
        $method = 'get_contact';
        $module = 'Contacts';
        $client_picture = $picture['Contacts'];
        $client_email = '';
        $radio_check = 'contact';
    }

    $tmpl_context = [
        'call_type' => 'Входящий звонок',
        'call_id' => $context->bean->id,
        'method' => $method,
        'client' => [
            'module' => $module,
            'id' => $record_id,
            'name' => $record_name,
            'phone' => $context->bean->vici_phone_c,
            'email' => $client_email,
            'picture' => $client_picture
        ],
        'radio_check' => $radio_check,
        'picture' => $picture,
        'not_found_client' => 'Клиент отсутствует',
        'source_module' => $context->module,
        'source_record' => $context->bean->id,
    ];

    if ($_REQUEST['form'] == 'call_center') $tmpl_context['immediately_show_modal'] = 'true';
    else $tmpl_context['immediately_show_modal'] = 'false';

    echo require('custom/call_center/call_center_form.php');
}
<?php
/**
 * Created by PhpStorm.
 * User: bosyuk
 * Date: 23/10/2018
 * Time: 10:06
 */

// Устаревшая функция
function customDetailView($context)
{
    global $current_user;

    // Глобальные переменные для включенной формы контакт-центра
    $call_type = 'Исходящий звонок';
    $call_id = '';
    $record_id = $context->bean->id;
    $picture = array(
        'Accounts' => './custom/themes/bta/account.png',
        'Contacts' => './custom/themes/bta/contact.png',
        'Leads' => './custom/themes/bta/account.png',
    );

    // Исходная запись, из которой совершен звонок
    $source_module = $context->module;
    $source_record = $context->bean->id;

    $check_contact = '';
    $check_account = '';
    $check_lead = '';

    // Информация о клиенте/лиде
    if ($context->module == 'Accounts') {
        $method = 'get_account';
        $record_name = $context->bean->name;
        $check_account = 'checked';
    } elseif ($context->module == 'Contacts') {
        $method = 'get_contact';
        $record_name = $context->bean->full_name;
        $check_contact = 'checked';
    } elseif ($context->module == 'Leads') {
        $method = 'get_lead';
        $record_name = $context->bean->account_name;
        $check_lead = 'checked';
    }

    $client_phone = $_REQUEST['phone'];
    $client_email = $context->module->email1;
    $client_picture = $picture[$context->module];

    echo <<<EOF
<script>
    var module = '$context->module';   // Используется для ссылки на карточку клиента (изначально тянется из CRM, в процессе работы и при изменении клиента в форме проставляется измененный)
    var method = '$method';   // Используется для ссылки на карточку клиента (изначально тянется из CRM, в процессе работы и при изменении клиента в форме проставляется измененный)
    var record_id = '$record_id';   // Используется для ссылки на карточку клиента (изначально тянется из CRM, в процессе работы и при изменении клиента в форме проставляется измененный)
    var module_const = '$context->module';   // Первоначальное значение вытянутое из CRM и не изменяется в форме КЦ. Используется для сравнения с текущим (возможно измененным значением)
    var record_id_const = '$record_id';   // Первоначальное значение вытянутое из CRM и не изменяется в форме КЦ. Используется для сравнения с текущим (возможно измененным значением)
    var call_id = '$call_id';   // Хранится текущий ID звонка (неизменно)
    var g_client_full_name = ''; // Переменная для промежуточного хранения значения ФИО и последующего сравнения
    var not_found_client = "Клиент отсутствует";
    var immediately_show_modal = false;
    var current_user = '$current_user->user_name';
</script>
EOF;
    echo require('custom/call_center/call_center_form.php');
}

// Устаревшая функция
function customCallDetailView($context)
{
    /*
  * В форму КЦ выводится только ОДИН клиент. Выбор по проиритету:
  * 1. Клиенты ФЛ
  * 2. Клиенты ЮЛ/ИП
  * 3. Лиды ФЛ
  */

    if ($_REQUEST['form'] == 'call_center') {
        // Глобальные переменные для включенной формы контакт-центра

        $source_module = 'Calls';
        $source_record = $context->bean->id;

        $call_id = $context->bean->id;
        $record_name = 'Клиент отсутствует';
        $client_email = '';


        $client_picture = $picture['Contacts'];
        $client_phone = $context->bean->vici_phone_c;
        $check_contact = 'checked';
        $check_account = '';
        $check_lead = '';

        if ($context->bean->parent_type == 'Accounts') {
            $account = BeanFactory::getBean("Accounts", $context->bean->parent_id);
            $record_id = $account->id;
            $record_name = $account->name;
            $method = 'get_account';
            $module = 'Accounts';
            $client_picture = $picture['Accounts'];
            $client_email = $account->email1;
            $check_contact = '';
            $check_account = 'checked';
            $check_lead = '';

        } elseif ($context->bean->parent_type == 'Contacts') {
            $contact = BeanFactory::getBean("Contacts", $context->bean->parent_id);
            $record_id = $contact->id;
            $record_name = $contact->last_name . ' ' . $contact->first_name;
            $client_email = $contact->email1;
            $method = 'get_contact';
            $module = 'Contacts';
            $client_picture = $picture['Contacts'];
            $check_contact = 'checked';
            $check_account = '';
            $check_lead = '';

        } elseif ($context->bean->parent_type == 'Leads') {
            $lead = BeanFactory::getBean("Leads", $context->bean->parent_id);
            $record_id = $lead->id;
            $record_name = $lead->account_name;
            $method = 'get_lead';
            $module = 'Leads';
            $client_picture = $picture['Leads'];
            $client_email = $lead->email1;
            $check_contact = '';
            $check_account = '';
            $check_lead = 'checked';
        }

        echo <<<EOF
<script>
    var module = '$module';   // Используется для ссылки на карточку клиента (изначально тянется из CRM, в процессе работы и при изменении клиента в форме проставляется измененный)
    var method = '$method';   // Используется для ссылки на карточку клиента (изначально тянется из CRM, в процессе работы и при изменении клиента в форме проставляется измененный)
    var record_id = '$record_id';   // Используется для ссылки на карточку клиента (изначально тянется из CRM, в процессе работы и при изменении клиента в форме проставляется измененный)
    var module_const = '$module';   // Первоначальное значение вытянутое из CRM и не изменяется в форме КЦ. Используется для сравнения с текущим (возможно измененным значением)
    var record_id_const = '$record_id';   // Первоначальное значение вытянутое из CRM и не изменяется в форме КЦ. Используется для сравнения с текущим (возможно измененным значением)
    var call_id = '$call_id';   // Хранится текущий ID звонка (неизменно)
    var g_client_full_name = ''; // Переменная для промежуточного хранения значения ФИО и последующего сравнения
    var not_found_client = "Клиент отсутствует";
    var immediately_show_modal = true;
</script>
EOF;
        echo require('custom/call_center/call_center_form.php');
    }
}

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
        'source_module' => 'Calls',
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
    ];

    if ($_REQUEST['form'] == 'call_center') $tmpl_context['immediately_show_modal'] = 'true';
    else $tmpl_context['immediately_show_modal'] = 'false';

    echo require('custom/call_center/call_center_form.php');
}
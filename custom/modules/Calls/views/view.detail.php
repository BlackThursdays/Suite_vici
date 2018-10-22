<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


require_once('include/MVC/View/views/view.detail.php');

class CallsViewDetail extends ViewDetail
{


    /**
     * @see SugarView::display()
     */
    public function display()
    {

        /*
         * В форму КЦ выводится только ОДИН клиент. Выбор по проиритету:
         * 1. Клиенты ФЛ
         * 2. Клиенты ЮЛ/ИП
         * 3. Лиды ФЛ
         */

        if ($_REQUEST['form'] == 'call_center') {
            // Глобальные переменные для включенной формы контакт-центра
            $method = 'get_contact';
            $module = 'Contacts';
            $call_type = 'Входящий звонок';
            $record_id = '';

            $source_module = 'Calls';
            $source_record = $this->bean->id;

            $call_id = $this->bean->id;
            $record_name = 'Клиент отсутствует';
            $client_email = '';
            $picture = array(
                'Accounts' => './custom/themes/bta/account.png',
                'Contacts' => './custom/themes/bta/contact.png',
                'Leads' => './custom/themes/bta/account.png',
            );
            $client_picture = $picture['Contacts'];
            $client_phone = $this->bean->vici_phone_c;
            $check_contact = 'checked';
            $check_account = '';
            $check_lead = '';

            if ($this->bean->parent_type == 'Accounts') {
                $account = BeanFactory::getBean("Accounts", $this->bean->parent_id);
                $record_id = $account->id;
                $record_name = $account->name;
                $method = 'get_account';
                $module = 'Accounts';
                $client_picture = $picture['Accounts'];
                $client_email = $account->email1;
                $check_contact = '';
                $check_account = 'checked';
                $check_lead = '';

            } elseif ($this->bean->parent_type == 'Contacts') {
                $contact = BeanFactory::getBean("Contacts", $this->bean->parent_id);
                $record_id = $contact->id;
                $record_name = $contact->last_name . ' ' . $contact->first_name;
                $client_email = $contact->email1;
                $method = 'get_contact';
                $module = 'Contacts';
                $client_picture = $picture['Contacts'];
                $check_contact = 'checked';
                $check_account = '';
                $check_lead = '';

            } elseif ($this->bean->parent_type == 'Leads') {
                $lead = BeanFactory::getBean("Leads", $this->bean->parent_id);
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
        parent::display();
    }
}

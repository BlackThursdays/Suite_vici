<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


require_once('include/MVC/View/views/view.detail.php');

class LeadsViewDetail extends ViewDetail
{


    /**
     * @see SugarView::display()
     */
    public function display()
    {
        global $current_user;

        // Глобальные переменные для включенной формы контакт-центра
        $call_type = 'Исходящий звонок';
        $call_id = $this->bean->id;
        $picture = array(
            'Accounts' => './custom/themes/bta/account.png',
            'Contacts' => './custom/themes/bta/contact.png',
            'Leads' => './custom/themes/bta/account.png',
        );

        $lead = BeanFactory::getBean("Leads", $this->bean->id);

        // Исходная запись, из которой совершен звонок
        $source_module = 'Leads';
        $source_record = $lead->id;

        // Информация о клиенте/лиде
        $method = 'get_lead';
        $record_id = $lead->id;
        $record_name = $lead->account_name;
        $client_phone = $_REQUEST['phone'];
        $client_email = $lead->email1;
        $client_picture = $picture['Leads'];
        $check_contact = '';
        $check_account = '';
        $check_lead = 'checked';


        echo <<<EOF
<script>
    var module = 'Leads';   // Используется для ссылки на карточку клиента (изначально тянется из CRM, в процессе работы и при изменении клиента в форме проставляется измененный)
    var method = '$method';   // Используется для ссылки на карточку клиента (изначально тянется из CRM, в процессе работы и при изменении клиента в форме проставляется измененный)
    var record_id = '$record_id';   // Используется для ссылки на карточку клиента (изначально тянется из CRM, в процессе работы и при изменении клиента в форме проставляется измененный)
    var module_const = 'Leads';   // Первоначальное значение вытянутое из CRM и не изменяется в форме КЦ. Используется для сравнения с текущим (возможно измененным значением)
    var record_id_const = '$record_id';   // Первоначальное значение вытянутое из CRM и не изменяется в форме КЦ. Используется для сравнения с текущим (возможно измененным значением)
    var call_id = '$call_id';   // Хранится текущий ID звонка (неизменно)
    var g_client_full_name = ''; // Переменная для промежуточного хранения значения ФИО и последующего сравнения
    var not_found_client = "Клиент отсутствует";
    var immediately_show_modal = false;
    var current_user = '$current_user->user_name';
</script>
EOF;
        echo require('custom/call_center/call_center_form.php');
        parent::display();
    }
}

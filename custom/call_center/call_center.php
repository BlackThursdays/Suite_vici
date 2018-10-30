<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('data/SugarBean.php');
require_once('modules/Calls/Call.php');

//require_once('custom/sms/sms.php');

class CallCenterCRM extends Call
{

    /*
     * По части фамилии физ.лица находим список клиентов
     * @params [$name]
     * @return array client[id, name]
     */
    function getContactName($name)
    {
        if (iconv_strlen($name, 'UTF-8') > 0) {
            if (strripos($name, ' ')) {
                $name = explode(" ", $name);

                $query = "SELECT id,concat(last_name,' ',first_name) name 
                  FROM	contacts JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id
                  WHERE deleted = 0 AND contacts.last_name like '$name[0]' ";
//                $query = "SELECT id,concat(first_name,' ',last_name,' ',middle_name_c) name
//                  FROM	contacts JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id
//                  WHERE deleted = 0 AND contacts.first_name like '$name[0]' ";
                if (isset($name[1]) && !empty($name[1])) $query .= " AND contacts.last_name like '$name[1]%'";
//                if (isset($name[2]) && !empty($name[2])) $query .= " AND contacts_cstm.middle_name_c like '$name[2]%'";
                $query .= " ORDER BY name LIMIT 10 ";
                $result = $this->db->query($query);
                while ($row = $this->db->fetchByAssoc($result)) {
                    $contact[] = $row;
                }
                if (empty($contact)) {
                    return [];
                }
                return $contact;
            } else {
                $query = "SELECT id,concat(last_name,' ',first_name) name 
                  FROM	contacts JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id
                  WHERE deleted = 0 AND contacts.last_name like '%$name%' ORDER BY name LIMIT 10";
//                $query = "SELECT id,concat(first_name,' ',last_name,' ',middle_name_c) name
//                  FROM	contacts JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id
//                  WHERE deleted = 0 AND contacts.first_name like '%$name%' ORDER BY name LIMIT 10";
                $result = $this->db->query($query);
                while ($row = $this->db->fetchByAssoc($result)) {
                    $contact[] = $row;
                }
                if (empty($contact)) {
                    return [];
                }
                return $contact;
            }
        }
        return [];
    }

    /*
     * По части названия юр.лица находим список клиентов
     * @params [name]
     * @return array client[id, name]
     */
    function getAccountName($name)
    {
        if (iconv_strlen($name, 'UTF-8') > 0) {
            $query = "SELECT id,name FROM accounts WHERE deleted = 0 AND name like '%$name%' ORDER BY name LIMIT 10";
            $result = $this->db->query($query);
            while ($row = $this->db->fetchByAssoc($result)) {
                $row['name'] = str_replace('&quot;', '', $row['name']);
                $row['name'] = preg_replace('/\s\s+/', ' ', $row['name']);
                $account[] = $row;
            }
            if (empty($account)) {
                return [];
            }
            return $account;
        }
        return [];
    }

    /*
     * По части фамилии находим список лидов
      * @params [name]
      * @return array client[id, name]
      */
    function getLeadName($name)
    {
        if (iconv_strlen($name, 'UTF-8') > 0) {
            if (strripos($name, ' ')) {
                $name = explode(" ", $name);

                $query = "SELECT id, account_name name 
                          FROM	Leads WHERE deleted = 0 AND (account_name like '%$name[0]%' OR account_name like '%$name[1]%') ";
//                if (isset($name[1]) && !empty($name[1])) $query .= " AND first_name like '$name[1]%'";
//                if (isset($name[2]) && !empty($name[2])) $query .= " AND middle_name like '$name[2]%'";
                $query .= " ORDER BY name LIMIT 10 ";

                $result = $this->db->query($query);
                while ($row = $this->db->fetchByAssoc($result)) {
                    $row['name'] = str_replace('&quot;', '', $row['name']);
                    $lead[] = $row;
                }

                if (empty($lead)) {
                    return [];
                }
                return $lead;
            } else {
//                $query = "SELECT id,concat(last_name,' ',first_name,' - ',account_name) name
                $query = "SELECT id,account_name name 
                          FROM Leads WHERE deleted = 0 AND account_name like '%$name%' ORDER BY name LIMIT 10";
                $result = $this->db->query($query);
                while ($row = $this->db->fetchByAssoc($result)) {
                    $lead[] = $row;
                }

                if (empty($lead)) {
                    return [];
                }
                return $lead;
            }
        }
        return [];
    }

    /*
     * @params [id, clientType]
     * @return email;
     */
    function getEmail($id, $clientType)
    {
        $query = "SELECT email_address FROM email_addresses " .
            "JOIN email_addr_bean_rel " .
            "ON email_addr_bean_rel.email_address_id = email_addresses.id " .
            "WHERE bean_id = '$id' AND bean_module = '$clientType'";


        $result = $this->db->query($query);
        $email = $this->db->fetchByAssoc($result);

        return $email;
    }

    /*
      * @params [id]
      * @return array product[id, number, date, description]
      */
    function getProduct($id, $clientType)
    {
        if ($clientType == 'Contacts') {
            // Кредиты
            $query = "SELECT id, name number, start_date date, tarif_c description FROM aos_contracts JOIN aos_contracts_cstm ON aos_contracts.id = aos_contracts_cstm.id_c WHERE status = 0 AND contract_type = 'credit' AND contact_id = '$id'";
            $result = $this->db->query($query);
            //print_r($query);
            while ($row = $this->db->fetchByAssoc($result)) {
                $product['credit'][] = $row;
            }

            // Депозиты
            $query = "SELECT
	              dc_deposit.id,
	              dc_deposit.id number,
	              dc_deposit.open_date date,
	              dc_deposit.tarif description
              FROM
	              dc_deposit
	              JOIN dc_deposit_contacts_c ON dc_deposit_contacts_c.dc_deposit_contactsdc_deposit_idb = dc_deposit.id
	              JOIN contacts ON contacts.id = dc_deposit_contacts_c.dc_deposit_contactscontacts_ida
              WHERE
	              dc_deposit.close_date = '0000-00-00'
                  AND contacts.id = '$id'";

            $result = $this->db->query($query);
            //print_r($query);
            while ($row = $this->db->fetchByAssoc($result)) {
                $product['deposit'][] = $row;
            }

            // Карт-счета
            $query = "SELECT dc_sccard.id, dc_sccard.name number, dc_sccard.open_date date, concat('Валюта: ',dc_sccard.currency) description
              FROM dc_sccard JOIN dc_sccard_contacts_c ON dc_sccard.id = dc_sccard_contacts_c.dc_sccard_contactsdc_sccard_idb
              JOIN contacts ON dc_sccard_contacts_c.dc_sccard_contactscontacts_ida = contacts.id
              WHERE dc_sccard.closeacc = 0 AND contacts.id = '$id'";
            //print_r($query);
            $result = $this->db->query($query);

            while ($row = $this->db->fetchByAssoc($result)) {
                $product['card'][] = $row;
            }
        } else if ($clientType == 'Accounts') {

            // Кредиты
            $query = "SELECT
                      c_credit_contracts.id,
                      c_credit_contracts.name number,
                      c_credit_contracts.begin_date date,
                      c_credit_contracts.currency description
                  FROM
                      c_credit_contracts
                      JOIN c_credit_contracts_accounts_c ON c_credit_contracts_accounts_c.c_credit_contracts_accountsc_credit_contracts_idb = c_credit_contracts.id
                      JOIN accounts ON c_credit_contracts_accounts_c.c_credit_contracts_accountsaccounts_ida = accounts.id
                  WHERE
                      c_credit_contracts.status = 0 AND accounts.id = '$id'";
            $result = $this->db->query($query);
            //print_r($query);
            while ($row = $this->db->fetchByAssoc($result)) {
                $product['credit'][] = $row;
            }

            // Депозиты
            $query = "SELECT
                        c_deposit_contracts.id,
                        c_deposit_contracts.name number,
                        c_deposit_contracts.begin_date date,
                        c_deposit_contracts.currency description
                  FROM
                        c_deposit_contracts
                        JOIN c_deposit_contracts_accounts_c ON c_deposit_contracts_accounts_c.c_deposit_contracts_accountsc_deposit_contracts_idb = c_deposit_contracts.id
                        JOIN accounts ON c_deposit_contracts_accounts_c.c_deposit_contracts_accountsaccounts_ida = accounts.id
                        WHERE c_deposit_contracts.status = 0
                  AND accounts.id = '$id'";

            $result = $this->db->query($query);
            //print_r($query);
            while ($row = $this->db->fetchByAssoc($result)) {
                $product['deposit'][] = $row;
            }

            // РКО
            $query = "SELECT
                        c_rko_contracts.id,
                        c_rko_contracts.name number,
                        c_rko_contracts.name date,
                        c_rko_contracts.tarif description
                    FROM
                        c_rko_contracts
                        JOIN c_rko_contracts_accounts_c ON c_rko_contracts.id = c_rko_contracts_accounts_c.c_rko_contracts_accountsc_rko_contracts_idb
                        JOIN accounts ON c_rko_contracts_accounts_c.c_rko_contracts_accountsaccounts_ida = accounts.id
                    WHERE accounts.id = '$id'";
            //print_r($query);
            $result = $this->db->query($query);

            while ($row = $this->db->fetchByAssoc($result)) {
                $product['rko'][] = $row;
            }
        }

        //print_r($account);
        if (empty($product)) {
            return null;
        }

        return $product;
    }

    /*
      * @params array $lead[last_name, first_name, middle_name, phone, email]
      * @return bool status[true, false]
      */
    function saveLead($lead, $call_id)
    {
        $leadBean = BeanFactory::newBean('Leads');
        $leadBean->account_name = $lead['account_name'];
        if (!empty($lead['last_name'])) $leadBean->last_name = $lead['last_name'];
        if (!empty($lead['first_name'])) $leadBean->first_name = $lead['first_name'];
        if (!empty($lead['phone'])) $leadBean->phone_work = $lead['phone'];
//        if (!empty($call['email'])) $leadBean->last_name = $call['email'];
        $call = BeanFactory::getBean('Calls', $call_id);
        $leadBean->assigned_user_id = $call->assigned_user_id;
        $leadBean->save();
//        $call->parent_type = 'Leads';
//        $call->parent_id = $call_id;
        $call->parent_type = 'Leads';
        $call->parent_id = $leadBean->id;
        $call->save();
        $call->load_relationship('leads');
        $call->leads->add($leadBean->id);

    }

    function savePlannedCall($date, $client)
    {
        $call = BeanFactory::newBean('Calls');
        $call->status = 'Planned';
        $call->name = "Запланированный звонок";
        $date = DateTime::createFromFormat('d.m.Y H:i', "$date");
        $date->setTimezone(new DateTimeZone("UTC"));
        $call->date_start = $date->format('Y-m-d H:i:s');
        $call->date_entered = gmdate('Y-m-d H:i:s');
        $call->created_by = $_SESSION['authenticated_user_id'];
        $call->assigned_user_id = $_SESSION['authenticated_user_id'];
        $call->direction = 'Outbound';
        $call->parent_type = $client['_new']['module'];
        $call->parent_id = $client['_new']['id'];
        $call->vici_phone_c = $client['_new']['phone'];
        $call->save();
        if ($client['_new']['module'] === 'Leads') {
            $call->load_relationship('leads');
            $call->leads->add($client['_new']['id']);
        } elseif ($client['_new']['module'] === 'Accounts') {
            $call->load_relationship('accounts');
            $call->accounts->add($client['_new']['id']);
        } elseif ($client['_new']['module'] === 'Contacts') {
            $call->load_relationship('contacts');
            $call->contacts->add($client['_new']['id']);
        }

        return $call->id;
    }

    function saveCallInfo($call)
    {
        $callBean = BeanFactory::getBean('Calls', $call['id']);
        if (!empty($call['theme']['id'])) $callBean->theme_c = $call['theme']['id'];
        if (!empty($call['more_theme']['id'])) $callBean->more_theme_c = $call['more_theme']['id'];
        if (!empty($call['result']['id'])) $callBean->result_c = $call['result']['id'];
        if (!empty($call['note'])) $callBean->description = $call['note'];
        $callBean->status = 'Held';
        $callBean->save();
    }

    function saveClientInfo($client, $call)
    {
        // Если в форме изменили клиента - переподвязываем
        if ($client['_new']['id'] != $client['_old']['id'] || $client['_new']['module'] != $client['_old']['module']) {

            $callBean = BeanFactory::getBean('Calls', $call['id']);

            // Удаляем старую связь
            $callBean->parent_type = '';
            $callBean->parent_id = '';
            $callBean->save();
            switch ($client['_old']['module']) {
                case 'Contacts':
                    $callBean->load_relationship('contacts');
                    $callBean->contacts->delete($callBean->id, $client['_old']['id']);
                    break;
                case 'Accounts':
                    $callBean->load_relationship('accounts');
                    $callBean->accounts->delete($callBean->id, $client['_old']['id']);
                    break;
                case 'Leads':
                    $callBean->load_relationship('leads');
                    $callBean->leads->delete($callBean->id, $client['_old']['id']);
                    break;
            }


            // Добавляем новую связь
            switch ($client['_new']['module']) {
                case 'Contacts':
                    $callBean->parent_type = 'Contacts';
                    $callBean->parent_id = $client['_new']['id'];
                    $callBean->save();
                    $callBean->load_relationship('contacts');
                    $callBean->contacts->add($client['_new']['id']);
                    break;
                case 'Accounts':
                    $callBean->parent_type = 'Accounts';
                    $callBean->parent_id = $client['_new']['id'];
                    $callBean->save();
                    $callBean->load_relationship('accounts');
                    $callBean->accounts->add($client['_new']['id']);
                    break;
                case 'Leads':
                    $callBean->parent_type = 'Leads';
                    $callBean->parent_id = $client['_new']['id'];
                    $callBean->save();
                    $callBean->load_relationship('leads');
                    $callBean->leads->add($client['_new']['id']);
                    break;
            }

        }
    }

    function externalDial($cc_server, $cc_api_user, $cc_api_password, $phone)
    {
        global $current_user;
        $url = $cc_server . "/agc/api.php?source=CRM&user=" . $cc_api_user . "&pass=" . $cc_api_password . "&function=external_dial&phone_code=1&search=YES&preview=NO&focus=YES&value=" . $phone . "&agent_user=" . $current_user->user_name;
        $contents = file_get_contents($url);
        if ($contents !== false) {
            return $contents;
        } else {
            return null;
        }
    }

    function createCall($number, $parent_type, $parent_id, $extra_params = [])
    {
        $call = BeanFactory::newBean('Calls');
        $call->status = 'Held';
        $call->name = "Звонок #$number";
        $call->date_start = gmdate('Y-m-d H:i:s');
        $call->date_entered = gmdate('Y-m-d H:i:s');
        $call->created_by = $_SESSION['authenticated_user_id'];
        $call->assigned_user_id = $_SESSION['authenticated_user_id'];
        $call->direction = 'Outbound';
        $call->parent_type = $parent_type;
        $call->parent_id = $parent_id;
        $call->vici_phone_c = $number;
        if ($extra_params) {

        }
        $call->save();
        if ($parent_type === 'Leads') {
            $call->load_relationship('leads');
            $call->leads->add($parent_id);
        } elseif ($parent_type === 'Accounts') {
            $call->load_relationship('accounts');
            $call->accounts->add($parent_id);
        } elseif ($parent_type === 'Contacts') {
            $call->load_relationship('contacts');
            $call->contacts->add($parent_id);
        }

        return $call->id;
    }

    /*
     * @params array
     * @return json object
     */
    function arrayToJson($array)
    {
        return json_encode($array);
    }
}

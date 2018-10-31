<?php

/**
 * @author Oleg Bosyuk
 * @copyright 2016
 * Примеры запросов
 * 1. Создание звонка:
 * http://192.168.5.216/agc/suitecrm/check_client.php?method=create_call&phone=2301&group=www&user_name=admin
 * 2. Обновление звонка:
 * http://192.168.5.216/agc/suitecrm/check_client.php?method=update_call&call_id=57cd6861354e4&user_name=admin
 */

// Сервер SuiteCRM
$server = '10.2.0.1';
$db_user = 'root';
$db_password = '111111';
$db_name = 'suitecrm_779';
$log_file = 'log.txt';
//$name_secgroup = 'Контакт-центр';
$current_date = gmdate('Y-m-d H:i:s'); // текущая дата

// Вывод ошибки на экран
function print_error($query = '')
{
    global $log_file;

    $error_text = date("Y-m-d H:i:s") . " - Ошибка запроса $query: " . mysql_error() . "\n";
    file_put_contents($log_file, $error_text, FILE_APPEND | LOCK_EX);
    //echo $error_text;
}

function open_database_connection()
{
    global $server;
    global $db_user;
    global $db_password;
    global $db_name;

    $link = mysql_connect($server, $db_user, $db_password);
    mysql_select_db($db_name, $link);
    mysql_query("SET NAMES 'utf8'");
    return $link;
}

function close_database_connection($link)
{
    mysql_close($link);
}

/**
 * Проверяем клиента по номеру телефона. Порядок проверки:
 * 1. Контактные лица
 * 2. Клиенты
 * 3. Предварительные контакты
 * @return array клиентов
 *
 */
function check_by_phone($phone)
{
    if (preg_match('/[^0-9]/', $phone)) {
        $phone = preg_replace('/[^0-9]/', '', $phone);
    }

    // Формируем телефон в двух форматах:
    // 375...
    // 80....
    //if (preg_match('/^80/', $phone)) {
    $phone_f1 = preg_replace('/^80/', '375', $phone);
    //}
    //if (preg_match('/^375/', $phone)) {
    $phone_f2 = preg_replace('/^375/', '80', $phone);
    //}

    // Проверяем контактные лица
    $select_contacts = "
SELECT id
FROM contacts
WHERE regex_replace('[^0-9]', '', phone_work) = '$phone_f1' OR
      regex_replace('[^0-9]', '', phone_work) = '$phone_f2' OR
      regex_replace('[^0-9]', '', phone_mobile) = '$phone_f1' OR
      regex_replace('[^0-9]', '', phone_mobile) = '$phone_f2' ";

    $query = mysql_query($select_contacts);

    $clients = array();

    // Если есть клиенты - загоняем в массив $clients
    if (mysql_num_rows($query) > 0) {
        while ($row = mysql_fetch_assoc($query)) {
            $row['module'] = 'Contacts';
            $clients[] = $row;
        }

        //print_r($clients);
        return $clients;

    } // Если контактных лиц нет - проверяем по клиентам
    else {
        $select_accounts = "
SELECT id
FROM accounts
  JOIN accounts_cstm ON accounts_cstm.id_c = accounts.id
WHERE regex_replace('[^0-9]', '', phone_office) = '$phone_f1' OR
      regex_replace('[^0-9]', '', phone_office) = '$phone_f2' OR 
      phones_c LIKE '%$phone_f1%' OR  phones_c LIKE '%$phone_f2%' ";


        $query = mysql_query($select_accounts);


        if (mysql_num_rows($query) > 0) {
            while ($row = mysql_fetch_assoc($query)) {
                $row['module'] = 'Accounts';
                $clients[] = $row;
            }

            //print_r($clients);
            return $clients;

        } else {
            $select_leads = "
SELECT id
FROM leads
  JOIN leads_cstm ON leads_cstm.id_c = leads.id
WHERE regex_replace('[^0-9]', '', phone_work) = '$phone_f1' OR 
      regex_replace('[^0-9]', '', phone_work) = '$phone_f2' OR 
      regex_replace('[^0-9]', '', phone_mobile) = '$phone_f1' OR 
      regex_replace('[^0-9]', '', phone_mobile) = '$phone_f2'  OR 
      phones_c LIKE '%$phone_f1%' OR  phones_c LIKE '%$phone_f2%' ";

            $query = mysql_query($select_leads);

            if (mysql_num_rows($query) > 0) {
                while ($row = mysql_fetch_assoc($query)) {
                    $row['module'] = 'Leads';
                    $clients[] = $row;
                }

                //print_r($clients);
                return $clients;

            } else {
                return [];
            }

        }
    }
}

/**
 * Создаем звонок, прикрепленный к клиенту (лиду)
 * @param $clients
 * @return string
 */
function create_call($client, $phone)
{
    //global $current_user;
    $call_id = uniqid();
    $call_client_id = uniqid();
    //$calls_secgroup_id = uniqid();
    global $current_date;
    //global $name_secgroup;


    $insert_call = "
INSERT INTO calls 
(id, status, name, date_start, date_entered, created_by, assigned_user_id, direction, parent_type, parent_id)
VALUES ('$call_id', 'Held', 'Звонок #$phone', '$current_date', '$current_date', 
(SELECT DISTINCT id FROM users WHERE user_name like \"$_REQUEST[user_name]\"),
(SELECT DISTINCT id FROM users WHERE user_name like \"$_REQUEST[user_name]\"),
'Inbound', '$client[module]', '$client[id]') ";

    $insert_call_cstm = "
INSERT INTO calls_cstm (id_c, vici_phone_c, vici_call_group_c, vici_fronter_phone_c, vici_uid_c, vici_channel_c)
VALUES ('$call_id', '$phone', '$_REQUEST[group]', '$_REQUEST[fronter_phone]','$_REQUEST[uid]', '$_REQUEST[channel]') ";

    mysql_query($insert_call) or die (print_error($insert_call));
    mysql_query($insert_call_cstm) or die (print_error($insert_call_cstm));

    if ($client['module'] == 'Contacts') {
        $insert_calls_contacts = "
INSERT INTO calls_contacts (id, call_id, contact_id, date_modified)
VALUES ('$call_client_id', '$call_id', '$client[id]' '$current_date') ";
        mysql_query($insert_calls_contacts) or die (print_error($insert_calls_contacts));

    } elseif ($client['module'] == 'Leads') {
        $insert_calls_leads = "
INSERT INTO calls_leads (id, call_id, lead_id, date_modified)
VALUES ('$call_client_id', '$call_id', '$client[id]' '$current_date') ";
        mysql_query($insert_calls_leads) or die (print_error($insert_calls_leads));

    }
//    elseif ($client['module'] == 'Accounts') {
//
//        $insert_calls_leads = "INSERT INTO c_leads_fl_c_inbound_calls_c
//(id, date_modified, deleted, c_leads_fl_c_inbound_callsc_inbound_calls_idb, c_leads_fl_c_inbound_callsc_leads_fl_ida)
//	    VALUES ('$call_contact_id', '$current_date', '0', '$call_id', '$client_id')";
//        mysql_query($insert_calls_leads) or die (print_r($insert_calls_leads));
//
//    }

    //$insert_calls_secgroup = "INSERT INTO securitygroups_records (id, securitygroup_id, record_id, module, date_modified, created_by, deleted) " .
    //    "VALUES ('$calls_secgroup_id', (SELECT id FROM securitygroups WHERE name = '$name_secgroup'), '$call_id', 'Calls', '$current_date', 2, 0)";

    print_r($call_id);
    print_r($insert_call);
    print_r($insert_calls_leads);
    print_r($insert_calls_contacts);

    //mysql_query($insert_calls_secgroup) or die (print_r($insert_calls_secgroup));

    return $call_id;
}


/**
 * Обновляем длительность звонок по окончанию
 *
 * @return bool
 */
function update_call($call_id)
{
    global $current_date;

    $update_calls = "UPDATE calls JOIN calls_cstm ON calls_cstm.id_c = calls.id SET date_end = '$current_date' ";

//    if ((isset($_REQUEST['duration']) && !empty($_REQUEST['duration']))) {
//        $duration = date("H:i:s", mktime(0, 0, $_REQUEST['duration'], 0, 0, 0));
//        $update_calls .= " , duration = '$duration' ";
//    }
    if ((isset($_REQUEST['duration']) && !empty($_REQUEST['duration']))) {
        $update_calls .= " , vici_duration_c = '$_REQUEST[duration]' ";
    }
    if ((isset($_REQUEST['recording']) && !empty($_REQUEST['recording']))) {
        $recording = 'http://$_SERVER[HTTP_HOST]/RECORDINGS/MP3/' . $_REQUEST['recording'] . '-all.mp3';
        $update_calls .= " , vici_call_record_c = '$recording' ";
    }

    $update_calls .= " WHERE id = '$call_id'";

    //print_r($update_calls);

    mysql_query($update_calls) or die (print_error($update_calls));
    return true;

}


// Соединяемся с БД
open_database_connection();

if ($_REQUEST['method'] === 'create_call') {

    if (isset($_REQUEST['phone']) && !empty($_REQUEST['phone'])) {
        $clients = check_by_phone($_REQUEST['phone']);
    } else {
        $clients = [];
    }

    // Если клиент 1 - создаем звонок для него и возвращаем id
    if ($clients && count($clients) == 1) {
        $call_id = create_call($clients[0], $_REQUEST['phone']);
        $result = array('type' => 'found_one', 'call_id' => $call_id);
        return json_encode($result);
    }

    // Если клиентов больше 1 - выводим список клиентов. По нажатию на url создаем звонок у клиента
    //elseif (count($clients) > 1) {
    //    $url = '';
    //}

    // Если клиентов нет - создаем лида и звонок для него
    elseif (!$clients) {
        $call_id = create_call($clients, $_REQUEST['phone']);
        $result = array('type' => 'not_found', 'call_id' => $call_id);
        return json_encode($result);
    }


} else if ($_REQUEST['method'] === 'update_call') {
    if (isset($_REQUEST['call_id']) && !empty($_REQUEST['call_id'])) {
        $return = update_call($_REQUEST['call_id']);
    } else {
        $return = false;
    }
    return json_encode($return);
}


print_r($return);


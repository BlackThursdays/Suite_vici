<link rel="stylesheet" href="custom/call_center/style/bootstrap-datetimepicker.min.css"/>
<link rel="stylesheet" href="custom/call_center/style/bootstrap-theme.min.css">
<link rel="stylesheet" href="custom/call_center/style/jquery-ui.css">
<link rel="stylesheet" href="custom/call_center/style/bootstrap-select.min.css">
<link rel="stylesheet" href="custom/call_center/style/easy-autocomplete.min.css">
<link rel="stylesheet" href="custom/call_center/style/easy-autocomplete.themes.min.css">
<link rel="stylesheet" href="custom/call_center/style/custom_form.css">

<script src="custom/call_center/js/bootstrap-select.ru.min.js"></script>
<script src="custom/call_center/js/jquery-1.12.4.min.js"></script>
<script src="custom/call_center/js/jquery-ui.min.js"></script>
<script src="custom/call_center/js/moment.min.js"></script>
<script src="custom/call_center/js/bootstrap-datetimepicker.min.js"></script>
<script src="custom/call_center/js/jquery.easy-autocomplete.min.js"></script>
<script src="custom/call_center/js/custom_datetime.js"></script>

<!-- Модальное окно -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="tittle1" id="tittle1"><?= $call_type ?></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="client_picture col-md-3">
                        <img alt="Клиент" src="<?= $client_picture; ?>">
                    </div>
                    <div class="client_info col-md-9">
                        <div class="client_full_name row">
                            <div class="col-md-9 client_full_name" id="client_full_name" name="client_full_name"
                                 data-client_id="1234">
                                <h3><?= $record_name; ?></h3>
                                <input type="text" style="display: none" id="client_full_name_i" list="client-list"
                                       value="">
                                <!--                                <input style="display: none" id="client_full_name_input">-->
                                <!--                                <script>-->
                                <!--                                    var options = {-->
                                <!--                                        data: ["blue", "green", "pink", "red", "yellow"]-->
                                <!--                                    };-->
                                <!--                                    $("#client_full_name_input").easyAutocomplete(options);-->
                                <!--                                    $('#client_full_name_input + div > ul').css('width', '253px');-->
                                <!--                                </script>-->
                                <datalist id="client-list">
                                    <option data-client_id="123">Пупкин Иван Петрович</option>
                                </datalist>
                            </div>
                            <div class="col-md-3">
                                <span class="id-ff multiple">
                                    <button class="button small_button" type="button" id="edit_client" title="Изменить">
                                        <img src="themes/SuiteR/images/edit_inline.gif?v=0ufS4WdB8B6eRIrpz9iqDw">
                                    </button>
                                    <button class="button small_button" type="button" id="detail_client"
                                            title="Просмотреть карточку">
                                        <img src="themes/SuiteR/images/Contacts.gif?v=0ufS4WdB8B6eRIrpz9iqDw">
                                    </button>
                                    <button hidden class="button small_button" type="button" id="accept_client">
                                        <img src="themes/SuiteR/images/accept_inline.gif?v=0ufS4WdB8B6eRIrpz9iqDw">
                                    </button>
                                </span>
                            </div>
                        </div>
                        <div style="display: none" class="client_type row">
                            <div class="col-md-9" id="client_type" name="client_type"
                                 data-client_id="1234">
                                <div class="radio">
                                    <label><input type="radio" name="radio"
                                                  id="radio_fl" <?= $check_contact ?> >Контактные лица</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="radio"
                                                  id="radio_lead" <?= $check_lead ?> >Предварительные
                                        контакты</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="radio"
                                                  id="radio_org" <?= $check_account ?> >Организации/
                                        ИП</label>
                                </div>
                            </div>
                        </div>
                        <div class="client_contact_info">
                            <table id="3" width="100%" cellspacing="1" cellpadding="1" border="0">
                                <tbody>
                                <tr class="tr" id="send_sms_form">
                                    <td class="td_label">
                                        Контактный телефон:
                                    </td>
                                    <td class="td_value">
                                        <input type="text" placeholder="Контактный телефон" class="form-control"
                                               id="client_phone" name="client_phone"
                                               value="<?= $client_phone; ?>" required>
                                    </td>
                                    <td class="td_button">
                                        <button type="button" class="button small_button" id="send_sms">
                                            <img src="custom/themes/default/images/sugartalk_SMS.gif" align="absmiddle">
                                        </button>
                                    </td>
                                </tr>
                                <tr hidden id="text_sms_tr">
                                    <td></td>
                                    <td colspan="1" style="text-align: center">
                                        <div class="form-group"><textarea class="form-control"
                                                                          placeholder="Текст СМС сообщения" rows="3"
                                                                          cols="6"
                                                                          style="width: 200px; height: 80px; resize: none;"
                                                                          id="text_sms"></textarea></div>
                                    </td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr hidden id="send_sms_tr">
                                    <td id="status_sms"></td>
                                    <td>
                                        <button class="btn" onclick="sendSMS();">Отправить</button>
                                    </td>
                                    <td></td>
                                </tr>

                                <tr class="tr">
                                    <td class="td_label">
                                        Email:
                                    </td>
                                    <td class="td_value">
                                        <input type="email" placeholder="Email" class="form-control"
                                               id="client_email"
                                               name="client_email" value="<?= $client_email; ?>">
                                    </td>
                                    <td class="td_button">
                                        <button type="button" class="button small_button" onclick=""><img
                                                    src="index.php?entryPoint=getImage&amp;themeName=SuiteR&amp;imageName=icon_email_send.gif"
                                                    border="0" align="absmiddle"></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="product_info row">
                    <div class="panel-group" id="accordion">
                        <div style="display: none" class="panel panel-default" id="credit_panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                        Кредиты</a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Дата</th>
                                            <th>Описание</th>
                                        </tr>
                                        </thead>
                                        <tbody id="credit_rows" name="credit_rows">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div style="display: none" class="panel panel-default" id="deposit_panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                        Депозиты</a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table" id="deposit">
                                        <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Дата</th>
                                            <th>Описание</th>
                                        </tr>
                                        </thead>
                                        <tbody id="deposit_rows" name="credit_rows">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div style="display: none" class="panel panel-default" id="card_panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                        Карт-счета</a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Дата</th>
                                            <th>Описание</th>
                                        </tr>
                                        </thead>
                                        <tbody id="card_rows" name="card_rows">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div style="display: none" class="panel panel-default" id="rko_panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                        РКО</a>
                                </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Дата</th>
                                            <th>Описание</th>
                                        </tr>
                                        </thead>
                                        <tbody id="rko_rows" name="rko_rows">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="call_info">
                    <table style="margin: auto">
                        <tbody>
                        <tr class="tr" id="theme_call_row">
                            <td class="td_label" scope="col">
                                Тема звонка:
                            </td>
                            <td>
                                <select class="selectpicker" id="theme_call">
                                    <?php
                                    foreach ($GLOBALS['app_list_strings']['theme_list'] as $key => $value) {
                                        echo "<option id='$key'>$value</option>";
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr class="tr" id="more_theme_call_row">
                            <td class="td_label" scope="col">
                                Тематика звонка:
                            </td>
                            <td>
                                <select class="selectpicker" id="more_theme_call"></select>
                            </td>
                        </tr>
                        <tr class="tr" id="result_call_row">
                            <td class="td_label" scope="col">
                                Результат:
                            </td>
                            <td>
                                <select class="selectpicker" id="result_call"></select>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="recall">
                    <table style="margin-left: 20px; margin-top: 20px">
                        <tbody>
                        <tr class="tr">
                            <td class="td_label" id="recall" scope="col">
                                Перезвонить:
                            </td>
                            <td class="td_value" colspan="3">
                                <div class="container">
                                    <div class="row">
                                        <div class='col-sm-3'>
                                            <div class="form-group">
                                                <div class='input-group date' id='datetimepicker1'>
                                                    <input type='text' class="form-control" id="recall_time"/>
                                                    <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            $(document).ready(function () {
                                                j_q('#datetimepicker1').datetimepicker({
                                                    locale: 'ru'
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="note">
                    <textarea class="form-control"
                              placeholder="Заметка" rows="3"
                              cols="10"
                              style="width:520px; height: 60px; resize: none; margin: 26px;"
                              id="note"></textarea>
                </div>
                <div class="new_lead row">
                    <button class="btn" data-toggle="collapse" data-target="#new_lead" onclick="cleanNewLead();">Новый
                        предварительный контакт
                    </button>
                    <div id="new_lead" style="text-align: center" class="collapse">
                        <table id="2" width="100%" cellspacing="1" cellpadding="0" border="0">
                            <tbody>
                            <tr class="tr">
                                <td class="td_label" scope="col">
                                    Организация:
                                </td>
                                <td class="td_value" colspan="3">
                                    <input type="text" placeholder="Организация" class="form-control"
                                           id="lead_account_name"
                                           name="lead_account_name">
                                </td>
                            </tr>
                            <tr class="tr">
                                <td class="td_label" scope="col">
                                    Фамилия:
                                </td>
                                <td class="td_value" colspan="3">
                                    <input type="text" placeholder="Фамилия" class="form-control"
                                           id="lead_last_name"
                                           name="lead_last_name">
                                </td>
                            </tr>
                            <tr class="tr">
                                <td class="td_label" scope="col">
                                    Имя:
                                </td>
                                <td class="td_value" colspan="3">
                                    <input type="text" placeholder="Имя" class="form-control" id="lead_first_name"
                                           name="lead_first_name" required>
                                </td>
                            </tr>
                            <tr class="tr">
                                <td class="td_label" scope="col">
                                    Контактный телефон:
                                </td>
                                <td class="td_value" colspan="3">
                                    <input type="text" placeholder="Контактный телефон" class="form-control"
                                           id="lead_phone" name="lead_phone" required>
                                </td>
                            </tr>
                            <tr class="tr">
                                <td class="td_label" scope="col">
                                    Email:
                                </td>
                                <td class="td_value" colspan="3">
                                    <input type="email" placeholder="Email" class="form-control" id="lead_email"
                                           name="lead_email">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input class="button medium_button" type="submit" data-dismiss="modal" onclick="save();"
                       value="Сохранить">
                <input class="button medium_button" type="button" data-dismiss="modal" value="Отмена">
            </div>
        </div>
    </div>
</div>

<style>
    .modal {
        text-align: center;
        padding: 0 !important;
    }

    .modal:before {
        content: '';
        display: inline-block;
        height: 100%;
        vertical-align: middle;
        margin-right: -4px;
    }

    .modal-dialog {
        display: inline-block;
        text-align: left;
        vertical-align: middle;
    }
</style>

<div class="modal fade bd-example-modal-sm" id="loading_modal" tabindex="-1" role="dialog"
     aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body" style="text-align: center">
                <img src="themes/SuiteR/images/loading.gif"/><span
                        style="margin-left: 10px;">Пожалуйста, подождите</span>
            </div>
        </div>
    </div>
</div>

<script>

    var j_q = jQuery.noConflict();

    // Модальное окно
    $(document).ready(function () {
        if (immediately_show_modal === true) {
            $("#myModal").modal('show');
            getProduct();
        }
    });

    // Форма отправки СМС
    $('#send_sms').click(function () {
        $('#text_sms_tr, #send_sms_tr').toggle();
        $('#status_sms').html('');
        $('#text_sms').val('');
    });

    // Просмотр карточки клиента/ лида
    $('#detail_client').click(function () {
        var url = "index.php?module=" + module + "&action=DetailView&record=" + record_id;
        window.open(url, 'Информация о клиенте');
    });

    // Выбор нового клиента/ лида
    $('#client_full_name').dblclick(function () {
        editClient();
    });
    $('#edit_client').click(function () {
        editClient();
    });

    // Подтверждение выбора клиента / лида
    $('#accept_client').click(function () {
        var client_full_name = $('#client_full_name  input').val();
        if (client_full_name != '' && record_id != undefined) {
            $('#client_full_name  h3').text(client_full_name);
        } else {
            $('#client_full_name  h3').text(not_found_client);
        }
        $('#client_full_name  input, #client_full_name  h3, #accept_client, #edit_client, #detail_client, .client_type').toggle();
    });


    // Очистка Названия (ФИО) организации (физ лица) при переключении radio button
    $("#radio_org, #radio_fl, #radio_lead").change(function () {
        $('#client_full_name  input').val('');
        clientInfoClean();

        if ($("#radio_org").prop("checked")) {
            method = 'get_account';
            module = 'Accounts';
            $(".client_picture").html('<img alt="Организация/ Индивидуальный предпрниниматель" src="<?php echo $picture['Accounts'] ?>">');
        } else if ($("#radio_fl").prop("checked")) {
            method = 'get_contact';
            module = 'Contacts';
            $(".client_picture").html('<img alt="Контактное лицо" src="<?php echo $picture['Contacts']; ?>">');
        } else if ($("#radio_lead").prop("checked")) {
            method = 'get_lead';
            module = 'Leads';
            $(".client_picture").html('<img alt="Предварительный контакт" src="<?php echo $picture['Leads']; ?>">');
        }
    });


    function sendSMS() {

        var ptype = module;
        var url = "./index.php?module=Administration&action=smsProvider&sugar_body_only=1&option=send";
        var msg = $('#text_sms').val();
        var num = $('#client_phone').val();
        var pname = $('#client_full_name  h3').text();
        var pid = record_id;
        var send_to_multi = 0;

        $.post(url, {
            num: num,
            sms_msg: msg,
            send_to_multi: send_to_multi,
            pid: pid,
            ptype: ptype,
            pname: pname
        }, function (data) {

            data = data.replace(/<[^>]+>/g, '');

            if (data == "Сообщение успешно отправленно. Нажмите F5" && send_to_multi == 0) {
                $('#status_sms').html('<p valign="top" style="color: green;">Отправлено');
            } else {
                $('#status_sms').html('<p valign="top" style="color: red;">Не отправлено. Обратитесь к администратору');
            }

        });
    }

    function editClient() {
        var client_full_name = $('#client_full_name  h3').text();
        if (client_full_name != not_found_client) {
            $('#client_full_name  input').val(client_full_name);
        } else {
            $('#client_full_name  input').val('');
        }
        $('#client_full_name  h3, #client_full_name  input, #accept_client, #edit_client, #detail_client, .client_type').toggle();
    }

    // Очистка продуктов, email, id Клиента
    function clientInfoClean() {
        // Очищаем id
        record_id = '';

        // Очищаем поле с email
        $("#client_email").val('');

        // Очищаем и скрываем панели с продуктами
        $("#card_panel, #deposit_panel, #credit_panel, #rko_panel").hide();
        $("#credit_rows, #deposit_rows, #card_rows, #rko_rows").html('');
    }

    function cleanNewLead() {
        $('input[id ^= lead_]').val('');
    }

    function getProduct() {

        var method = 'get_product';
        var url = 'index.php?entryPoint=call_center&method=' + method + '&id=' + record_id + '&type=' + module;
        j_q.ajax({
            type: "GET",
            url: url,
            success: function (product) {
                product = jQuery.parseJSON(product);
                if (product) {
                    if (product.credit) {
                        j_q('#credit_panel').show('slow');
                        j_q("#credit_rows").html('');
                        product.credit.forEach(function (product, i, arr) {
                            j_q("#credit_rows").append('<tr><td>' + product['number'] + '</td><td>' + product['date'] + '</td><td>' + product['description'] + '</td></tr>');
                        });
                    }
                    if (product.deposit) {
                        j_q('#deposit_panel').show('slow');
                        j_q("#deposit_rows").html('');
                        product.deposit.forEach(function (product, i, arr) {
                            j_q("#deposit_rows").append('<tr><td>' + product['number'] + '</td><td>' + product['date'] + '</td><td>' + product['description'] + '</td></tr>');
                        });
                    }
                    if (product.card) {
                        j_q('#card_panel').show('slow');
                        j_q("#card_rows").html('');
                        product.card.forEach(function (product, i, arr) {
                            j_q("#card_rows").append('<tr><td>' + product['number'] + '</td><td>' + product['date'] + '</td><td>' + product['description'] + '</td></tr>');
                        });
                    }
                    if (product.rko) {
                        j_q('#rko_panel').show('slow');
                        j_q("#rko_rows").html('');
                        product.rko.forEach(function (product, i, arr) {
                            j_q("#rko_rows").append('<tr><td>' + product['number'] + '</td><td>' + product['date'] + '</td><td>' + product['description'] + '</td></tr>');
                        });
                    }

                }
            }
        });
    }

    function getEmail() {
        var method = 'get_email';
        var url = 'index.php?entryPoint=call_center&method=' + method + '&id=' + record_id + '&type=' + module;
        j_q.ajax({
            type: "GET",
            url: url,
            success: function (email) {
                if (email) {
                    email = jQuery.parseJSON(email);
                    j_q("#client_email").val(email['email_address']);
                }
            }
        });
    }

    function save() {

        j_q.post(
            "index.php?entryPoint=call_center&method=save",
            {
                call: {
                    id: call_id,
                    theme: {
                        id: $("#theme_call").find("option:selected").attr('id'),
                        name: $("#theme_call").find("option:selected").text()
                    },
                    more_theme: {
                        id: $("#more_theme_call").find("option:selected").attr('id'),
                        name: $("#more_theme_call").find("option:selected").text()
                    },
                    result: {
                        id: $("#result_call").find("option:selected").attr('id'),
                        name: $("#result_call").find("option:selected").text()
                    },
                    note: $("#note").val()
                },

                lead: {
                    account_name: $("#lead_account_name").val(),
                    last_name: $("#lead_last_name").val(),
                    first_name: $("#lead_first_name").val(),
                    phone: $("#lead_phone").val(),
                    email: $("#lead_email").val()
                },

                task: {
                    time: $("#recall_time").val()
                },

                client: {
                    _old: {
                        id: record_id_const,
                        module: module_const
                    },
                    _new: {
                        id: record_id,
                        module: module,
                        email: $("#client_phone").val(),
                        phone: $("#client_email").val()
                    }
                }

            }
        )
            .done(function () {
                window.location = "/index.php?action=DetailView&module=<?= $source_module ?>&record=<?= $source_record ?>";
            })
            .fail(function () {
                alert("Ошибка сохранения информации");
            });

//        // Спустя 1 сек перегружаем страницу
//        window.setTimeout(function () {
//            window.location = "/index.php?action=DetailView&module=<?//= $source_module ?>//&record=<?//= $source_record ?>//";
//        }, 1000);
    }


    // Изменение ФИО/ Названия организации
    $("#client_full_name_i").change(function () {
        var name = this.value;

        clientInfoClean();

        if (name) {
            record_id = $('option:contains("' + name + '")').data('client_id');
            if (record_id) {

                // Загрузка email
                getEmail();

                // Загрузка продуктов
                getProduct();

            }
        }
    });

    var more_theme_list = <?= json_encode($GLOBALS['app_list_strings']['more_theme_list']) ?>;
    var result_list = <?= json_encode($GLOBALS['app_list_strings']['result_list']) ?>;

    $('#more_theme_call').selectpicker();
    $('#result_call').selectpicker();
    $('#theme_call')
        .selectpicker()
        .change(function () {
            var selectVal = $(this).find("option:selected").attr('id');

            var more_theme_call = $('#more_theme_call');
            var result_call = $('#result_call');

            if (selectVal !== '') {
                more_theme_call
                    .html('')
                    .append("<option value=''></option>")
                    .selectpicker('val', '');
                $.each(more_theme_list, function (key, value) {
                    if (key.indexOf(selectVal) === 0) {
                        more_theme_call.append("<option id='" + key + "'>" + value + "</option>");
                    }
                });
                more_theme_call.selectpicker('refresh');

                result_call
                    .html('')
                    .append("<option value=''></option>")
                    .selectpicker('val', '');
                $.each(result_list, function (key, value) {
                    if (key.indexOf(selectVal) === 0) {
                        result_call.append("<option id='" + key + "'>" + value + "</option>");
                    }
                });
                result_call.selectpicker('refresh');
            } else {
                more_theme_call
                    .html('')
                    .selectpicker('refresh');
                result_call
                    .html('')
                    .selectpicker('refresh');
            }

        });

</script>
<script>

    // Валидация
    // Поиск всех input-элементов в DOM, которые привязаны к datalist с помощью атрибута list.
    var inputs = document.querySelectorAll('input[list]');
    for (var i = 0; i < inputs.length; i++) {
        // Когда значение input изменяется…
        inputs[i].addEventListener('change', function () {
            var optionFound = false,
                datalist = this.list;
            // Определение, существует ли option с текущим значением input.
            for (var j = 0; j < datalist.options.length; j++) {
                if (this.value == datalist.options[j].value) {
                    optionFound = true;
                    break;
                }
            }
            // используйте функцию setCustomValidity API проверки ограничений валидации
            // чтобы обеспечить ответ пользователю, если нужное значение в datalist отсутствует
            if (optionFound) {
                this.setCustomValidity('');
            } else {
                this.setCustomValidity('Выберите значение из списка');
            }
        });
    }


    // Запрос фамилии физ лица (названия организации) в зависимости от переключателя
    $('#client_full_name  input').keyup(function () {

        var client_full_name = $('#client_full_name  input').val();
        var url = 'index.php?entryPoint=call_center&method=' + method + '&name=' + client_full_name;
        if (g_client_full_name != client_full_name && client_full_name.length > 2) {
            $.ajax({
                type: "GET",
                url: url,
                success: function (client) {
                    client = jQuery.parseJSON(client);
                    var client_list = $("#client-list");
                    if (client) {
                        client_list
                            .html('')
                            .selectpicker('refresh');

                        client.forEach(function (client, i, arr) {
                            client_list.append('<option data-client_id=' + client['id'] + '>' + client['name'] + '</option>');
                        });

                        client_list
                            .selectpicker('refresh');
                    }
                }
            });
            g_client_full_name = client_full_name;
        }
    });

</script>
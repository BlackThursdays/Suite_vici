<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_ASSIGNED_TO_ID' => 'Ответственный(ая)-ID',
    'LBL_ASSIGNED_TO_NAME' => 'Ответственный(ая)',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Дата создания',
    'LBL_DATE_MODIFIED' => 'Дата изменения',
    'LBL_MODIFIED' => 'Изменено',
    'LBL_MODIFIED_NAME' => 'Изменено (Имя)',
    'LBL_CREATED' => 'Создано',
    'LBL_DESCRIPTION' => 'Описание',
    'LBL_DELETED' => 'Удалено',
    'LBL_NAME' => 'Учётная запись для исходящей почты',
    'LBL_CREATED_USER' => 'Создано',
    'LBL_MODIFIED_USER' => 'Изменено',
    'LBL_LIST_NAME' => 'Имя',
    'LBL_EDIT_BUTTON' => 'Править',
    'LBL_REMOVE' => 'Удалить',
    'LBL_LIST_FORM_TITLE' => 'Серверы исходящей почты',
    'LBL_MODULE_NAME' => 'Серверы исходящей почты (SMTP)',
    'LBL_MODULE_TITLE' => 'Серверы исходящей почты (SMTP)',
    'LBL_HOMEPAGE_TITLE' => 'Мои серверы исходящей почты',
    'LNK_NEW_RECORD' => 'Добавить сервер исходящей почты',
    'LNK_LIST' => 'Перечень серверов исходящей почты',
    'LBL_SEARCH_FORM_TITLE' => 'Поиск серверов исходящей почты',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'История',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Мероприятия',
    'LBL_NEW_FORM_TITLE' => 'Серверы исходящей почты',
    'LBL_USERNAME' => 'Логин',
    'LBL_PASSWORD' => 'Пароль',
    'LBL_SMTP_SERVERNAME' => 'Имя сервера SMTP',
    'LBL_SMTP_AUTH' => 'Аутентификация',
    'LBL_SMTP_PORT' => 'Порт',
    'LBL_SMTP_PROTOCOL' => 'Протокол',
    'LBL_EDITVIEW_PANEL1' => 'Параметры сервера SMTP',
    'LBL_CHANGE_PASSWORD' => 'Изменить пароль',
    'LBL_SEND_TEST_EMAIL' => 'Тестирование',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Невозможно отправить тестовое письмо: почтовый сервер для отправки исходящей почты не настроен.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Использовать SMTP-аутентификацию?',
    'LBL_MAIL_SMTPPASS' => 'Пароль:',
    'LBL_MAIL_SMTPPORT' => 'Порт:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP-сервер:',
    'LBL_MAIL_SMTPUSER' => 'Логин:',
    'LBL_MAIL_SMTP_SETTINGS' => 'Параметры SMTP-сервера',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Выберите почтовую службу:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Пароль:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Mail ID:',
    'LBL_GMAIL_SMTPPASS' => 'Пароль:',
    'LBL_GMAIL_SMTPUSER' => 'Логин:',
    'LBL_EXCHANGE_SMTPPASS' => 'Пароль:',
    'LBL_EXCHANGE_SMTPUSER' => 'Логин:',
    'LBL_EXCHANGE_SMTPPORT' => 'Порт:',
    'LBL_EXCHANGE_SMTPSERVER' => 'SMTP-сервер:',

    'LBL_TYPE' => 'Тип',
    'LBL_MAIL_SENDTYPE' => 'Отправка почты с помощью',
    'LBL_MAIL_SMTPSSL' => 'Параметры SMTP/SSL',
    'LBL_SMTP_FROM_NAME' => 'Имя отправителя',
    'LBL_SMTP_FROM_ADDR' => 'Адрес отправителя',
);

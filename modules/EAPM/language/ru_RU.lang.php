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
    'LBL_ASSIGNED_TO_NAME' => 'Пользователь SuiteCRM',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Дата создания',
    'LBL_DATE_MODIFIED' => 'Дата изменения',
    'LBL_MODIFIED' => 'Изменено',
    'LBL_MODIFIED_NAME' => 'Изменено',
    'LBL_CREATED' => 'Создано',
    'LBL_DESCRIPTION' => 'Описание',
    'LBL_DELETED' => 'Удалено',
    'LBL_NAME' => 'Имя пользователя приложения',
    'LBL_CREATED_USER' => 'Создано',
    'LBL_MODIFIED_USER' => 'Изменено',
    'LBL_LIST_NAME' => 'Имя',
    'LBL_LIST_FORM_TITLE' => 'Перечень внешних учётных записей',
    'LBL_MODULE_NAME' => 'Внешняя учётная запись',
    'LBL_MODULE_TITLE' => 'Внешние учётные записи',
    'LBL_HOMEPAGE_TITLE' => 'Мои внешние учётные записи',
    'LNK_NEW_RECORD' => 'Создать внешнюю учётную запись',
    'LNK_LIST' => 'Внешние учётные записи',
    'LBL_SEARCH_FORM_TITLE' => 'Поиск внешнего источника',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'История',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Мероприятия',
    'LBL_NEW_FORM_TITLE' => 'Новая учётная запись',
    'LBL_PASSWORD' => 'Пароль',
    'LBL_USER_NAME' => 'Имя пользователя приложения',
    'LBL_URL' => 'URL-адрес',
    'LBL_APPLICATION' => 'Приложение',
    'LBL_API_DATA' => 'API-данные',
    'LBL_API_CONSKEY' => 'Публичный ключ',
    'LBL_API_CONSSECRET' => 'Секретный ключ',
    'LBL_API_OAUTHTOKEN' => 'OAuth-токен',
    'LBL_AUTH_UNSUPPORTED' => "Данный метод авторизации не поддерживается приложением",
    'LBL_AUTH_ERROR' => 'Попытка авторизации внешней учётной записи не удалась.',
    'LBL_VALIDATED' => 'Соединение установлено',
    'LBL_ACTIVE' => 'Активно',
    'LBL_OAUTH_NAME' => '%s',
    'LBL_CONNECT_BUTTON_TITLE' => 'Подключить',
    'LBL_NOTE' => 'Заметка',
    'LBL_CONNECTED' => 'Подключено',

    'LBL_ERR_NO_AUTHINFO' => 'По данной учётной записи нет регистрационных данных.',
    'LBL_ERR_NO_TOKEN' => 'Для этой учётной записи нет действующих токенов.',

    'LBL_ERR_FAILED_QUICKCHECK' => 'Нет соединения с {0}. Нажмите на кнопку "ОК" для восстановления соединения.',

    'LBL_CLICK_TO_EDIT' => 'Изменить',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => 'Переподключиться',
    'LBL_APPLICATION_FOUND_NOTICE' => 'Учётная запись для данного приложения уже существует. Мы восстановили существующую учётную запись.',
    'LBL_OMIT_URL' => '(Без http:// или https://)',
    'LBL_OAUTH_SAVE_NOTICE' => 'Нажмите на кнопку <b>Подключить</b> для перенаправления на страницу ввода регистрационной информации. После успешного подключения вы автоматически вернётесь в SuiteCRM.',
    'LBL_BASIC_SAVE_NOTICE' => 'Нажмите на кнопку <b>Подключить</b> для подключения данной учётной записи к SuiteCRM.',
    'LBL_ERR_POPUPS_DISABLED' => 'Для успешного подключения разрешите всплывающие окна в вашем браузере или добавьте сайт "{0}" в список исключений.',

    'LBL_API_OAUTHSECRET' => 'Пароль API OAuth',
);

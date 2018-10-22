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
    'ERR_DELETE_RECORD' => 'Для удаления контакта необходимо указать номер записи.',
    'LBL_ACCOUNT_ID' => 'ID контрагента:',
    'LBL_ACCOUNT_NAME' => 'Контрагент:',
    'LBL_CAMPAIGN' => 'Маркет. кампания:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Мероприятия',
    'LBL_ADD_BUSINESSCARD' => 'Ввести визитку',
    'LBL_ADDMORE_BUSINESSCARD' => 'Добавить другую визитку',
    'LBL_ADDRESS_INFORMATION' => 'Адресная информация',
    'LBL_ALT_ADDRESS_CITY' => 'Другой адрес - город:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Другой адрес - страна:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Другой адрес - индекс:',
    'LBL_ALT_ADDRESS_STATE' => 'Другой адрес - область:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Другой адрес - улица 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Другой адрес - улица 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Другой адрес - улица:',
    'LBL_ALTERNATE_ADDRESS' => 'Другой адрес:',
    'LBL_ALT_ADDRESS' => 'Другой адрес:',
    'LBL_ANY_ADDRESS' => 'Любой адрес:',
    'LBL_ANY_EMAIL' => 'Любой E-mail:',
    'LBL_ANY_PHONE' => 'Любой тел.:',
    'LBL_ASSIGNED_TO_NAME' => 'Ответственный(ая)',
    'LBL_ASSIGNED_TO_ID' => 'Ответственный(ая):',
    'LBL_ASSISTANT_PHONE' => 'Помощник - тел.:',
    'LBL_ASSISTANT' => 'Помощник:',
    'LBL_BIRTHDATE' => 'День рождения:',
    'LBL_BUSINESSCARD' => 'Визитка',
    'LBL_CITY' => 'Город:',
    'LBL_CAMPAIGN_ID' => 'Маркет. кампания (ID)',
    'LBL_CONTACT_INFORMATION' => 'Основная информация',  //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_CONTACT_NAME' => 'Контактное лицо:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Сделки контакта:',
    'LBL_CONTACT_ROLE' => 'Роль:',
    'LBL_CONTACT' => 'Контакт:',
    'LBL_COUNTRY' => 'Страна:',
    'LBL_CREATED_ACCOUNT' => 'Создан новый контрагент',
    'LBL_CREATED_CALL' => 'Создан новый звонок',
    'LBL_CREATED_CONTACT' => 'Создан новый контакт',
    'LBL_CREATED_MEETING' => 'Создана новая встреча',
    'LBL_CREATED_OPPORTUNITY' => 'Создана новая сделка',
    'LBL_DATE_MODIFIED' => 'Дата изменения:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Контакты',
    'LBL_DEPARTMENT' => 'Отдел:',
    'LBL_DESCRIPTION' => 'Описание:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Подчинённые',
    'LBL_DO_NOT_CALL' => 'Не звонить:',
    'LBL_DUPLICATE' => 'Возможные дублирующие контакты',
    'LBL_EMAIL_ADDRESS' => 'E-mail:',
    'LBL_EMAIL_OPT_OUT' => 'Не писать на E-mail',
    'LBL_EXISTING_ACCOUNT' => 'Использован существующий контрагент',
    'LBL_EXISTING_CONTACT' => 'Использован существующий контакт',
    'LBL_EXISTING_OPPORTUNITY' => 'Использование существующей сделки',
    'LBL_FAX_PHONE' => 'Факс:',
    'LBL_FIRST_NAME' => 'Имя:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'История',
    'LBL_HOME_PHONE' => 'Тел. (дом.):',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'Импортирование vCard',
    'LBL_VCARD' => 'Визитная карточка (vCard)',
    'LBL_IMPORT_VCARDTEXT' => 'Автоматическое создание нового контакта при импортировании файла vCard.',
    'LBL_INVALID_EMAIL' => 'Неверный E-mail:',
    'LBL_INVITEE' => 'Отчёты',
    'LBL_LAST_NAME' => 'Фамилия:',
    'LBL_LEAD_SOURCE' => 'Источник предв. контакта:',
    'LBL_LIST_ACCEPT_STATUS' => 'Статус',
    'LBL_LIST_ACCOUNT_NAME' => 'Контрагент',
    'LBL_LIST_CONTACT_NAME' => 'Контактное лицо',
    'LBL_LIST_CONTACT_ROLE' => 'Роль',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mail',
    'LBL_LIST_FIRST_NAME' => 'Имя',
    'LBL_LIST_FORM_TITLE' => 'Список контактов',
    'LBL_LIST_LAST_NAME' => 'Фамилия',
    'LBL_LIST_NAME' => 'ФИО',
    'LBL_LIST_PHONE' => 'Тел.',
    'LBL_LIST_TITLE' => 'Должность',
    'LBL_MOBILE_PHONE' => 'Тел. (моб.):',
    'LBL_MODIFIED' => 'Изменено:',
    'LBL_MODULE_NAME' => 'Контакты',
    'LBL_MODULE_TITLE' => 'Контакты - ГЛАВНАЯ',
    'LBL_NAME' => 'ФИО:',
    'LBL_NEW_FORM_TITLE' => 'Новый контакт',
    'LBL_NOTE_SUBJECT' => 'Заметки по теме',
    'LBL_OFFICE_PHONE' => 'Тел. (раб.):',
    'LBL_OPP_NAME' => 'Название сделки:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'ID роли сделки:',
    'LBL_OPPORTUNITY_ROLE' => 'Роль в сделке:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Другой E-mail:',
    'LBL_OTHER_PHONE' => 'Другой тел.:',
    'LBL_PHONE' => 'Тел.:',
    'LBL_PORTAL_APP' => 'Портальные приложения',
    'LBL_PORTAL_INFORMATION' => 'Портальная информация',
    'LBL_PORTAL_NAME' => 'Название портала:',
    'LBL_STREET' => 'Улица',
    'LBL_POSTAL_CODE' => 'Индекс:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Основной адрес - город:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Основной адрес - страна:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Основной адрес - индекс:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Основной адрес - область:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Основной адрес - улица 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Основной адрес - улица 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Основной адрес - улица:',
    'LBL_PRIMARY_ADDRESS' => 'Основной адрес:',
    'LBL_PRODUCTS_TITLE' => 'Продукты',
    'LBL_REPORTS_TO_ID' => 'Руководитель(ID)',
    'LBL_REPORTS_TO' => 'Руководитель:',
    'LBL_RESOURCE_NAME' => 'Название ресурса',
    'LBL_SALUTATION' => 'Приветствие',
    'LBL_SAVE_CONTACT' => 'Сохранить контакт',
    'LBL_SEARCH_FORM_TITLE' => 'Поиск контактов',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Выбрать отмеченные контакты',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Выбрать отмеченные контакты',
    'LBL_STATE' => 'Область или регион:', //For address fields
    'LBL_SYNC_CONTACT' => 'Синхронизация с Outlook:',
    'LBL_PROSPECT_LIST' => 'Список адресатов',
    'LBL_TITLE' => 'Должность:',
    'LNK_CONTACT_LIST' => 'Контакты',
    'LNK_IMPORT_VCARD' => 'Создать контакт из vCard',
    'LNK_NEW_ACCOUNT' => 'Создать контрагента',
    'LNK_NEW_APPOINTMENT' => 'Назначить встречу/звонок',
    'LNK_NEW_CALL' => 'Назначить звонок',
    'LNK_NEW_CASE' => 'Создать обращение',
    'LNK_NEW_CONTACT' => 'Создать контакт',
    'LNK_NEW_EMAIL' => 'Отправить E-mail в архив',
    'LNK_NEW_MEETING' => 'Назначить встречу',
    'LNK_NEW_NOTE' => 'Создать заметку',
    'LNK_NEW_OPPORTUNITY' => 'Создать сделку',
    'LNK_NEW_TASK' => 'Создать задачу',
    'LNK_SELECT_ACCOUNT' => "Выбор контрагента",
    'NTC_DELETE_CONFIRMATION' => 'Вы уверены, что хотите удалить эту запись?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Создание сделки требует контрагента.\n Пожалуйста, или создайте нового контрагента или выберите из уже существующих.',
    'NTC_REMOVE_CONFIRMATION' => 'Вы уверены, что хотите удалить этот контакт из данного обращения?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Предварительные контакты',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Сделки',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Документы',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Копировать в основной адрес',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Копировать в другой адрес',

    'LBL_CASES_SUBPANEL_TITLE' => 'Обращения',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Ошибки',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Проекты',
    'LBL_PROJECTS_RESOURCES' => 'Ресурсы проекта',
    'LBL_CAMPAIGNS' => 'Маркет. кампании',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Маркет. кампании',
    'LBL_LIST_CITY' => 'Город',
    'LBL_LIST_STATE' => 'Область',
    'LBL_HOMEPAGE_TITLE' => 'Мои контакты',
    'LBL_OPPORTUNITIES' => 'Сделки',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакты',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Проекты',
    'LNK_IMPORT_CONTACTS' => 'Импорт контактов',

    // SNIP
    'LBL_USER_SYNC' => 'Синхронизация пользователем',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'События',

    'LBL_AOP_CASE_UPDATES' => 'Обновления обращения',
    'LBL_CREATE_PORTAL_USER' => 'Создать пользователя портала',
    'LBL_ENABLE_PORTAL_USER' => 'Включить пользователя портала',
    'LBL_DISABLE_PORTAL_USER' => 'Отключить пользователя портала',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Ошибка создания пользователя портала',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Ошибка включения пользователя портала',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Ошибка отключения пользователя портала',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Пользователь портала успешно создан',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Включить пользователя портала',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Отключить пользователя портала',
    'LBL_NO_JOOMLA_URL' => 'Не указан URL портала',
    'LBL_PORTAL_USER_TYPE' => 'Пользователь портала:',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Учётная запись портала отключена:',
    'LBL_JOOMLA_ACCOUNT_ID' => 'ID учётной записи Joomla',
   
    'LBL_ERROR_NO_PORTAL_SELECTED' => 'There isn\'t any portal selected', // escaped single quotes required. PR 5426
    'LBL_PLEASE_UPDATE_DEPRECATED_PORTAL_ERROR' => 'More than one portal URLs are set but multiple portal is not supported, please update portal component on site: ',
    'LBL_PLEASE_UPDATE_DEPRECATED_PORTAL_WARNING' => 'Portal component is deprecated, please update portal component on site: ',

    'LBL_INVALID_USER_DATA' => 'Trying to create a portal user without name and/or any email address. Please check the contact details',
    'LBL_NO_RELATED_JACCOUNT' => 'Trying to disable a CRM User without related Joomla Portal Account',
    'LBL_UNABLE_READ_PORTAL_VERSION' => 'Unable to read AOP version from portal', // PR 5426
 
    'LBL_AOS_CONTRACTS' => 'Договоры',
    'LBL_AOS_INVOICES' => 'Счета',
    'LBL_AOS_QUOTES' => 'Предложения',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Контакты проекта',
);


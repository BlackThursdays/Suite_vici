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
    'LBL_ACCEPT_THIS' => 'Принять?',
    'LBL_ADD_BUTTON' => 'Добавить',
    'LBL_ADD_INVITEE' => 'Добавить приглашённых',
    'LBL_CONTACT_NAME' => 'Контакт:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакты',
    'LBL_CREATED_BY' => 'Кем создано',
    'LBL_DATE_END' => 'Дата окончания',
    'LBL_DATE_TIME' => 'Дата и время начала:',
    'LBL_DATE' => 'Дата начала:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Встречи',
    'LBL_DESCRIPTION' => 'Описание:',
    'LBL_DIRECTION' => 'Направление:',
    'LBL_DURATION_HOURS' => 'Продолжительность (час.):',
    'LBL_DURATION_MINUTES' => 'Продолжительность (мин.):',
    'LBL_DURATION' => 'Продолжительность:',
    'LBL_EMAIL' => 'E-mail',
    'LBL_FIRST_NAME' => 'Имя',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Заметки',
    'LBL_HOURS_ABBREV' => 'час.',
    'LBL_HOURS_MINS' => '(часов:минут)',
    'LBL_INVITEE' => 'Приглашённые',
    'LBL_LAST_NAME' => 'Фамилия',
    'LBL_ASSIGNED_TO_NAME' => 'Ответственный(ая):',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Ответственный(ая)',
    'LBL_LIST_CLOSE' => 'Закрыть',
    'LBL_LIST_CONTACT' => 'Контакт',
    'LBL_LIST_DATE_MODIFIED' => 'Дата изменения',
    'LBL_LIST_DATE' => 'Дата начала',
    'LBL_LIST_DIRECTION' => 'Направление',
    'LBL_LIST_DUE_DATE' => 'Дата завершения',
    'LBL_LIST_FORM_TITLE' => 'Список встреч',
    'LBL_LIST_MY_MEETINGS' => 'Мои встречи',
    'LBL_LIST_RELATED_TO' => 'Относится к',
    'LBL_LIST_STATUS' => 'Статус',
    'LBL_LIST_SUBJECT' => 'Тема',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Предварительные контакты',
    'LBL_LOCATION' => 'Место:',
    'LBL_MINSS_ABBREV' => 'мин.',
    'LBL_MODIFIED_BY' => 'Кем исправлено',
    'LBL_MODULE_NAME' => 'Встречи',
    'LBL_MODULE_TITLE' => 'Встречи - ГЛАВНАЯ',
    'LBL_NAME' => 'Имя',
    'LBL_NEW_FORM_TITLE' => 'Назначить встречу',
    'LBL_OUTLOOK_ID' => 'ID Outlook',
    'LBL_SEQUENCE' => 'Последовательность обновления',
    'LBL_PHONE' => 'Тел. (раб.):',
    'LBL_REMINDER_TIME' => 'Время напоминания',
    'LBL_EMAIL_REMINDER_SENT' => 'Напоминание по E-mail отправлено',
    'LBL_REMINDER' => 'Напоминания:',
    'LBL_REMINDER_POPUP' => 'Во всплывающем окне',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Отправить E-mail приглашённым',
    'LBL_EMAIL_REMINDER' => 'Напоминание при помощи E-mail',
    'LBL_EMAIL_REMINDER_TIME' => 'Время напоминания по E-mail',
    'LBL_REMOVE' => 'удал.',
    'LBL_SCHEDULING_FORM_TITLE' => 'Планирование',
    'LBL_SEARCH_BUTTON' => 'Найти',
    'LBL_SEARCH_FORM_TITLE' => 'Поиск встречи',
    'LBL_SEND_BUTTON_LABEL' => 'Сохранить и отправить приглашения',
    'LBL_SEND_BUTTON_TITLE' => 'Сохранить и отправить приглашения',
    'LBL_STATUS' => 'Статус:',
    'LBL_TYPE' => 'Тип встречи',
    'LBL_PASSWORD' => 'Пароль встречи',
    'LBL_URL' => 'Начать/Присоединиться к встрече',
    'LBL_HOST_URL' => 'URL хоста',
    'LBL_DISPLAYED_URL' => 'Отобразить URL',
    'LBL_CREATOR' => 'Инициатор встречи',
    'LBL_EXTERNALID' => 'Внешнее приложение (ID)',
    'LBL_SUBJECT' => 'Тема:',
    'LBL_TIME' => 'Время начала:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Пользователи',
    'LBL_PARENT_TYPE' => 'Тип родителя',
    'LBL_PARENT_ID' => 'ID родителя',
    'LNK_MEETING_LIST' => 'Встречи',
    'LNK_NEW_APPOINTMENT' => 'Назначить встречу/звонок',
    'LNK_NEW_MEETING' => 'Назначить встречу',
    'LNK_IMPORT_MEETINGS' => 'Импорт встреч',

    'LBL_CREATED_USER' => 'Создано',
    'LBL_MODIFIED_USER' => 'Изменено',
    'NOTICE_DURATION_TIME' => 'Продолжительность встречи должна быть больше 0 минут',
    'LBL_MEETING_INFORMATION' => 'Основная информация', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_LIST_JOIN_MEETING' => 'Присоединиться к встрече',
    'LBL_ACCEPT_STATUS' => 'Статус приглашения',
    'LBL_ACCEPT_LINK' => 'Принять вызов',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'Вы не можете присоединиться к данной встрече, поскольку вы не приглашены на неё.',
    'LBL_EXTNOT_RECORD_LINK' => 'Просмотр информации о встрече',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'Вы не можете начать данную встречу, поскольку вы не администратор системы, либо встреча была запланирована не вами.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Составить приглашение:',
    'LBL_CREATE_CONTACT' => 'Создав новый контакт',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'Создав новый предварит. контакт', // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Создать', // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Отказаться',
    'LBL_EMPTY_SEARCH_RESULT' => 'По указанным критериям ничего не обнаружено. Вы можете создать приглашение "с нуля", добавив в него новые контакты / предварительные контакты.',
    'LBL_NO_ACCESS' => 'У вас нет прав на создание записи в модуле $module',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Тип повтора',
    'LBL_REPEAT_INTERVAL' => 'Интервал повтора',
    'LBL_REPEAT_DOW' => 'Дни повторов',
    'LBL_REPEAT_UNTIL' => 'Прекратить',
    'LBL_REPEAT_COUNT' => 'Число повторов',
    'LBL_REPEAT_PARENT_ID' => 'Родительский ID повтора',
    'LBL_RECURRING_SOURCE' => 'Источник повтора',

    'LBL_SYNCED_RECURRING_MSG' => 'Данная встреча была создана в другой программе и синхронизирована с SuiteCRM. Для изменения данной записи откройте первоначальную программу, внесите в соответствующую встречу необходимые изменения и вновь синхронизируйте её с SuiteCRM.',
    'LBL_RELATED_TO' => 'Относится к:',

    // for reminders
    'LBL_REMINDERS' => 'Напоминания',
    'LBL_REMINDERS_ACTIONS' => 'Действия:',
    'LBL_REMINDERS_POPUP' => 'Всплывающего уведомления браузера',
    'LBL_REMINDERS_EMAIL' => 'Приглашения по E-mail',
    'LBL_REMINDERS_WHEN' => 'Когда:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Удалить напоминание',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Добавить ВСЕХ приглашённых',
    'LBL_REMINDERS_ADD_REMINDER' => 'Добавить напоминание',
);

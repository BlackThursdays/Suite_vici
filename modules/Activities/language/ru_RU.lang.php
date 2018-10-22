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
    'LBL_MODULE_NAME' => 'Мероприятия',
    'LBL_MODULE_TITLE' => 'Мероприятия - ГЛАВНАЯ',
    'LBL_SEARCH_FORM_TITLE' => 'Поиск мероприятий',
    'LBL_LIST_FORM_TITLE' => 'Список мероприятий',
    'LBL_LIST_SUBJECT' => 'Тема',
    'LBL_OVERVIEW' => 'Основная информация',
    'LBL_TASKS' => 'Задачи',
    'LBL_MEETINGS' => 'Встречи',
    'LBL_CALLS' => 'Звонки',
    'LBL_EMAILS' => 'E-mail',
    'LBL_NOTES' => 'Заметки',
    'LBL_PRINT' => 'Печать',
    'LBL_MEETING_TYPE' => 'Встреча',
    'LBL_CALL_TYPE' => 'Звонок',
    'LBL_EMAIL_TYPE' => 'E-mail',
    'LBL_NOTE_TYPE' => 'Заметка',
    'LBL_DATA_TYPE_START' => 'Начало:',
    'LBL_DATA_TYPE_SENT' => 'Отправлено:',
    'LBL_DATA_TYPE_MODIFIED' => 'Изменено:',
    'LBL_LIST_CONTACT' => 'Контакт',
    'LBL_LIST_RELATED_TO' => 'Относится к',
    'LBL_LIST_DATE' => 'Дата',
    'LBL_LIST_CLOSE' => 'Закрыть',
    'LBL_SUBJECT' => 'Тема:',
    'LBL_STATUS' => 'Статус:',
    'LBL_LOCATION' => 'Место:',
    'LBL_DATE_TIME' => 'Дата и время начала:',
    'LBL_DATE' => 'Дата звонка:',
    'LBL_TIME' => 'Время начала:',
    'LBL_DURATION' => 'Продолжительность:',
    'LBL_HOURS_MINS' => '(часов:минут)',
    'LBL_CONTACT_NAME' => 'Контактное лицо: ',
    'LBL_DESCRIPTION' => 'Описание:',
    'LNK_NEW_CALL' => 'Назначить звонок',
    'LNK_NEW_MEETING' => 'Назначить встречу',
    'LNK_NEW_TASK' => 'Создать задачу',
    'LNK_NEW_NOTE' => 'Создать заметку или вложение',
    'LNK_NEW_EMAIL' => 'Создать архивный E-mail',
    'LNK_CALL_LIST' => 'Звонки',
    'LNK_MEETING_LIST' => 'Встречи',
    'LNK_TASK_LIST' => 'Задачи',
    'LNK_NOTE_LIST' => 'Заметки',
    'LBL_DELETE_ACTIVITY' => 'Вы действительно хотите удалить данное мероприятие?',
    'ERR_DELETE_RECORD' => 'Вы должны указать номер записи перед удалением.',
    'LBL_INVITEE' => 'Приглашённые',
    'LBL_LIST_DIRECTION' => 'Направление',
    'LBL_DIRECTION' => 'Направление',
    'LNK_NEW_APPOINTMENT' => 'Новое назначение',
    'LNK_VIEW_CALENDAR' => 'Календарь',
    'LBL_OPEN_ACTIVITIES' => 'Открытые мероприятия',
    'LBL_HISTORY' => 'История',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Создать задачу',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Создать задачу',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Планирование встречи',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Назначить встречу',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Назначить звонок',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'Создать заметку или вложение',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Создать заметку или вложение',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Отправить E-mail в архив',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Отправить E-mail в архив',
    'LBL_LIST_STATUS' => 'Статус',
    'LBL_LIST_DUE_DATE' => 'Дата завершения',
    'LBL_LIST_LAST_MODIFIED' => 'Последнее изменение',
    'LNK_IMPORT_CALLS' => 'Импорт звонков',
    'LNK_IMPORT_MEETINGS' => 'Импорт встреч',
    'LNK_IMPORT_TASKS' => 'Импорт задач',
    'LNK_IMPORT_NOTES' => 'Импорт заметок',
    'LBL_ACCEPT_THIS' => 'Принять?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Открытые мероприятия',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Ответственный(ая)',

    'LBL_ACCEPT' => 'Принять' /*for 508 compliance fix*/,
);

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
    'ERR_DELETE_RECORD' => 'Вы должны указать номер записи перед удалением.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'Варианты решений из базы знаний',
    'LBL_TOOL_TIP_TITLE' => 'Заголовок: ',
    'LBL_TOOL_TIP_BODY' => 'Текст статьи: ',
    'LBL_TOOL_TIP_INFO' => 'Резолюция: ',
    'LBL_TOOL_TIP_USE' => 'Использовать как: ',
    'LBL_SUGGESTION_BOX' => 'Варианты решений',
    'LBL_NO_SUGGESTIONS' => 'Нет вариантов решения',
    'LBL_RESOLUTION_BUTTON' => 'Решение',
    'LBL_SUGGESTION_BOX_STATUS' => 'Статус',
    'LBL_SUGGESTION_BOX_TITLE' => 'Статья',
    'LBL_SUGGESTION_BOX_REL' => 'Актуальность',

    'LBL_ACCOUNT_ID' => 'ID контрагента',
    'LBL_ACCOUNT_NAME' => 'Контрагент:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Контрагенты',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Мероприятия',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Ошибки',
    'LBL_CASE_NUMBER' => 'Номер обращения:',
    'LBL_CASE' => 'Обращение:',
    'LBL_CONTACT_NAME' => 'Контактное лицо:',
    'LBL_CONTACT_ROLE' => 'Роль:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакты',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Обращения',
    'LBL_DESCRIPTION' => 'Описание:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'История',
    'LBL_INVITEE' => 'Контакты',
    'LBL_MEMBER_OF' => 'Контрагент',
    'LBL_MODULE_NAME' => 'Обращения',
    'LBL_MODULE_TITLE' => 'Обращения - ГЛАВНАЯ',
    'LBL_NEW_FORM_TITLE' => 'Новое обращение',
    'LBL_NUMBER' => 'Номер:',
    'LBL_PRIORITY' => 'Приоритет:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Проекты',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Документы',
    'LBL_RESOLUTION' => 'Решение:',
    'LBL_SEARCH_FORM_TITLE' => 'Поиск обращения',
    'LBL_STATUS' => 'Статус:',
    'LBL_SUBJECT' => 'Тема:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Ответственный(ая)',
    'LBL_LIST_ACCOUNT_NAME' => 'Контрагент',
    'LBL_LIST_ASSIGNED' => 'Ответственный(ая)',
    'LBL_LIST_CLOSE' => 'Закрыть',
    'LBL_LIST_FORM_TITLE' => 'Список обращений',
    'LBL_LIST_LAST_MODIFIED' => 'Последнее изменение',
    'LBL_LIST_MY_CASES' => 'Мои открытые обращения',
    'LBL_LIST_NUMBER' => 'Номер',
    'LBL_LIST_PRIORITY' => 'Приоритет',
    'LBL_LIST_STATUS' => 'Статус',
    'LBL_LIST_SUBJECT' => 'Тема обращения',

    'LNK_CASE_LIST' => 'Обращения',
    'LNK_NEW_CASE' => 'Создать обращение',
    'LBL_LIST_DATE_CREATED' => 'Дата создания',
    'LBL_ASSIGNED_TO_NAME' => 'Ответственный(ая)',
    'LBL_TYPE' => 'Тип',
    'LBL_WORK_LOG' => 'Журнал',
    'LNK_IMPORT_CASES' => 'Импорт обращений',

    'LBL_CREATED_USER' => 'Создано',
    'LBL_MODIFIED_USER' => 'Изменено',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Проекты',
    'LBL_CASE_INFORMATION' => 'Основная информация',  //Can be translated in all caps. This string will be used by SuiteP template menu actions

    // SNIP
    'LBL_UPDATE_TEXT' => 'Текст обновления', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Внутреннее обновление',
    'LBL_AOP_CASE_UPDATES' => 'Обновления обращения',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Хроника обновлений обращения',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Свернуть все',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Развернуть все',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Вложения: ',

    'LBL_AOP_CASE_EVENTS' => 'События обращения',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Вложения:',
    'LBL_ADD_CASE_FILE' => 'Добавить файл',
    'LBL_REMOVE_CASE_FILE' => 'Удалить файл',
    'LBL_SELECT_CASE_DOCUMENT' => 'Выбрать документ',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Удалить документ',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Документ SuiteCRM',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'Внешний файл',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Создано',
    'LBL_CONTACT_CREATED_BY' => 'Кем создано',
    'LBL_CASE_UPDATE_FORM' => 'Добавить вложение', //Form for attachments on case updates
    'LBL_CREATOR_PORTAL' => 'Portal URL', //PR 5426
    'LBL_SUGGESTION' => 'Suggestion', //PR 5426
);


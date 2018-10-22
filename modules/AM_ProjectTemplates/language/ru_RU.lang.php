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
    'LBL_DELETED' => 'Удалено',
    'LBL_NAME' => 'Шаблон проекта',
    'LBL_CREATED_USER' => 'Создано',
    'LBL_MODIFIED_USER' => 'Изменено',
    'LBL_LIST_NAME' => 'Имя',
    'LBL_EDIT_BUTTON' => 'Править',
    'LBL_REMOVE' => 'Удалить',
    'LBL_LIST_FORM_TITLE' => 'Шаблоны проектов',
    'LBL_MODULE_NAME' => 'Шаблоны проектов',
    'LBL_MODULE_TITLE' => 'Шаблоны проектов',
    'LBL_HOMEPAGE_TITLE' => 'Мои шаблоны проектов',
    'LNK_NEW_RECORD' => 'Создать шаблон проекта',
    'LNK_LIST' => 'Шаблоны проектов',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'Импорт шаблонов проектов',
    'LBL_SEARCH_FORM_TITLE' => 'Поиск шаблонов проектов',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'История',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Мероприятия',
    'LBL_NEW_FORM_TITLE' => 'Создание шаблона проекта',
    'LBL_STATUS' => 'Статус',
    'LBL_PRIORITY' => 'Приоритет',
    'LBL_PROJECT_NAME' => 'Проект',
    'LBL_START_DATE' => 'Дата начала',
    'LBL_CREATE_PROJECT_TITLE' => 'Создать новый проект на основе данного шаблона?',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'Шаблоны проектных задач',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'Пользователи',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'Контакты',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'Участники',
    'LBL_NEW_PROJECT_CREATED' => 'Проект создан',
    'LBL_NEW_PROJECT' => 'Создать проект',
    'LBL_CANCEL_PROJECT' => 'Отказаться',

    'LBL_SUBTASK' => 'Задача',
    'LBL_MILESTONE_FLAG' => 'Контрольная точка',
    'LBL_RELATIONSHIP_TYPE' => 'Тип связи',
    'LBL_LAG' => 'Задержка',
    'LBL_DAYS' => 'дней',
    'LBL_HOURS' => 'часов',
    'LBL_MONTHS' => 'Месяцев',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Проектные задачи',
    'LBL_VIEW_GANTT_TITLE' => 'Диаграмма Ганта',
    'LBL_VIEW_GANTT_DURATION' => 'Продолжительность',
    'LBL_TASK_TITLE' => 'Редактировать',
    'LBL_DURATION_TITLE' => 'Продолжительность',
    'LBL_DESCRIPTION' => 'Описание',
    'LBL_ASSIGNED_USER_ID' => 'Ответственный(ая)',

    'LBL_LIST_ASSIGNED_USER' => 'Ответственный(ая)',
    'LBL_UNASSIGNED' => 'Не назначен',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Участники\'',
    'LBL_DELETE_TASK' => 'Удалить проектную задачу',
    'LBL_VIEW_DETAIL' => 'Детали проекта',
    'LBL_ADD_NEW_TASK' => 'Добавить проектную задачу',
    'LBL_ASSIGNED_USER_NAME' => 'Менеджер проекта',

    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Проектная задача',
    'LBL_DURATION' => 'Продолжительность',
    'LBL_ACTUAL_DURATION' => 'Фактическая продолжительность',
    'LBL_START' => 'Начало',
    'LBL_FINISH' => 'Готово',
    'LBL_PREDECESSORS' => 'Предшественник',
    'LBL_PERCENT_COMPLETE' => '% выполнения',
    'LBL_EDIT_TASK_PROPERTIES' => 'Настройка параметров.',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Учитывать все рабочие дни',
    'LBL_COPY_ALL_TASKS' => 'Копировать все проектные задачи',
    'LBL_COPY_SEL_TASKS' => 'Копировать выбранные проектные задачи',
    'LBL_TOOLTIP_TITLE' => 'Подсказка',
    'LBL_TOOLTIP_TEXT' => 'Копировать в создаваемый проект все проектные задачи, у которых указан ответственный',

    'LBL_EMAIL' => 'E-mail',
    'LBL_PHONE' => 'Тел. (раб.):',
    'LBL_ADD_BUTTON' => 'Добавить',
    'LBL_ADD_INVITEE' => 'Добавить участника',
    'LBL_FIRST_NAME' => 'Имя:',
    'LBL_LAST_NAME' => 'Фамилия:',
    'LBL_SEARCH_BUTTON' => 'Найти',
    'LBL_EMPTY_SEARCH_RESULT' => 'По указанным критериям ничего не обнаружено. Вы можете создать приглашение "с нуля", добавив в него новые контакты / предварительные контакты.',
    'LBL_CREATE_INVITEE' => 'Добавить участника',
    'LBL_CREATE_CONTACT' => 'Создав новый контакт',
    'LBL_CREATE_AND_ADD' => 'Создать',
    'LBL_CANCEL_CREATE_INVITEE' => 'Отказаться',
    'LBL_NO_ACCESS' => 'У вас нет прав на создание записи в модуле $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Участники',
    'LBL_NONE' => '--не выбрано--',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Шаблоны проекта',


);

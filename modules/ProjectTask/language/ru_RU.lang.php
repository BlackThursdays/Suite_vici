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
    'LBL_MODULE_NAME' => 'Проектные задачи',
    'LBL_MODULE_TITLE' => 'Проектные задачи',

    'LBL_ID' => 'ID:',
    'LBL_PROJECT_TASK_ID' => 'ID проектной задачи:',
    'LBL_PROJECT_ID' => 'ID проекта:',
    'LBL_DATE_ENTERED' => 'Дата создания:',
    'LBL_DATE_MODIFIED' => 'Дата изменения:',
    'LBL_ASSIGNED_USER_ID' => 'Ответственный(ая): ',
    'LBL_MODIFIED_USER_ID' => 'Изменено(ID):',
    'LBL_CREATED_BY' => 'Кем создано:',
    'LBL_NAME' => 'Проектная задача:',
    'LBL_STATUS' => 'Статус:',
    'LBL_DATE_DUE' => 'Дата окончания:',
    'LBL_TIME_DUE' => 'Время окончания:',
    'LBL_PREDECESSORS' => 'Предшественники:',
    'LBL_DATE_START' => 'Дата начала:',
    'LBL_DATE_FINISH' => 'Дата окончания:',
    'LBL_TIME_START' => 'Время начала:',
    'LBL_TIME_FINISH' => 'Время окончания:',
    'LBL_DURATION' => 'Продолжительность:',
    'LBL_DURATION_UNIT' => 'Единица измерения:',
    'LBL_ACTUAL_DURATION' => 'Фактическая продолжительность:',
    'LBL_PARENT_ID' => 'Проект:',
    'LBL_PARENT_TASK_ID' => 'ID родительской задачи:',
    'LBL_PERCENT_COMPLETE' => 'Процент выполнения:',
    'LBL_PRIORITY' => 'Приоритет:',
    'LBL_DESCRIPTION' => 'Заметки:',
    'LBL_ORDER_NUMBER' => 'Порядковый номер в проекте:',
    'LBL_TASK_NUMBER' => 'Номер задачи:',
    'LBL_TASK_ID' => 'ID задачи:',
    'LBL_MILESTONE_FLAG' => 'Контрольная точка:',
    'LBL_ESTIMATED_EFFORT' => 'Оценка усилий (час.):',
    'LBL_ACTUAL_EFFORT' => 'Реальные усилия (час.):',
    'LBL_UTILIZATION' => 'Расход ресурсов (%):',
    'LBL_DELETED' => 'Удалено:',

    'LBL_LIST_NAME' => 'Название',
    'LBL_LIST_PARENT_NAME' => 'Проект',
    'LBL_LIST_PERCENT_COMPLETE' => '% выполнения',
    'LBL_LIST_STATUS' => 'Статус',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Ответственный(ая) ',
    'LBL_LIST_DATE_DUE' => 'Дата окончания',
    'LBL_LIST_PRIORITY' => 'Приоритет',
    'LBL_LIST_CLOSE' => 'Закрыть',
    'LBL_PROJECT_NAME' => 'Название проекта',

    'LNK_NEW_PROJECT' => 'Создать проект',
    'LNK_PROJECT_LIST' => 'Проекты',
    'LNK_NEW_PROJECT_TASK' => 'Создать проектную задачу',
    'LNK_PROJECT_TASK_LIST' => 'Проектные задачи',

    'LBL_LIST_MY_PROJECT_TASKS' => 'Мои открытые проектные задачи',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Проектные задачи',
    'LBL_NEW_FORM_TITLE' => 'Новая проектная задача',

    'LBL_HISTORY_TITLE' => 'История',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Мероприятия',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'История',

    'LBL_ASSIGNED_USER_NAME' => 'Ответственный(ая)',
    'LBL_PARENT_NAME' => 'Название проекта',
    'LBL_EDITLAYOUT' => 'Изменить макет' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Ресурсы',

    'LBL_SUBTASK' => 'Подзадача',
    'LBL_LAG' => 'Задержка',
    'LBL_DAYS' => 'Дней',
    'LBL_HOURS' => 'Часов',
    'LBL_RELATIONSHIP_TYPE' => 'Тип связи',
);

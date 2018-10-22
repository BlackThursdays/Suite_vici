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
    'LBL_ASSIGNED_TO_ID' => 'Ответственный(ая)',
    'LBL_ASSIGNED_TO_NAME' => 'Ответственный(ая)',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Дата создания',
    'LBL_DATE_MODIFIED' => 'Дата изменения',
    'LBL_MODIFIED' => 'Изменено',
    'LBL_MODIFIED_NAME' => 'Изменено (Имя)',
    'LBL_CREATED' => 'Создано',
    'LBL_DESCRIPTION' => 'Описание',
    'LBL_DELETED' => 'Удалено',
    'LBL_NAME' => 'Отчёт',
    'LBL_CREATED_USER' => 'Создано',
    'LBL_MODIFIED_USER' => 'Изменено',
    'LBL_LIST_NAME' => 'Имя',
    'LBL_EDIT_BUTTON' => 'Править',
    'LBL_REMOVE' => 'Удалить',
    'LBL_LIST_FORM_TITLE' => 'Отчёты',
    'LBL_MODULE_NAME' => 'Отчёты',
    'LBL_MODULE_TITLE' => 'Отчёты',
    'LBL_HOMEPAGE_TITLE' => 'Мои отчёты',
    'LNK_NEW_RECORD' => 'Создать отчёт',
    'LNK_LIST' => 'Отчёты',
    'LBL_SEARCH_FORM_TITLE' => 'Поиск отчётов',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'История',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Мероприятия',
    'LBL_NEW_FORM_TITLE' => 'Новый отчёт',
    'LBL_REPORT_MODULE' => 'Модуль',
    'LBL_GRAPHS_PER_ROW' => 'Диаграмм в строке отчёта',
    'LBL_FIELD_LINES' => 'Поля отчёта',
    'LBL_ADD_FIELD' => 'Добавить поле',
    'LBL_CONDITION_LINES' => 'Условия',
    'LBL_ADD_CONDITION' => 'Добавить условие',
    'LBL_EXPORT' => 'Экспорт',
    'LBL_DOWNLOAD_PDF' => 'Сохранить в PDF',
    'LBL_ADD_TO_PROSPECT_LIST' => 'Добавить в список адресатов',
    'LBL_AOR_MODULETREE_SUBPANEL_TITLE' => 'Модули',
    'LBL_AOR_FIELDS_SUBPANEL_TITLE' => 'Поля',
    'LBL_AOR_CONDITIONS_SUBPANEL_TITLE' => 'Условия',
    'LBL_TOTAL' => 'Итоговая строка',
    'LBL_AOR_CHARTS_SUBPANEL_TITLE' => 'Диаграммы',
    'LBL_ADD_CHART' => 'Добавить диаграмму',
    'LBL_ADD_PARENTHESIS' => 'Добавить скобки',
    'LBL_CHART_TITLE' => 'Название',
    'LBL_CHART_TYPE' => 'Тип',
    'LBL_CHART_X_FIELD' => 'Ось X',
    'LBL_CHART_Y_FIELD' => 'Ось Y',
    'LBL_AOR_REPORTS_DASHLET' => 'Отчёты',
    'LBL_DASHLET_TITLE' => 'Заголовок',
    'LBL_DASHLET_REPORT' => 'Отчёт',
    'LBL_DASHLET_CHOOSE_REPORT' => 'Укажите необходимый отчёт',
    'LBL_DASHLET_SAVE' => 'Сохранить',
    'LBL_DASHLET_CHARTS' => 'Диаграммы',
    'LBL_DASHLET_ONLY_CHARTS' => 'Отображать только диаграммы',
    'LBL_UPDATE_PARAMETERS' => 'Обновить',
    'LBL_PARAMETERS' => 'Условия',
    'LBL_TOOLTIP_DRAG_DROP_ELEMS' => 'Переместите необходимый элемент в перечень полей создаваемого отчёта',
    'LBL_MAIN_GROUPS' => 'Основная группа:',
    'LBL_CHAR_UNNAMED_DEFAULT_TITLE' => 'Безымянная диаграмма',
    'LBL_REPORT' => 'Отчёт',
);

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
    'LBL_MODULE_NAME' => 'Сделки',
    'LBL_MODULE_TITLE' => 'Сделки - ГЛАВНАЯ',
    'LBL_SEARCH_FORM_TITLE' => 'Поиск сделки',
    'LBL_LIST_FORM_TITLE' => 'Список сделок',
    'LBL_OPPORTUNITY_NAME' => 'Название сделки:',
    'LBL_OPPORTUNITY' => 'Сделка:',
    'LBL_NAME' => 'Название сделки',
    'LBL_INVITEE' => 'Контакты',
    'LBL_CURRENCIES' => 'Валюта',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Название',
    'LBL_LIST_ACCOUNT_NAME' => 'Контрагент',
    'LBL_LIST_AMOUNT' => 'Сумма сделки',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Сумма',
    'LBL_LIST_DATE_CLOSED' => 'Закрытие',
    'LBL_LIST_SALES_STAGE' => 'Стадия продаж',
    'LBL_ACCOUNT_ID' => 'ID контрагента',
    'LBL_CURRENCY_NAME' => 'Название валюты',
    'LBL_CURRENCY_SYMBOL' => 'Символ валюты',

    'UPDATE' => 'Сделка - валютное обновление',
    'LBL_ACCOUNT_NAME' => 'Контрагент:',
    'LBL_AMOUNT' => 'Сумма сделки:',
    'LBL_AMOUNT_USDOLLAR' => 'Сумма:',
    'LBL_CURRENCY' => 'Валюта:',
    'LBL_DATE_CLOSED' => 'Ожидаемая дата закрытия:',
    'LBL_TYPE' => 'Тип:',
    'LBL_CAMPAIGN' => 'Маркет. кампания:',
    'LBL_NEXT_STEP' => 'След. шаг:',
    'LBL_LEAD_SOURCE' => 'Источник предв. контакта:',
    'LBL_SALES_STAGE' => 'Стадия продаж:',
    'LBL_PROBABILITY' => 'Вероятность (%):',
    'LBL_DESCRIPTION' => 'Описание:',
    'LBL_DUPLICATE' => 'Возможно дублирующаяся сделка',
    'MSG_DUPLICATE' => 'Создаваемая вами сделка возможно дублирует уже имеющуюся сделку. Сделки, имеющие схожие названия показаны ниже. Нажмите кнопку "Сохранить"  для продолжения создания новой сделки или кнопку "Отказаться" для возврата в модуль.',
    'LBL_NEW_FORM_TITLE' => 'Создать сделку',
    'LNK_NEW_OPPORTUNITY' => 'Создать сделку',
    'LNK_OPPORTUNITY_LIST' => 'Сделки',
    'ERR_DELETE_RECORD' => 'Перед удалением сделки должен быть определён номер записи.',
    'LBL_TOP_OPPORTUNITIES' => 'Мои основные открытые сделки',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Вы действительно хотите удалить данную сделку из проекта?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Сделки',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Мероприятия',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'История',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Предварительные контакты',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакты',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Документы',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Проекты',
    'LBL_ASSIGNED_TO_NAME' => 'Ответственный(ая): ',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Ответственный(ая)',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Мои закрытые сделки',
    'LBL_TOTAL_OPPORTUNITIES' => 'Всего',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Успешно закрытые сделки',
    'LBL_ASSIGNED_TO_ID' => 'Ответственный(ая)',
    'LBL_MODIFIED_NAME' => 'Изменено',
    'LBL_CREATED_USER' => 'Создано',
    'LBL_MODIFIED_USER' => 'Изменено',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Маркет. кампании',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Проекты',
    'LNK_IMPORT_OPPORTUNITIES' => 'Импорт сделок',
    'LBL_EDITLAYOUT' => 'Изменить макет' /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'Договоры',
    'LBL_AOS_QUOTES' => 'Предложения',
);

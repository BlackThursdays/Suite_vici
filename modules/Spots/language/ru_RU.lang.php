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
    'LBL_SECURITYGROUPS' => 'Группы пользователей',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Группы пользователей',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Дата создания',
    'LBL_DATE_MODIFIED' => 'Дата изменения',
    'LBL_MODIFIED' => 'Изменено',
    'LBL_MODIFIED_NAME' => 'Изменено (Имя)',
    'LBL_CREATED' => 'Создано',
    'LBL_DESCRIPTION' => 'Описание',
    'LBL_DELETED' => 'Удалён',
    'LBL_NAME' => 'Название',
    'LBL_CREATED_USER' => 'Создано',
    'LBL_MODIFIED_USER' => 'Изменено',
    'LBL_LIST_NAME' => 'Имя',
    'LBL_EDIT_BUTTON' => 'Править',
    'LBL_REMOVE' => 'Удалить',
    'LBL_LIST_FORM_TITLE' => 'Сводки',
    'LBL_MODULE_NAME' => 'Сводки',
    'LBL_MODULE_TITLE' => 'Сводки',
    'LBL_HOMEPAGE_TITLE' => 'Мои сводки',
    'LNK_NEW_RECORD' => 'Создать сводку',
    'LNK_LIST' => 'Сводки',
    'LBL_SEARCH_FORM_TITLE' => 'Поиск сводки',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'История',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Мероприятия',
    'LBL_NEW_FORM_TITLE' => 'Новая сводка',
    'LBL_CONFIG' => 'Настройка',
    'LBL_TYPE' => 'Область анализа',
    'LNK_SPOT_LIST' => 'Сводки',
    'LNK_SPOT_CREATE' => 'Создать сводку',

    //Analytics
    'LBL_AN_CONFIGURATION' => 'Конфигурация',

    'LBL_AN_UNSUPPORTED_DB' => 'В данный момент Сводки могут работать только с БД формата MySQL или MS SQL.',

    //Analytics labels for accounts pivot
    'LBL_AN_ACCOUNTS_ACCOUNT_NAME' => 'Название',
    'LBL_AN_ACCOUNTS_ACCOUNT_TYPE' => 'Тип контрагента',
    'LBL_AN_ACCOUNTS_ACCOUNT_INDUSTRY' => 'Отрасль',
    'LBL_AN_ACCOUNTS_ACCOUNT_BILLING_COUNTRY' => 'Страна',

    //Analytics labels for leads pivot
    'LBL_AN_LEADS_ASSIGNED_USER' => 'Ответственный(ая)',
    'LBL_AN_LEADS_STATUS' => 'Статус',
    'LBL_AN_LEADS_LEAD_SOURCE' => 'Источник предв. контакта',
    'LBL_AN_LEADS_CAMPAIGN_NAME' => 'Маркет. кампания',
    'LBL_AN_LEADS_YEAR' => 'Год',
    'LBL_AN_LEADS_QUARTER' => 'Квартал',
    'LBL_AN_LEADS_MONTH' => 'Месяц',
    'LBL_AN_LEADS_WEEK' => 'Неделя',
    'LBL_AN_LEADS_DAY' => 'День недели',

    //Analytics labels for sales pivot
    'LBL_AN_SALES_ACCOUNT_NAME' => 'Контрагент',
    'LBL_AN_SALES_OPPORTUNITY_NAME' => 'Сделка',
    'LBL_AN_SALES_ASSIGNED_USER' => 'Ответственный(ая)',
    'LBL_AN_SALES_OPPORTUNITY_TYPE' => 'Тип сделки',
    'LBL_AN_SALES_LEAD_SOURCE' => 'Источник предв. контакта',
    'LBL_AN_SALES_AMOUNT' => 'Сумма',
    'LBL_AN_SALES_STAGE' => 'Стадия продаж',
    'LBL_AN_SALES_PROBABILITY' => 'Вероятность (%)',
    'LBL_AN_SALES_DATE' => 'Дата',
    'LBL_AN_SALES_QUARTER' => 'Квартал',
    'LBL_AN_SALES_MONTH' => 'Месяц',
    'LBL_AN_SALES_WEEK' => 'Неделя',
    'LBL_AN_SALES_DAY' => 'День недели',
    'LBL_AN_SALES_YEAR' => 'Год',
    'LBL_AN_SALES_CAMPAIGN' => 'Маркет. кампания',

    //Analytics labels for service pivot
    'LBL_AN_SERVICE_ACCOUNT_NAME' => 'Контрагент',
    'LBL_AN_SERVICE_STATE' => 'Состояние',
    'LBL_AN_SERVICE_STATUS' => 'Статус',
    'LBL_AN_SERVICE_PRIORITY' => 'Приоритет',
    'LBL_AN_SERVICE_CREATED_DAY' => 'Создано (День недели)',
    'LBL_AN_SERVICE_CREATED_WEEK' => 'Создано (Неделя)',
    'LBL_AN_SERVICE_CREATED_MONTH' => 'Создано (Месяц)',
    'LBL_AN_SERVICE_CREATED_QUARTER' => 'Создано (Квартал)',
    'LBL_AN_SERVICE_CREATED_YEAR' => 'Создано (Год)',
    'LBL_AN_SERVICE_CONTACT_NAME' => 'Контакт',
    'LBL_AN_SERVICE_ASSIGNED_TO' => 'Ответственный(ая)',

    //Analytics labels for the activities pivot
    'LBL_AN_ACTIVITIES_TYPE' => 'Тип',
    'LBL_AN_ACTIVITIES_NAME' => 'Название',
    'LBL_AN_ACTIVITIES_STATUS' => 'Статус',
    'LBL_AN_ACTIVITIES_ASSIGNED_TO' => 'Ответственный(ая)',

    //Analytics labels for the marketing pivot
    'LBL_AN_MARKETING_STATUS' => 'Статус',
    'LBL_AN_MARKETING_TYPE' => 'Тип',
    'LBL_AN_MARKETING_BUDGET' => 'Бюджет',
    'LBL_AN_MARKETING_EXPECTED_COST' => 'Ожидаемая стоимость',
    'LBL_AN_MARKETING_EXPECTED_REVENUE' => 'Ожидаемый доход',
    'LBL_AN_MARKETING_OPPORTUNITY_NAME' => 'Сделка',
    'LBL_AN_MARKETING_OPPORTUNITY_AMOUNT' => 'Сумма сделки',
    'LBL_AN_MARKETING_OPPORTUNITY_SALES_STAGE' => 'Стадия продаж',
    'LBL_AN_MARKETING_OPPORTUNITY_ASSIGNED_TO' => 'Ответственный за сделку',
    'LBL_AN_MARKETING_ACCOUNT_NAME' => 'Контрагент',

    //Analytics labels for the marketing activities pivot
    'LBL_AN_MARKETINGACTIVITY_CAMPAIGN_NAME' => 'Маркет. кампания',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_DATE' => 'Дата',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_TYPE' => 'Активность',
    'LBL_AN_MARKETINGACTIVITY_RELATED_TYPE' => 'Родительский тип',
    'LBL_AN_MARKETINGACTIVITY_RELATED_ID' => 'Родительский ID',

    //Analytics labels for the quotes pivot
    'LBL_AN_QUOTES_OPPORTUNITY_NAME' => 'Сделка',
    'LBL_AN_QUOTES_OPPORTUNITY_TYPE' => 'Тип сделки',
    'LBL_AN_QUOTES_OPPORTUNITY_LEAD_SOURCE' => 'Источник предв. контакта',
    'LBL_AN_QUOTES_OPPORTUNITY_SALES_STAGE' => 'Стадия продаж',
    'LBL_AN_QUOTES_ACCOUNT_NAME' => 'Контрагент',
    'LBL_AN_QUOTES_CONTACT_NAME' => 'Контакт',
    'LBL_AN_QUOTES_ITEM_NAME' => 'Позиция предложения',
    'LBL_AN_QUOTES_ITEM_TYPE' => 'Тип позиции (товар/услуга)',
    'LBL_AN_QUOTES_ITEM_CATEGORY' => 'Категория товара',
    'LBL_AN_QUOTES_ITEM_QTY' => 'Количество',
    'LBL_AN_QUOTES_ITEM_LIST_PRICE' => 'Цена по прайсу',
    'LBL_AN_QUOTES_ITEM_SALE_PRICE' => 'Цена распродажи',
    'LBL_AN_QUOTES_ITEM_COST_PRICE' => 'Себестоимость',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_PRICE' => 'Цена со скидкой',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_AMOUNT' => 'Скидка',
    'LBL_AN_QUOTES_ITEM_TOTAL' => 'Итого без скидки',
    'LBL_AN_QUOTES_GRAND_TOTAL' => 'ВСЕГО К ОПЛАТЕ',
    'LBL_AN_QUOTES_ASSIGNED_TO' => 'Ответственный(ая)',
    'LBL_AN_QUOTES_DATE_CREATED' => 'Дата создания',
    'LBL_AN_QUOTES_DAY_CREATED' => 'Создано (День недели)',
    'LBL_AN_QUOTES_WEEK_CREATED' => 'Создано (Неделя)',
    'LBL_AN_QUOTES_MONTH_CREATED' => 'Создано (Месяц)',
    'LBL_AN_QUOTES_QUARTER_CREATED' => 'Создано (Квартал)',
    'LBL_AN_QUOTES_YEAR_CREATED' => 'Создано (Год)',

    //Error message when there are multiple values for the label
    'LBL_AN_DUPLICATE_LABEL_FOR_SUBAREA' => 'Ошибка получения названия области анализа',

    //Added to allow for the UI of the pivot to be language agnostic
    'LBL_RENDERERS_TABLE' =>'Таблица',
    'LBL_RENDERERS_TABLE_BARCHART' =>'Таблица с гистограммами',
    'LBL_RENDERERS_HEATMAP' =>'Теплокарта',
    'LBL_RENDERERS_ROW_HEATMAP' =>'Теплокарта по строке',
    'LBL_RENDERERS_COL_HEATMAP' =>'Теплокарта по столбцу',
    'LBL_RENDERERS_LINE_CHART' =>'График',
    'LBL_RENDERERS_BAR_CHART' =>'Гистограмма',
    'LBL_RENDERERS_STACKED_BAR_CHART' =>'Гистограмма с накоплением',
    'LBL_RENDERERS_AREA_CHART' =>'Диаграмма с областями',
    'LBL_RENDERERS_SCATTER_CHART' =>'Точечная диаграмма',

    'LBL_AGGREGATORS_COUNT' => 'Количество',
    'LBL_AGGREGATORS_COUNT_UNIQUE_VALUES' => 'Количество уникальных значений',
    'LBL_AGGREGATORS_LIST_UNIQUE_VALUES' => 'Список уникальных значений',
    'LBL_AGGREGATORS_SUM' => 'Сумма',
    'LBL_AGGREGATORS_INTEGER_SUM' => 'Сумма целых значений',
    'LBL_AGGREGATORS_AVERAGE' => 'Среднее',
    'LBL_AGGREGATORS_MINIMUM' => 'Минимум',
    'LBL_AGGREGATORS_MAXIMUM' => 'Максимум',
    'LBL_AGGREGATORS_SUM_OVER_SUM' => 'Сумма вдоль подпространства',
    'LBL_AGGREGATORS_80%_UPPER_BOUND' => '80% верхнего предела',
    'LBL_AGGREGATORS_80%_LOWER_BOUND' => '80% нижнего предела',
    'LBL_AGGREGATORS_SUM_AS_FRACTION_OF_TOTAL' => '% от общей суммы',
    'LBL_AGGREGATORS_SUM_AS_FRACTION_OF_ROWS' => '% от суммы по строке',
    'LBL_AGGREGATORS_SUM_AS_FRACTION_OF_COLUMNS' => '% от суммы по столбцу',
    'LBL_AGGREGATORS_COUNT_AS_FRACTION_OF_TOTAL' => '% от общего количества',
    'LBL_AGGREGATORS_COUNT_AS_FRACTION_OF_ROWS' => '% от количества по строке',
    'LBL_AGGREGATORS_COUNT_AS_FRACTION_OF_COLUMNS' => '% от количества по столбцу',

    'LBL_LOCALE_STRINGS_RENDER_ERROR' => 'Ошибка при отображении результатов.',
    'LBL_LOCALE_STRINGS_COMPUTING_ERROR' => 'Ошибка при расчёте результатов.',
    'LBL_LOCALE_STRINGS_UI_RENDER_ERROR' => 'Ошибка при отображении сводной таблицы.',
    'LBL_LOCALE_STRINGS_SELECT_ALL' => 'Выбрать все',
    'LBL_LOCALE_STRINGS_SELECT_NONE' => 'Снять выделение',
    'LBL_LOCALE_STRINGS_TOO_MANY' => '(слишком много значений)',
    'LBL_LOCALE_STRINGS_FILTER_RESULTS' => 'Фильтр',
    'LBL_LOCALE_STRINGS_TOTALS' => 'Всего',
    'LBL_LOCALE_STRINGS_VS' => '. Распределение по полю',
    'LBL_LOCALE_STRINGS_BY' => '; подсчёт по полю',
    'LBL_LOCALE_STRINGS_OK' => 'Готово',

    'LBL_ACTIVITIES_CALL'=>'Звонок',
    'LBL_ACTIVITIES_MEETING'=>'Встреча',
    'LBL_ACTIVITIES_TASK'=>'Задача',
);

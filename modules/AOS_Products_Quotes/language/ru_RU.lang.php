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
    'LBL_DESCRIPTION' => 'Описание',
    'LBL_DELETED' => 'Удалён',
    'LBL_NAME' => 'Название',
    'LBL_NUMBER' => '№', //PR 3296
    'LBL_CREATED_USER' => 'Создано',
    'LBL_MODIFIED_USER' => 'Изменено',
    'LBL_LIST_FORM_TITLE' => 'Товары/Предложения',
    'LBL_MODULE_NAME' => 'Товары/Предложения',
    'LBL_MODULE_TITLE' => 'Товары/Предложения',
    'LBL_HOMEPAGE_TITLE' => 'Мои Товары/Предложения',
    'LNK_NEW_RECORD' => 'Создать Товары/Предложения',
    'LNK_LIST' => 'Товары/Предложени',
    'LBL_SEARCH_FORM_TITLE' => 'Поиск смет на продукты',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'История',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Мероприятия',
    'LBL_NEW_FORM_TITLE' => 'Новые Товары/Предложения',
    'LBL_PRODUCT_NAME' => 'Название',
    'LBL_PRODUCT_NUMBER' => '№', //PR 3296
    'LBL_PRODUCT_QTY' => 'Количество',
    'LBL_PRODUCT_COST_PRICE' => 'Себестоимость',
    'LBL_PRODUCT_LIST_PRICE' => 'Цена по прайсу',
    'LBL_PRODUCT_UNIT_PRICE' => 'Цена за единицу',
    'LBL_PRODUCT_DISCOUNT' => 'Скидка',
    'LBL_PRODUCT_DISCOUNT_AMOUNT' => 'Объём скидки',
    'LBL_PART_NUMBER' => 'Артикул',
    'LBL_PRODUCT_DESCRIPTION' => 'Описание',
    'LBL_DISCOUNT' => 'Тип скидки',
    'LBL_VAT_AMT' => 'НДС',
    'LBL_VAT' => 'НДС',
    'LBL_PRODUCT_TOTAL_PRICE' => 'Итого без НДС',
    'LBL_PRODUCT_NOTE' => 'Заметка',
    'Quote' => '',
    'LBL_FLEX_RELATE' => 'Относится к',
    'LBL_PRODUCT' => 'Товар',

    'LBL_SERVICE_MODULE_NAME' => 'Услуги',
    'LBL_SERVICE_NUMBER' => '№', //PR 3296
    'LBL_LIST_NUM' => '№',
    'LBL_PARENT_ID' => 'ID родителя',
    'LBL_GROUP_NAME' => 'Группа',
    'LBL_GROUP_DESCRIPTION' => 'Описание', //PR 3296
    'LBL_PRODUCT_COST_PRICE_USDOLLAR' => 'Себестоимость (основная валюта)',
    'LBL_PRODUCT_LIST_PRICE_USDOLLAR' => 'Цена по прайсу (основная валюта)',
    'LBL_PRODUCT_UNIT_PRICE_USDOLLAR' => 'Цена за единицу (основная валюта)',
    'LBL_PRODUCT_TOTAL_PRICE_USDOLLAR' => 'Итого без НДС (основная валюта)',
    'LBL_PRODUCT_DISCOUNT_USDOLLAR' => 'Скидка (основная валюта)',
    'LBL_PRODUCT_DISCOUNT_AMOUNT_USDOLLAR' => 'Объём скидки (основная валюта)',
    'LBL_VAT_AMT_USDOLLAR' => 'НДС (основная валюта)',
    'LBL_PRODUCTS_SERVICES' => 'Товары / Услуги',
    'LBL_PRODUCT_ID' => 'ID товара',

    'LBL_AOS_CONTRACTS' => 'Договоры',
    'LBL_AOS_INVOICES' => 'Счета',
    'LBL_AOS_PRODUCTS' => 'Товары',
    'LBL_AOS_QUOTES' => 'Предложения',
);


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
    'LBL_DELETED' => 'Удалён',
    'LBL_NAME' => 'Название товара',
    'LBL_CREATED_USER' => 'Создано',
    'LBL_MODIFIED_USER' => 'Изменено',
    'LBL_LIST_FORM_TITLE' => 'Список товаров',
    'LBL_MODULE_NAME' => 'Товары',
    'LBL_MODULE_TITLE' => 'Товары',
    'LBL_HOMEPAGE_TITLE' => 'Мои товары',
    'LNK_NEW_RECORD' => 'Добавить товар',
    'LNK_LIST' => 'Товары',
    'LBL_SEARCH_FORM_TITLE' => 'Поиск товара',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Просмотр истории',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Мероприятия',
    'LBL_NEW_FORM_TITLE' => 'Новые товары',
    'LBL_MAINCODE' => 'Код товара',
    'VALUE' => 'Название товара',
    'LBL_PART_NUMBER' => 'Артикул',
    'LBL_CATEGORY' => 'Категория',
    'LBL_TYPE' => 'Тип Продукта',
    'LBL_COST' => 'Себестоимость',
    'LBL_PRICE' => 'Цена по прайсу',
    'LBL_URL' => 'URL-адрес',
    'LBL_CONTACT' => 'Контакт',
    'LBL_PRODUCT_IMAGE' => 'Фото товара',
    'LBL_IMAGE_UPLOAD_FAIL' => 'ОШИБКА: размер загружаемого файла превышает максимально допустимое значение, равное ',
    'LBL_AOS_PRODUCT_CATEGORYS_NAME' => 'Категория товара',
    'LBL_AOS_PRODUCT_CATEGORY' => 'Категория товара (ID)',
    'LBL_AOS_PRODUCT_CATEGORIES' => 'Категории товаров',
    'LBL_COST_USDOLLAR' => 'Себестоимость (основная валюта)',
    'LBL_PRICE_USDOLLAR' => 'Цена по прайсу (основная валюта)',
    'LBL_FILE_URL' => 'URL файла',
    'LBL_CUSTOMERS_PURCHASED_PRODUCTS_SUBPANEL_TITLE' => 'Оплатившие товар клиенты',
    'LBL_PRODUCTS_PURCHASES' => 'Оплатившие товар клиенты',
    'LBL_AOS_QUOTE_NAME' => 'Предложение',
    'LBL_ACCOUNT_NAME' => 'Контрагент',
);


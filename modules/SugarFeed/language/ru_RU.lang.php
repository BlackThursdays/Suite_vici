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
    'LBL_MODIFIED_NAME' => 'Изменено',
    'LBL_CREATED' => 'Создано',
    'LBL_DESCRIPTION' => 'Описание',
    'LBL_DELETED' => 'Удалено',
    'LBL_NAME' => 'Название',
    'LBL_SAVING' => 'Сохранение...',
    'LBL_SAVED' => 'Сохранено',
    'LBL_CREATED_USER' => 'Создано',
    'LBL_MODIFIED_USER' => 'Изменено',
    'LBL_LIST_FORM_TITLE' => 'Лента событий',
    'LBL_MODULE_NAME' => 'Лента событий',
    'LBL_MODULE_TITLE' => 'Лента событий',
    'LBL_DASHLET_DISABLED' => 'Внимание: Лента событий отключена, новые события не будут отображаться в системе',
    'LBL_RECORDS_DELETED' => 'Все данные ленты событий были удалены, если лента событий включена, новые события будут отображаться в системе автоматически.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'Вы действительно хотите удалить все данные из ленты событий?',
    'LBL_FLUSH_RECORDS' => 'Очистить ленту событий',
    'LBL_ENABLE_FEED' => 'Включить ленту событий',
    'LBL_ENABLE_MODULE_LIST' => 'Включить для следующих модулей',
    'LBL_HOMEPAGE_TITLE' => 'Лента событий',
    'LNK_NEW_RECORD' => 'Создать событие',
    'LNK_LIST' => 'Лента событий',
    'LBL_SEARCH_FORM_TITLE' => 'Поиск события',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Просмотр истории',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Мероприятия',
    'LBL_NEW_FORM_TITLE' => 'Новое событие',
    'LBL_ALL' => 'Все',
    'LBL_USER_FEED' => 'Пользовательские ссылки',
    'LBL_ENABLE_USER_FEED' => 'Включить пользовательские ссылки',
    'LBL_TO' => 'Видимый для группы',
    'LBL_IS' => ':',
    'LBL_DONE' => 'Готово',
    'LBL_TITLE' => 'Заголовок:',
    'LBL_ROWS' => 'Количество строк:',
    'LBL_CATEGORIES' => 'Контролируемые модули:',
    'LBL_TIME_LAST_WEEK' => 'на прошлой неделе',
    'LBL_TIME_WEEKS' => 'недели',
    'LBL_TIME_DAYS' => 'дней',
    'LBL_TIME_YESTERDAY' => 'вчера',
    'LBL_TIME_HOURS' => 'час.',
    'LBL_TIME_HOUR' => 'час',
    'LBL_TIME_MINUTES' => 'мин.',
    'LBL_TIME_MINUTE' => 'минуту',
    'LBL_TIME_SECONDS' => 'сек.',
    'LBL_TIME_SECOND' => 'секунду',
    'LBL_TIME_AND' => 'и',
    'LBL_TIME_AGO' => 'назад',

    'CREATED_CONTACT' => 'создал(а) <b>НОВЫЙ</b> {0}',
    'CREATED_OPPORTUNITY' => 'создал(а) <b>НОВУЮ</b> {0}',
    'CREATED_CASE' => 'создал(а) <b>НОВОЕ</b> {0}',
    'CREATED_LEAD' => 'создал(а) <b>НОВЫЙ</b> {0}',
    'FOR' => 'для',
    'CLOSED_CASE' => '<b>ЗАКРЫЛ(а)</b> обращение ',
    'CONVERTED_LEAD' => '<b>ПРЕОБРАЗОВАЛ(а)</b> предв. контакт',
    'WON_OPPORTUNITY' => ' <b>ЗАКРЫЛ(а) С УСПЕХОМ</b> сделку',
    'WITH' => 'с',

    'LBL_LINK_TYPE_Link' => 'Ссылка',
    'LBL_LINK_TYPE_Image' => 'Изображение',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'Выбрать',
    'LBL_POST' => 'Опубликовать',
    'LBL_AUTHENTICATE' => 'Соединить с',
    'LBL_AUTHENTICATION_PENDING' => 'Не все, выбранные вами, учётные записи прошли аутентификацию. Кликните \'Отменить\' для возврата в окно настроек, чтобы аутентифицировать внешние учётные записи, или кликните \'Да\' для продолжения без аутентификации.',
    'LBL_ADVANCED_SEARCH' => 'Расширенный фильтр' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'Доп. параметры',
    'LBL_HIDE_OPTIONS' => 'Скрыть параметры',
    'LBL_VIEW' => 'Просмотр',
    'LBL_POST_TITLE' => 'Добавление сообщения пользователем ',
    'LBL_URL_LINK_TITLE' => 'Адрес ресурса или ссылка на изображение',
);

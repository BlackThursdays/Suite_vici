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
    'LBL_EDIT_LAYOUT' => 'Правка расположения',
    'LBL_EDIT_FIELDS' => 'Правка пользовательских полей',
    'LBL_SELECT_FILE' => 'Выбор файла',
    'LBL_MODULE_TITLE' => 'Студия',
    'LBL_TOOLBOX' => 'Инструментарий',
    'LBL_SUGAR_FIELDS_STAGE' => 'Элементы <br> (выберите категорию из списка для отображения соответствующих элементов)',
    'LBL_VIEW_SUGAR_FIELDS' => 'Просмотр элементов',
    'LBL_FAILED_TO_SAVE' => 'Сохранение невозможно',
    'LBL_CONFIRM_UNSAVE' => 'Изменения не будут сохранены. Вы действительно хотите продолжить?',
    'LBL_PUBLISHING' => 'Публикация...',
    'LBL_PUBLISHED' => 'Опубликовано',
    'LBL_FAILED_PUBLISHED' => 'Публикация невозможна',
    'LBL_DROP_HERE' => '[Переместить сюда]',

//CUSTOM FIELDS
    'LBL_NAME' => 'Название',
    'LBL_LABEL' => 'Надпись',
    'LBL_MASS_UPDATE' => 'Массовое обновление',
    'LBL_DEFAULT_VALUE' => 'Значение по умолчанию',
    'LBL_REQUIRED' => 'Необходимо',
    'LBL_DATA_TYPE' => 'Тип',


    'LBL_HISTORY' => 'История',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<h2>Добро пожаловать в студию!</h2><br> Что бы вы хотели сделать?<br><b> Пожалуйста, выберите необходимую опцию.</b>',
    'LBL_SW_EDIT_MODULE' => 'Редактирование модуля',
    'LBL_SW_EDIT_DROPDOWNS' => 'Редактирование комбобоксов',
    'LBL_SW_EDIT_TABS' => 'Настройка закладок модулей',
    'LBL_SW_RENAME_TABS' => 'Переименование закладок',
    'LBL_SW_EDIT_GROUPTABS' => 'Настройка сгруппированных модулей',
    'LBL_SW_EDIT_PORTAL' => 'Редактирование портала',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'Восстановление пользовательских полей',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'Перемещение пользовательских полей',

//Manager Backups History
    'LBL_MB_DELETE' => 'Удалить',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'Создать комбобокс',
    'LBL_DROPDOWN_NAME' => 'Название комбобокса:',
    'LBL_DROPDOWN_LANGUAGE' => 'Язык содержимого комбобокса:',
    'LBL_TABGROUP_LANGUAGE' => 'Язык:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'Отображаемое значение',
    'LBL_DD_DATABASEVALUE' => 'Значение в базе',
    'LBL_DD_ALL' => 'Все',

//BUTTONS
    'LBL_BTN_SAVE' => 'Сохранить',
    'LBL_BTN_CANCEL' => 'Отказаться',
    'LBL_BTN_SAVEPUBLISH' => 'Сохранить и установить',
    'LBL_BTN_HISTORY' => 'История',
    'LBL_BTN_ADDROWS' => 'Добавить строку',
    'LBL_BTN_UNDO' => 'Отменить',
    'LBL_BTN_REDO' => 'Вернуть',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Добавить пользовательское поле',
    'LBL_BTN_TABINDEX' => 'Редактировать порядок перемещения по элементам макета',

//TABS
    'LBL_MODULES' => 'Модули',
    'LBL_MODULE_NAME' => 'Администрирование',
    'LBL_CONFIGURE_GROUP_TABS' => 'Настройка сгруппированных модулей',
    'LBL_GROUP_TAB_WELCOME' => 'Сгруппированные модули будут использоваться всякий раз, как только пользователь выберет на странице настроек параметров пользователя в качестве принципа навигации сгруппированные модули вместо обычных модулей. Вы можете перемещать закладки модулей между группами для настройки их расположения. Пустые группы не будут отображаться в панели закладок.',
    'LBL_RENAME_TAB_WELCOME' => ' Нажмите на необходимом названии закладки для её переименования.',
    'LBL_DELETE_MODULE' => 'Удалить&nbsp;модуль<br />из&nbsp;группы',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Выберите необходимый язык, отредактируйте закладки сгруппированных модулей и нажмите на кнопку <b>Сохранить и установить</b>.',
    'LBL_ADD_GROUP' => 'Добавить группу',
    'LBL_NEW_GROUP' => 'Новая группа',
    'LBL_RENAME_TABS' => 'Переименование закладок модулей',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "Ошибка: Неверное значение ключа: [']",

//SUGAR PORTAL
    'LBL_SAVE' => 'Сохранить' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'Отменить' /*for 508 compliance fix*/,
    'LBL_REDO' => 'Повторить' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'Строчный' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Удалить' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'Добавить поле' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'Развернуть' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'Свернуть' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'Опубликовать' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'Добавить строки' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'Добавить поле' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'Править' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'Выберите язык для редактирования.',
    'LBL_SINGULAR' => 'Единственное число',
    'LBL_PLURAL' => 'Множественное число',
    'LBL_RENAME_MOD_SAVE_HELP' => 'Нажмите на кнопку <b>Сохранить</b> для применения внесённых изменений.'

);

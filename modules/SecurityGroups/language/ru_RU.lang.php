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
    'LBL_ALL_MODULES' => 'Все',//rost fix
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
    'LBL_NONINHERITABLE' => 'Не наследуемая',
    'LBL_LIST_NONINHERITABLE' => 'Не наследуемая',
    'LBL_NAME' => 'Группа',
    'LBL_CREATED_USER' => 'Создано',
    'LBL_MODIFIED_USER' => 'Изменено',
    'LBL_LIST_FORM_TITLE' => 'Группы пользователей',
    'LBL_MODULE_NAME' => 'Расширенные настройки безопасности',
    'LBL_MODULE_TITLE' => 'Расширенные настройки безопасности',
    'LNK_NEW_RECORD' => 'Создать Группу пользователей',
    'LNK_LIST' => 'Просмотр списка',
    'LBL_SEARCH_FORM_TITLE' => 'Search Security Suite Management',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'История',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Мероприятия',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Расширенные настройки безопасности',
    'LBL_USERS' => 'Пользователи',
    'LBL_USERS_SUBPANEL_TITLE' => 'Пользователи',
    'LBL_ROLES_SUBPANEL_TITLE' => 'Роли',
    'LBL_ROLES' => 'Роли',

    'LBL_CONFIGURE_SETTINGS' => 'Настройка',
    'LBL_ADDITIVE' => 'Аддитивные права',
    'LBL_ADDITIVE_DESC' => "Пользователь имеет наивысшие права из всех ролей, назначенных пользователю или пользовательским группам",
    'LBL_STRICT_RIGHTS' => 'Строгие права',
    'LBL_STRICT_RIGHTS_DESC' => "Если пользователь является членом нескольких групп, то будут использованы только соответствующие права группы, назначенной текущей записи.",
    'LBL_USER_ROLE_PRECEDENCE' => 'Приоритет ролей пользователя',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'Если роль назначена пользователю напрямую (не через Группу), то эта роль имеет приоритет перед групповыми ролями.',
    'LBL_INHERIT_TITLE' => 'Наследование групповых правил',
    'LBL_INHERIT_CREATOR' => 'Наследовать группы от создавшего пользователя',
    'LBL_INHERIT_CREATOR_DESC' => 'Запись будет наследовать ВСЕ группы, в которые входит создавший её пользователь.',
    'LBL_INHERIT_PARENT' => 'Наследовать родительскую запись',
    'LBL_INHERIT_PARENT_DESC' => 'Например, если встреча создана для контакта, то эта запись наследует группы, ассоциированные с данным контактом.',
    'LBL_USER_POPUP' => 'Всплывающее окно для нового пользователя',
    'LBL_USER_POPUP_DESC' => 'При создании нового пользователя будет всплывать окно для назначения пользователя той или иной группе.',
    'LBL_INHERIT_ASSIGNED' => 'Наследовать группы от ответственного',
    'LBL_INHERIT_ASSIGNED_DESC' => 'Запись будет наследовать все группы, которым принадлежит ответственный пользователь. Другие группы, назначенные записи, удалены НЕ будут.',
    'LBL_POPUP_SELECT' => 'Использовать всплывающее окно выбора групп',
    'LBL_POPUP_SELECT_DESC' => 'При создании записи пользователем, входящим более чем в одну группу, показывать всплывающее окно для выбора одной из групп. Если пользователь входит только в одну группу, запись автоматически унаследует данную группу.',
    'LBL_FILTER_USER_LIST' => 'Фильтровать список пользователей',
    'LBL_FILTER_USER_LIST_DESC' => "Пользователи, не являющиеся администраторами, могут назначать записи только пользователям из тех же групп.",

    'LBL_DEFAULT_GROUP_TITLE' => 'Группа по умолчанию для новых записей',
    'LBL_ADD_BUTTON_LABEL' => 'Добавить',
    'LBL_REMOVE_BUTTON_LABEL' => 'Удалить',
    'LBL_GROUP' => 'Группа:',
    'LBL_MODULE' => 'Модуль:',

    'LBL_MASS_ASSIGN' => 'Группы пользователей: Массовое назначение',
    'LBL_ASSIGN' => 'Назначить',
    'LBL_REMOVE' => 'Удалить',
    'LBL_ASSIGN_CONFIRM' => 'Вы уверены, что хотите добавить эту группу к ',
    'LBL_REMOVE_CONFIRM' => 'Вы уверены, что хотите удалить эту группу из ',
    'LBL_CONFIRM_END' => ' выбранные записи?',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'Группы пользователей/Пользователь',
    'LBL_USER_NAME' => 'Имя пользователя',
    'LBL_SECURITYGROUP_NAME' => 'Имя Группы пользователя',
    'LBL_HOMEPAGE_TITLE' => 'Групповые сообщения',
    'LBL_TITLE' => 'Заголовок:',
    'LBL_ROWS' => 'Количество строк:',
    'LBL_POST' => 'Отправить',
    'LBL_SELECT_GROUP_ERROR' => 'Не выбрано ни одной группы.',

    'LBL_GROUP_SELECT' => 'Выберите, какие группы должны иметь доступ к этой записи',
    'LBL_ERROR_DUPLICATE' => 'Из-за возможных дубликатов вам необходимо вручную добавить Группы  пользователей к создаваемой записи.',

    'LBL_INBOUND_EMAIL' => 'Учётная запись электронной почты',
    'LBL_INBOUND_EMAIL_DESC' => 'Разрешить доступ к учётной записи электронной почты только в том случае, если пользователь принадлежит к группе, назначенной данной учётной записи.',
    'LBL_PRIMARY_GROUP' => 'Основная группа',

);

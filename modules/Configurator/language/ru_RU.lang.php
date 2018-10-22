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
    /*'ADMIN_EXPORT_ONLY'=>'Admin export only',*/
    'ADVANCED' => 'Дополнительные настройки',
    'DEFAULT_CURRENCY_ISO4217' => 'Код валюты - ISO 4217 ',
    'DEFAULT_CURRENCY_NAME' => 'Название валюты',
    'DEFAULT_CURRENCY_SYMBOL' => 'Символ валюты',
    'DEFAULT_DATE_FORMAT' => 'Формат даты по умолчанию',
    'DEFAULT_DECIMAL_SEP' => 'Десятичный разделитель',
    'DEFAULT_LANGUAGE' => 'Язык по умолчанию',
    'DEFAULT_SYSTEM_SETTINGS' => 'Пользовательский интерфейс',
    'DEFAULT_THEME' => 'Стандартная тема',
    'DEFAULT_TIME_FORMAT' => 'Формат времени по умолчанию',
    'DISPLAY_RESPONSE_TIME' => 'Отображать время ответа сервера',
    'IMAGES' => 'Логотип',
    'LBL_ALLOW_USER_TABS' => 'Разрешить пользователям скрывать закладки',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'Настройка конфигурации',
    'LBL_LOGVIEW' => 'Просмотр журнала',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Использовать SMTP-идентификацию?',
    'LBL_MAIL_SMTPPASS' => 'SMTP-пароль:',
    'LBL_MAIL_SMTPPORT' => 'SMTP-порт:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP-сервер:',
    'LBL_MAIL_SMTPUSER' => 'SMTP-пользователь:',
    'LBL_MAIL_SMTP_SETTINGS' => 'Настройка SMTP-сервера',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Выберите почтовую службу:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! - пароль:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! - учётная запись почты:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail - пароль:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail - адрес:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange - пароль:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange - логин:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange - порт сервера:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange  - сервер:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Разрешить пользователям использовать данную учётную запись для отправки исходящей почты:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'При выборе данной опции все пользователи смогут отправлять электронную почту (включая автоматические уведомления о назначении записей)<br>с использованием указанного здесь стандартного сервера исходящей почты.<br>В противном случае каждому пользователю при настройке учётной записи электронной почты необходимо вручную ввести настройки сервера исходящей почты.',
    'LBL_MAILMERGE' => 'Слияние',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Минимальный интервал автообновления',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Установка минимального интервала автообновления дашлета. Выберите "Никогда", если необходимо отключить автоматическое обновление.',
    'LBL_MODULE_FAVICON' => 'Отображать иконку модуля в качестве иконки сайта',
    'LBL_MODULE_FAVICON_HELP' => 'Если вы находитесь в модуле, содержащем иконку, то эта иконка будет отображаться в качестве иконки сайта на закладке браузера.',
    'LBL_MODULE_NAME' => 'Настройка конфигурации',
    'LBL_MODULE_ID' => 'Конфигуратор',
    'LBL_MODULE_TITLE' => 'Пользовательский интерфейс',
    'LBL_NOTIFY_FROMADDRESS' => '"От" (Адрес):',
    'LBL_NOTIFY_SUBJECT' => 'Тема E-mail:',
    'LBL_PROXY_AUTH' => 'Аутентификация?',
    'LBL_PROXY_HOST' => 'Прокси-сервер',
    'LBL_PROXY_ON_DESC' => 'Настройка прокси-сервера и параметров регистрации в системе',
    'LBL_PROXY_ON' => 'Использовать прокси-сервер?',
    'LBL_PROXY_PASSWORD' => 'Пароль',
    'LBL_PROXY_PORT' => 'Порт',
    'LBL_PROXY_TITLE' => 'Настройка прокси-сервера',
    'LBL_PROXY_USERNAME' => 'Логин',
    'LBL_RESTORE_BUTTON_LABEL' => 'Восстановить',
    'LBL_SYSTEM_SETTINGS' => 'Настройка конфигурации',
    'LBL_SKYPEOUT_ON_DESC' => 'Разрешать пользователям кликать на телефонных номерах с целью дозвона, используя SkypeOut&reg;. Для использования этой функции номер должен быть указан в корректном формате, например: +1 (555) 555-1234',
    'LBL_SKYPEOUT_ON' => 'Включить сервис click-to-call для телефонных номеров',
    'LBL_SKYPEOUT_TITLE' => 'Click-To-Call',
    'LBL_USE_REAL_NAMES' => 'Показывать полные имена пользователей',
    'LBL_USE_REAL_NAMES_DESC' => 'Отображать полное имя пользователя вместо его логина.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Отключить преобразование для ранее преобразованных предварительных контактов',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Если предварительный контакт уже был преобразован, то при включении данного параметра опция  <b>Преобразовать предварит. контакт</b> будет недоступна.',
    'LBL_ENABLE_ACTION_MENU' => 'Отображать действия в выпадающем меню',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'При включении данного параметра все действия в Форме просмотра и в субпанелях будут сгруппированы в выпадающем меню, в противном случае каждое действие будет представлено соответствующей кнопкой.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Включить быструю правку в Формах списка',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Редактирование данных непосредственно в Форме списка, не открывая Формы редактирования.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Включить быструю правку в Формах просмотра',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Редактирование данных непосредственно в Форме просмотра, не открывая Формы редактирования.',
    'LBL_HIDE_SUBPANELS' => 'Отображать субпанели в свёрнутом виде',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Максимальное количество одновременно отображаемых записей в Форме списка',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Максимальное количество одновременно отображаемых записей в субпанелях',
    'LOG_MEMORY_USAGE' => 'Вести журнал использования памяти',
    'LOG_SLOW_QUERIES' => 'Вести журнал медленных запросов',
    'CURRENT_LOGO' => 'Текущий логотип:',
    'CURRENT_LOGO_HELP' => 'Данный логотип отображается в левом верхнем углу приложения.',
    'NEW_LOGO' => 'Выбрать логотип',
    'NEW_LOGO_HELP' => 'Допустимы следующие форматы изображений: PNG или JPG. Максимальная высота изображения - 170px, максимальная ширина - 450px. Любое загруженное изображение, размер которого будет превышать указанные значения, будет масштабировано до допустимых размеров.',
    'NEW_LOGO_HELP_NO_SPACE' => 'Логотип может быть в одном из следующих форматов: PNG или JPG. Максимально допустимый размер картинки: 170х450 пикселей. Если размер загружаемой картинки превышает указанные значения, то изображение будет соответствующим образом масштабировано. Название файла картинки не должно содержать пробелов.',
    'SLOW_QUERY_TIME_MSEC' => 'Пороговое время выполнения медленных запросов (мсек) ',
    'STACK_TRACE_ERRORS' => 'Отображать стековую трассировку ошибок',
    'UPLOAD_MAX_SIZE' => 'Максимальный размер загружаемого файла',
    'VERIFY_CLIENT_IP' => 'Проверка IP-адреса пользователя',
    'LOCK_HOMEPAGE' => 'Запретить пользователям настройку главной страницы',
    'LOCK_SUBPANELS' => 'Запретить пользователям настройку субпанелей',
    'MAX_DASHLETS' => 'Максимальное количество дашлетов на главной странице системы',
    'SYSTEM_NAME' => 'Название системы:',
    'SYSTEM_NAME_WIZARD' => 'Название:',
    'SYSTEM_NAME_HELP' => 'Данное название отображается в заголовке браузера.',
    'LBL_LDAP_TITLE' => 'LDAP-аутентификация',
    'LBL_LDAP_ENABLE' => 'Включить LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Сервер:',
    'LBL_LDAP_SERVER_PORT' => 'Порт:',
    'LBL_LDAP_ADMIN_USER' => 'Имя пользователя:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Используется для поиска пользователя LDAP. Может потребоваться указать в fully qualified формате.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Пароль:',
    'LBL_LDAP_AUTHENTICATION' => 'Аутентификация:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Связь с LDAP сервером с использованием учётной записи конкретного пользователя. Если данные отсутствуют, связь будет установлена анонимно.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Автоматическое создание пользователей:',
    'LBL_LDAP_USER_DN' => 'DN пользователя:',
    'LBL_LDAP_GROUP_DN' => 'DN группы:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Пример: <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'Параметры:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Членство в группе:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Пользователь должен быть членом определённой группы',
    'LBL_LDAP_GROUP_USER_ATTR' => 'Атрибут пользователя:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'Уникальный идентификатор пользователя, используемый для проверки принадлежности пользователя к определённой группе, например: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'Уникальный Атрибут группы, например: <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'Атрибут группы:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Любые дополнительные параметры, применяемые в процессе аутентификации пользователей, например: <em>is_suitecrm_user=1 или (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Login-атрибут:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Bind-атрибут:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Аутентификация пользователя LDAP, например:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Поиск пользователя LDAP, например:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Пример: ldap.example.com или ldaps://ldap.example.com при включении SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Пример: 389 или 636 при включении SSL',
    'LBL_LDAP_GROUP_NAME' => 'Название группы:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Пример: <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Пример: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Если аутентифицированный пользователь не существует в базе SuiteCRM, то он будет создан.',
    'LBL_LDAP_ENC_KEY' => 'Ключ шифрования:',
    'DEVELOPER_MODE' => 'Режим разработчика',

    'SHOW_DOWNLOADS_TAB' => 'Отображать закладку загрузок',
    'SHOW_DOWNLOADS_TAB_HELP' => 'Отображение закладки загрузок в настройках пользователя, обеспечивая доступ пользователя к плагинам и другим файлам SuiteCRM',
    'LBL_LDAP_ENC_KEY_DESC' => 'Для SOAP-аутентификации при использовании LDAP.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'Расширение php_mcrypt должно быть включено в файле php.ini или же php должен быть скомпилирован с указанием соответствующего ключа.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'The openssl extension must be enabled in your php.ini file.',
    'LBL_ALL' => 'Показать все',
    'LBL_MARK_POINT' => 'Установить контрольную точку',
    'LBL_NEXT_' => 'Далее>>',
    'LBL_REFRESH_FROM_MARK' => 'Обновить с контр. точки',
    'LBL_SEARCH' => 'Найти:',
    'LBL_REG_EXP' => 'RegExp:',
    'LBL_IGNORE_SELF' => 'Игнорировать:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Контрольная точка в журнале установлена',
    'LBL_DISPLAYING_LOG' => 'Результат:',
    'LBL_YOUR_PROCESS_ID' => 'ID процесса:',
    'LBL_YOUR_IP_ADDRESS' => 'Ваш IP-адрес:',
    'LBL_IT_WILL_BE_IGNORED' => ' it will be ignored ',
    'LBL_LOG_NOT_CHANGED' => ' Журнал не был изменён',
    'LBL_ALERT_JPG_IMAGE' => 'Файл изображения должен быть в формате JPEG. Загрузите новый файл с расширением .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'Файл изображения должен быть в формате JPEG или PNG. Загрузите новый файл с расширением .jpg или .png.',
    'LBL_ALERT_SIZE_RATIO' => 'Соотношение сторон изображения должно быть между 1:1 и 10:1. Размер изображения будет изменён.',
    'ERR_ALERT_FILE_UPLOAD' => 'Произошла ошибка в процессе загрузки изображения.',
    'LBL_LOGGER' => 'Параметры журнала',
    'LBL_LOGGER_FILENAME' => 'Имя файла журнала:',
    'LBL_LOGGER_FILE_EXTENSION' => 'Расширение:',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Максимальный размер файла журнала:',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Формат даты по умолчанию:',
    'LBL_LOGGER_LOG_LEVEL' => 'Уровень детализации:',
    'LBL_LEAD_CONV_OPTION' => 'Мероприятия при преобразовании предварит. контакта',
    'LEAD_CONV_OPT_HELP' => "<b>Копировать</b> - в процессе преобразования предв. контакта создаются КОПИИ записей мероприятий, каждая из которых образует связь с записями выбранных модулей Контакта И/ИЛИ Контрагента. Создаются cвязи с записями ВСЕХ выбранных модулей.<br><br><b>Перемещать</b> - в процессе преобразования предв. контакта записи мероприятий связываются с записью Контакта ИЛИ Контрагента. Связи между мероприятиями и предв. контактом удаляются.<br><br><b>Оставить \"как есть\"</b> - в процессе преобразования копии мероприятий и новые связи НЕ создаются. Все созданные мероприятия связаны только с предв. контактом.",
    'LBL_CONFIG_AJAX' => 'Настройка AJAX',
    'LBL_CONFIG_AJAX_DESC' => 'Включение/Отключение AJAX-технологии для указанных модулей.',
    'LBL_LOGGER_MAX_LOGS' => 'Максимальное количество файлов журнала:',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Дополнительный суффикс имени файла журнала:',
    'LBL_VCAL_PERIOD' => 'Параметры доступности vCal:',
    'LBL_IMPORT_MAX_RECORDS' => 'Максимальное количество импортируемых записей:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Укажите максимально допустимое количество строк в импортируемом файле.<br>Если количество импортируемых строк будет превышать указанное здесь значение, то будет выдано соответствующее предупреждение.<br>Если значение оставить пустым, то разрешается импорт неограниченного количества строк.',
    'vCAL_HELP' => 'Используйте этот параметр для указания количества месяцев, в течение которых возможна публикация данных о занятости (звонки и встречи) из календаря.<BR>При включённой публикации допустимы значения от 1 до 12 месяцев. Для выключения возможности публикации введите "0".',
    'LBL_PDFMODULE_NAME' => 'Настройки PDF',
    'SUGARPDF_BASIC_SETTINGS' => 'Свойства документа',
    'SUGARPDF_ADVANCED_SETTINGS' => 'Расширенные настройки',
    'SUGARPDF_LOGO_SETTINGS' => 'Логотипы',

    'PDF_AUTHOR' => 'Автор',
    'PDF_AUTHOR_INFO' => 'Информация об авторе отображается в свойствах документа.',

    'PDF_HEADER_LOGO' => 'Для коммерческих предложений',
    'PDF_HEADER_LOGO_INFO' => 'Этот логотип отображается в заголовке PDF-документов коммерческих предложений по умолчанию.',

    'PDF_NEW_HEADER_LOGO' => 'Выбрать новый логотип для коммерческих предложений',
    'PDF_NEW_HEADER_LOGO_INFO' => 'Формат файла может быть .jpg или .png. (Только .jpg для EZPDF)<br />Рекомендованный размер: 212x40 px.',

    'PDF_SMALL_HEADER_LOGO' => 'Для отчетов',
    'PDF_SMALL_HEADER_LOGO_INFO' => 'Это изображение показывается в Заголовке по-умолчанию PDF-отчётов.<br> Кроме того, оно показывается в верхнем левом углу SuiteCRM.',

    'PDF_NEW_SMALL_HEADER_LOGO' => 'Выбрать новый логотип для отчетов',
    'PDF_NEW_SMALL_HEADER_LOGO_INFO' => 'Формат файла может быть .jpg или .png. (Только .jpg для EZPDF)<br />Рекомендованный размер: 212x40 px.',

    'PDF_FILENAME' => 'Имя файла по умолчанию',
    'PDF_FILENAME_INFO' => 'Название по умолчанию для сгенерированных PDF-файлов',

    'PDF_TITLE' => 'Название',
    'PDF_TITLE_INFO' => 'Название отобразится в свойствах документа.',

    'PDF_SUBJECT' => 'Тема',
    'PDF_SUBJECT_INFO' => 'Тема отобразится в свойствах документа.',

    'PDF_KEYWORDS' => 'Ключевое слово (слова)',
    'PDF_KEYWORDS_INFO' => 'Связать ключевые слова с документом, обычно в виде "ключевоеслово1 ключевоеслово2..."',

    'PDF_COMPRESSION' => 'Сжатие',
    'PDF_COMPRESSION_INFO' => 'Включить или выключить сжатие страницы.<br />Если включено, внутреннее представление каждой страницы сжимается, что в итоге приводит к коэффициенту сжатию документа: 2.',

    'PDF_JPEG_QUALITY' => 'Качество JPEG (1-100)',
    'PDF_JPEG_QUALITY_INFO' => 'Настроить с качеством сжатия JPEG по умолчанию (1-100)',

    'PDF_PDF_VERSION' => 'Версия PDF',
    'PDF_PDF_VERSION_INFO' => 'Установить версию PDF (проверить ссылку на PDF для действующих пользователей).',

    'PDF_PROTECTION' => 'Защита документа',
    'PDF_PROTECTION_INFO' => 'Настроить защиту документа<br />- копирование: копировать текст и логотипа в буфер обмена<br />- печать: распечатать документ<br />- изменить: изменить документ (кроме комментариев и форм)<br />- комментарии и формы: добавить комментарии и формы<br />Примечание: защиту от изменений можно настроить людям, обладающим полным продуктом Acrobat',

    'PDF_USER_PASSWORD' => 'Пароль пользователя',
    'PDF_USER_PASSWORD_INFO' => 'Если пароль не настроен, документ откроется, как обычно.<br />Если настроен пароль пользователя, программа просмотра PDF попросит ввести пароль перед отображением документа.<br />Если главный пароль будет отличаться от пользовательского, он будет использован для полного доступа.',

    'PDF_OWNER_PASSWORD' => 'Пароль владельца',
    'PDF_OWNER_PASSWORD_INFO' => 'Если настроен пароль пользователя, программа просмотра PDF попросит ввести пароль перед отображением документа.<br />Если главный пароль будет отличаться от пользовательского, он будет использован для полного доступа.',

    'PDF_ACL_ACCESS' => 'Контроль доступа',
    'PDF_ACL_ACCESS_INFO' => 'Контроль доступа по умолчанию для создания PDF.',

    'K_CELL_HEIGHT_RATIO' => 'Коэффициент высоты ячеек',
    'K_CELL_HEIGHT_RATIO_INFO' => 'Если высота ячеек меньше, чем (Font Height x Cell Height Ratio), то (Font Height x Cell Height Ratio) используется в качестве высоты ячеек. (Font Height x Cell Height Ratio) также используется в качестве высоты ячейки, когда высота не задана.',

    'K_SMALL_RATIO' => 'Фактор маленького шрифта',
    'K_SMALL_RATIO_INFO' => 'Фактор уменьшения для маленького шрифта.',

    'PDF_IMAGE_SCALE_RATIO' => 'Отношение масштаба логотипа',
    'PDF_IMAGE_SCALE_RATIO_INFO' => 'Отношение, используемое для масштабирования логотипов',

    'PDF_UNIT' => 'Единица измерения',
    'PDF_UNIT_INFO' => 'Единица измерения документа',
    'PDF_GD_WARNING' => 'У вас не установлена библиотека GD для PHP. Без библиотеки GD, в файлах PDF могут отображаться только логотипы в формате JPEG.',
    'ERR_EZPDF_DISABLE' => 'Внимание: класс EZPDF исключён из конфигурации таблицы и вместо него установлен класс PDF. Сохраните эту форму, чтобы установить TCPDF в качестве класса PDF и вернуться к стабильному состоянию.',
    'LBL_IMG_RESIZED' => "(размер изменен для отображения)",


    'LBL_FONTMANAGER_BUTTON' => 'Менеджер шрифтов PDF',
    'LBL_FONTMANAGER_TITLE' => 'Менеджер шрифтов PDF',
    'LBL_FONT_BOLD' => 'Полужирный',
    'LBL_FONT_ITALIC' => 'Курсив',
    'LBL_FONT_BOLDITALIC' => 'Пполужирный/Курсив',
    'LBL_FONT_REGULAR' => 'Обычный',

    'LBL_FONT_TYPE_CID0' => 'CID-0',
    'LBL_FONT_TYPE_CORE' => 'Ядро',
    'LBL_FONT_TYPE_TRUETYPE' => 'TrueType',
    'LBL_FONT_TYPE_TYPE1' => 'Постскрипт',
    'LBL_FONT_TYPE_TRUETYPEU' => 'TrueTypeUnicode',

    'LBL_FONT_LIST_NAME' => 'Название',
    'LBL_FONT_LIST_FILENAME' => 'Имя файла',
    'LBL_FONT_LIST_TYPE' => 'Тип',
    'LBL_FONT_LIST_STYLE' => 'Стиль',
    'LBL_FONT_LIST_STYLE_INFO' => 'Стиль шрифта',
    'LBL_FONT_LIST_ENC' => 'Кодировка',
    'LBL_FONT_LIST_EMBEDDED' => 'Встроенный',
    'LBL_FONT_LIST_EMBEDDED_INFO' => 'Отметьте, чтобы включить этот шрифт в файл PDF',
    'LBL_FONT_LIST_CIDINFO' => 'Информация о CID',
    'LBL_FONT_LIST_CIDINFO_INFO' => 'Более подробная информация с примерами: www.tcpdf.org',
    'LBL_FONT_LIST_FILESIZE' => 'Размер шрифта',
    'LBL_ADD_FONT' => 'Добавить шрифт',
    'LBL_BACK' => 'Назад',
    'LBL_REMOVE' => 'удал.',
    'LBL_JS_CONFIRM_DELETE_FONT' => 'Вы уверены, что хотите удалить этот шрифт?',

    'LBL_ADDFONT_TITLE' => 'Добавить шрифт для PDF',
    'LBL_PDF_ENCODING_TABLE' => 'Таблица кодировок',
    'LBL_PDF_ENCODING_TABLE_INFO' => 'Название таблицы кодировок<br />Эта опция игнорируется для TrueType Unicode, OpenType Unicode и символьных шрифтов. Кодировка определяет соответствие между кодом (от 0 до 255) и символом, содержащимся в шрифте. Первые 128 позиций являются фиксированными и соответствуют ASCII.',
    'LBL_PDF_FONT_FILE' => 'Файл шрифта',
    'LBL_PDF_FONT_FILE_INFO' => 'файл .ttf или .otf или .pfb',
    'LBL_PDF_METRIC_FILE' => 'Файл измерений',
    'LBL_PDF_METRIC_FILE_INFO' => 'файл .afm или .ufm',
    'LBL_ADD_FONT_BUTTON' => 'Добавить',
    'JS_ALERT_PDF_WRONG_EXTENSION' => 'Расширение данного файла не подходит.',

    'ERR_MISSING_CIDINFO' => 'Поле с информацией о CID не может быть пустым.',
    'LBL_ADDFONTRESULT_TITLE' => 'Результат добавления шрифта',
    'LBL_STATUS_FONT_SUCCESS' => 'УСПЕШНО: Шрифт добавлен в SuiteCRM.',
    'LBL_STATUS_FONT_ERROR' => 'ОШИБКА: Шрифт не был добавлен. Просмотрите журнал ошибок.',

// Font manager
    'ERR_PDF_NO_UPLOAD' => 'Произошла ошибка при загрузке шрифта в файл измерений.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Наборы модулей',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'Не выбран ни одни набор модулей',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Укажите наборы модулей, которые могут быть востребованы пользователями при работе в системе. При необходимости эти параметры могут быть изменены после установки системы.',

    'LBL_WIZARD_TITLE' => 'Мастер настройки параметров SuiteCRM',
    'LBL_WIZARD_WELCOME_TAB' => 'Добро пожаловать',
    'LBL_WIZARD_WELCOME_TITLE' => 'Добро пожаловать в SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Нажмите на кнопку <b>Вперёд</b> для настройки параметров системы. Если вы хотите сделать это позже, нажмите на кнопку <b>Пропустить</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Вперёд >',
    'LBL_WIZARD_BACK_BUTTON' => '< Назад',
    'LBL_WIZARD_SKIP_BUTTON' => 'Пропустить',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Продолжить',
    'LBL_WIZARD_FINISH_TITLE' => 'Настройка основных параметров системы завершена',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Настройка логотипа',
    'LBL_WIZARD_SYSTEM_DESC' => 'Укажите название вашей организации и выберите логотип.',
    'LBL_WIZARD_LOCALE_DESC' => 'Укажите способ представления данных в системе, используя региональные настройки. По умолчанию будут использоваться именно эти настройки. При необходимости параметры можно настроить под каждого пользователя, указав необходимые значения в настройках профиля пользователя.',
    'LBL_WIZARD_SMTP_DESC' => 'Учётная запись исходящей почты будет использоваться для отправки исходящей почты, в том числе такой как уведомления о назначении ответственного, а также писем с информацией о новом пароле. Электронный адрес данной учётной записи будет фигурировать в получаемых письмах в качестве отправителя.',
    'LBL_LOADING' => 'Загрузка...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Удалить' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Добро пожаловать' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Логотип' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Дублировать отображение писем контактов в субпанели "История" для следующих модулей',

);

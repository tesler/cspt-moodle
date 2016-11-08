<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'enrol_autoenrol', language 'ru', branch 'MOODLE_20_STABLE'
 *
 * @package   enrol_autoenrol
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alwaysenrol'] = 'Всегда подписывать';
$string['alwaysenrol_help'] = 'При выборе значениея "ДА" плагины будт всегда подписывать пользователей, даже если они уже имеют доступ к курсу через другой метод записи.';
$string['auto'] = 'Авто';
$string['autoenrol:config'] = 'Настройка автоматической подписки';
$string['autoenrol:method'] = 'Пользователь может записаться на курс при входе на сайт';
$string['autoenrol:unenrol'] = 'Пользователь может отписывать автоподписанных пользователей';
$string['config'] = 'Конфигурация';
$string['countlimit'] = 'Лимит';
$string['countlimit_help'] = 'Этот экземпляр будет подсчитать количество учащихся и может остановить подписку пользователей, когда оно достигнет определенного уровня. Установка по умолчанию 0 означает неограниченную подписку.';
$string['defaultrole'] = 'Назначение роли по умолчанию';
$string['defaultrole_desc'] = 'Выберите роль, которая будет назначена пользователю во время автоматической регистраций';
$string['filter'] = 'Разрешить только';
$string['filtering'] = 'Фильтр пользователя';
$string['g_auth'] = 'Метод авторизации';
$string['g_lang'] = 'Язык';
$string['g_none'] = 'Выбрать...';
$string['groupon'] = 'Объединять в группы по';
$string['instancename'] = 'Пользовательское название';
$string['instancename_help'] = 'Вы можете добавить название, чтобы было ясно, что данный тп подписки делает. Эта опция полезна, если в курсе используется несколько экземпляров спсоба записи AutoEnrol';
$string['m_course'] = 'Загрузка курса';
$string['method'] = 'Когда подписывать';
$string['m_site'] = 'Во время входа на сайт';
$string['pluginname'] = 'Автоподписка Auto Enrol';
$string['pluginname_desc'] = 'Модуль реализует автоматическую подписку зарегистрированных пользователей на определенные курсы. Этот функционал похож на гостевой доступ, но при этом студентам открывается доступ к полному функционалу курса и они становятся его полноправными участниками. После установки подобной настройки все зарегистрированные пользователи не будут сразу подписаны на выбранный курс, но каждый из них будет добавлен в курс в момент авторизации в системе под своим логином и паролем.';
$string['role'] = 'Роль';
$string['softmatch'] = 'Нестрогое соответствие';
$string['warning'] = 'Осторожно!';
$string['warning_message'] = 'Добавление этот плагин для вашего курса позволит любым зарегистрированным пользователям Moodle получить доступ к вашему курсу. Добавляйте этот способ записи , только если вы хотите, открыть доступ к вашему курсу для всех пользователей Moodle.';

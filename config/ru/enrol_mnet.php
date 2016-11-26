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
 * Strings for component 'enrol_mnet', language 'ru', branch 'MOODLE_20_STABLE'
 *
 * @package   enrol_mnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['error_multiplehost'] = 'Для данного сайта уже существуют экземпляры способа записи на курс «Запись на курс для пользователей сети MNet». Разрешается только один экземпляр способа записи на курс для каждого сайта и/или один экземпляр со значением «Все сайты».';
$string['instancename'] = 'Название способа записи на курс';
$string['instancename_help'] = 'Вы можете произвольно переименовать этот способ записи на курс для пользователей сети MNet. Если Вы оставите это поле пустым, то, по умолчанию, название этого способа записи на курс будет содержать имя внешнего сайта и название роли, назначаемой его пользователям.';
$string['mnet_enrol_name'] = 'Служба записи на курс для пользователей сети MNet';
$string['pluginname'] = 'Запись на курс для пользователей сети MNet';
$string['pluginname_desc'] = 'Позволяет внешним сайтам сети MNet зачислять своих пользователей на курсы на этом сервере.';
$string['remotesubscriber'] = 'Внешний сайт';
$string['remotesubscriber_help'] = 'Выберите «Все сайты», чтобы открыть этот курс для всех серверов MNet, предлагая услугу записи на курсы для внешних пользователей. Или выберите один сайт, чтобы сделать этот курс доступным только для его пользователей.';
$string['remotesubscribersall'] = 'Все сайты';
$string['roleforremoteusers'] = 'Роль для внешних пользователей';
$string['roleforremoteusers_help'] = 'Эту роль получит внешний пользователь перешедший с выбранного сайта.';

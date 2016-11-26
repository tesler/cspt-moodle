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
 * Strings for component 'report_customsql', language 'ru', branch 'MOODLE_20_STABLE'
 *
 * @package   report_customsql
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addreport'] = 'Добавить новый запрос';
$string['anyonewhocanveiwthisreport'] = 'Любому, кому доступны эти отчеты (report/customsql:view)';
$string['archivedversions'] = 'Архивные версии этого запроса';
$string['automaticallymonthly'] = 'по расписанию, в первый день каждого месяца';
$string['automaticallyweekly'] = 'по расписанию, в первый день каждой недели';
$string['availablereports'] = 'Отчеты по требованию';
$string['availableto'] = 'Доступно: {$a}.';
$string['backtoreportlist'] = 'Вернуться к списку запросов';
$string['changetheparameters'] = 'Изменить параметры';
$string['customsql:definequeries'] = 'Определить пользовательский запрос';
$string['customsql:view'] = 'Просмотр отчетов по запросам';
$string['deleteareyousure'] = 'Вы уверены, что хотите удалить этот запрос?';
$string['deletethisreport'] = 'Удалить этот запрос';
$string['description'] = 'Описание';
$string['displayname'] = 'Название запроса';
$string['displaynamerequired'] = 'Вы должны ввести название запроса';
$string['displaynamex'] = 'Название запроса: {$a}';
$string['downloadthisreportascsv'] = 'Скачать эти результаты как CSV-файл';
$string['editingareport'] = 'Редактирование специальных запросов к базе данных';
$string['editthisreport'] = 'Редактировать этот запрос';
$string['enterparameters'] = 'Введите параметры специальных запросов к базе данных';
$string['errordeletingreport'] = 'Ошибка при удалении запроса.';
$string['errorinsertingreport'] = 'Ошибка при вставке запроса.';
$string['errorupdatingreport'] = 'Ошибка при обновлении запроса.';
$string['invalidreportid'] = 'Неверный идентификатор запроса {$a}.';
$string['lastexecuted'] = 'Этот запрос последний раз запускался:  {$a->lastrun}. Он выполнялся: {$a->lastexecutiontime} сек.';
$string['morethanonerowreturned'] = 'Было возвращено более одной строки. Этот запрос должен возвращать одну строку.';
$string['nodatareturned'] = 'Этот запрос не вернул никаких данных.';
$string['noreportsavailable'] = 'Нет доступных запросов';
$string['norowsreturned'] = 'Нет возвращенных строк. Этот запрос должен возвращать одну строку.';
$string['nosemicolon'] = 'Вы не можете использовать символ «;» в SQL.';
$string['note'] = 'Примечания';
$string['notrunyet'] = 'Этот запрос еще не был запущен.';
$string['onerow'] = '&nbsp;Запрос возвращает одну строку, накапливать результаты по одной строке за раз';
$string['pluginname'] = 'Специальные запросы к базе данных';
$string['queryfailed'] = 'Ошибка при выполнении запроса: {$a}';
$string['queryparameters'] = 'Параметры запроса';
$string['queryparams'] = 'Пожалуйста, введите значения по умолчанию для параметров запроса.';
$string['queryparamschanged'] = 'Именованные подстановки в запросе изменены.';
$string['queryrundate'] = 'дата запуска запроса';
$string['querysql'] = 'Запрос SQL';
$string['querysqlrequried'] = 'Вы должны ввести какой-то запрос SQL.';
$string['recordlimitreached'] = 'Этот запрос достиг лимита по строкам - {$a}. Некоторые строки в конце могут быть опущены.';
$string['reportfor'] = 'Запуск запроса в {$a}';
$string['runable'] = 'Запуск';
$string['runablex'] = 'Запустить: {$a}';
$string['schedulednote'] = 'Эти запросы будут автоматически запускаться в первый день каждой недели или месяца, собирая результаты за предыдущую неделю или месяц. Эти ссылки позволят просматривать накопленные результаты.';
$string['scheduledqueries'] = 'Запланированные запросы';
$string['typeofresult'] = 'Тип результата';
$string['unknowndownloadfile'] = 'Неизвестный файл загрузки.';
$string['userswhocanconfig'] = 'Только администраторам (moodle/site:config)';
$string['userswhocanviewsitereports'] = 'Всем, кому доступны системные отчеты (moodle/site:viewreports)';
$string['whocanaccess'] = 'Кому доступен этот запрос';

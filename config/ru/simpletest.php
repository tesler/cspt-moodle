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
 * Strings for component 'simpletest', language 'ru', branch 'MOODLE_20_STABLE'
 *
 * @package   simpletest
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addconfigprefix'] = 'Добавить префикс к файлу конфигурации';
$string['all'] = 'ВСЕ';
$string['codecoverageanalysis'] = 'Выполнить анализ покрытия кода.';
$string['codecoveragecompletereport'] = '(посмотреть полный отчёт покрытия кода)';
$string['codecoveragedisabled'] = 'Не удается включить покрытие кода на этом сервере (отсутствует расширение xdebug)';
$string['codecoveragelatestdetails'] = '(на {$a->date}, с {$a->files} файлами, {$a->percentage} покрыто)';
$string['codecoveragelatestreport'] = 'посмотреть последний полный отчёт покрытия кода';
$string['confignonwritable'] = 'Файл config.php не доступен для записи веб-серверу. Или измените права или отредактируйте его с соответствующего аккаунта пользователя и добавьте следующую строку перед закрывающим тегом php: <br /> $ CFG->unittestprefix = \'tst_\' // Измените tst_ на любой префикс, отличный от $ CFG->prefix';
$string['coveredlines'] = 'Покрытые линии';
$string['coveredpercentage'] = 'Общее покрытие кода';
$string['deletingnoninsertedrecord'] = 'Попытка удалить запись, которая не была вставлена в эти модуль-тесты (идентификатор {$a->id} в таблице {$a->table}).';
$string['deletingnoninsertedrecords'] = 'Попытка удалить записи, которые не были вставлены в эти модуль-тесты  (из таблицы {$a->table})';
$string['droptesttables'] = 'Удалить тестовые таблицы';
$string['exception'] = 'Исключение';
$string['executablelines'] = 'Исполняемые строки';
$string['fail'] = 'Ошибка';
$string['ignorefile'] = 'Игнорировать тесты в файле';
$string['ignorethisfile'] = 'Запустить заново тесты, игнорируя этот тестовый файл.';
$string['installtesttables'] = 'Установить тестовые таблицы';
$string['moodleunittests'] = 'Модульное тестирование Moodle: {$a}';
$string['notice'] = 'Уведомление';
$string['onlytest'] = 'Только запущенные тесты';
$string['pass'] = 'Пройден';
$string['pathdoesnotexist'] = 'Путь \'{$a}\' не создан.';
$string['prefix'] = 'Префикс таблиц модульного тестирования';
$string['prefixnotset'] = 'Префикс таблицы базы данных модульного тестирования не сконфигурирован. Заполните и добавьте эту форму в config.php.';
$string['reinstalltesttables'] = 'Переустановить тестовые таблицы';
$string['retest'] = 'Перезапустить тесты';
$string['retestonlythisfile'] = 'Перезапустить только этот тестовый файл.';
$string['runall'] = 'Запустить тесты со всех тестовых файлов.';
$string['runat'] = 'Запустить в {$a}.';
$string['runonlyfile'] = 'Запустить только тесты в этом файле';
$string['runonlyfolder'] = 'Запустить только тесты в этой папке';
$string['runtests'] = 'Запустить тесты';
$string['rununittests'] = 'Запустить модульное тестирование';
$string['showpasses'] = 'Показать пройденные тесты и ошибки';
$string['showsearch'] = 'Показать поиск в тестовых файлах.';
$string['skip'] = 'Пропустить';
$string['stacktrace'] = 'Трассировка стека:';
$string['summary'] = '{$a->run}/{$a->total} выбранных тестов завершено: <strong> пройдено - {$a->passes}</strong>, ошибок - <strong>{$a->fails}</strong>, исключений -  <strong>{$a->exceptions}</strong>.';
$string['tablesnotsetup'] = 'Таблицы модульного тестирования ещё не созданы. Хотите ли Вы создать их сейчас?';
$string['testdboperations'] = 'Тестирование операций базы данных';
$string['testtablescsvfileunwritable'] = 'CSV-файл тестовых таблиц не доступен для записи ({$a->filename})';
$string['testtablesneedupgrade'] = 'Тестовые таблицы БД должны быть обновлены. Хотите ли Вы сейчас продолжить с обновлением?';
$string['testtablesok'] = 'Тестовые таблицы БД были успешно установлены.';
$string['thorough'] = 'Запустить тщательный тест (может быть медленно).';
$string['timetakes'] = 'Затраченное время: {$a}.';
$string['totallines'] = 'Всего линий';
$string['uncaughtexception'] = 'Непойманное исключение: [{$a->getMessage()}] в [{$a->getFile()}:{$a->getLine()}] ТЕСТЫ ПРЕРВАНЫ.';
$string['uncoveredlines'] = 'Непокрытые линии';
$string['unittestprefixsetting'] = 'Префикс модульного тестирования: <strong>{$a->unittestprefix}</strong> (Отредактируйте config.php для изменения этого).';
$string['unittests'] = 'Модульное тестирование';
$string['updatingnoninsertedrecord'] = 'Попытка обновить запись, которая не была добавлена этим модульным тестированием (id {$a->id} в таблице {$a->table}).';
$string['version'] = 'Используем <a href="http://sourceforge.net/projects/simpletest/">SimpleTest</a> версии {$a}.';

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
 * Strings for component 'report_customlang', language 'ru', branch 'MOODLE_20_STABLE'
 *
 * @package   report_customlang
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkin'] = 'Выгрузить строки на диск';
$string['checkout'] = 'Загрузить строки в переводчик';
$string['checkoutdone'] = 'Строки успешно загружены в переводчик';
$string['checkoutinprogress'] = 'Идёт загрузка строк в переводчик';
$string['confirmcheckin'] = 'Вы собираетесь внести изменённые строки в Ваш языковой пакет. При этом все откорректированные через Переводчик строки будут сохранены в каталоге данных и в Moodle начнут использоваться их новые значения. Для выгрузки нажмите кнопку "Продолжить".';
$string['customlang:edit'] = 'Редактировать локальный перевод';
$string['customlang:view'] = 'Просмотреть локальный перевод';
$string['filter'] = 'Отфильтровать строки';
$string['filtercomponent'] = 'Выводить строки из следующих компонентов системы';
$string['filtercustomized'] = 'Только имеющие локальный перевод';
$string['filtermodified'] = 'Только не выгруженные';
$string['filteronlyhelps'] = 'Только строки подсказок';
$string['filtershowstrings'] = 'Отобразить строки';
$string['filterstringid'] = 'Идентификатор строки';
$string['filtersubstring'] = 'Только строки, содержащие';
$string['headingcomponent'] = 'Компонент';
$string['headinglocal'] = 'Локальный перевод';
$string['headingstandard'] = 'Стандартный текст';
$string['headingstringid'] = 'Строка';
$string['markinguptodate'] = 'Отметка исправлений как актуальных';
$string['markinguptodate_help'] = 'Локальный перевод может устареть, в том случае, если в английской версии или в основной версии перевода произошли изменения после того, как строка была исправлена на вашем сайте. Проверьте Ваш перевод. Если он остался актуальным, нажмите соответствующую кнопку. В противном случае исправьте перевод.';
$string['markuptodate'] = 'Отметить перевод как актуальный';
$string['modifiedno'] = 'Нет изменённых строк для выгрузки.';
$string['modifiednum'] = 'Изменено строк: {$a}. Вам нужно выгрузить их на диск, чтобы сохранить изменения.';
$string['nostringsfound'] = 'Строки, соответствующие критериям, не найдены. Измените настройки фильтра.';
$string['placeholder'] = 'Подстановки';
$string['placeholder_help'] = 'Подстановки в строке, это специальные выражения вида "{$a}" или "{$a->something}". Когда строка выводится на экран, они заменяются на какие-то значения.

Очень важно копировать их точно в том же виде, в каком они встречаются в исходной строке. Не пытайтесь переводить их.';
$string['placeholderwarning'] = 'Строка содержит подстановку';
$string['pluginname'] = 'Локальные изменения языкового пакета';
$string['savecheckin'] = 'Сохранить и выгрузить строки в файлы';
$string['savecontinue'] = 'Сохранить и продолжить редактирование';

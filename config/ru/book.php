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
 * Strings for component 'book', language 'ru', branch 'MOODLE_20_STABLE'
 *
 * @package   book
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addafter'] = 'Добавить главу';
$string['book:edit'] = 'Редактировать главы книги';
$string['book:exportimscp'] = 'Экспорт книги в виде пакета IMS';
$string['book:import'] = 'Импортировать главы';
$string['book:print'] = 'Печатать книгу';
$string['book:read'] = 'Читать книгу';
$string['book:viewhiddenchapters'] = 'Просматривать скрытые главы книги';
$string['chapterscount'] = 'Количество глав';
$string['chaptertitle'] = 'Название главы';
$string['confchapterdelete'] = 'Вы действительно хотите удалить эту главу?';
$string['confchapterdeleteall'] = 'Вы действительно хотите удалить эту главу и все ее подглавы?';
$string['content'] = 'Содержимое';
$string['customtitles'] = 'Нестандартные заголовки ';
$string['customtitles_help'] = 'Указанные названия глав отображаются только в оглавлении.';
$string['doexport'] = 'Экспортировать';
$string['doimport'] = 'Импортировать';
$string['editingchapter'] = 'Редактирование главы';
$string['errorchapter'] = 'Ошибка при чтении главы книги.';
$string['faq'] = 'ЧаВо по модулю Книга';
$string['faq_help'] = '* Почему только два уровня? *

Двух уровней глав в большинстве случаев достаточно для всех книг, три уровня приведут к ухудшению структуры документа. Модуль "Книга" предназначен для создания небольших многостраничных учебных материалов. Для более объемных документов лучше использовать формат PDF. Наиболее простой способ создания PDF-файлов - использование виртуальных принтеров (см. <a href="http://sector7g.wurzel6.de/pdfcreator/index_en.htm" target="_blank">PDFCreator</a>, <a href="http://fineprint.com/products/pdffactory/index.html" target="_blank">PDFFactory</a>, <a href="http://www.adobe.com/products/acrobatstd/main.html" target="_blank">Adobe Acrobat</a>, и т.д.).

* Может ли студент редактировать книги? *

Только преподаватели могут создавать и редактировать книги. Пока нет планов давать такую возможность студентам. Основная причина - желание сохранить модуль Книга как можно более простым.

* Могу ли я производить поиск внутри книг? *

В настоящее время есть только один способ - поиск средствами браузера, используя страницу "для печати". Глобальный поиск пока возможен только в форумах системы Moodle. Было бы неплохо иметь возможность поиска во всех ресурсах, включая Книги. Есть добровольцы?

* Названия глав не помещаются на одной строке Оглавления. *

Попытайтесь перефразировать название или попросите администратора сайта увеличить ширину Оглавления. Она определяется глобально для всех книг на странице конфигурации модуля.';
$string['fileordir'] = 'Файл или папка';
$string['generateimscp'] = 'Создать пакет IMS';
$string['import'] = 'Импорт';
$string['import_help'] = 'Вы можете импортировать отдельный HTML-файл или целую папку (все HTML-файлы содержащиеся в ней).

Относительные ссылки между файлами будут преобразованы в абсолютные ссылки между главами. Ссылки на изображения, Flash, Java тоже будут исправлены.';
$string['importinfo'] = 'Импортировать выбранный HTML-файл или папку.<br />
Главы сортируются в алфавитном порядке по именам файлов.<br />
Файлы, названные \'sub_*. *\', всегда импортируются как подразделы.';
$string['importing'] = 'Идёт импорт';
$string['importingchapters'] = 'Идёт импорт глав в книгу';
$string['maindirectory'] = 'Основная папка';
$string['modulename'] = 'Книга';
$string['modulename_help'] = 'Книга является простым многостраничным учебным материалом.';
$string['modulenameplural'] = 'Книги';
$string['navexit'] = 'Покинуть книгу';
$string['navnext'] = 'Следующая';
$string['navprev'] = 'Предыдущая';
$string['numbering'] = 'Нумерация глав';
$string['numbering0'] = 'Отсутствует';
$string['numbering1'] = 'Номера';
$string['numbering2'] = 'Маркеры';
$string['numbering3'] = 'Отступ';
$string['numbering_help'] = '* Отсутствует - к главам и подразделам не применяется нумерация и форматирование. Используйте этот способ, если у Вас уже есть нумерация в названиях глав. Например: "1. Первая глава", "1.а Первая тема",...

* Номера - главы и подразделы нумеруются числами (1, 1.1, 1.2, 2, ...)

* Маркеры - подразделы отображаются с отступом и помечаются маркерами

* Отступ - подразделы отображаются с отступом';
$string['numberingoptions'] = 'Доступные параметры нумерации';
$string['numberingoptions_help'] = 'Выберите параметры нумерации, которые должны быть доступны при создании новых книг.';
$string['pluginadministration'] = 'Управление книгой';
$string['pluginname'] = 'Книга';
$string['printbook'] = 'Печатать всю книгу';
$string['printchapter'] = 'Печатать только эту главу';
$string['printdate'] = 'Дата';
$string['printedby'] = 'Напечатано: ';
$string['relinking'] = 'Преобразование ссылок';
$string['subchapter'] = 'Подраздел';
$string['toc'] = 'Оглавление';
$string['top'] = 'наверх';

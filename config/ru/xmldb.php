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
 * Strings for component 'xmldb', language 'ru', branch 'MOODLE_20_STABLE'
 *
 * @package   xmldb
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actual'] = 'Актуально';
$string['aftertable'] = 'После таблицы:';
$string['back'] = 'Назад';
$string['backtomainview'] = 'Вернуться к главной';
$string['binaryincorrectlength'] = 'Некорректная длина бинарного поля';
$string['cannotuseidfield'] = 'Не могу ввести поле "ID". Это автозаполняемое поле';
$string['change'] = 'Изменить';
$string['charincorrectlength'] = 'Некорректная длина символьного поля';
$string['checkbigints'] = 'Проверить BigInt`ы';
$string['check_bigints'] = 'Поиск некорректный целых чисел в БД';
$string['checkdefaults'] = 'Проверить умолчания';
$string['check_defaults'] = 'Поиск некорректных значений по умолчанию';
$string['checkforeignkeys'] = 'Проверить внешние ключи';
$string['check_foreign_keys'] = 'Посмотреть нарушения внешних ключей';
$string['checkindexes'] = 'Проверить индексы';
$string['check_indexes'] = 'Поиск отсутствующих индексов БД';
$string['completelogbelow'] = '(посмотреть ниже полный отчет поиска)';
$string['confirmcheckbigints'] = 'Эта функциональность будет искать <a href="http://tracker.moodle.org/browse/MDL-11038">потенциально ошибочные целочисленные поля</a> на сервере Moodle. Это сгенерированная (но не запущенная!) автоматически нужная Вам SQL-конструкция, содержащая все целочисленные значения, верно определенные в БД.<br /><br />Однажды создав, Вы можете копировать такие конструкции и безопасно выполнять их с помощью своего предпочитаемого интерфейса SQL (не забывайте делать бекап данных перед этим).<br /><br />Настоятельно рекомендуется иметь самую последнюю версию (с +) релиза Moodle (1.8, 1.9, 2.x ...) перед запуском поиска ошибочных целых чисел.<br /><br /> Эта функциональность не выполняет никаких действий с БД (только читает из неё), т.е. Вы можете безопасно запускать её в любой момент.';
$string['confirmcheckdefaults'] = 'Эта функциональность будет искать несовместимые значения по умолчанию на сервере Moodle. Это сгенерированная автоматически (но не запущенная!) нужная Вам SQL-конструкция, содержащая все верно определенные значения по умолчанию.<br /><br />Однажды создав, Вы можете копировать такие конструкции и безопасно выполнять их с помощью своего предпочитаемого интерфейса SQL (не забывайте делать бекап данных перед этим).<br /><br />Настоятельно рекомендуется иметь самую последнюю версию (+) релиза Moodle (1.8, 1.9, 2.x ...) перед запуском поиска несовместимых значений по умолчанию.<br /><br /> Эта функциональность не выполняет никаких действий с БД (только читает из неё), т.е. Вы можете безопасно запускать её в любой момент.';
$string['confirmcheckforeignkeys'] = 'Эта функциональность будет искать возможные нарушения внешних ключей, определенные в представлении install.xml (Moodle не будет в данный момент создавать актуальные ограничения внешних ключей в базе данных, именно поэтому неверные данные могут присутствовать.)<br /><br />Настоятельно рекомендуется иметь самую последнюю версию (+) релиза Moodle (1.8, 1.9, 2.x ...) перед запуском поиска пропущенных индексов.<br /><br /> Эта функциональность не выполняет никаких действий с БД (только читает из неё), т.е. Вы можете безопасно запускать её в любой момент.';
$string['confirmcheckindexes'] = 'Эта функциональность будет искать потенциально ошибочные индексы на сервере Moodle. Это сгенерированная автоматически (но не запущенная!) нужная Вам SQL-конструкция, содержащая все верно определенные значения по умолчанию.<br /><br />Однажды создав, Вы можете копировать такие конструкции и безопасно выполнять их с помощью своего предпочитаемого интерфейса SQL (не забывайте делать бекап данных перед этим).<br /><br />Настоятельно рекомендуется иметь самую последнюю версию (+) релиза Moodle (1.8, 1.9, 2.x ...) перед запуском поиска пропущенных индексов.<br /><br /> Эта функциональность не выполняет никаких действий с БД (только читает из неё), т.е. Вы можете безопасно запускать её в любой момент.';
$string['confirmdeletefield'] = 'Вы абсолютно уверены, что хотите удалить поле:';
$string['confirmdeleteindex'] = 'Вы абсолютно уверены, что хотите удалить индекс:';
$string['confirmdeletekey'] = 'Вы абсолютно уверены, что хотите удалить ключ:';
$string['confirmdeletetable'] = 'Вы абсолютно уверены, что хотите удалить таблицу:';
$string['confirmdeletexmlfile'] = 'Вы абсолютно уверены, что хотите удалить файл:';
$string['confirmrevertchanges'] = 'Вы абсолютно уверены, что хотите отменить последние изменения:';
$string['create'] = 'Создать';
$string['createtable'] = 'Создать таблицу';
$string['defaultincorrect'] = 'Некорректное значение по умолчанию';
$string['delete'] = 'Удалить';
$string['delete_field'] = 'Удалить поле';
$string['delete_index'] = 'Удалить индекс';
$string['delete_key'] = 'Удалить ключ';
$string['delete_table'] = 'Удалить таблицу';
$string['delete_xml_file'] = 'Удалить XML-файл';
$string['docindex'] = 'Индекс документации:';
$string['documentationintro'] = 'Эта документация сгенерирована автоматически из определения базы данных XMLDB. Она доступна только на английском.';
$string['down'] = 'Вниз';
$string['duplicate'] = 'Дублировать';
$string['duplicatefieldname'] = 'Существует другое поле с этим именем';
$string['duplicatekeyname'] = 'Существует другой ключ с этим именем';
$string['edit'] = 'Редактировать';
$string['edit_field'] = 'Редактировать поле';
$string['edit_field_save'] = 'Сохранить поле';
$string['edit_index'] = 'Редактировать индекс';
$string['edit_index_save'] = 'Сохранить индекс';
$string['edit_key'] = 'Редактировать ключ';
$string['edit_key_save'] = 'Сохранить ключ';
$string['edit_table'] = 'Редактировать таблицу';
$string['edit_table_save'] = 'Сохранить таблицу';
$string['edit_xml_file'] = 'Редактировать файл XML';
$string['enumvaluesincorrect'] = 'Неверные значения для поля перечисления';
$string['expected'] = 'Ожидается';
$string['extensionrequired'] = 'Для этого действия требуется расширение PHP "{$a}". Установите это расширение, если Вы хотите использовать эту возможность.';
$string['field'] = 'Поле';
$string['fieldnameempty'] = 'Имя поля пустое';
$string['fields'] = 'Поля';
$string['fieldsnotintable'] = 'Поле не создано в таблице';
$string['fieldsusedinkey'] = 'Это поле используется в качестве ключа';
$string['filenotwriteable'] = 'Файл не доступен для записи';
$string['fkviolationdetails'] = 'Внешний ключ {$a->keyname} в таблице {$a->tablename} запрещен по причине {$a->numviolations} выхода за пределы {$a->numrows} строк';
$string['float2numbernote'] = 'Уведомление:  Хотя поле "float" 100% поддерживается XMLDB, рекомендуется вместо него перейти на поле типа "number".';
$string['floatincorrectdecimals'] = 'Неверное количество десятичных знаков для вещественного поля';
$string['floatincorrectlength'] = 'Неверная длина вещественного поля';
$string['generate_all_documentation'] = 'Вся документация';
$string['generate_documentation'] = 'Документация';
$string['gotolastused'] = 'Перейти к последнему использованному файлу';
$string['incorrectfieldname'] = 'Неверное имя';
$string['index'] = 'Индекс';
$string['indexes'] = 'Индексы';
$string['integerincorrectlength'] = 'Неверная длиная целочисленного поля';
$string['key'] = 'Ключ';
$string['keys'] = 'Ключи';
$string['listreservedwords'] = 'Список зарезервированных слов:<br /><a href="http://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">XMLDB_reserved_words</a>  (использует для поддержания обновлений)';
$string['load'] = 'Загрузка';
$string['main_view'] = 'Главный вид';
$string['masterprimaryuniqueordernomatch'] = 'Поля вашего внешнего ключа должны быть перечислены в том же порядке, как они представлены в УНИКАЛЬНЫХ КЛЮЧАХ  ссылочной таблицы';
$string['missing'] = 'Отсутствует';
$string['missingindexes'] = 'Найдены отсутствующие индексы';
$string['mustselectonefield'] = 'Вы должны выбрать одно поле, чтоб увидеть возможные с ним действия!';
$string['mustselectoneindex'] = 'Вы должны выбрать один индекс, чтоб увидеть возможные с ним действия!';
$string['mustselectonekey'] = 'Вы должны выбрать один ключ, чтоб увидеть возможные с ним действия!';
$string['mysqlextracheckbigints'] = 'В MySQL также взгляните на неверые знаковые bigint\'сы, сгенерируйте требуемый SQL и запустите его для фиксирования их.';
$string['newfield'] = 'Новое поле';
$string['newindex'] = 'Новый индекс';
$string['newkey'] = 'Новый ключ';
$string['newtable'] = 'Новая таблица';
$string['newtablefrommysql'] = 'Новая таблица из MySQL';
$string['new_table_from_mysql'] = 'Новая таблица из MySQL';
$string['nomasterprimaryuniquefound'] = 'Столбец, на который ссылается ваш внешний ключ,  должен включать первичный или уникальный КЛЮЧ в ссылочной таблице. Обратите внимание, что УНИКАЛЬНЫЙ ИНДЕКС столбца недостаточно хорош.';
$string['nomissingindexesfound'] = 'Потерянные индексы не найдены, ваша БД не нуждается в дальнейших действиях.';
$string['noviolatedforeignkeysfound'] = 'Не найдено нарушенных внешних ключей';
$string['nowrongdefaultsfound'] = 'Не найдено несовместимых значений по-умолчанию, ваша БД не нуждается в дальнейших действиях.';
$string['nowrongintsfound'] = 'Не найдены ошибочные целые числа, ваша БД не не нуждается в дальнейших действиях.';
$string['numberincorrectdecimals'] = 'Неверное колчиество знаков после запятой в числовом поле';
$string['numberincorrectlength'] = 'Неверная длина для числового поля';
$string['pendingchanges'] = 'Замечание: Вы провели изменения в этом файле. Они могут быть сохранены в любой момент.';
$string['pendingchangescannotbesaved'] = 'Присутствуют изменения в файле, но они не могут быть сохранены. Пожалуйста, убедитесь, что веб-сервер имеет право на запись и в директорию и в находящийся в ней файл "install.xml".';
$string['pendingchangescannotbesavedreload'] = 'Присутствуют изменения в файле, но они не могут быть сохранены. Пожалуйста, убедитесь, что веб-сервер имеет право на запись и в директорию и в находящийся в ней файл "install.xml". Затем перезагрузите страницу и у Вас должна появиться возможность сохранять изменения.';
$string['reserved'] = 'Зарезервировано';
$string['reservedwords'] = 'Зарезервированные слова';
$string['revert'] = 'Вернуть';
$string['revert_changes'] = 'Вернуть изменения';
$string['save'] = 'Сохранить';
$string['searchresults'] = 'Результаты поиска';
$string['selectaction'] = 'Выберите действие:';
$string['selectdb'] = 'Выберите базу данных:';
$string['selectfieldkeyindex'] = 'Выберите поле/ключ/индекс:';
$string['selectonecommand'] = 'Пожалуйста выберите одно действие из списка для просмотра кода PHP';
$string['selectonefieldkeyindex'] = 'Пожалуйста выберите одно поле/ключ/индекс из списка для просмотра кода PHP';
$string['selecttable'] = 'Выберите таблицу:';
$string['table'] = 'Таблица';
$string['tables'] = 'Таблицы';
$string['textincorrectlength'] = 'Неверная длина для текстового поля';
$string['unload'] = 'Выгрузка';
$string['up'] = 'Вверх';
$string['view'] = 'Просмотр';
$string['viewedited'] = 'Просмотр отредактированного';
$string['vieworiginal'] = 'Просмотр оригинала';
$string['viewphpcode'] = 'Просмотр PHP-кода';
$string['view_reserved_words'] = 'Посмотреть зарезервированные слова';
$string['viewsqlcode'] = 'Просмотр SQL-кода';
$string['view_structure_php'] = 'Просмотр структуры PHP';
$string['view_structure_sql'] = 'Просмотр структуры SQL';
$string['view_table_php'] = 'Просмотр таблицы PHP';
$string['view_table_sql'] = 'Просмотр таблицы SQL';
$string['violatedforeignkeys'] = 'Нарушенные внешние ключи';
$string['violatedforeignkeysfound'] = 'Найдены нарушенные внешние ключи';
$string['violations'] = 'Нарушения';
$string['wrong'] = 'Неверные';
$string['wrongdefaults'] = 'Найдены неверные значения по умолчанию';
$string['wrongints'] = 'Найдены неверные целочисленные значения';
$string['wronglengthforenum'] = 'Неверная длина перечисляемого поля';
$string['wrongreservedwords'] = 'Используемые в данный момент зарезервированные слова <br />(заметьте, что имя таблицы не важно, если использовать $CFG->prefix)';
$string['yesmissingindexesfound'] = 'Некоторые потерянные индексы были найдены в вашей БД. Здесь их детали и конструкции SQL, которые нужно запустить с помощью предпочитаемого SQL интерфейса для создания их всех (не забудьте сделать бэкап перед этим).<br /><br />После того, как сделаете это, настоятельно рекомендуется запустить утилиту вновь для проверки, не осталось ли ещё потерянных индексов.';
$string['yeswrongdefaultsfound'] = 'Некоторые несовместимые значения по-умолчанию были найдены в вашей БД. Здесь их детали и конструкции SQL, которые нужно запустить с помощью предпочитаемого SQL интерфейса для создания их всех (не забудьте сделать бэкап перед этим).<br /><br />После того, как сделаете это, настоятельно рекомендуется запустить утилиту вновь для проверки, не осталось ли ещё несовместимых значений по-умолчанию.';
$string['yeswrongintsfound'] = 'Некоторые ошибочные целочисленные значения были найдены в вашей БД. Здесь их детали и конструкции SQL, которые нужно запустить с помощью предпочитаемого SQL интерфейса для создания их всех (не забудьте сделать бэкап перед этим).<br /><br />После того, как сделаете это, настоятельно рекомендуется запустить утилиту вновь для проверки, не осталось ли ещё ошибочных целочисленных значений.';

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
 * Strings for component 'simplecertificate', language 'ru', branch 'MOODLE_20_STABLE'
 *
 * @package   simplecertificate
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['awarded'] = 'Награжденые';
$string['awardedto'] = 'Награждается';
$string['cantdeleteissue'] = 'Ошибка при удалении выданных сертификатов';
$string['certificateimage'] = 'Файл с изображением сертификата';
$string['certificateimage_help'] = 'Это изображение будет использовано в сертификате';
$string['certificatename'] = 'Название сертификата';
$string['certificatename_help'] = 'Название сертификата';
$string['certificatetext'] = 'Текст сертификата';
$string['certificatetextx'] = 'Положение текста сертификата по горизонтали';
$string['certificatetexty'] = 'Положение текста сертификата по вертикали';
$string['certificateverification'] = 'Проверка выданного сертификата';
$string['certlifetime'] = 'Сохранять выданный сертификат: (в месяцах)';
$string['certlifetime_help'] = 'Время, в течение которого необходимо хранить выданные сертификаты на сервере. Сертификаты выданные ранее указанного срока будут автоматически удаляться.';
$string['code'] = 'Код';
$string['completiondate'] = 'Курс завершен';
$string['coursegrade'] = 'Оценка за курс';
$string['coursehours'] = 'Объем курса в часах';
$string['coursehours_help'] = 'Объем курса в часах';
$string['coursename'] = 'Альтернативное название курса';
$string['coursename_help'] = 'Альтернативное название курса';
$string['coursetimereq'] = 'Требуется провести в курсе (минут)';
$string['coursetimereq_help'] = 'Укажите здесь минимальное количество минут, которые студент должен провести в курсе прежде чем он сможет получить сертификат.';
$string['datefmt'] = 'Формат даты';
$string['defaultcertificatetextx'] = 'Положение текста по горизонтали (значение по умолчанию)';
$string['defaultcertificatetexty'] = 'Положение текста по вертикали (значение по умолчанию)';
$string['defaultheight'] = 'Высота (значение по умолчанию)';
$string['defaultwidth'] = 'Ширина (значение по умолчанию)';
$string['deletissuedcertificates'] = 'Удалить выданные сертификаты';
$string['delivery'] = 'Доставка';
$string['delivery_help'] = 'Выберите способ, которым студенты должны получать сертификаты.

Открыть в новом окне: сертификат откроется в новом окне браузера.

Скачать: откроется окно загрузки файла

Отправить по электронной почте: сертификат будет отправлен студенту по электронной почте

После того как пользователь получит свой сертификат, если он нажмет на ссылку на сертификат на домашней странице курса, он увидит дату выдачи сертификата и сможет просмотреть полученный сертификат.';
$string['designoptions'] = 'Настройки дизайна';
$string['download'] = 'Скачать';
$string['emailfrom'] = 'Отправлять электронную почту от имени';
$string['emailfrom_help'] = 'Альтернативное имя отправителя для использования при отправке сертификата';
$string['emailothers'] = 'Адреса для уведомления';
$string['emailothers_help'] = 'Введите здесь через запятую адреса электронной почты тех, кого нужно уведомлять о получении студентом сертификата.';
$string['emailteachermail'] = '{$a->student} получил сертификат: «{$a->certificate}» об окончании курса «{$a->course}».

Вы можете посмотреть его здесь:

{$a->url}';
$string['emailteachermailhtml'] = '{$a->student} получил сертификат: «<i>{$a->certificate}</i>» об окончании курса «{$a->course}.

Вы можете посмотреть его здесь: <a href="{$a->url}">Отчет о сертификатах</a>.';
$string['emailteachers'] = 'Уведомлять учителей по электронной почте';
$string['emailteachers_help'] = 'При включении этого параметра учителя будут получать по электронной почте уведомления о получении студентами сертификатов.';
$string['filenotfound'] = 'Файл не найден : {$a}';
$string['grade'] = 'Оценка';
$string['gradefmt'] = 'Формат оценки';
$string['gradefmt_help'] = 'Есть три доступных формата, в которых можно выводить оценку на сертификате:

Оценка в процентах: Оценка выводится в процентах.
Оценка в баллах: Выводится величина оценки в баллах.
Буквенная оценка: Выводится буква, соответствующая оценке в процентах.';
$string['gradeletter'] = 'Буквенная оценка';
$string['gradepercent'] = 'Оценка в процентах';
$string['gradepoints'] = 'Оценка в баллах';
$string['height'] = 'Высота сертификата';
$string['hours'] = 'часа(ов)';
$string['intro'] = 'Введение';
$string['issued'] = 'Выдан';
$string['issueddate'] = 'Дата выдачи';
$string['issueoptions'] = 'Настройки выдачи сертификата';
$string['keywords'] = 'сертификат, курс, pdf, moodle';
$string['modulename'] = 'Простой сертификат';
$string['modulenameplural'] = 'Простые сертификаты';
$string['neverdeleteoption'] = 'Никогда не удалять';
$string['nocertificatesissued'] = 'Нет выданных сертификатов';
$string['openbrowser'] = 'Открыть в новом окне';
$string['opendownload'] = 'Нажмите на кнопку, чтобы сохранить сертификат на свой компьютер';
$string['openemail'] = 'Нажмите на кнопку для отправки Вам сертификата по электронной почте.';
$string['openwindow'] = 'Нажмите на кнопку, чтобы открыть сертификат в новом окне браузера';
$string['pluginadministration'] = 'Управление модулем «Простой сертификат»';
$string['pluginname'] = 'Простой сертификат';
$string['printdate'] = 'Дата печати';
$string['printdate_help'] = 'Это дата, которая будет выводиться, если выбрана печать даты. Если указана дата окончания курса, но студент не закончил курс, то будет выведена дата получения сертификата. Вы также можете выбрать для печати дату выставления оценки за определенный элемент курса. Если сертификат будет выдан до выставления оценки за этот элемент курса, то будет выведена дата получения сертификата.';
$string['printgrade'] = 'Выводить оценку';
$string['printgrade_help'] = 'Вы можете выбрать любой доступный элемент оценивания из журнала оценок, для того, чтобы вывести соответствующую оценку пользователя в сертификате. Элементы оценивания перечислены в том же порядке, что и в журнале оценок. Формат оценки можно выбрать ниже.';
$string['printoutcome'] = 'Выводить значение показателя';
$string['printoutcome_help'] = 'Вы можете выбрать любой из показателей курса, чтобы выводить в сертификате название показателя и оценку пользователя за этот показатель. Например: «Выпускная работа: Отлично»';
$string['receiveddate'] = 'Дата получения';
$string['report'] = 'Отчет';
$string['size'] = 'Размер сертификата';
$string['size_help'] = 'Это ширина и высота сертификата (в миллиметрах), по умолчанию используется формат A4 в альбомной ориентации';
$string['summaryofattempts'] = 'Ранее выданные сертификаты';
$string['textposition_help'] = 'Это координаты X и Y (в миллиметрах) текста сертификата';
$string['userdateformat'] = 'Пользовательский формат даты (согласно настройкам языка по умочанию)';
$string['viewcertificateviews'] = 'Просмотр выданных сертификатов ({$a})';
$string['width'] = 'Ширина сертификата';

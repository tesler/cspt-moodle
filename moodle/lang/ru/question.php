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
 * Strings for component 'question', language 'ru', branch 'MOODLE_20_STABLE'
 *
 * @package   question
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminreport'] = 'Сообщение о возможных проблемах в базе данных ваших вопросов';
$string['availableq'] = 'Доступно?';
$string['badbase'] = 'Некорректное основание перед знаком **: {$a}**';
$string['broken'] = 'Это «неработающая ссылка», она указывает на несуществующий файл.';
$string['byandon'] = '<em>{$a->user}</em>, <em>{$a->time}</em>';
$string['cannotcopybackup'] = 'Невозможно скопировать резервный файл';
$string['cannotcreate'] = 'Невозможно создать новую запись в таблице question_attempts';
$string['cannotcreatepath'] = 'Невозможно создать папку {$a}';
$string['cannotdeletecate'] = 'Вы не можете удалить эту категорию - это категория по умолчанию для данного контекста.';
$string['cannotenable'] = 'Нельзя напрямую создать вопрос типа «{$a}».';
$string['cannotfindcate'] = 'Не удалось найти запись для  категории';
$string['cannotfindquestionfile'] = 'Не удалось найти данные вопроса в ZIP-файле';
$string['cannotgetdsfordependent'] = 'Не удалось получить указанный набор данных для зависимого вопроса!
(Вопрос: {$a->id}, элемент набора данных: {$a->item})';
$string['cannotgetdsforquestion'] = 'Не удалось получить указанный набор данных для вычисляемого вопроса!
(Вопрос: {$a})';
$string['cannothidequestion'] = 'Не удалось скрыть вопрос';
$string['cannotimportformat'] = 'К сожалению, импорт этого формата еще не реализован!';
$string['cannotinsertquestion'] = 'Не удалось вставить новый вопрос!
';
$string['cannotinsertquestioncatecontext'] = 'Не удалось вставить новую категорию вопросов {$a->cat}. Неверный contextid {$a->ctx}';
$string['cannotloadquestion'] = 'Не удается загрузить вопрос
';
$string['cannotmovequestion'] = 'Этот скрипт не предназначен для переноса вопросов, с которыми связаны файлы из разных областей.';
$string['cannotopenforwriting'] = 'Невозможно открыть для записи:
{$a}';
$string['cannotpreview'] = 'Вы не можете просмотреть эти вопросы!';
$string['cannotretrieveqcat'] = 'Невозможно получить категорию для вопроса';
$string['cannotunhidequestion'] = 'Не удалось сделать вопрос видимым.';
$string['cannotunzip'] = 'Невозможно распаковать файл.';
$string['cannotwriteto'] = 'Невозможно записать экспортированные вопросы в {$a}';
$string['categorycurrent'] = 'Текущая категория';
$string['categorycurrentuse'] = 'Использовать эту категорию';
$string['categorydoesnotexist'] = 'Эта категория не существует';
$string['categorymoveto'] = 'Сохранить в категории';
$string['changepublishstatuscat'] = 'Для категории <a href="{$a->caturl}">«{$a->name}»</a> в курсе «{$a->coursename}» будет изменен статус совместного использования со значения <strong>{$a->changefrom}</strong> на <strong>{$a->changeto}</strong>.';
$string['chooseqtypetoadd'] = 'Выберите тип вопроса для добавления';
$string['clicktoflag'] = 'Нажмите, чтобы отметить этот вопрос';
$string['clicktounflag'] = 'Нажмите, чтобы снять отметку с этого вопроса';
$string['contexterror'] = 'Вы должны были попасть сюда, только  том случае, если переносите категорию вопросов в другой контекст.';
$string['copy'] = 'Скопировать из {$a} и изменить ссылки';
$string['created'] = 'Создано';
$string['createdby'] = 'Создан';
$string['createdmodifiedheader'] = 'Создан / сохранен';
$string['createnewquestion'] = 'Создать новый вопрос...';
$string['cwrqpfs'] = 'Выбор случайного вопроса из подкатегорий';
$string['cwrqpfsinfo'] = '<p>Во время обновления до Moodle 1.9 мы будем разделять категории вопросов по разным контекстам. Некоторые категории и вопросы на Вашем сайте могут изменить свой статус разделения.
Это необходимо в редких случаях, когда один или более «случайных» вопросов в тесте установлены так, чтобы выбрать из смеси опубликованных и неопубликованных категорий (как происходит на этом сайте). Это бывает, когда «случайный» вопрос выбирается из подкатегорий и одна или более подкатегорий имеют другой статус разделения к родительской категории, в которой создан случайный вопрос. </p>
<p> Категории вопросов, в которых «случайные» вопросы выбраны из родительских категорий, будут иметь такой же статус разделения как категория со «случайным» вопросом при модернизации к Moodle 1.9. Последующие категории будут иметь свой измененный статус разделения. Вопросы, которые затронуты, продолжат работать во всех существующих тестах, пока Вы не удалите их из этих тестов. </p>';
$string['cwrqpfsnoprob'] = 'На вашем сайте нет категорий вопросов, подверженных ситуации, когда вопросы случайно выбираются из подкатегорий.';
$string['defaultfor'] = 'По умолчанию для {$a}';
$string['defaultinfofor'] = 'Категория по умолчанию для общих вопросов в контексте «{$a}».';
$string['deletecoursecategorywithquestions'] = 'Вопросы в банке вопросов связаны с этой категорией курса. При продолжении они будут удалены. Перед этим Вы можете переместить их, используя интерфейс банка вопросов.';
$string['disabled'] = 'Отключено';
$string['disterror'] = 'Возникли проблемы с распределением типа {$a}';
$string['donothing'] = 'Не копировать и не перемещать файлы и не менять ссылки.';
$string['editcategories'] = 'Редактировать категории';
$string['editcategories_help'] = 'Вместо того, чтобы держать все вопросы в одном большом списке, их можно распределить по категориям и подкатегориям.

Каждая категория принадлежит определенному контексту, от чего зависит, где именно могут использоваться вопросы:

* Контекст элемента курса - вопросы доступны только рамках модуля элемента курса (например, теста).
* Контекст курса - вопросы доступны во всех элементах этого курса.
* Контекст категории курсов - вопросы доступны во всех элементах категории курсов и во всех курсах этой категории.
* Контекст системы - вопросы доступны во всех курсах и элементах курсов на этом сайте.

Распределение вопросов по категориям также необходимо для выбора вопросов случайным образом - вопросы выбираются случайным образом из определенной категории.';
$string['editingcategory'] = 'Редактирование категории';
$string['editingquestion'] = 'Редактирование вопроса';
$string['editthiscategory'] = 'Редактирование категории';
$string['emptyxml'] = 'Неизвестная ошибка - пустой файл imsmanifest.xml';
$string['enabled'] = 'Включено';
$string['erroraccessingcontext'] = 'Нет доступа к контексту';
$string['errordeletingquestionsfromcategory'] = 'Ошибка удаления вопросов из категории {$a}';
$string['errorduringpost'] = 'Возникла ошибка при заключительной обработке!';
$string['errorduringpre'] = 'Возникла ошибка при предварительной обработке!';
$string['errorduringproc'] = 'Возникла ошибка при обработке!';
$string['errorduringregrade'] = 'Не удалось переоценить вопрос {$a->qid}, возвращено в состояние {$a->stateid}.';
$string['errorfilecannotbecopied'] = 'Ошибка: невозможно скопировать файл {$a}.';
$string['errorfilecannotbemoved'] = 'Ошибка: невозможно переместить файл {$a}.';
$string['errorfileschanged'] = 'Ошибка: файлы, на которые ссылается вопрос, были изменены после отображения формы.';
$string['errormanualgradeoutofrange'] = 'Для вопроса «{$a->name}» оценка {$a->grade} не попадает в диапазон от 0 до {$a->maxgrade} .
Оценка и комментарий не были сохранены.';
$string['errormovingquestions'] = 'Ошибка при перемещении вопросов со следующими ID: {$a}.';
$string['errorpostprocess'] = 'Возникла ошибка при заключительной обработке!';
$string['errorpreprocess'] = 'Возникла ошибка при предварительной обработке!';
$string['errorprocess'] = 'Возникла ошибка при обработке!';
$string['errorprocessingresponses'] = 'Возникла ошибка при обработке Ваших ответов.';
$string['errorsavingcomment'] = 'Ошибка при сохранении в базе данных комментария к вопросу «{$a->name}».';
$string['errorupdatingattempt'] = 'Ошибка при обновлении в базе данных попытки {$a->id}.';
$string['exportcategory'] = 'Экспортировать категорию';
$string['exportcategory_help'] = 'Этот параметр определяет категории, из которых будут экспортироваться вопросы.

Некоторые форматы импорта (GIFT и Moodle XML) позволяют включить в файл экспорта категорию и контекст, давая возможность (при желании) воссоздать их при импорте. Для этого необходимо отметить соответствующие поля.';
$string['exporterror'] = 'При экспорте возникли ошибки!';
$string['exportfilename'] = 'вопросы';
$string['exportnameformat'] = '%Y%m%d-%H%M';
$string['exportquestions'] = 'Экспорт вопросов в файл';
$string['exportquestions_help'] = 'Эта функция позволяет экспортировать в текстовый файл вопросы всей категории (и любых ее подкатегорий).

Учтите, что в зависимости от выбранного формата файла часть информации вопросов и некоторые типы вопросов не могут быть экспортированы.';
$string['filecantmovefrom'] = 'Файлы вопросов не могут быть перемещены, потому что Вы не имеете права на удаление файлов из места, из которого Вы пытаетесь переместить вопросы.';
$string['filecantmoveto'] = 'Файлы вопросов не могут быть перемещены или скопированы, потому что у Вас нет права на добавление файлов в место, где Вы пытаетесь создать новые вопросы.';
$string['filesareacourse'] = 'область файлов курса';
$string['filesareasite'] = 'область файлов сайта';
$string['filestomove'] = 'Переместить/скопировать файлы в {$a}?';
$string['flagged'] = 'Отмечено';
$string['flagthisquestion'] = 'Отметить этот вопрос';
$string['formquestionnotinids'] = 'Форма содержит вопрос, который не находится в questionids (не имеет ID)';
$string['fractionsnomax'] = 'Один из вариантов ответа должен быть полностью правильным, то есть иметь оценку 100%.';
$string['getcategoryfromfile'] = 'Получить категории из файла';
$string['getcontextfromfile'] = 'Получить контекст из файла';
$string['ignorebroken'] = 'Игнорировать битые ссылки';
$string['importcategory'] = 'Категория для импорта';
$string['importcategory_help'] = 'Этот параметр определяет категорию, в которую будут импортированы вопросы.

Файлы некоторых форматов, например GIFT и Moodle XML, могут содержать информация о категории и контексте вопросов. Чтобы использовать эти значения, а не указанную категорию, отметьте соответствующие поля. Если категории, указанные в импортируемом файле не существуют, то они будут созданы.';
$string['importquestions'] = 'Импорт вопросов из файла';
$string['importquestions_help'] = 'Эта функция позволяет импортировать вопросы разных форматов из текстового файла. Обратите внимание, что файл должен быть в кодировке UTF-8.';
$string['impossiblechar'] = 'Недопустимый символ {$a}  используется в качестве скобок.';
$string['invalidarg'] = 'Указаны некорректные аргументы или неправильно сконфигурирован сервер.';
$string['invalidcategoryidforparent'] = 'Недопустимый ID родительской категории!';
$string['invalidcategoryidtomove'] = 'Недопустимый ID категории для перемещения!';
$string['invalidconfirm'] = 'Некорректная строка подтверждения';
$string['invalidcontextinhasanyquestions'] = 'Функции question_context_has_any_questions передан некорректный контекст';
$string['invalidwizardpage'] = 'Указана некорректная страница мастера!';
$string['lastmodifiedby'] = 'Последнее изменение';
$string['linkedfiledoesntexist'] = 'Связанный файл {$a} не существует';
$string['makechildof'] = 'Сделать подкатегорией «{$a}»';
$string['maketoplevelitem'] = 'Переместить на верхний уровень';
$string['matchgrades'] = 'Сопоставление оценок';
$string['matchgrades_help'] = 'Импортируемые оценки должны совпадать с одной допустимой оценкой из фиксированного списка - 100; 90; 80; 75; 70; 66.666; 60; 50; 40; 33.333; 30; 25; 20; 16.666; 14.2857; 12.5; 11.111; 10; 5; 0 (и такие же отрицательные значения). Если оценка не соответствует ни одному из вариантов в списке, то возможно два варианта действия:

* Если оценки нет в списке, выводить сообщение об ошибке - если вопрос содержит любую оценку, не перечисленную в списке, то выводится сообщение об ошибке и вопрос не импортируется.
* Если оценки нет в списке, выбирать ближайшую - если оценка не соответствует ни одному из значений в списке, то она заменяется на наиболее близкую из списка.';
$string['missingcourseorcmid'] = 'Для функции print_question необходимо указать courseid или cmid.';
$string['missingcourseorcmidtolink'] = 'Для функции get_question_edit_link указать courseid или cmid.';
$string['missingimportantcode'] = 'В типе вопроса отсутствует важный код: {$a}';
$string['missingoption'] = 'В вопросе типа «Вложенные ответы (cloze)» {$a} пропущены параметры.';
$string['modified'] = 'Последнее сохранение:';
$string['move'] = 'Переместить из {$a} и изменить ссылки';
$string['movecategory'] = 'Переместить категорию';
$string['movedquestionsandcategories'] = 'Переместить вопросы и их категории из {$a->oldplace} в {$a->newplace}.';
$string['movelinksonly'] = 'Просто поменять ссылки, не перемещая или копируя файлы';
$string['moveq'] = 'Переместить вопрос(ы)';
$string['moveqtoanothercontext'] = 'Переместить вопрос в другой контекст';
$string['movingcategory'] = 'Перемещение категории';
$string['movingcategoryandfiles'] = 'Вы действительно хотите переместить категорию «{$a->name}» и все дочерние категории в контекст «{$a->contextto}»? <br /> В области «{$a->fromareaname}» обнаружено файлов, связанных с вопросами - {$a->urlcount}. Вы хотите скопировать или переместить их в область «{$a->toareaname}»?';
$string['movingcategorynofiles'] = 'Вы действительно хотите переместить категорию «{$a->name}» и все дочерние категории в контекст «{$a->contextto}»?';
$string['movingquestions'] = 'Перемещение вопросов и всех файлов';
$string['movingquestionsandfiles'] = 'Вы действительно хотите переместить вопрос(ы) {$a->questions} в контекст <strong>«{$a->tocontext}»</strong>?<br /> В области «{$a->fromareaname}» обнаружено файлов, связанных с этим(и) вопросом(ами) - <strong>{$a->urlcount}</strong>. Вы хотите скопировать или переместить их в область «{$a->toareaname}»?';
$string['movingquestionsnofiles'] = 'Вы действительно хотите переместить вопрос(ы) {$a->questions} в контекст <strong>«{$a->tocontext}»</strong>?<br />В области «{$a->fromareaname}» нет файлов, связанных с этим(и) вопросом(ами).';
$string['needtochoosecat'] = 'Выберите категорию, в которую необходимо перенести этот вопрос или нажмите «Отмена».';
$string['nocate'] = 'Нет такой категории «{$a}»!';
$string['nopermissionadd'] = 'У Вас нет прав для добавления сюда вопросов.';
$string['nopermissionmove'] = 'У Вас нет права на перемещение  вопросов отсюда. Вы должны сохранить вопрос в этой категории, либо сохранить его как новый вопрос.';
$string['noprobs'] = 'В Вашей базе вопросов проблем не найдено';
$string['notenoughdatatoeditaquestion'] = 'Не указаны ни ID вопроса, ни ID категории и тип вопроса.';
$string['notenoughdatatomovequestions'] = 'Вы должны указать ID для вопросов, которые хотите переместить';
$string['notflagged'] = 'Не отмечено';
$string['novirtualquestiontype'] = 'Нет виртуального типа вопроса для для типа вопроса «{$a}»';
$string['parentcategory'] = 'Родительская категория';
$string['parentcategory_help'] = 'Родительская категория, в которой будет размещена новая категория. «Верхний уровень» означает, что категория не будет содержаться ни в какой другой категории. Контексты категорий выделены жирным шрифтом. К каждом контексте должна быть по меньшей мере одна категория.';
$string['parenthesisinproperclose'] = 'Круглая скобка перед ** не закрыта в {$a} **';
$string['parenthesisinproperstart'] = 'Круглая скобка перед ** не открыта в {$a} **';
$string['penaltyfactor'] = 'Штраф';
$string['penaltyfactor_help'] = 'Этот параметр определяет, какая часть набранных баллов должна вычитаться за каждый неправильный ответ на вопрос. Штрафы применяются, только если тест запущен в обучающем режиме.

Штраф должен быть числом в диапазоне от 0 до 1. Штраф = 1 означает, что студент должен ответить на данный вопрос с первого раза, чтобы получить за него баллы.
Штраф = 0 означает, что студент может отвечать на вопрос сколько захочет и при этом может получить максимальный балл.';
$string['permissionedit'] = 'Редактировать этот вопрос';
$string['permissionmove'] = 'Перемещать этот вопрос';
$string['permissionsaveasnew'] = 'Сохранять вопрос как новый';
$string['permissionto'] = 'У вас есть права:';
$string['published'] = 'доступно';
$string['qtypeveryshort'] = 'Тип';
$string['questionaffected'] = '<a href="{$a->qurl}">Вопрос «{$a->name}» ({$a->qtype})</a> находится в этой категории вопросов, но также используется в <a href="{$a->qurl}"> тесте «{$a->quizname}»</a> в курсе «{$a->coursename}».';
$string['questionbank'] = 'Банк вопросов';
$string['questioncategory'] = 'Категория вопроса';
$string['questioncatsfor'] = 'Категории вопросов для «{$a}»';
$string['questiondoesnotexist'] = 'Вопрос не существует';
$string['questionname'] = 'Название вопроса';
$string['questionsaveerror'] = 'При сохранении вопроса произошли ошибки - ({$a})';
$string['questionsmovedto'] = 'Всё еще использующиеся вопросы перемещены в «{$a}» в родительской категории курса.';
$string['questionsrescuedfrom'] = 'Вопросы, сохраненые из контекста «{$a}».';
$string['questionsrescuedfrominfo'] = 'Эти вопросы (некоторые из которых возможно скрыты) были сохранены при удалении контекста «{$a}», потому что они всё еще используются некоторыми тестами или другими элементами курсов.';
$string['questiontype'] = 'Тип вопроса';
$string['questionuse'] = 'Использовать вопрос в этом элементе курса';
$string['saveflags'] = 'Сохранить состояние отметок';
$string['selectacategory'] = 'Выберите категорию:';
$string['selectaqtypefordescription'] = 'Выберите тип вопроса, чтобы увидеть его описание.';
$string['selectquestionsforbulk'] = 'Выберите вопросы для массовых действий';
$string['shareincontext'] = 'Сделать общими в контексте «{$a}»';
$string['stoponerror'] = 'Остановиться при ошибке';
$string['stoponerror_help'] = 'Этот параметр определяет, следует ли прекратить процесс импорта при обнаружении ошибок в некоторых вопросах (в результате чего все вопросы не будут импортированы) или же следует пропустить все вопросы с ошибками и импортировать все вопросы без ошибок.';
$string['tofilecategory'] = 'Сохранять категорию в файле';
$string['tofilecontext'] = 'Сохранять контекст в файле';
$string['unknown'] = 'неизвестно';
$string['unknownquestiontype'] = 'Неизвестный тип вопроса: {$a}';
$string['unknowntolerance'] = 'Неизвестный тип отклонения {$a}';
$string['unpublished'] = 'недоступно';
$string['upgradeproblemcategoryloop'] = 'При обновлении категорий вопросов обнаружена проблема. В дереве категорий произошло зацикливание. Затронуты категории с ID {$a}.';
$string['upgradeproblemcouldnotupdatecategory'] = 'Не удалось обновить категорию вопросов «{$a->name}» ({$a->id}).';
$string['upgradeproblemunknowncategory'] = 'При обновлении категорий вопросов обнаружена проблема. Категория {$a->id} входит в родительскую категорию {$a->parent}, которой не существует. Измените родительскую категорию для устранения проблемы.';
$string['wrongprefix'] = 'Некорректный формат префикса названия {$a}';
$string['youmustselectaqtype'] = 'Вы должны выбрать тип вопроса.';
$string['yourfileshoulddownload'] = 'Загрузка экспортируемого файла вскоре должна начаться. Если этого не произошло, <a href="{$a}">нажмите сюда</a>.';

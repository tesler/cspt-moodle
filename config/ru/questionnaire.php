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
 * Strings for component 'questionnaire', language 'ru', branch 'MOODLE_20_STABLE'
 *
 * @package   questionnaire
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Действие';
$string['additionalinfo'] = 'Дополнительная информация';
$string['additionalinfo_help'] = 'Текст, который будет отображаться в верхней части первой страницы анкетного опроса. (Например, инструкции, справочная информация и т. п.)';
$string['addnewquestion'] = 'Добавление вопроса: {$a}';
$string['addselqtype'] = 'Добавить выбранный тип вопроса';
$string['alignment'] = 'Выравнивание переключателей';
$string['alignment_help'] = 'Выберите выравнивание кнопок: вертикально (по умолчанию) или горизонтально.';
$string['all'] = 'Все';
$string['alreadyfilled'] = 'Вы уже заполнили этот Анкетный опрос: {$a}. Спасибо!';
$string['anonymous'] = 'Анонимно';
$string['average'] = 'Среднее';
$string['averagerank'] = 'Средняя оценка';
$string['bodytext'] = 'Текст';
$string['boxesnbexact'] = ' равно {$a} шт.';
$string['boxesnbmax'] = ' максимум {$a} шт.';
$string['boxesnbmin'] = ' минимум {$a} шт.';
$string['boxesnbreq'] = 'Количество флажков (галочек) для этого вопроса -';
$string['by'] = 'от';
$string['checkallradiobuttons'] = 'Проверьте все переключатели - <strong>{$a}</strong>!';
$string['checkboxes'] = 'Флажки';
$string['checkboxes_help'] = 'Введите каждый вариант в отдельной строке, чтобы пользователи могли выбрать один или несколько ответов.';
$string['closed'] = 'Анкетный опрос был закрыт {$a}.';
$string['closedate'] = 'Использовать дату окончания';
$string['closedate_help'] = 'Здесь Вы можете определить дату окончания анкетного опроса. Установите флажок и выберите нужные дату и время.
Пользователи не смогут заполнить анкетный опрос после этой даты. Если она не будет выбрана, то опрос никогда не будет закрыт.';
$string['confalts'] = '- ИЛИ - <br />страница Подтверждения';
$string['confirmdelallresp'] = 'Вы действительно хотите удалить ВСЕ ответы в этом анкетном опросе?';
$string['confirmdelgroupresp'] = 'Вы уверены, что хотите удалить ВСЕ ответы группы «{$a}»?';
$string['confirmdelresp'] = 'Вы действительно хотите удалить ответ&nbsp;{$a}&nbsp;?';
$string['confpage'] = 'Текст заголовка';
$string['confpagedesc'] = 'Заголовок (жирным шрифтом) и основной текст на странице «Подтверждения» отображается после того, как пользователь завершает анкетный опрос. (URL, если он присутствует, имеет преимущество над текстом подтверждения.)';
$string['confpage_help'] = 'Заголовок (жирным шрифтом) и основной текст на странице подтверждения отображается после того, как пользователь завершает анкетный опрос. (URL, если он присутствует, имеет преимущество перед текстом подтверждения.) Если вы оставите это поле пустым, будет отображаться сообщение по умолчанию (Спасибо за заполнение анкетного опроса).';
$string['contentoptions'] = 'Параметры содержания';
$string['couldnotcreatenewsurvey'] = 'Не удалось создать новый опрос!';
$string['couldnotdelresp'] = 'Ответ удалить нельзя';
$string['createcontent'] = 'Определить содержание';
$string['createcontent_help'] = 'Выберите переключателем один из вариантов. По умолчанию - «Создать новый».';
$string['createnew'] = 'Создать новый';
$string['crossanalyze'] = 'Cross анализировать';
$string['crosstabulate'] = 'Cross плоский';
$string['crosstabulation'] = 'Cross табличный';
$string['date'] = 'Дата';
$string['dateformatting'] = 'Использовать формат день/месяц/год, например - 14-ое марта, 1945: &nbsp; <strong>14/3/1945</strong>';
$string['date_help'] = 'Используйте этот тип вопроса, если ожидаемый ответ - дата в корректном формате.';
$string['deleteallresponses'] = 'Удалить ВСЕ ответы';
$string['deletecurrentquestion'] = 'Удалить вопрос {$a}';
$string['deletedallgroupresp'] = 'Удалить ВСЕ ответы в группе {$a}';
$string['deletedallresp'] = 'ВСЕ ответы удалены';
$string['deletedresp'] = 'Ответ удален';
$string['deleteresp'] = 'Удалить этот ответ';
$string['deletingresp'] = 'Удаление ответа';
$string['displaymethod'] = 'Метод показа, не определенный для вопроса.';
$string['download'] = 'Загрузить';
$string['downloadtextformat'] = 'Загрузить в текстовом формате';
$string['downloadtextformat_help'] = 'Эта функция позволяет сохранить все ответы анкетного опроса в текстовый файл (CSV). Этот файл затем может быть импортирован в электронную таблицу (например, MS Excel или Open Office Calc) или в статистический пакет для дальнейшей обработки данных.';
$string['dropdown'] = 'Выпадающий список';
$string['dropdown_help'] = 'Нет реальных преимуществ в использовании выпадающего списка по сравнению с использованием переключателей. За исключением использования при длинных списках вариантов для экономии места на странице.';
$string['edit'] = 'Редактировать';
$string['editingquestionnaire'] = 'Редактирование Анкетного опроса - общая страница';
$string['editquestion'] = 'Редактирование вопроса {$a}';
$string['email'] = 'Адрес электронной почты';
$string['errnewname'] = 'К сожалению, это название уже используется. Выберите новое название.';
$string['errorcross'] = 'Ошибка поперечного анализа. Тип вопроса не действителен.';
$string['erroropening'] = 'Ошибка открытия анкетного опроса.';
$string['errortable'] = 'Системная ошибка - таблица недостоверна.';
$string['essaybox'] = 'Поле Эссе';
$string['field'] = 'Вопрос {$a}';
$string['fieldlength'] = 'Ширина поля ввода';
$string['fieldlength_help'] = 'Для типа вопроса «Текстовое поле» введите значения «Ширина поля ввода» и «Максимальная длина текста» для текста, который будет вводиться респондентом.
Значения по умолчанию — 20 символов для ширины поля ввода и 25 символов для максимальной длины вводимого текста.';
$string['grade'] = 'Оценка представления';
$string['headingtext'] = 'Текст заголовка';
$string['horizontal'] = 'Горизонтально';
$string['id'] = 'ID';
$string['includechoicecodes'] = 'Включить коды выбранного варианта';
$string['includechoicetext'] = 'Включить текст выбранного варианта';
$string['incorrectcourseid'] = 'ID курса ошибочен';
$string['incorrectmodule'] = 'ID модуля курса ошибочен';
$string['incorrectquestionnaire'] = 'Анкетный опрос ошибочен';
$string['invalidresponse'] = 'Определен недопустимый ответ';
$string['invalidresponserecord'] = 'Определена запись недопустимого ответа';
$string['invalidsurveyid'] = 'Недопустимый ID анкетного опроса';
$string['kindofratescale'] = 'Тип шкалы оценок';
$string['kindofratescale_help'] = 'См. ниже документацию Moodle';
$string['length'] = 'Длина';
$string['maxdigitsallowed'] = 'Разрешенный максимум цифр';
$string['maxforcedresponses'] = 'Принудительный максимум ответов';
$string['maxtextlength'] = 'Максимальная длина текста';
$string['minforcedresponses'] = 'Принудительный минимум ответов';
$string['minforcedresponses_help'] = 'Чтобы вынудить респондента отметить флажками (галочками) минимальное количество полей используйте параметр «Минимум», а «Максимум» — для максимального количества полей. Чтобы получить точное количество установленных флажков, задайте для «Минимум» и «Максимум» одно и то же значение. Если желательно только минимальное или максимальное значение, тогда оставляйте другой параметр в значении по умолчанию «0». Если Вы установите «Минимум» или «Максимум» в значение, отличное от «0» (значение по умолчанию), то респонденту будет показано предупреждающее сообщение, если он не выполнит Ваши требования.
Очевидно, Вы должны четко указать респонденту эти требования в общих инструкциях Анкетного опроса или в тексте соответствующих вопросов.';
$string['misconfigured'] = 'Неверный курс';
$string['missingquestion'] = 'Вы пропустили обязательный вопрос';
$string['missingquestions'] = 'Вы пропустили обязательные вопросы:';
$string['modulename'] = 'Анкетный опрос';
$string['modulenameplural'] = 'Анкетные опросы';
$string['move'] = 'Переместить этот вопрос';
$string['movedn'] = 'Переместить вопрос вниз';
$string['movehere'] = 'Переместить вопрос сюда';
$string['moveup'] = 'Переместить вопрос вверх';
$string['myresponses'] = 'Все Ваши ответы';
$string['myresponsetitle'] = 'Результаты Ваших ответов - {$a}';
$string['myresults'] = 'Мои результаты';
$string['name'] = 'Название';
$string['next'] = 'Далее';
$string['nextpage'] = 'Следующая страница';
$string['noanswer'] = 'Нет ответа';
$string['nodata'] = 'Данные не представлены';
$string['noduplicates'] = 'Без повторяющихся ответов';
$string['noneinuse'] = 'Текущее содержание не определено';
$string['nopublicsurveys'] = 'Нет общих анкетных опросов';
$string['noresponsedata'] = 'Нет ответов на этот вопрос.';
$string['noresponses'] = 'Нет ответов';
$string['normal'] = 'Обычный';
$string['notanumber'] = '<strong>{$a}</strong> - недопустимый формат числа';
$string['notapplicable'] = 'Н/О';
$string['notapplicablecolumn'] = 'Колонка Н/О';
$string['notavail'] = 'Этот анкетный опрос не готов! Попробуйте позже...';
$string['noteligible'] = 'Вы не можете заполнить этот анкетный опрос.';
$string['notemplatesurveys'] = 'Нет шаблона анкет';
$string['notopen'] = 'Этот анкетный опрос не будет открыт до {$a}';
$string['num'] = '№';
$string['numberfloat'] = 'Введенное Вами число <strong>{$a->number}</strong> было округлено с точностью <strong>{$a->precision}</strong> десятичных цифр.';
$string['numberofdecimaldigits'] = 'Количество десятичных цифр';
$string['numberscaleitems'] = 'Количество элементов шкалы';
$string['numberscaleitems_help'] = 'Количество элементов шкалы является «числом пунктов», используемых в Вашей шкале оценивания. Обычно используется значение 3 — 5. Значение по умолчанию: «5».';
$string['numeric'] = 'Числовой';
$string['numeric_help'] = 'Используйте этот тип вопроса, если ожидаемый ответ - число в корректном формате.';
$string['of'] = 'от';
$string['opendate'] = 'Использовать дату начала';
$string['opendate_help'] = 'Здесь Вы можете определить дату открытия анкетного опроса. Установите флажок и выберите желаемые дату и время.
Пользователи не смогут заполнить анкетный опрос до этой даты.
Если флажок не установлен, то опрос будет открыт немедленно.';
$string['option'] = 'Параметр {$a}';
$string['optionalname'] = 'Название вопроса';
$string['or'] = '- ИЛИ -';
$string['order_ascending'] = 'По возрастанию';
$string['order_default'] = 'Порядок по умолчанию';
$string['order_descending'] = 'По убыванию';
$string['orderresponses'] = 'Порядок ответов';
$string['osgood'] = 'Осгуд';
$string['other'] = 'Другое:';
$string['otherempty'] = 'Если Вы отметили этот вариант, Вы должны ввести некий текст в текстовое поле!';
$string['overviewnumresplog'] = 'ответы';
$string['overviewnumresplog1'] = 'ответ';
$string['overviewnumrespvw'] = 'ответы';
$string['overviewnumrespvw1'] = 'ответ';
$string['owner'] = 'Владелец';
$string['page'] = 'Страница';
$string['pageof'] = 'Страница {$a->page} из {$a->totpages}';
$string['pluginadministration'] = 'Управление анкетным опросом';
$string['pluginname'] = 'Анкетный опрос';
$string['possibleanswers'] = 'Возможные ответы';
$string['posteddata'] = 'Достигнутая страница с размещенными данными:';
$string['preview'] = 'Это - предварительный просмотр того, как этот анкетный опрос будет выглядеть. После просмотра щелкните кнопку <strong>Закрыть</strong> внизу этой страницы.';
$string['previewing'] = 'Предпросмотр Анкеты';
$string['preview_label'] = 'Предпросмотр';
$string['preview_questionnaire'] = '- Предпросмотр Анкеты';
$string['previous'] = 'Назад';
$string['previouspage'] = 'Предыдущая страница';
$string['print'] = 'Печатать с ответами';
$string['printblank'] = 'Печатать бланк анкеты';
$string['printblanktooltip'] = 'Открыть удобное для печати окно с пустым Анкетным опросом';
$string['printtooltip'] = 'Открыть удобное для печати окно с текущими ответами';
$string['private'] = 'Личный';
$string['public'] = 'Общий';
$string['qtype'] = 'Тип';
$string['qtypedaily'] = 'отвечать ежедневно';
$string['qtype_help'] = 'Выберите: пользователи будут иметь возможность ответить один раз, ежедневно, еженедельно, ежемесячно или неоднократно.';
$string['qtypemonthly'] = 'отвечать ежемесячно';
$string['qtypeonce'] = 'отвечать один раз';
$string['qtypeunlimited'] = 'отвечать многократно';
$string['qtypeweekly'] = 'отвечать еженедельно';
$string['questionnaireadministration'] = 'Управление анкетным опросом';
$string['questionnairecloses'] = 'Опрос закрывается';
$string['questionnaire:copysurveys'] = 'Копировать шаблоны и личные анкетные опросы';
$string['questionnaire:createpublic'] = 'Создавать общий анкетный опрос';
$string['questionnaire:createtemplates'] = 'Создавать шаблон анкетного опроса';
$string['questionnaire:deleteresponses'] = 'Удалять любые ответы';
$string['questionnaire:downloadresponses'] = 'Загружать ответы в CSV-файле';
$string['questionnaire:editquestions'] = 'Создавать и редактировать вопросы анкетного опроса';
$string['questionnaire:manage'] = 'Создавать и редактировать анкетные опросы';
$string['questionnaireopens'] = 'Опрос открывается';
$string['questionnaire:printblank'] = 'Печатать бланк опроса';
$string['questionnaire:readallresponseanytime'] = 'Просматривать все ответы в любое время';
$string['questionnaire:readallresponses'] = 'Просматривать сводку по ответам в соответствии с заданным временем доступности';
$string['questionnaire:readownresponses'] = 'Просматривать собственные ответы';
$string['questionnairereport'] = 'Отчет Анкетного опроса';
$string['questionnaire:submit'] = 'Заполнять анкетный опрос и сдавать ответы';
$string['questionnaire:view'] = 'Просматривать анкетный опрос';
$string['questionnaire:viewsingleresponse'] = 'Просматривать заполненные индивидуальные ответы';
$string['questionnum'] = 'Вопрос №';
$string['questions'] = 'Вопросы';
$string['questiontypes'] = 'Типы вопросов';
$string['questiontypes_help'] = 'См. ниже документацию Moodle';
$string['radiobuttons'] = 'Переключатель';
$string['radiobuttons_help'] = 'В этом типе вопроса респондент должен выбрать один из предлагаемых вариантов.';
$string['rank'] = 'Ранг';
$string['ratescale'] = 'Балл (шкала 1...5)';
$string['ratescale_help'] = 'См. ниже документацию Moodle';
$string['realm'] = 'Тип анкетного опроса';
$string['realm_help'] = 'Сейчас есть три типа анкетных опросов:
 * Личный - принадлежит только курсу, в котором он создан.
 * Шаблон - может быть скопирован и отредактирован.
 * Общий - может использоваться в других курсах.';
$string['redirecturl'] = 'URL-адрес, к которому пользователь переадресовывается после завершения этого анкетного опроса.';
$string['remove'] = 'Удалить';
$string['required'] = 'Обязательный ответ';
$string['required_help'] = 'Если Вы выберете «Да», то ответ на этот вопрос будет обязательным, то есть респондент не сможет сдать ответы на анкетный опрос, пока не ответит на этот вопрос.';
$string['requiredparameter'] = 'Отсутствует обязательный параметр.';
$string['reset'] = 'Сброс';
$string['respeligiblerepl'] = '(заменяется переопределенной ролью)';
$string['respondent'] = 'Респондент';
$string['respondenteligible'] = 'Приемлемые респонденты';
$string['respondenteligibleall'] = 'все';
$string['respondenteligible_help'] = 'Определите, кто может отвечать на опрос - только преподаватели или только студенты. Для ограничения доступа не забудьте назначить правильные роли на уровнях курса или элемента. Например, если опрос размещен на главной странице, предназначенной только для преподавателей, то Moodle должна различать, кто из пользователей - преподаватели.';
$string['respondenteligiblestudents'] = 'только студенты';
$string['respondenteligibleteachers'] = 'только преподаватели';
$string['respondents'] = 'Респонденты';
$string['respondenttype'] = 'Вид респондента';
$string['respondenttypeanonymous'] = 'анонимно';
$string['respondenttypefullname'] = 'полное имя';
$string['respondenttype_help'] = 'Вы можете показать полные имена пользователей в каждом ответе, путем выбора параметра «полное имя».
Вы можете скрыть пользователей из ответов, выбрав параметр «анонимно».';
$string['response'] = 'Ответ';
$string['responseoptions'] = 'Варианты ответа';
$string['responses'] = 'Ответа (ов)';
$string['responseview'] = 'Студенты могут видеть ВСЕ ответы';
$string['responseview_help'] = 'Вы можете определить, кто может видеть ответы всех респондентов в заполненных анкетных опросах (таблицы общей статистики).';
$string['responseviewstudentsalways'] = 'Всегда';
$string['responseviewstudentsnever'] = 'Никогда';
$string['responseviewstudentswhenanswered'] = 'После ответа на анкетный опрос';
$string['responseviewstudentswhenclosed'] = 'После того, как анкетный опрос закрыт';
$string['restrictedtoteacher'] = 'Эти функции могут редактировать только преподаватели!';
$string['resume'] = 'Сохранить/продолжить ответы';
$string['resume_help'] = 'Настройка этого параметра позволяет пользователям сохранить свои ответы на анкетный опрос перед его представлением. Пользователи могут оставить анкетный опрос незаконченным и вернуться к нему позже с сохраненными ответами.';
$string['resumesurvey'] = 'Возобновить Анкетный опрос';
$string['return'] = 'Возврат';
$string['save'] = 'Сохранить';
$string['saveasnew'] = 'Сохранить как новый вопрос';
$string['savedprogress'] = 'Ваши ответы были сохранены. Вы можете вернуться в любое время, чтобы закончить этот анкетный опрос. Чтобы сделать так, нажмите ниже кнопку {$a}. Вы можете быть вынуждены закончить анкетный опрос (в зависимости от Вашей учетной записи).';
$string['saveeditedquestion'] = 'Сохранить вопрос {$a}';
$string['savesettings'] = 'Сохранить настройки';
$string['section'] = 'Описание';
$string['sectionbreak'] = '----- Разрыв страницы -----';
$string['sectionbreak_help'] = '----- Разрыв страницы -----';
$string['sectiontext'] = 'Метка';
$string['sectiontext_help'] = 'Это не вопрос, а короткий текст, отображаемый перед группой вопросов.';
$string['selecttheme'] = 'Выберите тему (css) для использования в этой анкете.';
$string['sendemail'] = 'Отправить по электронной почте.';
$string['sendemail_help'] = 'Посылает копию каждого представленного опроса по указанному адресу или адресам.
Вы можете предусмотреть более одного адреса, разделяя их запятыми.
Оставьте пустым, если письма не требуются.';
$string['settings'] = 'Настройки';
$string['settingssaved'] = 'Настройки сохранены';
$string['strfdate'] = '%d/%m/%Y';
$string['strfdateformatcsv'] = 'd/m/Y H:i:s';
$string['submitoptions'] = 'Параметры завершения';
$string['submitsurvey'] = 'Сдать ответы на опрос';
$string['submitted'] = 'Сдано:';
$string['subtitle'] = 'Подзаголовок';
$string['subtitle_help'] = 'Подзаголовок этого анкетного опроса. Отображается только на первой странице ниже названия.';
$string['summary'] = 'Сводка';
$string['surveynotexists'] = 'анкетный опрос не существует.';
$string['surveyowner'] = 'Вы должны быть владельцем анкетного опроса, чтобы выполнить это действие.';
$string['surveyresponse'] = 'Ответ для анкетного опроса';
$string['template'] = 'Шаблон';
$string['templatenotviewable'] = 'Шаблон анкетного опроса не отображается в курсе.';
$string['text'] = 'Текст вопроса';
$string['textareacolumns'] = 'Ширина текстового поля';
$string['textareacolumns_help'] = 'Этот вопрос выглядит в виде пустого текстового поля с числом «x» столбцов в текстовом поле («ширина» поля) и числом «y» строк текстового поля («высота» поля).
Если Вы установите и для «x», и для «y» значения по умолчанию ( «0» ), то HTML-редактор будет отображен со стандартной высотой и шириной (если редактор выбран в профиле пользователя).';
$string['textarearows'] = 'Строки текстового поля';
$string['textbox'] = 'Текстовое поле';
$string['textbox_help'] = 'Для вопроса типа «Текстовое поле» введите высоту поля и максимальную длину текста, который может быть введен при ответе. Значения по умолчанию: 20 символов — высота поля и 25 символов — максимальная длина вводимого текста.';
$string['textdownloadoptions'] = 'Параметры для загрузки текста (CSV)';
$string['thank_head'] = 'Спасибо за завершение этого Анкетного опроса.';
$string['theme'] = 'Тема';
$string['thismonth'] = 'этот месяц';
$string['thisweek'] = 'эта неделя';
$string['title'] = 'Заголовок';
$string['title_help'] = 'Заголовок этого анкетного опроса, который отображается вверху каждой страницы. По умолчанию Заголовком является Название анкетного опроса, но при желании Вы можете его отредактировать.';
$string['today'] = 'сегодня';
$string['total'] = 'Всего';
$string['type'] = 'Тип вопроса';
$string['undefinedquestiontype'] = 'Неопределенный тип вопроса!';
$string['unknown'] = 'Неизвестно';
$string['unknownaction'] = 'Определено неизвестное действие анкетного опроса ...';
$string['url'] = 'URL-адрес';
$string['url_help'] = 'URL-адрес, к которому пользователь переадресовывается после завершения этого анкетного опроса.';
$string['usepublic'] = 'Использовать общий';
$string['usetemplate'] = 'Копировать существующий';
$string['vertical'] = 'Вертикально';
$string['view'] = 'Просмотр';
$string['viewallresponses'] = 'Просмотр всех ответов';
$string['viewallresponses_help'] = 'Если в анкетном опросе задан **Групповой режим**: *Доступные группы* или *Отдельные группы* и текущий пользователь имеет право доступа ко всем группам - *moodle/site:accessallgroups* (в текущем контексте), и группы были заданы в этом курсе, тогда пользователь имеет доступ к выпадающему списку групп. Этот выпадающий список позволяет пользователю "фильтровать" ответы анкетного опроса по группам. Если задан **Групповой режим**: *Отдельные группы*, тогда пользователи, не имеющие права доступа ко всем группам (обычно студенты или нередактирующие преподаватели и др.) будут в состоянии просмотреть ответы только групп(ы), к которым они принадлежат.';
$string['viewbyresponse'] = 'Просмотр по одному ответу';
$string['viewresponses'] = 'Все ответы: ответов - {$a}';
$string['viewyourresponses'] = 'Ваши ответы: ответов - {$a}';
$string['warning'] = 'Внимание, замечена ошибка.';
$string['wrongdateformat'] = 'Введенная дата: <strong>{$a}</strong> не соответствует формату, указанному в примере.';
$string['wrongdaterange'] = 'ОШИБКА! Год должен быть установлен в диапазоне 1902 - 2037.';
$string['wrongformat'] = 'Есть какая-то ошибка в вопросе:&nbsp;';
$string['wrongformats'] = 'Есть какие-то ошибки в вопросах:&nbsp;';
$string['yesno'] = 'Да/Нет';
$string['yesno_help'] = 'Простой вопрос Да/Нет';

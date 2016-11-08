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
 * Strings for component 'scorm', language 'ru', branch 'MOODLE_20_STABLE'
 *
 * @package   scorm
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = 'Активация';
$string['activityloading'] = 'Вы будете автоматически перенаправлены на элемент курса в';
$string['activitypleasewait'] = 'Загружается элемент курса, пожалуйста, подождите...';
$string['advanced'] = 'Параметры';
$string['allowapidebug'] = 'Активировать отладку и трассировку API  (устанавливается захват маски с apidebugmask)';
$string['allowtypeexternal'] = 'Разрешить внешний тип пакета';
$string['allowtypeimsrepository'] = 'Разрешить IMS пакеты';
$string['allowtypelocalsync'] = 'Разрешить загруженный тип пакета';
$string['apidebugmask'] = 'Отладка API с захватом маски - используйте простое регулярное выражение  <username>:<activityname>. Например: admin:.* отладка возможна только для пользователя-администратора.';
$string['areacontent'] = 'Файлы содержимого';
$string['areapackage'] = 'Файл пакета';
$string['asset'] = 'Элемент';
$string['assetlaunched'] = 'Элемент - Просмотрен';
$string['attempt'] = 'Попытка';
$string['attempt1'] = '1 попытка';
$string['attempts'] = 'Попытки';
$string['attemptsx'] = '{$a} попыток';
$string['attr_error'] = 'Плохое значение атрибута ({$a->attr}) в теге {$a->tag}.';
$string['autocontinue'] = 'Автопродолжение';
$string['autocontinuedesc'] = 'Данный параметр позволяет установить по умолчанию режим автоматического продолжения для элемента курса';
$string['autocontinue_help'] = 'Если параметр включен, то последующие учебные объекты будут запускаться автоматически, в противном случае потребуется нажимать кнопку «Продолжить».';
$string['averageattempt'] = 'Среднее попыток';
$string['badmanifest'] = 'Какие-то ошибки манифеста: см. журнала ошибок';
$string['badpackage'] = 'Указанный пакет/манифест не является допустимым. Проверьте его и повторите попытку.';
$string['browse'] = 'Предпросмотр';
$string['browsed'] = 'Найден';
$string['browsemode'] = 'Режим предпросмотра';
$string['browserepository'] = 'Посмотреть  репозиторий';
$string['cannotfindsco'] = 'Не удалось найти SCO (Shareable Content Object - Разделяемый объект содержимого)';
$string['chooseapacket'] = 'Выберите или модернизируйте SCORM пакет';
$string['completed'] = 'Завершено';
$string['confirmloosetracks'] = 'ВНИМАНИЕ: Вероятно, пакет был изменен. Если структура пакета изменилась, то некоторые попытки пользователей дорожек могли быть потеряны при обновлении.';
$string['contents'] = 'Содержание';
$string['coursepacket'] = 'Пакет курса';
$string['coursestruct'] = 'Структура курса';
$string['currentwindow'] = 'В текущем окне
';
$string['datadir'] = 'Ошибка файловой системы: Невозможно создать директорию для хранения данных курса';
$string['deleteallattempts'] = 'Удалить все попытки';
$string['deleteattemptcheck'] = 'Вы абсолютно уверены, что хотите полностью удалить эти попытки?';
$string['details'] = 'Подробный отчет';
$string['directories'] = 'Отображать панель ссылок';
$string['display'] = 'Отображать контент';
$string['displayattemptstatus'] = 'Отображать состояние попытки';
$string['displayattemptstatus_help'] = 'При включенном параметре баллы и оценки за попытки отображаются на странице структуры SCORM.';
$string['displaycoursestructure'] = 'Отображать структуру курса на главной странице';
$string['displaycoursestructure_help'] = 'При включенном параметре оглавление отображается на странице структуры SCORM.';
$string['displaydesc'] = 'Данный параметр устанавливает по умолчанию режим показа пакета SCORM';
$string['domxml'] = 'Внешняя библиотека DOMXML';
$string['duedate'] = 'Срок выполнения';
$string['element'] = 'Элемент';
$string['enter'] = 'Войти';
$string['entercourse'] = 'Вход в SCORM курс';
$string['errorlogs'] = 'Журнал ошибок';
$string['everyday'] = 'Каждый день';
$string['everytime'] = 'При каждом использовании';
$string['exceededmaxattempts'] = 'Вы достигли максимального количества попыток.';
$string['exit'] = 'Выйти из курса';
$string['exitactivity'] = 'Перейти на главную страницу курса';
$string['expired'] = 'Извините, данный элемент курса закрыт в {$a} и уже не доступен';
$string['external'] = 'Время обновления внешних пакетов';
$string['failed'] = 'Неудачно';
$string['finishscorm'] = 'Если Вы закончили просмотр этого ресурса, {$a}';
$string['finishscormlinkname'] = 'щелкните здесь, чтобы вернуться на страницу курса';
$string['firstaccess'] = 'Первый раз';
$string['firstattempt'] = 'Первая попытка';
$string['forcecompleted'] = 'Принудительное завершение
';
$string['forcecompleteddesc'] = 'Этот параметр задает значение по умолчанию для настройки принудительного завершения';
$string['forcecompleted_help'] = 'Если параметр включен, то текущей попытке принудительно назначается статус "завершено". Этот параметр применим только к пакетам SCORM 1.2. Это полезно, если пакет SCORM не обрабатывает правильную попытку при обзоре или режиме просмотра или же неправильно определяет состояние завершения.';
$string['forcejavascript'] = 'Заставить пользователей включить JavaScript';
$string['forcejavascriptmessage'] = 'Для просмотра этого объекта  необходимо использование JavaScript. Пожалуйста, включите JavaScript в своем браузере и попробуйте еще раз.';
$string['forcenewattempt'] = 'Всегда новая попытка';
$string['forcenewattempt_help'] = 'Если параметр включен, то каждый доступ к пакету SCORM будет считаться новой попыткой.';
$string['found'] = 'Манифест найден';
$string['fullscreen'] = 'Во весь экран';
$string['general'] = 'Основные данные';
$string['gradeaverage'] = 'Средняя оценка';
$string['gradeforattempt'] = 'Оценка за попытку';
$string['gradehighest'] = 'Высшая оценка';
$string['grademethod'] = 'Метод оценивания';
$string['grademethoddesc'] = 'Данный параметр устанавливает используемый по умолчанию метод оценивания для элемента курса';
$string['grademethod_help'] = 'Метод оценивания задает, как определяется оценка отдельной попытки.

Есть 4 метода оценивания:

* Объекты обучения - количество завершенных/пройденных объектов обучения
* Лучшая оценка - высший балл из полученных во всех пройденных учебных объектах
* Средняя оценка - среднее всех баллов * Суммарная оценка - сумма всех баллов.';
$string['gradereported'] = 'Оценка передана';
$string['gradescoes'] = 'Обучающие объекты';
$string['gradesum'] = 'Суммарная оценка';
$string['height'] = 'Высота';
$string['hidden'] = 'Скрыть';
$string['hidebrowse'] = 'Отключить режим предпросмотра';
$string['hidebrowse_help'] = '<h2>Скрыть кнопку «Предпросмотр» </h2>

<p> Если эта опция будет установлена в «Да», то кнопка «Предпросмотр» на странице Пакета SCORM/AICC будет скрыта.</p>

<p>По умолчанию ученик может выбрать способ предварительного просмотра результата, или старается выполнить попытку обычным способом. </p>

<p> Когда Объект обучения завершен способом предварительного просмотра, это обозначается иконкой <img src="<?php echo $CFG->wwwroot.\'/mod/scorm/pix/browsed.gif\' ?>" alt="<?php print_string(\'browsed\',\'scorm\') ?>" title="<?php print_string(\'browsed\',\'scorm\') ?>" />.</p>';
$string['hideexit'] = 'Скрыть ссылку выхода';
$string['hidenav'] = 'Скрыть кнопки навигации';
$string['hidenavdesc'] = 'Этот параметр устанавливает, будут ли кнопки навигации отображаться по умолчанию';
$string['hidereview'] = 'Скрыть кнопку предпросмотра';
$string['hidetoc'] = 'Показать оглавление';
$string['hidetoc_help'] = 'Эта настройка определяет как оглавление отображается в плеере SCORM.';
$string['highestattempt'] = 'Лучшая попытка';
$string['identifier'] = 'Идентификатор вопроса';
$string['incomplete'] = 'Не завершено';
$string['info'] = 'Введение';
$string['interactions'] = 'Взаимодействие';
$string['invalidactivity'] = 'Элемент курса типа SCORM некорректен';
$string['last'] = 'Последний раз работал';
$string['lastaccess'] = 'Последний доступ';
$string['lastattempt'] = 'Последняя попытка';
$string['lastattemptlock'] = 'Блокировка после последней попытки';
$string['lastattemptlock_help'] = 'Если параметр включен, то студент не может запустить проигрыватель SCORM после израсходования им всех разрешенных попыток.';
$string['location'] = 'Отображать панель навигации';
$string['max'] = 'Максимальный балл';
$string['maximumattempts'] = 'Количество попыток';
$string['maximumattemptsdesc'] = 'Данный параметр устанавливает максимальное количество попыток по умолчанию для элемента курса';
$string['maximumattempts_help'] = '<h2>Количество попыток</h2>

<p> Этим определяется количество попыток, разрешенных пользователям. <br /> Работает только с SCORM1.2 и пакетами AICC. SCORM2004 сам определяет максимальное количество попыток. </p>';
$string['maximumgradedesc'] = 'Данный параметр устанавливает максимальную оценку по умолчанию для элемента курса';
$string['menubar'] = 'Отображать панель меню';
$string['min'] = 'Минимальный балл';
$string['missing_attribute'] = 'Атрибут {$a->attr} отсутствует в теге {$a->tag}';
$string['missing_tag'] = 'Отсутствует тег {$a->tag}';
$string['mode'] = 'Режим';
$string['modulename'] = 'Пакет SCORM';
$string['modulename_help'] = 'SCORM и AICC - набор спецификаций, которые включают возможности взаимодействия, доступности и многократного использования сетевого контента для изучения. Модуль SCORM/AICC позволяет включить в курс пакеты SCORM/AICC.';
$string['modulenameplural'] = 'Пакеты SCORM';
$string['navigation'] = 'Навигация';
$string['newattempt'] = 'Начать новую попытку';
$string['next'] = 'Продолжить';
$string['noactivity'] = 'Ничего не произошло';
$string['noattemptsallowed'] = 'Количество попыток';
$string['noattemptsmade'] = 'Выполнено попыток';
$string['no_attributes'] = 'Тег {$a->tag} должны иметь атрибуты';
$string['no_children'] = 'Тег {$a->tag} должен иметь потомка';
$string['nolimit'] = 'Не ограничено';
$string['nomanifest'] = 'Манифест не найден';
$string['noreports'] = 'Нет отчетов для показа';
$string['normal'] = 'Обычный';
$string['noscriptnoscorm'] = 'Ваш браузер не поддерживает JavaScript или JavaScript отключен. Невозможно воспроизвести пакет SCORM или корректно сохранить данные.';
$string['notattempted'] = 'Не приступал';
$string['not_corr_type'] = 'Несоответствие типа для тега {$a->tag}';
$string['notopenyet'] = 'Извините, данный элемент курса не доступен до {$a}';
$string['objectives'] = 'Объекты';
$string['optallstudents'] = 'все пользователи';
$string['optattemptsonly'] = 'только пользователи с попытками';
$string['options'] = 'Параметры (мешают некоторым браузером)';
$string['optnoattemptsonly'] = 'только пользователи без попыток';
$string['othersettings'] = 'Дополнительные настройки';
$string['othertracks'] = 'Дополнительные данные';
$string['package'] = 'Файл с пакетом';
$string['packagedir'] = 'Ошибка файловой системы: невозможно создать директорию для пакета';
$string['packagefile'] = 'Нет указанного файла пакета';
$string['package_help'] = 'Пакет - это отдельный файл с расширением <b>zip</b> (или <b>pif</b>), содержащий файлы курса, поддерживающие AICC или SCORM.';
$string['packageurl'] = 'URL';
$string['packageurl_help'] = 'Этот параметр позволяет задать адрес (URL) пакета SCORM вместо выбора загрузки файла стандартным способом.';
$string['pagesize'] = 'Кол-во на странице';
$string['passed'] = 'Выполнено успешно';
$string['php5'] = 'PHP 5 (собственная библиотека DOMXML)';
$string['pluginadministration'] = 'Управление SCORM/AICC';
$string['pluginname'] = 'Пакет SCORM';
$string['popup'] = 'В новом окне';
$string['popupmenu'] = 'В выпадающем меню';
$string['popupopen'] = 'Открыть пакет в новом окне';
$string['position_error'] = 'Тег {$a->tag} не может быть дочерним для тега {$a->parent}';
$string['preferencespage'] = 'Настройки';
$string['preferencesuser'] = 'Настройки отчета';
$string['prev'] = 'Предыдущий';
$string['raw'] = 'Балл';
$string['regular'] = 'Регулярный манифест';
$string['report'] = 'Отчет';
$string['reportcountallattempts'] = 'Попыток - {$a->nbattempts} для пользователей - {$a->nbusers}, из результатов - {$a->nbresults}';
$string['reportcountattempts'] = 'результатов - {$a->nbresults} (пользователей - {$a->nbusers})
';
$string['resizable'] = 'Разрешить изменение размеров окна';
$string['result'] = 'Результат';
$string['results'] = 'Результаты';
$string['review'] = 'Обзор';
$string['reviewmode'] = 'Режим просмотра';
$string['scoes'] = 'Обучающие объекты';
$string['score'] = 'Балл';
$string['scormclose'] = 'До';
$string['scormcourse'] = 'Учебный курс';
$string['scorm:deleteresponses'] = 'Удалить попытки';
$string['scormloggingoff'] = 'Выключить протоколирование API';
$string['scormloggingon'] = 'Включить протоколирование AP';
$string['scormopen'] = 'Открыть';
$string['scormresponsedeleted'] = 'Удаленные попытки пользователя';
$string['scorm:savetrack'] = 'Сохранять прохождение';
$string['scorm:skipview'] = 'Пропускать обзор';
$string['scormtype'] = 'Тип';
$string['scormtype_help'] = 'Этот параметр определяет как пакет включен в курс. Существует 4 варианта:

* Загружаемый пакет - Включить пакет SCORM, который будет выбираться через средство выбора файла
* Манифест внешнего SCORM - Включить указанный URL-адрес файла imsmanifest.xml. Отметьте: если у URL-адреса доменное имя отличается от Вашего сайта, то следующий вариант "Скачиваемый пакет" является лучшим, иначе оценки не будут сохранены.
* Скачиваемый пакет - Включить заданный URL-адрес пакета. Пакет будет разархивирован и сохранен локально; он будет обновляться при обновлении внешнего пакета SCORM.
* Хранилище локального контента IMS - Включить пакет, который будет выбираться из хранилища IMS.';
$string['scorm:viewreport'] = 'Просматривать отчеты';
$string['scorm:viewscores'] = 'Просматривать оценки';
$string['scrollbars'] = 'Разрешить прокручивание окна';
$string['selectall'] = 'Выбрать все';
$string['selectnone'] = 'Отменить все';
$string['show'] = 'Показать';
$string['sided'] = 'В стороне';
$string['skipview'] = 'Учащийся пропускает страницу со структурой контента';
$string['skipviewdesc'] = 'Этот параметр устанавливает значение по умолчанию, когда для страницы пропускается структура содержимого';
$string['skipview_help'] = '<h2>Пропуск учеником страницы структуры содержимого </h2>

<p> Если вы добавляете пакет только с одним Объектом обучения, вы можете выбрать автоматический пропуск страницы структуры, когда пользователи выбирают SCORM на странице курса. </p>

<p>Вы можете выбрать:</p>

<ul>
       <li><strong>Никогда</strong> не пропускать страницу структуры содержимого.</li>
       <li><strong>Первый раз</strong> пропустить страницу структуры только в первый раз.</li>
       <li><strong>Всегда</strong> пропускать страницу структуры.</li>
   </ul>';
$string['slashargs'] = 'ВНИМАНИЕ: на этом сайте отключено использование «slash arguments» и объекты могут вести себя не так, как ожидается.';
$string['stagesize'] = 'Размер области контента';
$string['stagesize_help'] = '<h2>Размер</h2>
<p> Эти два параметра настройки Объектов обучения определяют высоту и ширину фрейма/окна. </p>';
$string['started'] = 'Приступил';
$string['status'] = 'Статус';
$string['statusbar'] = 'Показать строку состояния';
$string['student_response'] = 'Ответ';
$string['suspended'] = 'Приостановлено';
$string['syntax'] = 'Синтаксическая ошибка';
$string['tag_error'] = 'Неизвестный тег ({$a->tag}) со следующим содержанием: {$a->value}';
$string['time'] = 'Время';
$string['timerestrict'] = 'Ограничить период отправки ответа';
$string['title'] = 'Название';
$string['toc'] = 'Оглавление';
$string['toolbar'] = 'Отображать панель управления';
$string['too_many_attributes'] = 'Тег {$a->tag} имеет слишком много атрибутов';
$string['too_many_children'] = 'Тег {$a->tag} имеет слишком много потомков';
$string['totaltime'] = 'Время';
$string['trackingloose'] = 'Внимание: Данные прослеживания этого SCORM пакета будут потеряны!';
$string['type'] = 'Тип';
$string['typeexternal'] = 'Манифест внешнего SCORMа';
$string['typelocal'] = 'Загруженный пакет';
$string['typelocalsync'] = 'Скачиваемый пакет';
$string['unziperror'] = 'Ошибка при распаковке пакета';
$string['updatefreq'] = 'Частота автообновления';
$string['updatefreqdesc'] = 'Данный параметр устанавливает частоту автоматического обновления по умолчанию для элемента курса';
$string['validateascorm'] = 'Верный SCORM пакет';
$string['validation'] = 'Верный результат';
$string['validationtype'] = 'Желательно установить библиотеку DOMXML, используемую для проверки манифеста SCORM. Если не уверены - оставьте выбранный вариант.';
$string['value'] = 'Значение';
$string['versionwarning'] = 'Манифест версии старше чем 1.3, предупреждение в теге {$a->tag}';
$string['viewallreports'] = 'Просмотр отчетов для {$a} попыток';
$string['viewalluserreports'] = 'Просмотр отчетов для {$a} пользователей';
$string['whatgrade'] = 'Оценивание попыток';
$string['whatgrade_help'] = '<h2>Оценка попыток</h2>

<p> Когда вы разрешаете пользователям многократные попытки, вы можете выбрать, как использовать результаты попыток в журнале оценок. </p>';
$string['width'] = 'Ширина';
$string['window'] = 'Окно';

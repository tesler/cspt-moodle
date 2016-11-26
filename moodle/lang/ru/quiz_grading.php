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
 * Strings for component 'quiz_grading', language 'ru', branch 'MOODLE_20_STABLE'
 *
 * @package   quiz_grading
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotloadquestioninfo'] = 'Невозможно загрузить специфическую информацию о типе вопроса ';
$string['essayonly'] = 'Следующие вопросы требуют оценивания вручную';
$string['gradeall'] = 'Оценить все попытки: {$a}';
$string['graded'] = '(оценено)';
$string['gradenextungraded'] = 'Оценить следующие {$a} неоцененых попыток';
$string['gradeungraded'] = 'Оценить все {$a} неоцененных попыток';
$string['grading'] = 'Оценивание вручную';
$string['gradingall'] = 'Все попытки для этого вопроса: {$a}.';
$string['gradingattempt'] = 'Попытка номер {$a->attempt} студента {$a->fullname}.';
$string['gradingnextungraded'] = 'Следующие {$a} неоцененных попыток';
$string['gradingnotallowed'] = 'У вас нет прав вручную оценивать ответы этого теста';
$string['gradingreport'] = 'Отчет об оцененных вручную';
$string['gradingungraded'] = '{$a} неоцененных попыток';
$string['gradinguser'] = 'Попытки для {$a}';
$string['invalidattemptid'] = 'Нет попытки с таким ID';
$string['invalidquestionid'] = 'Оцениваемый вопрос с id {$a} не найден';
$string['questiontitle'] = 'Вопрос {$a->number} : «{$a->name}» ({$a->openspan}{$a->gradedattempts}{$a->closespan} из {$a->totalattempts} попыток {$a->openspan}оценено{$a->closespan}).';

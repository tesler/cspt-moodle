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
 * Strings for component 'auth_email', language 'ru', branch 'MOODLE_20_STABLE'
 *
 * @package   auth_email
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_changingemailaddress'] = 'Вы запросили изменение адреса электронной почты, с {$a->oldemail} на {$a->newemail}. По соображениям безопасности вам выслано сообщение по новому адресу электронной почты, чтобы удостовериться, что этот адрес принадлежит вам. Новый адрес заработает, как только вы пройдете по ссылке, отправленной вам в этом сообщении.';
$string['auth_emailchangecancel'] = 'Отменить изменение адреса электронной почты';
$string['auth_emailchangepending'] = 'Изменение еще не принято. Откройте ссылку, отправленную вам по адресу {$a->preference_newemail}.';
$string['auth_emaildescription'] = 'Подтверждение с помощью электронной почты - используемый по умолчанию метод аутентификации. При регистрации пользователя на указанный адрес электронной почты отправляется письмо с просьбой о подтверждении регистрации. Письмо содержит случайно созданную (безопасную) ссылку на страницу, где пользователь может подтвердить учетную запись. В дальнейшем при входе в систему сверяются имя пользователя и пароль с их значениями в базе данных.';
$string['auth_emailnoemail'] = 'Отправить вам письмо не удалось!';
$string['auth_emailnoinsert'] = 'Невозможно добавить Вашу запись в базу данных!';
$string['auth_emailnowexists'] = 'Ваш запрос на установку адреса электронной почты для своего профиля отклонен, так как этот адрес уже назначен для другого профиля. Попробуйте установить другой адрес.';
$string['auth_emailrecaptcha'] = 'Добавляет элемент для визуального / звукового подтверждения на страницу самостоятельной регистрации пользователей с использованием электронной почты. Это защищает ваш сайт от спамеров. Более подробную информацию см. на http://www.google.com/recaptcha/learnmore. <br /> <em>Требуется расширение PHP Curl.</em>';
$string['auth_emailrecaptcha_key'] = 'Включить reCAPTCHA';
$string['auth_emailsettings'] = 'Настройки';
$string['auth_emailupdatemessage'] = 'Уважаемый пользователь {$a->fullname}!

Вы запросили изменение адреса электронной почты для своей учетной записи на сайте {$a->site}. Чтобы подтвердить это изменение, пройдите по следующей ссылке:

{$a->url}';
$string['auth_emailupdatesuccess'] = 'Электронный адрес пользователя <em>{$a->fullname}</em> успешно изменен на <em>{$a->email}</em>.';
$string['auth_emailupdatetitle'] = 'Подтверждение изменения адреса электронной почты на сайте {$a->site}';
$string['auth_invalidnewemailkey'] = 'Ошибка: пытаясь подтвердить изменение адреса электронной почты, вы допустили ошибку при копировании ссылки, которую мы направили вам по электронной почте. Пожалуйста, скопируйте адрес и повторите попытку.';
$string['auth_outofnewemailupdateattempts'] = 'Вы исчерпали допустимое количество попыток для изменения своего адреса электронной почты. Ваш запрос отклонен.';
$string['pluginname'] = 'Самостоятельная регистрация по электронной почте';

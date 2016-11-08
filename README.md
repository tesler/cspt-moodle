# cspt-moodle
Курсовой проект по предмету Технология программирования кибернетических систем (Cybernetic Systems Programming Technology)

# Необходимое ПО
* [VirtualBox](https://www.virtualbox.org/wiki/Downloads)
* [vagrant](https://www.vagrantup.com/downloads.html)

# Установка
* Сделать `fork` репозитория в свой аккаунт;
* Сделать `git clone` к себе на машину;
* Установить VirtualBox и vagrant;
* В консоли запусить команду
```bash
vagrant plugin install vagrant-hostsupdater
```
* `vagrant up` в директории с проектом.

# Работа
* После запуска vagrant - moodle станет доступен по адресу   
    http://cspt-moodle.dev
* Конфигурация сервера:
```
Ubuntu 16.04
PHP 5.6
MariaDB 10.1 (MySQL) (username/password: root/root)
Moodle 3.1 (db: moodle/moodle, admin: admin/test)
```

# Конфигурация
* 

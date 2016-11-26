#!/bin/bash

export DEBIAN_FRONTEND=noninteractive

MYSQL_ROOT_PASSWORD=root
MOODLE_DATABASE_NAME=moodle
MOODLE_DATABASE_USERNAME=moodle
MOODLE_DATABASE_PASSWORD=moodle

MOODLE_ADMIN_USERNAME=admin
MOODLE_ADMIN_PASSWORD=test
MOODLE_URL=http://cspt-moodle.dev

function mysql_sec_install {
    expect -f - <<-EOF
        set timeout 10
        spawn mysql_secure_installation
        expect "Enter current password for root (enter for none):"
        send -- "\r"
        expect "Set root password?"
        send -- "y\r"
        expect "New password:"
        send -- "${MYSQL_ROOT_PASSWORD}\r"
        expect "Re-enter new password:"
        send -- "${MYSQL_ROOT_PASSWORD}\r"
        expect "Remove anonymous users?"
        send -- "y\r"
        expect "Disallow root login remotely?"
        send -- "y\r"
        expect "Remove test database and access to it?"
        send -- "y\r"
        expect "Reload privilege tables now?"
        send -- "y\r"
        expect eof
EOF
}

function create_moodle_base {
    mysql -uroot -p${MYSQL_ROOT_PASSWORD} -e \
        "CREATE DATABASE ${MOODLE_DATABASE_NAME} /*\!40100 DEFAULT CHARACTER SET utf8 */;"
    mysql -uroot -p${MYSQL_ROOT_PASSWORD} -e \
        "CREATE USER ${MOODLE_DATABASE_USERNAME}@localhost IDENTIFIED BY '${MOODLE_DATABASE_PASSWORD}';"
    mysql -uroot -p${MYSQL_ROOT_PASSWORD} -e \
        "GRANT ALL PRIVILEGES ON ${MOODLE_DATABASE_NAME}.* TO '${MOODLE_DATABASE_USERNAME}'@'localhost';"
    mysql -uroot -p${MYSQL_ROOT_PASSWORD} -e \
        "FLUSH PRIVILEGES;"
}

echo 'PROVISION STARTED'

apt-get -y update
apt-get -y install software-properties-common expect

if ! which nginx > /dev/null 2>&1; then
    echo 'Installing Nginx'

    wget -qO - https://nginx.org/keys/nginx_signing.key | sudo apt-key add -
    
    cp /var/www/config/nginx.list /etc/apt/sources.list.d/
    apt-get -y update
    apt-get -y install nginx

    echo 'Configuring Nginx'
    cp /var/www/config/moodle-nginx /etc/nginx/conf.d/default.conf
fi

if ! which mysql > /dev/null 2>&1; then
    echo 'Installing MariaDB(MySQL)'

    cp /var/www/config/mariadb.list /etc/apt/sources.list.d/
    sudo apt-key adv --recv-keys --keyserver hkp://keyserver.ubuntu.com:80 0xF1656F24C74CD1D8
    apt-get -y update
    apt-get -y install mariadb-server

    echo 'Configuring MariaDB'
    sed -i 's/# slaves.*/binlog_format\t\t= MIXED\n&/' /etc/mysql/my.cnf

    mysql_sec_install

    service mysql stop
    service mysql start

    echo 'Setting up Moodle database/user'
    create_moodle_base
fi

if ! which php > /dev/null 2>&1; then
    echo 'Installing PHP'

    add-apt-repository -y ppa:ondrej/php
    apt-get -y update
    apt-get -y install php5.6 \
        php5.6-fpm \
        graphviz \
        aspell \
        php5.6-pspell \
        php5.6-curl \
        php5.6-gd \
        php5.6-intl \
        php5.6-mysql \
        php5.6-xml \
        php5.6-xmlrpc \
        php5.6-ldap \
        php5.6-zip

    echo 'Configuring PHP'
    sed -i '/; cgi.fix_pathinfo=1/cgi.fix_pathinfo=1/' /etc/php/5.6/fpm/php.ini
    sed -i 's|listen.owner = www-data|listen.owner = nginx|g' /etc/php/5.6/fpm/pool.d/www.conf
    sed -i 's|listen.group = www-data|listen.group = nginx|g' /etc/php/5.6/fpm/pool.d/www.conf

    service php5.6-fpm restart
    service nginx restart
fi

echo 'Installing Moodle'

if [ ! -d /var/www/moodledata ]; then
    mkdir /var/www/moodledata
fi

chmod 0777 /var/www/moodledata

if [ ! -f /var/www/moodle/config.php ]; then
    php /var/www/moodle/admin/cli/install.php \
        --non-interactive \
        --agree-license \
        --allow-unstable \
        --lang=ru \
        --wwwroot=${MOODLE_URL} \
        --dataroot=/var/www/moodledata \
        --dbtype=mariadb \
        --dbuser=${MOODLE_DATABASE_USERNAME} \
        --dbpass=${MOODLE_DATABASE_PASSWORD} \
        --adminuser=${MOODLE_ADMIN_USERNAME} \
        --adminpass=${MOODLE_ADMIN_PASSWORD} \
        --fullname="Moodle CSPT" \
        --shortname="moodle-cspt"

    cp /var/www/config/config.php /var/www/moodle/config.php
fi

apt-get -y upgrade

echo 'PROVISION FINISHED'


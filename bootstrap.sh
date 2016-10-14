#!/bin/bash

chown -R www-data /var/www
chmod -R 0755 /var/www
find /var/www -type f -exec chmod 0644 {} \

if [ ! -d /var/moodledata ]; then
  mkdir -p /var/moodledata;
fi

chmod 0777 /var/moodledata
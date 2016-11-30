#!/usr/bin/env bash

function uri_parser() {
    # uri capture
    uri="$@"

    # safe escaping
    uri="${uri//\`/%60}"
    uri="${uri//\"/%22}"

    # top level parsing
    pattern='^(([a-z]{3,5})://)?((([^:\/]+)(:([^@\/]*))?@)?([^:\/?]+)(:([0-9]+))?)(\/[^?]*)?(\?[^#]*)?(#.*)?$'
    [[ "$uri" =~ $pattern ]] || return 1;

    # component extraction
    uri=${BASH_REMATCH[0]}
    uri_schema=${BASH_REMATCH[2]}
    uri_address=${BASH_REMATCH[3]}
    uri_user=${BASH_REMATCH[5]}
    uri_password=${BASH_REMATCH[7]}
    uri_host=${BASH_REMATCH[8]}
    uri_port=${BASH_REMATCH[10]}
    uri_path=${BASH_REMATCH[11]}
    uri_query=${BASH_REMATCH[12]}
    uri_fragment=${BASH_REMATCH[13]}

    # path parsing
    count=0
    path="$uri_path"
    pattern='^/+([^/]+)'
    while [[ $path =~ $pattern ]]; do
        eval "uri_parts[$count]=\"${BASH_REMATCH[1]}\""
        path="${path:${#BASH_REMATCH[0]}}"
        let count++
    done

    # query parsing
    count=0
    query="$uri_query"
    pattern='^[?&]+([^= ]+)(=([^&]*))?'
    while [[ $query =~ $pattern ]]; do
        eval "uri_args[$count]=\"${BASH_REMATCH[1]}\""
        eval "uri_arg_${BASH_REMATCH[1]}=\"${BASH_REMATCH[3]}\""
        query="${query:${#BASH_REMATCH[0]}}"
        let count++
    done

    # return success
    return 0
}

MOODLE_ADMIN_USERNAME=admin
MOODLE_ADMIN_PASSWORD=`date +%s | sha256sum | base64 | head -c 6`
MOODLE_URL=http://mephi-moodle.herokuapp.com

uri_parser $CLEARDB_DATABASE_URL
MOODLE_DATABASE_HOST=$uri_host
MOODLE_DATABASE_USERNAME=$uri_user
MOODLE_DATABASE_PASSWORD=$uri_password
MOODLE_DATABASE_NAME=$uri_parts

printf "\nMOODLE ADMIN\n\tlogin: $MOODLE_ADMIN_USERNAME\n\tpassw: $MOODLE_ADMIN_PASSWORD\n\n" | tee credentials.txt

if [ ! -d moodledata ]; then
    mkdir moodledata
fi

chmod -R 0755 /app/moodle
find /app/moodle -type f -exec chmod 0644 {} \;

php moodle/admin/cli/install.php \
    --non-interactive \
    --agree-license \
    --allow-unstable \
    --lang=ru \
    --wwwroot=${MOODLE_URL} \
    --dataroot=/app/moodledata \
    --dbhost=${MOODLE_DATABASE_HOST} \
    --dbname=${MOODLE_DATABASE_NAME} \
    --dbuser=${MOODLE_DATABASE_USERNAME} \
    --dbpass=${MOODLE_DATABASE_PASSWORD} \
    --adminuser=${MOODLE_ADMIN_USERNAME} \
    --adminpass=${MOODLE_ADMIN_PASSWORD} \
    --fullname="Moodle Mephi" \
    --shortname="moodle-mephi" \
    --skip-database

chmod -R 0700 /app/moodledata
find /app/moodledata -type f -exec chmod 0644 {} \;

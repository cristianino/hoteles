#! /bin/bash

newUser='hotel'
newDbPassword='hotel'
newDb='hotel'
host=localhost
#host='%'

commands="CREATE DATABASE \`${newDb}\`;CREATE USER '${newUser}'@'${host}' IDENTIFIED BY '${newDbPassword}';GRANT USAGE ON *.* TO '${newUser}'@'${host}' IDENTIFIED BY '${newDbPassword}';GRANT ALL privileges ON \`${newDb}\`.*
TO '${newUser}'@'${host}';FLUSH PRIVILEGES;"

echo "${commands}" | /usr/bin/mysql -u root -p

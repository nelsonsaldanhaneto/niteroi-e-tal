#!/usr/bin/env bash

DB_NAME='wp_niteroietal'
DB_USER='root'
DB_PASSWORD='root'
DB_HOST='localhost'
NOME_ARQ='./banco-de-dados.sql'

/Applications/MAMP/Library/bin/mysqldump -u${DB_USER} -h${DB_HOST} -p${DB_PASSWORD} ${DB_NAME} > ${NOME_ARQ}


#!/usr/bin/env bash

echo "******************************************************************"
echo "*                       !!!!!ATENCAO!!!!                         *"
echo "*----------------------------------------------------------------*"
echo "*                                                                *"
echo "* Este comando vai DESTRUIR o seu BD e criar um novo a partir do *"
echo "* script que esta no seu home. Tem certeza de que quer           *"
echo "* prosseguir?                                                    *"
echo "*                                                                *"
echo "******************************************************************"

read -r -p "Are you sure? [y/N] " response
if [[ $response =~ ^([yY][eE][sS]|[yY])$ ]]
then
  echo "Importando..."

  DB_NAME='niteroietal'
  DB_USER='niteroietal'
  DB_PASSWORD='ede27114375'
  DB_HOST='mysql01.niteroietal.hospedagemdesites.ws'
  NOME_ARQ='./banco-de-dados.sql'

  mysql -u${DB_USER} -h${DB_HOST} -p${DB_PASSWORD} ${DB_NAME} < ${NOME_ARQ}
fi

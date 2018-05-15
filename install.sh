#!/bin/bash

if [ -e dump.sql ]; then
  echo '## Recuperando o banco de dados...'

  mysql -uroot -padmin -h mysql <<EOSQL
	DROP DATABASE taverna_ancioes;
	CREATE DATABASE taverna_ancioes;
EOSQL

  mysql -uroot -padmin -h mysql taverna_ancioes < dump.sql
else
  echo '## Voce esta sem o dump do banco. '
fi

composer install --no-scripts -vv --profile

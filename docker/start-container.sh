#!/bin/bash

DIR_BASE="/var/www/html"
FILE1="${DIR_BASE}/public/index.php"

sed -i '2s/.*/die("Subindo o ambiente, aguarde...");/' ${FILE1}

cd $DIR_BASE
if [ ! -d "vendor" ]; then
	composer install
fi

mkdir -p var
chmod 777 -R var

sed -i '2s/.*//' ${FILE1}

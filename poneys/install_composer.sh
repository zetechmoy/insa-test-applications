if [ -e "composer.phar" ]
then
    ./composer.phar self-update
else
    curl -sS https://getcomposer.org/installer | php
fi

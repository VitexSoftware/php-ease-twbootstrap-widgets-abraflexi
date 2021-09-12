# php-AbraFlexi-Bricks
![Project Logo](https://raw.githubusercontent.com/VitexSoftware/php-abraflexi-bricks/master/project-logo.png "Project Logo")

Examples how to use [AbraFlexi](https://github.com/Spoje-NET/AbraFlexi) Library for AbraFlexi with EasePHP Framework widgets

Příklady použití knihovny [AbraFlexi](https://github.com/Spoje-NET/AbraFlexi) pro [AbraFlexi](https://abraflexi.eu/)


Instalace
----------

    composer require vitexsoftware/ease-bootstrap-widgets-abraflexi




How to run ?
------------

1) composer install
2) cd src
3) modify config.php to use custom AbraFlexi connection
4) open the project url in browser


### Co tady máme ?


# Třídy v AbraFlexi/Bricks/ui/TWB:

| Soubor                                                              | Popis  |
| ------------------------------------------------------------------- | -------|
| [StatusInfoBox.php](src/AbraFlexi/Bricks/ui/TWB/StatusInfoBox.php) | Info


Debian/Ubuntu
-------------

Pro Linux jsou k dispozici .deb balíčky. Prosím použijte repo:

    wget -O - http://v.s.cz/info@vitexsoftware.cz.gpg.key|sudo apt-key add -
    echo deb http://v.s.cz/ stable main > /etc/apt/sources.list.d/ease.list
    apt update
    apt install php-bootstrap-widgets-abraflexi


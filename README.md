# php-FlexiBee-Bricks
![Project Logo](https://raw.githubusercontent.com/VitexSoftware/php-flexibee-bricks/master/project-logo.png "Project Logo")

Examples how to use [FlexiPeeHP](https://github.com/Spoje-NET/FlexiPeeHP) Library for FlexiBee with EasePHP Framework widgets

Příklady použití knihovny [FlexiPeeHP](https://github.com/Spoje-NET/FlexiPeeHP) pro [FlexiBee](https://flexibee.eu/)


Instalace
----------

    composer require vitexsoftware/ease-twbootstrap-widgets-flexibee




How to run ?
------------

1) composer install
2) cd src
3) modify config.php to use custom FlexiBee connection
4) open the project url in browser


### Co tady máme ?


# Třídy v FlexiPeeHP/Bricks/ui/TWB:

| Soubor                                                              | Popis  |
| ------------------------------------------------------------------- | -------|
| [StatusInfoBox.php](src/FlexiPeeHP/Bricks/ui/TWB/StatusInfoBox.php) | Info


Debian/Ubuntu
-------------

Pro Linux jsou k dispozici .deb balíčky. Prosím použijte repo:

    wget -O - http://v.s.cz/info@vitexsoftware.cz.gpg.key|sudo apt-key add -
    echo deb http://v.s.cz/ stable main > /etc/apt/sources.list.d/ease.list
    apt update
    apt install php-twbootstrap-widgets-flexibee


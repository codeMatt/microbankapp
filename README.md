## About Micro Bank App

This is an attempt at an example micro banking app outlined [here](https://sinov8.notion.site/Micro-Banking-System-with-Daily-Movement-Balances-Summary-54c9b59778184ee7955a89945fee7913)

## The tech stack 

- [Laravel 10](https://laravel.com/docs/10.x/releases).
- [TailwindCSS](https://tailwindcss.com/).
- [MySQL](https://dev.mysql.com/)
- [Database ORM Eloquent](https://laravel.com/docs/eloquent).
- [Vuejs](https://vuejs.org/).

This stack was chosen as it is the stack described by the hiring company, as well as covering many of the features requested in the specification.

## Installing the app

Required software:
The following software can be installed with the quoted terminal commands, these are taken off of the official sites.
** php
 - `sudo apt-get install php`
** laravel
 - `composer create-project laravel/laravel example-app`
** composer
 - `php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"`
 - `php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"`
 - `php composer-setup.php`
 - `php -r "unlink('composer-setup.php');"`
** npm
 - install guide can be found [here](https://linuxize.com/post/how-to-install-node-js-on-ubuntu-18.04/)
** vuejs
 - This required nodejs (included in npm installation)
 - `npm init vue@latest`
 ** TailwindCSS
 - `npm install -D tailwindcss`
 - `npx tailwindcss init`
** mysql
 - `sudo apt install mysql-server`
 - This is required to set up a root user with a password `sudo mysql_secure_installation`
** php-mbstring
 - `sudo apt-get install php-mbstring`
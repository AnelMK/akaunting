Акаунтинг™

[![Release](https://img.shields.io/github/v/release/akaunting/akaunting?label=release)](https://github.com/akaunting/akaunting/releases)
![Downloads](https://img.shields.io/github/downloads/akaunting/akaunting/total?label=downloads)
[![Translations](https://badges.crowdin.net/akaunting/localized.svg)](https://crowdin.com/project/akaunting)
[![Tests](https://img.shields.io/github/actions/workflow/status/akaunting/akaunting/tests.yml?label=tests)](https://github.com/akaunting/akaunting/actions)

Онлајн софтвер за книговодство дизајниран за мали бизниси и фриленсери. Акаунтинг е изграден со модерни технологии како Laravel, VueJS, Tailwind, RESTful API итн. Благодарение на неговата модуларна структура, Акаунтинг обезбедува неверојатна Продавница за апликации (App Store) за корисници и програмери.

* [ДОМАШНА СТРАНА](https://anel.mk) - Официјална страница

## Барања

* PHP 8.1 или понова верзија
* База на податоци (на пр.: MySQL, PostgreSQL, SQLite)
* Веб-сервер (на пр.: Apache, Nginx, IIS)
* [Други библиотеки](https://akaunting.com/hc/docs/on-premise/requirements/)

## Фрејмворк

Акаунтинг користи [Laravel](http://laravel.com), најдобриот постоечки PHP-фрејмворк, како основен фрејмворк.

## Инсталација

* Инсталирај [Composer](https://getcomposer.org/download) и [Npm](https://nodejs.org/en/download)
* Клонирај го репозиториумот: `git clone https://github.com/AnelMK/akaunting.git`
* Инсталирај ги зависностите: `composer install ; npm install ; npm run dev`
* Инсталирај Акаунтинг:

```
php artisan install --db-name="test_plata" --db-username="crm" --db-password="LOZINKA" --admin-email="root@localhost" --admin-password="123456"
```

* Создај податоци (ТЕСТ ОКОЛИНА): 'php artisan sample-data:seed'

## ФОРМУЛИ

* Тука ќе ги пишуваме формулите кои се додадени во секоја нова форма

## Лиценцирање

Akaunting е лиценциран под [BSL license](LICENSE.txt).

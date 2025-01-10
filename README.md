Акаунтинг™

[![Release](https://img.shields.io/github/v/release/akaunting/akaunting?label=release)](https://github.com/akaunting/akaunting/releases)
![Downloads](https://img.shields.io/github/downloads/akaunting/akaunting/total?label=downloads)
[![Translations](https://badges.crowdin.net/akaunting/localized.svg)](https://crowdin.com/project/akaunting)
[![Tests](https://img.shields.io/github/actions/workflow/status/akaunting/akaunting/tests.yml?label=tests)](https://github.com/akaunting/akaunting/actions)

Онлајн софтвер за книговодство дизајниран за мали бизниси и фриленсери. Акаунтинг е изграден со модерни технологии како Laravel, VueJS, Tailwind, RESTful API итн. Благодарение на неговата модуларна структура, Акаунтинг обезбедува неверојатна Продавница за апликации (App Store) за корисници и програмери.

* [Home](https://akaunting.com) - Официјална страница
* [Forum](https://akaunting.com/forum) - Побарај поддршка
* [Documentation](https://akaunting.com/hc/docs) - Научи како да користиш
* [Developer Portal](https://developer.akaunting.com) - Создавај пасивен приход
* [App Store](https://akaunting.com/apps) - Проšири го твојот Акаунтинг
* [Translations](https://crowdin.com/project/akaunting) - Помогни ни да го преведеме Акаунтинг

## Барања

* PHP 8.1 или понова верзија
* База на податоци (на пр.: MySQL, PostgreSQL, SQLite)
* Веб-сервер (на пр.: Apache, Nginx, IIS)
* [Други библиотеки](https://akaunting.com/hc/docs/on-premise/requirements/)

## Фрејмворк

Акаунтинг користи [Laravel](http://laravel.com), најдобриот постоечки PHP-фрејмворк, како основен фрејмворк и пакетот [Module](https://github.com/akaunting/module) за Апликации.

## Инсталација

* Инсталирај [Composer](https://getcomposer.org/download) и [Npm](https://nodejs.org/en/download)
* Клонирај го репозиториумот: `git clone https://github.com/akaunting/akaunting.git`
* Инсталирај ги зависностите: `composer install ; npm install ; npm run dev`
* Инсталирај Акаунтинг:

```
php artisan install --db-name="akaunting" --db-username="root" --db-password="pass" --admin-email="admin@company.com" --admin-password="123456"
```

* Создај примерни податоци (опционално): 'php artisan sample-data:seed'

## Придонесување

Те молиме, обиди се да бидеш јасен во твоите commit пораки и Pull Requests. Празни пораки во Pull Request може да бидат одбиени без дополнителна причина.

При придонесувањето на код во Акаунтинг, мора да ги следиш PSR стандардите за кодирање. Златното правило е: Имитирај го постоечкиот код на Акаунтинг.

Те молиме имај предвид дека овој проект е објавен со [Code of Conduct](https://akaunting.com/conduct). *Со учество во овој проект, се согласуваш да ги почитуваш овие услови*.


## Translation

If you'd like to contribute translations, please check out our [Crowdin](https://crowdin.com/project/akaunting) project.

## Changelog

Please see [Releases](../../releases) for more information about what has changed recently.

## Security

Please review [our security policy](https://github.com/akaunting/akaunting/security/policy) on how to report security vulnerabilities.

## Credits

* [Denis Duliçi](https://github.com/denisdulici)
* [Cüneyt Şentürk](https://github.com/cuneytsenturk)
* [All Contributors](../../contributors)

## License

Akaunting is released under the [BSL license](LICENSE.txt).

# Laravel Git Activity

> Simple library for getting git activities in Laravel Project

## Synopsis

This library provides ways to get git activities on Laravel Project. Currently support Gitlab & Github API.

## Table of contents

- [Setup](#setup)
- [Publish package assets](#publish-package-assets)
- [Configuration](#configuration)
- [Documentation](#documentation)
- [Credits](#credits)
- [License](#license)

## Setup

Install the package via Composer :

```sh
$ composer require noormaulida/laravel-git-activity
```

## Publish package assets

Publish the package asset files using this `php artisan` command

```sh
$ php artisan vendor:publish --provider="NoorMaulida\GitActivity\ServiceProvider"
```

The command above would create three new files in your application, such as:

- New configuration file `/config/git_activity.php`
- New database migration

## Configuration

## Documentation

## Credits

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

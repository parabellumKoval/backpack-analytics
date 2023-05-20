# Backpack-analytics

[![Build Status](https://travis-ci.org/parabellumKoval/backpack-analytics.svg?branch=master)](https://travis-ci.org/parabellumKoval/backpack-analytics)
[![Coverage Status](https://coveralls.io/repos/github/parabellumKoval/backpack-analytics/badge.svg?branch=master)](https://coveralls.io/github/parabellumKoval/backpack-analytics?branch=master)

[![Packagist](https://img.shields.io/packagist/v/parabellumKoval/backpack-analytics.svg)](https://packagist.org/packages/parabellumKoval/backpack-analytics)
[![Packagist](https://poser.pugx.org/parabellumKoval/backpack-analytics/d/total.svg)](https://packagist.org/packages/parabellumKoval/backpack-analytics)
[![Packagist](https://img.shields.io/packagist/l/parabellumKoval/backpack-analytics.svg)](https://packagist.org/packages/parabellumKoval/backpack-analytics)

This package provides a quick starter kit for implementing analytics for Laravel Backpack. Provides a database, CRUD interface, API routes and more.

## Installation

Install via composer
```bash
composer require parabellumKoval/backpack-analytics
```

Migrate
```bash
php artisan migrate
```

### Publish

#### Configuration File
```bash
php artisan vendor:publish --provider="Backpack\Analytics\ServiceProvider" --tag="config"
```

#### Views File
```bash
php artisan vendor:publish --provider="Backpack\Analytics\ServiceProvider" --tag="views"
```

#### Migrations File
```bash
php artisan vendor:publish --provider="Backpack\Analytics\ServiceProvider" --tag="migrations"
```

#### Routes File
```bash
php artisan vendor:publish --provider="Backpack\Analytics\ServiceProvider" --tag="routes"
```

## Usage

### Seeders
```bash
php artisan db:seed --class="Backpack\Analytics\database\seeders\ReviewSeeder"
```

## Security

If you discover any security related issues, please email 
instead of using the issue tracker.

## Credits

- [](https://github.com/parabellumKoval/backpack-analytics)
- [All contributors](https://github.com/parabellumKoval/backpack-analytics/graphs/contributors)

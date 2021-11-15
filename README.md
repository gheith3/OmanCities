# for migrate oman governorates and cities


---
This repo can be used to scaffold Oman Governorates and cities.

## Installation

You can install the package via composer:

```bash
composer require gheith3/omancities
```

publish and run the migrations with:

```bash
php artisan vendor:publish --tag="omancities-migrations"
php artisan migrate
php artisan omancities:seed
```

seed cities to database:

```bash
php artisan omancities:seed
```

## Usage
```php
$governorate = OmanGovernorate::first();
$governorate->load("cities");
echo $governorate->name;

//$city = OmanCity::find(10);
$city = $governorate->cities()->first();
echo $city->name;
```

this package support <a href="https://github.com/spatie/laravel-translatable">spatie/laravel-translatable</a>
```php
echo $governorate->name;
echo $governorate->getTranslation("name", "ar");
echo $city->getTranslation("name", "en");
```


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.



## Credits

- [Gheith Alrawahi](https://github.com/gheith3)
- [spatie](https://github.com/spatie)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

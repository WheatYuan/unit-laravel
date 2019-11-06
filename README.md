<h1 align="center"> unit-laravel </h1>

<p align="center"> A simplified version of the laravel framework unit test.</p>


## Installing

Laravel >= 5.1

```shell
$ composer require wheat/unit-laravel -vvv
```

## Usage

在 `config/app.php` 注册 ServiceProvider 和 Facade (Laravel 5.5 无需手动注册)

## Contributing

```php
'providers' => [
    Wheat\UnitLaravel\UnitServiceProvide::class,
]

Route::get('/', 'UnitController@index');
Route::post('/', 'UnitController@store')->name('unit.store');
```

## License

MIT

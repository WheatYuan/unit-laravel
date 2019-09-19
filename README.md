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
    ShineYork\SJunitLaravel\SJunitServiceProvide::class,
]

Route::get('/', 'SJunitController@index');
Route::post('/', 'SJunitController@store')->name('junit.store');
```

## License

MIT

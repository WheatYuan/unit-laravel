<?php
namespace Wheat\UnitLaravel\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class UnitServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerRoutes();

        // 加载页面文件
        $this->loadViewsFrom(
            __DIR__.'/../../resources/views',
            'unit'
        );
    }

    private function routeConfiguration()
    {
        return [
            'namespace' => 'Wheat\UnitLaravel\Http\Controllers',
            'prefix' => 'unit',
            // 'middleware' => 'web',
        ];
    }

    private function registerRoutes()
    {
        // 路由绑定
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        });
    }
}

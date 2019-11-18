<?php

namespace App\Providers;

use App\Http\Repository\impl\KhachhangRepository;
use App\Http\Repository\KhachhangRepositoryInterface;
use App\Http\Service\impl\KhachhangService;
use App\Http\Service\KhachhangServiseInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(KhachhangServiseInterface::class,KhachhangService::class);
        $this->app->singleton(KhachhangRepositoryInterface::class,KhachhangRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

<?php

namespace App\Providers;

use App\Http\Repository\impl\UserRepository;
use App\Http\Repository\UserRepositoryInterface;
use App\Http\Service\impl\UserService;
use App\Http\Service\UserServiceInterface;
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
        $this->app->singleton(UserRepositoryInterface::class,UserRepository::class);
        $this->app->singleton(UserServiceInterface::class,UserService::class);
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

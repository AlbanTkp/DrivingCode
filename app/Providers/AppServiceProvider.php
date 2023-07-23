<?php

namespace App\Providers;

use App\Guards\CustomGuard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        view()->composer('*', function ($view) {
            if(auth()->hasUser()){
                $user = auth()->user();
                $user->load('rewards.badge');
                $view->with('auth', $user);
            }
        });
    }
}

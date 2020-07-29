<?php

namespace App\Providers;

use App\Logo;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view)
         {
            $logo = Logo::latest()->first();
            $view->with(compact('logo'));
         }
        );
    }
}

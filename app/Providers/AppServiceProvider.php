<?php

namespace App\Providers;

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
        $locale = (array_key_exists(request()->segment(1), config('app.locales'))) ? request()->segment(1) : config('app.default_locale');
        app()->setLocale($locale);
    }
}

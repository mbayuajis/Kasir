<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.master', function($view)
        {
            $view->with('user', session('user')->nama_pegawai);
            $view->with('jabatan', session('user')->jabatan);
        });

        Blade::extend(function($value) {
            return preg_replace('/\{\{\?(.+)\?\}\}/', '<?php ${1} ?>', $value);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

<?php

namespace App\Providers;

use App\TraitsFolder\BladeDirectives;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
//        view()->composer('*', function ($view){
//            $view->with('count', 4);
//        });
//        view()->composer('layouts.master', function ($view){
//            $view->with('count', 4);
//        });

//        view()->composer('layouts.master', \App\Http\View\Composers\TestComposer::class);
//        view()->composer(['layouts.master', 'layouts.header'], \App\Http\View\Composers\TestComposer::class);/
//        view()->creator(['layouts.master', 'layouts.header'], \App\Http\View\Composers\TestComposer::class); // before rendering your variable has exists

//        Blade::directive('Hello', function (){
//            return 'mm';
//        });
    }
}

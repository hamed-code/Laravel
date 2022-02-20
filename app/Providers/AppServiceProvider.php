<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\TraitsFolder\BladeDirectives;
//use Illuminate\Support\Facades\View;
use Illuminate\View\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->isLocal()) {
        $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }
//    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        View::share('count', 89);
//        Blade::directive('ifGuest', function (){
/*            return "<?php if (auth()->guest()) ?>";*/
//        });
//        Blade::directive('Hamed', function (){
//            return 'hamed is here....';
//        });
    }
}

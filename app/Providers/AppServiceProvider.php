<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Menu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      /* herlbeng, 24-11-2018 */
        View::share('menus', Menu::menus());
        view()->composer(['home','propietarios.*','welcome'], function($view) {
        $view->with('menus', Menu::menus());
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

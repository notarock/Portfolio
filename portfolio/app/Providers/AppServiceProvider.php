<?php

namespace App\Providers;
use Carbon\Carbon;
use App\Categorie;

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
	    Carbon::setLocale('fr');
	    view()->composer('layouts.nav', function ($view){
		    $view->with('DDcategories',Categorie::DDcategories());
	    });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       
    }
}

<?php

namespace App\Providers;
use Carbon\Carbon;
use App\Categorie;
use App\User;

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
	    view()->composer('layouts.footer', function($view){
		    $view->with('liens', User::liens());
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

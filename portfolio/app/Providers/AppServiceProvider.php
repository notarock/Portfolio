<?php

namespace App\Providers;
use Carbon\Carbon;
use App\Categorie;
use App\User;
use App\Cadre;
use App\Etat;

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
		view()->composer('layouts.footer', function($view){
			$view->with('liens', User::liens());
		});
		view()->composer('projets.editable', function($view){
			$view->with('CBcategories', Categorie::CBcategories());
			$view->with('CBetats', Etat::CBetats());
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

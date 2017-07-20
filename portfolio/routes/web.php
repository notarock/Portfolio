<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Auth::routes();

Route::get('/test','HomeController@test');


/*
 *
 *  Home Controller Routes
 *
 */

Route::get('/', 'HomeController@index')->name('homepage');

Route::get('/profile', 'HomeController@profile')->name('Profile');

/*
 *
 *  Projet Controller Routes
 *
 */ 

Route::get('/projets/{projet}', 'ProjetController@show');

Route::get('/projets', 'ProjetController@index');


/*
 *
 *  Chapitre Controller Routes
 *
 */ 

Route::get('/projets/{projet}/chapitres/{id}', 'ChapitreController@show');

/*
 *
 *  Categorie Controller Routes
 *
 */ 

Route::get('/categories/{categorie}', 'CategorieController@show');

Route::get('/categories', 'CategorieController@index');



/*
 *
 *  Blog Controller Routes
 *
 */ 

Route::get('/blogs', 'BlogController@index');

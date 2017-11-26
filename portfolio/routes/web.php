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

Route::get('/test','HomeController@test')->name('Test route');


/*
 *
 *  Home Controller Routes
 *
 */

Route::get('/', 'HomeController@index')->name('home');

Route::get('/profile', 'HomeController@profile')->name('A propos');

/*
 *
 *  Sessions Controller Routes
 *
 */

Route::get('/register', 'RegistrationController@create')->name('Get Register');
Route::post('/register', 'RegistrationController@store')->name('Save User');

Route::get('/login', 'SessionsController@create')->name('Get Login');
Route::post('/login', 'SessionsController@store')->name('Loging in');

Route::get('logout', 'SessionsController@destroy')->name('Loging out');

/*
 *
 *  Projet Controller Routes
 *
 */ 

Route::get('/projets/create', 'ProjetController@create');
Route::post('projets', 'ProjetController@store');

Route::patch('/projets/{projet}', 'ProjetController@update');
Route::get('/projets', 'ProjetController@index');

Route::get('/projets/{projet}/delete', 'ProjetController@delete');
Route::post('/projets/{projet}/destroy', 'ProjetController@destroy');

Route::get('/projets/{projet}/edit', 'ProjetController@edit');


Route::get('/projets/{projet}', 'ProjetController@show');

/*
 *
 *  Chapitre Controller Routes
 *
 */  






Route::get('/projets/{projet}/chapitres/create', 'ChapitreController@create');
Route::post('/projets/{projet}/chapitres', 'ChapitreController@store');

Route::patch('/projets/{projet}/chapitres/{chapitre}', 'ChapitreController@update');

Route::get('/projets/{projet}/chapitres', 'ChapitreController@index');

Route::get('/projets/{projet}/chapitres/{chapitre}/delete', 'ChapitreController@delete');
Route::post('/projets/{projet}/chapitres/{chapitre}/destroy', 'ChapitreController@destroy');

Route::get('/projets/{projet}/chapitres/{chapitre}/edit', 'ChapitreController@edit');

Route::get('/projets/{projet}/chapitres/{chapitre}', 'ChapitreController@show');






/*
 *
 *  Categorie Controller Routes
 *
 */ 


Route::get('/categories/create', 'CategorieController@create');
Route::post('categories', 'CategorieController@store');

Route::patch('/categories/{categorie}', 'CategorieController@update');

Route::get('/categories', 'CategorieController@index');

Route::get('/categories/{categorie}/delete', 'CategorieController@delete');
Route::post('/categories/{categorie}/destroy', 'CategorieController@destroy');

Route::get('/categories/{categorie}/edit', 'CategorieController@edit');

Route::get('/categories/{categorie}', 'CategorieController@show');



/*
 *
 *  Blog Controller Routes
 *
 */ 

Route::get('/blogs', 'BlogController@index');

Route::get('/blogs/{blog}', 'BlogController@show');
/*
 *
 *  Errors Controller Routes
 *
 */ 

Route::get('/404', 'ErrorController@E404')->name('Erreur 404');

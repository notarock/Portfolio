<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
/** Factory d'un User */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    
    static $password;

    return [
        'name' => "Roch D'Amour",
        'photo' => 'user_placeholder',
        'email' => 'roch@roch.com',
        'password' => $password ?: $password = bcrypt('secret'),
        'description' => $faker->text,
        'region' => 'Montreal',
        'lien_github' => $faker->domainName,
        'lien_linkedin' => $faker->domainName,
        'remember_token' => str_random(10),
    ];

});

/** Factory d'un Projet */
$factory->define(App\Projet::class, function (Faker\Generator $faker){
	
	return [
		'user_id' => 1,
		'cadre_id' => rand(1,App\Cadre::count()),
		'categorie_id' => rand(1,App\Cadre::count()),
		'nom' => $faker->sentence(rand(1,6)),
		'description' => $faker->text,
		'photo' => 'projet_placeholder',
		'lien_github' => $faker->domainName,
	];

});




/** Factory d'un Cadre*/
$factory->define(App\Cadre::class, function(Faker\Generator $faker){

	return [
		'nom' => $faker->colorName,
		'description' => $faker->paragraph,
	];

});

/** Factory d'une Categorie*/
$factory->define(App\Categorie::class, function(Faker\Generator $faker){

	return [
		'nom' => $faker->colorName,
		'description' => $faker->paragraph,
	];

});

/** Factory d'un Chapitre*/
$factory->define(App\Chapitre::class, function(Faker\Generator $faker){

	return [
		'projet_id' => rand(1,App\Projet::count()),
		'text_haut' => $faker->paragraph,
		'photo' => 'chapitre_placeholder',
		'text_bas' => $faker->paragraph,
	];

});
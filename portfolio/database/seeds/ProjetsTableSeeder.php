<?php

use Illuminate\Database\Seeder;

class ProjetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\Projet::class, 10)->create()->each(function ($projet) {

    		for ($x = 0; $x <= 3; $x++) {
    			$projet->chapitres()->save(factory(App\Chapitre::class)->make());
    		}

    	});
    }
}

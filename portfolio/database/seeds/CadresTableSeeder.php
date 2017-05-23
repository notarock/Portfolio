<?php

use Illuminate\Database\Seeder;

class CadresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\Cadre::class, 3)->create();
    }
}

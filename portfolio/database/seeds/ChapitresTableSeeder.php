<?php

use Illuminate\Database\Seeder;

class ChapitresTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		factory(App\Chapitre::class, 30)->create();
	}
}

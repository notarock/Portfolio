<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		if(getenv("APP_ENV") === "local"){

			$this->call(UsersTableSeeder::class);
			$this->call(CategoriesTableSeeder::class);
			$this->call(ProjetsTableSeeder::class);
			$this->call(ChapitresTableSeeder::class);
			$this->call(EtatSeeder::class);
            $this->call(BlogSeeder::class);
		}		


		if(getenv("APP_ENV")==="production"){


			$this->call(EtatSeeder::class);
			$this->call(UserProd::class);
		}
	}
}

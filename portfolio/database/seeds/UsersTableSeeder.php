<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		User::create([ 
			'name' => getenv("USER_NAME"),
			'photo' => getenv("USER_PHOTO"),
			'email' => getenv("EMAIL"),
			'admin' => 1,
			'password' => bcrypt(getenv("USER_PSWD")),
			'region' => getenv("USER_REGION"),
			'lien_github' => getenv("USER_GITHUB"),
			'lien_linkedin' => getenv('USER_LINKEDIN'),
			'lien_youtube' => getenv('USER_YOUTUBE')
		]);
		
	}
}

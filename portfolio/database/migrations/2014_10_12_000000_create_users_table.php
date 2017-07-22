<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('photo','100')->nullable();
			$table->string('email','30')->unique();
			$table->string('password');
			$table->longText('description')->nullable();
			$table->string('region','20')->nullable();
			$table->string('lien_github','100')->nullable();
			$table->string('lien_linkedin','100')->nullable();
			$table->string('lien_youtube','100')->nullable();

			$table->rememberToken();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('users');
	}
}

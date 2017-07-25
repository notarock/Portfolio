<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projets', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('cadre_id');
			$table->integer('categorie_id');
			$table->integer('etat_id')->default(4);
			$table->string('name','100');
			$table->longText('description')->nullable();
			$table->string('picture','100')->nullable();
			$table->string('lien_github')->nullable();

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
		Schema::dropIfExists('projets');
	}
}

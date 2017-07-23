<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChapitresTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chapitres', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('projet_id');
			$table->string('name');
			$table->integer('position')->nullable();
			$table->text('textUp');
			$table->string('picture','100')->nullable();
			$table->text('textDown');
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
		Schema::dropIfExists('chapitres');
	}
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTesisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tesis', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
			$table->text('descripcion');
			$table->string('url');
			$table->string('slug');
			$table->string('lineas_investigacion');
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
		Schema::drop('tesis');
	}

}

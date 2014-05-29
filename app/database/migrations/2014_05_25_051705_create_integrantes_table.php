<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIntegrantesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('integrantes', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
			$table->string('apellido_paterno');
			$table->string('apellido_materno');
			$table->string('grado');
			$table->text('curriculum');
			$table->string('slug');
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
		Schema::drop('integrantes');
	}

}

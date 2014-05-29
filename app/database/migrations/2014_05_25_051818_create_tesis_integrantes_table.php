<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTesisIntegrantesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tesis_integrantes', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('integrante_id')->unsigned();
			$table->integer('tesis_id')->unsigned();

			$table->foreign('integrante_id')->references('id')->on('integrantes');
			$table->foreign('tesis_id')->references('id')->on('tesis');

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
		Schema::drop('tesis_integrantes');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGraficosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('graficos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nome', 150)->nullable();
			$table->string('titulo', 150)->nullable();
			$table->integer('id_tipo_grafico')->index('fk_tipo_grafico');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('graficos');
	}

}

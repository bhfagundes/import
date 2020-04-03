<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGraficoDadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grafico_dados', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_grafico')->index('fk_grafico');
			$table->float('valor1', 10, 0)->nullable();
			$table->string('texto1', 150)->nullable();
			$table->dateTime('data')->nullable();
			$table->string('status', 150)->nullable();
			$table->string('cor', 50)->nullable();
			$table->float('valor2', 10, 0)->nullable();
			$table->string('texto2', 150)->nullable();
			$table->integer('id_principal')->index('fk_principal');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('grafico_dados');
	}

}

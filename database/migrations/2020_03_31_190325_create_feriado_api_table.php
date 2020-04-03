<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFeriadoApiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('feriado_api', function(Blueprint $table)
		{
			$table->integer('id_feriado')->primary();
			$table->string('nome', 450)->nullable();
			$table->string('tipo', 450);
			$table->integer('id_pais')->nullable()->index('fk_feriado_pais_idx_2');
			$table->integer('id_estado')->nullable()->index('fk_feriado_estado_idx_2');
			$table->integer('id_cidade')->nullable()->index('fk_feriado_cidade_idx_2');
			$table->date('data');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('feriado_api');
	}

}

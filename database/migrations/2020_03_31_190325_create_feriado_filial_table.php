<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFeriadoFilialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('feriado_filial', function(Blueprint $table)
		{
			$table->integer('id_feriado')->index('fk_feriado_filial_feriado_idx');
			$table->integer('id_filial')->index('fk_feriado_filial_filial_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('feriado_filial');
	}

}

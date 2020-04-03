<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCtrlCargaPlanLpjTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ctrl_carga_plan_lpj', function(Blueprint $table)
		{
			$table->integer('id_carga', true);
			$table->dateTime('data_carga');
			$table->integer('ultimo_id_pln');
			$table->integer('qtde_registros');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ctrl_carga_plan_lpj');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDataAtividadeFilialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('data_atividade_filial', function(Blueprint $table)
		{
			$table->integer('id_data_atividade')->index('fk_data_atividade_filial_data_atividade_idx');
			$table->integer('id_filial')->index('fk_data_atividade_filial_filial_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('data_atividade_filial');
	}

}

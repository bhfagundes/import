<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDataObrigacaoFilialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('data_obrigacao_filial', function(Blueprint $table)
		{
			$table->integer('id_data_obrigacao');
			$table->integer('id_filial')->index('fk_data_obrigacao_filial_filial_idx');
			$table->index(['id_data_obrigacao','id_filial'], 'fk_data_obrigacao_filial_data_obrigacao_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('data_obrigacao_filial');
	}

}

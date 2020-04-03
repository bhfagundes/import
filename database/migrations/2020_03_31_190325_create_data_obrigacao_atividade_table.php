<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDataObrigacaoAtividadeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('data_obrigacao_atividade', function(Blueprint $table)
		{
			$table->integer('id_obrigacao_atividade', true);
			$table->integer('id_ciclo_obrigacao')->index('fk_data_obrigacao_atividade_ciclo_idx');
			$table->integer('id_data_obrigacao')->index('fk_data_obrigacao_atividade_data_obrigacao_idx');
			$table->integer('id_data_atividade')->index('fk_data_obrigacao_atividade_data_atividade_idx');
			$table->integer('mes');
			$table->integer('ano');
			$table->primary(['id_obrigacao_atividade','id_ciclo_obrigacao','id_data_obrigacao','id_data_atividade']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('data_obrigacao_atividade');
	}

}

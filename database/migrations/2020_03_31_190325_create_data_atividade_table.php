<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDataAtividadeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('data_atividade', function(Blueprint $table)
		{
			$table->integer('id_data_atividade', true);
			$table->integer('id_atividade')->nullable()->index('fk_data_atividade_atividade_idx');
			$table->integer('id_status_atividade')->nullable()->index('fk_data_atividade_status_atividade_idx');
			$table->integer('id_status_atividade_api')->nullable()->index('fk_data_atividade_status_atividade_api_idx');
			$table->date('data_vencimento');
			$table->integer('concluida')->nullable();
			$table->date('data_conclusao')->nullable();
			$table->string('workflow', 150)->nullable();
			$table->string('valor', 45)->nullable();
			$table->string('valor_periodo_anterior', 45)->nullable();
			$table->string('valor_atividade_anterior', 45)->nullable();
			$table->integer('usuario_responsavel')->nullable()->index('fk_data_atividade_usuario_idx');
			$table->string('comentario', 150)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('data_atividade');
	}

}

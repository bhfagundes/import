<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatusAtividadeApiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('status_atividade_api', function(Blueprint $table)
		{
			$table->integer('id_status_atividade_api')->primary();
			$table->string('descricao_status', 450)->nullable();
			$table->boolean('acao_evidencia');
			$table->boolean('acao_efeito');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('status_atividade_api');
	}

}

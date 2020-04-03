<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDataAtividadeEvidenciaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('data_atividade_evidencia', function(Blueprint $table)
		{
			$table->integer('id_data_atividade_evidencia', true);
			$table->integer('id_data_atividade');
			$table->integer('id_evidencia')->index('fk_data_atividade_evidencia_evidencia_idx');
			$table->string('url_anexo', 450)->nullable();
			$table->integer('valor')->nullable();
			$table->string('comentario', 450)->nullable();
			$table->boolean('integracao')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('data_atividade_evidencia');
	}

}

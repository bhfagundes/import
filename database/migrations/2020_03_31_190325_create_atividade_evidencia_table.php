<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAtividadeEvidenciaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('atividade_evidencia', function(Blueprint $table)
		{
			$table->integer('id_atividade')->index('fk_atividade_evidencia_atividade_idx');
			$table->integer('id_evidencia')->index('fk_atividade_evidencia_evidencia_idx');
			$table->boolean('mandatoria');
			$table->boolean('conclusao_auto');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('atividade_evidencia');
	}

}

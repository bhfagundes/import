<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAtividadeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('atividade', function(Blueprint $table)
		{
			$table->integer('id_atividade', true);
			$table->integer('id_tipo_atividade')->index('fk_tipo_atividade_idx');
			$table->integer('id_obrigacao')->index('fk_obrigacao_idx');
			$table->integer('id_codigo_receita')->nullable()->index('fk_codigo_receita_idx');
			$table->integer('ordem')->nullable();
			$table->integer('is_critica')->nullable();
			$table->date('data')->nullable();
			$table->integer('regra_dia_util')->nullable();
			$table->integer('usuario_responsavel')->nullable()->index('fk_atividade_usuario_idx');
			$table->integer('tipo_dia')->nullable();
			$table->integer('quantidade_dias')->nullable();
			$table->integer('id_status_atividade_api')->nullable()->index('fk_atividade_status_atividade_api_idx');
			$table->boolean('mandatoria');
			$table->boolean('conclusao_auto');
			$table->primary(['id_atividade','id_obrigacao']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('atividade');
	}

}

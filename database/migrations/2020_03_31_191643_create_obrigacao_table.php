<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateObrigacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('obrigacao', function(Blueprint $table)
		{
			$table->integer('id_obrigacao', true);
			$table->integer('usuario')->index('fk_usuario_obrigacao_idx');
			$table->integer('id_origem_obrigacao')->index('fk_id_origem_obrigacao_idx');
			$table->integer('id_tipo_obrigacao')->index('fk_id_tipo_obrigacao');
			$table->integer('id_ciclo_obrigacao')->index('fk_id_ciclo_obrigacao_idx');
			$table->integer('id_documento_obrigacao')->nullable()->index('fk_id_documento_obrigacao_idx');
			$table->string('especificidade', 45)->nullable();
			$table->string('link_obrigacao', 450)->nullable();
			$table->date('data_publicacao')->nullable();
			$table->date('data_vigencia_inicio')->nullable();
			$table->date('data_vigencia_fim')->nullable();
			$table->boolean('exibe_calendario')->default(0);
			$table->integer('id_ato')->unsigned()->nullable()->index('fk_obrigacao_ato_idx');
			$table->integer('cod_aux_ato')->nullable();
			$table->integer('id_cod_receita')->nullable()->index('fk_obrigacao_codigo_receita_idx');
			$table->integer('idx_ordem')->nullable();
			$table->integer('codigo_receita')->nullable();
			$table->integer('id_estado');
			$table->integer('id_cidade');
			$table->string('nome_obrigacao', 450)->nullable();
			$table->integer('id_periodo_obrigacao')->nullable()->index('fk_obrigacao_periodo_obrigacao_idx');
			$table->date('data_vencimento')->nullable();
			$table->integer('qtde_dias_vencimento')->nullable();
			$table->integer('mes_vencimento')->nullable();
			$table->integer('regra_dia_nao_util')->nullable();
			$table->integer('tipo_dia')->nullable();
			$table->integer('dia_vencimento')->nullable();
			$table->integer('ult_dia_mes')->nullable();
			$table->primary(['id_obrigacao','id_estado','id_cidade']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('obrigacao');
	}

}

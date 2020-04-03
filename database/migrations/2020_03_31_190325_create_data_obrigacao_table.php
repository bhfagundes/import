<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDataObrigacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('data_obrigacao', function(Blueprint $table)
		{
			$table->integer('id_data_obrigacao', true);
			$table->integer('id_obrigacao')->index('fk_obrigacao_idx');
			$table->integer('id_periodo_obrigacao')->nullable()->index('fk_periodo_obrigacao_idx');
			$table->date('data_vencimento')->nullable();
			$table->integer('qtde_dias_vencimento')->nullable();
			$table->integer('mes_vencimento')->nullable();
			$table->integer('regra_dia_nao_util')->nullable();
			$table->integer('tipo_dia')->nullable();
			$table->integer('dia_vencimento')->nullable();
			$table->integer('id_tipo_obrigacao')->index('fk_tipo_obrigacao_data_idx');
			$table->integer('id_codigo_receita')->nullable()->index('fk_codigo_receita_data_idx');
			$table->integer('ult_dia_mes')->nullable();
			$table->integer('id_ato')->unsigned()->nullable()->index('fk_data_obrigacao_ato_idx');
			$table->integer('cod_aux_ato')->nullable();
			$table->date('data_conclusao')->nullable();
			$table->primary(['id_data_obrigacao','id_obrigacao','id_tipo_obrigacao']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('data_obrigacao');
	}

}

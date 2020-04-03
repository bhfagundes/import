<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEfeitoAtoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('efeito_ato', function(Blueprint $table)
		{
			$table->increments('id_efeito_ato');
			$table->integer('id_ato')->unsigned()->index('fk_ato_idx');
			$table->string('codigo_efeito', 450)->nullable();
			$table->string('descricao_efeito', 450)->nullable();
			$table->date('data_referencia')->nullable();
			$table->date('data_publicacao')->nullable();
			$table->date('data_vigencia_inicio')->nullable();
			$table->date('data_vigencia_fim')->nullable();
			$table->date('data_atualizacao_ato')->nullable();
			$table->integer('id_status')->unsigned()->nullable()->index('fk_status_idx');
			$table->integer('usuario')->nullable();
			$table->string('link_acesso', 450)->nullable();
			$table->integer('id_impacto')->unsigned()->nullable()->index('fk_impacto_idx');
			$table->string('processos', 450)->nullable();
			$table->string('workflows', 450)->nullable();
			$table->integer('id_tipo_efeito')->nullable()->index('fk_id_tipo_efeito');
			$table->string('api', 450)->nullable();
			$table->date('data_leitura_ato');
			$table->text('acao_efeito')->nullable();
			$table->integer('id_impacto_cliente')->unsigned()->nullable()->index('fk_impacto_cliente_idx');
			$table->integer('ciencia')->nullable();
			$table->string('artigo_clausula', 45)->nullable();
			$table->date('data_ciencia')->nullable();
			$table->date('data_aprovacao')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('efeito_ato');
	}

}

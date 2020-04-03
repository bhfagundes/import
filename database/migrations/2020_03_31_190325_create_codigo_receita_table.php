<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCodigoReceitaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('codigo_receita', function(Blueprint $table)
		{
			$table->integer('id_codigo_receita', true);
			$table->integer('codigo_receita');
			$table->string('descricao_receita', 450)->nullable();
			$table->integer('id_tipo_obrigacao')->index('fk_tipo_obrigacao_receita_idx');
			$table->integer('id_estado')->nullable()->index('fk_estado_codigo_receita_idx');
			$table->integer('id_municipio')->nullable()->index('fk_municipio_codigo_receita_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('codigo_receita');
	}

}

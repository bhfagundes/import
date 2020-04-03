<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApiGrupoFornecedoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('api_grupo_fornecedores', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_integracao_fornecedor')->index('api_grupo_fornecedores_FK');
			$table->integer('id_grupo_robo')->index('api_grupo_fornecedores_FK_1');
			$table->integer('id_tipo_fornecedor');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('api_grupo_fornecedores');
	}

}

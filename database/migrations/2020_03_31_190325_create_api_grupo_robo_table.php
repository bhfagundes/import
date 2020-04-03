<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApiGrupoRoboTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('api_grupo_robo', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_robo');
			$table->integer('id_integracao_fornecedor');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('api_grupo_robo');
	}

}

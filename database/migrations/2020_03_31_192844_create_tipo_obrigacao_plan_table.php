<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipoObrigacaoPlanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipo_obrigacao_plan', function(Blueprint $table)
		{
			$table->text('descricao_tipo_obrigacao', 65535)->nullable();
			$table->text('titulo_tipo_obrigacao', 65535)->nullable();
			$table->integer('ID_tipo_obrigacao')->nullable();
			$table->integer('id_area_tematica')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tipo_obrigacao_plan');
	}

}

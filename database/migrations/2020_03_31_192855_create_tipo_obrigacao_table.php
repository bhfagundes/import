<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipoObrigacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipo_obrigacao', function(Blueprint $table)
		{
			$table->integer('id_tipo_obrigacao', true);
			$table->string('descricao_tipo_obrigacao', 450)->nullable();
			$table->integer('id_area_tematica')->unsigned()->index('fk_tipo_area_tematica_idx');
			$table->string('titulo_tipo_obrigacao', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tipo_obrigacao');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriaConsultaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categoria_consulta', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_categoria')->nullable()->index('fk_categoria_consulta_categoria_idx');
			$table->integer('id_consulta')->nullable()->index('fk_categoria_consulta_consulta_idx');
			$table->integer('id_status')->nullable()->index('fk_categoria_consulta_status_idx');
			$table->integer('id_obrigatoriedade')->nullable();
			$table->integer('id_principal')->nullable()->index('fk_categoria_consulta_principal_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('categoria_consulta');
	}

}

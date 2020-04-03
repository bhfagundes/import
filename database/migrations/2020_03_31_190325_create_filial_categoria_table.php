<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilialCategoriaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('filial_categoria', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_filial')->index('fk_filial_categoria_filial_idx');
			$table->integer('id_categoria')->index('fk_filial_categoria_categoria_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('filial_categoria');
	}

}

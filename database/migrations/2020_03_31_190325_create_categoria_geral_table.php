<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriaGeralTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categoria_geral', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nome', 45);
			$table->integer('id_principal')->index('fk_categoria_geral_principal_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('categoria_geral');
	}

}

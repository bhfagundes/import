<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFornecedorCategoria3Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fornecedor_categoria_3', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('cod', 45);
			$table->string('nome', 100);
			$table->integer('id_cat_2')->index('id_cat_2');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fornecedor_categoria_3');
	}

}

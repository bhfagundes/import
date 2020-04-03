<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFornecedorCategoriaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fornecedor_categoria', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_empresa')->index('fk_fornecedor_categoria_empresa_idx');
			$table->integer('id_categoria')->index('fk_fornecedor_categoria_categoria_4_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fornecedor_categoria');
	}

}

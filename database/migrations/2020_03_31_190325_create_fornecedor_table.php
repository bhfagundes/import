<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFornecedorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fornecedor', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_principal')->index('fk_fornecedor_principal_idx');
			$table->integer('id_empresa')->index('fk_fornecedor_empresa_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fornecedor');
	}

}

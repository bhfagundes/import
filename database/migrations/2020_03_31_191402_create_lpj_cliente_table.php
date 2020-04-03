<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLpjClienteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lpj_cliente', function(Blueprint $table)
		{
			$table->integer('id_lpj_cliente', true);
			$table->string('nome_fantasia', 500);
			$table->string('razao_social', 500)->nullable();
			$table->string('cnpj', 500);
			$table->string('endereco', 500)->nullable();
			$table->string('telefone1', 45)->nullable();
			$table->string('telefone2', 45)->nullable();
			$table->string('telefone3', 45)->nullable();
			$table->string('site', 500)->nullable();
			$table->string('inscricao_estadual', 500)->nullable();
			$table->string('inscricao_municipal', 500)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('lpj_cliente');
	}

}

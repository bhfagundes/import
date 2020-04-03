<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApiDividaAtivaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('api_divida_ativa', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('cnpj', 20)->nullable();
			$table->string('codigo_certidao', 100)->nullable();
			$table->string('situacao_cadastral', 100)->nullable();
			$table->string('inscricao_estadual', 16)->nullable();
			$table->string('razao_social', 100)->nullable();
			$table->string('nome_fantasia', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('api_divida_ativa');
	}

}

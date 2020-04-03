<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApiCndFgtsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('api_cnd_fgts', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('cnpj', 20)->nullable();
			$table->date('validade_inicial')->nullable();
			$table->date('validade_final')->nullable();
			$table->string('situacao', 100)->nullable();
			$table->string('codigo_situacao', 40)->nullable();
			$table->string('situacao_certidao', 20)->nullable();
			$table->string('emissao', 100)->nullable();
			$table->dateTime('consulta')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('api_cnd_fgts');
	}

}

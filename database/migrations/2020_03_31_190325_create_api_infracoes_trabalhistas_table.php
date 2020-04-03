<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApiInfracoesTrabalhistasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('api_infracoes_trabalhistas', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('cnpj', 20)->nullable();
			$table->date('data_emissao')->nullable();
			$table->string('codigo_situacao', 50)->nullable();
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
		Schema::drop('api_infracoes_trabalhistas');
	}

}

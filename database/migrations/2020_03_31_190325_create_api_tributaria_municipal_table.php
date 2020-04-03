<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApiTributariaMunicipalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('api_tributaria_municipal', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('cnpj', 20)->nullable();
			$table->string('codigo_situacao', 20)->nullable();
			$table->string('razao_social', 20)->nullable();
			$table->char('data_situacao', 2)->nullable();
			$table->string('situacao_anterior', 100)->nullable();
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
		Schema::drop('api_tributaria_municipal');
	}

}

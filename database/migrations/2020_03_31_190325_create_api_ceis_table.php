<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApiCeisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('api_ceis', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('cnpj', 20)->nullable();
			$table->string('tipo', 100)->nullable();
			$table->date('data_final')->nullable();
			$table->string('nome_orgao', 100)->nullable();
			$table->string('uf', 3)->nullable();
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
		Schema::drop('api_ceis');
	}

}

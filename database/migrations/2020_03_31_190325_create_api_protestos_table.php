<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApiProtestosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('api_protestos', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('cnpj', 20)->nullable();
			$table->string('situacao_cnpj', 100)->nullable();
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
		Schema::drop('api_protestos');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApiFgtsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('api_fgts', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('cnpj', 20)->nullable();
			$table->date('validade_inicial')->nullable();
			$table->date('validade_final')->nullable();
			$table->string('situacao', 50)->nullable();
			$table->integer('codigo_situacao')->nullable();
			$table->string('certificacao', 100)->nullable();
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
		Schema::drop('api_fgts');
	}

}

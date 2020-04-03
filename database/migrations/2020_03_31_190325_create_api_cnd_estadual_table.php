<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApiCndEstadualTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('api_cnd_estadual', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('cnpj', 20)->nullable();
			$table->char('uf_parametro', 2)->nullable();
			$table->string('tipo_certidao', 100)->nullable();
			$table->integer('codigo_certidao');
			$table->integer('numero_certidao')->nullable();
			$table->date('validade')->nullable();
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
		Schema::drop('api_cnd_estadual');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApiSimplesNacionalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('api_simples_nacional', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->smallInteger('situacao')->nullable();
			$table->date('data_situacao')->nullable();
			$table->text('descricao_situacao', 65535)->nullable();
			$table->string('situacao_simei', 100)->nullable();
			$table->text('situacao_anterior', 65535)->nullable();
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
		Schema::drop('api_simples_nacional');
	}

}

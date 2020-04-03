<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApiSuframaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('api_suframa', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('cnpj', 20)->nullable();
			$table->string('inscricao_suframa', 20)->nullable();
			$table->string('uf', 2)->nullable();
			$table->string('email', 40)->nullable();
			$table->string('telefone', 20)->nullable();
			$table->string('atividades_estaduais', 100)->nullable();
			$table->string('tipos_incentivos', 100)->nullable();
			$table->string('situacao_cadastral', 100)->nullable();
			$table->string('codigo_situacao_cadastral', 20)->nullable();
			$table->date('validade_cadastral')->nullable();
			$table->text('motivo_bloqueio', 65535)->nullable();
			$table->text('observacao', 65535)->nullable();
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
		Schema::drop('api_suframa');
	}

}

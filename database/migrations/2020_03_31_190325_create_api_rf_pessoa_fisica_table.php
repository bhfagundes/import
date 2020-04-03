<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApiRfPessoaFisicaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('api_rf_pessoa_fisica', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('cpf', 20)->nullable();
			$table->date('data_nascimento')->nullable();
			$table->string('nome_pessoa_fisica', 100)->nullable();
			$table->string('situacao_cadastral', 100)->nullable();
			$table->integer('codigo_situacao')->nullable();
			$table->date('data_inscricao')->nullable();
			$table->integer('obito')->nullable();
			$table->integer('ano_obito')->nullable();
			$table->string('codigo_controlhe_comprovante', 100)->nullable();
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
		Schema::drop('api_rf_pessoa_fisica');
	}

}

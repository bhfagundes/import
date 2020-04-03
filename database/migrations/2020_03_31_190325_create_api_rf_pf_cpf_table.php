<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApiRfPfCpfTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('api_rf_pf_cpf', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('cpf', 20)->nullable();
			$table->date('data_nascimento_parametro')->nullable();
			$table->string('nome_pessoa_fisica', 100)->nullable();
			$table->string('situacao_cadastral', 30)->nullable();
			$table->integer('codigo_situacao_cadastral')->nullable();
			$table->smallInteger('obito')->nullable();
			$table->integer('ano_obito')->nullable();
			$table->date('data_inscricao')->nullable();
			$table->string('codigo_controlhe_comprovante', 100)->nullable();
			$table->dateTime('consulta')->nullable();
			$table->integer('status_transacao')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('api_rf_pf_cpf');
	}

}

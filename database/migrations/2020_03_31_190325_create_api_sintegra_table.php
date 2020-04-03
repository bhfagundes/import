<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApiSintegraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('api_sintegra', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('cnpj', 20)->nullable();
			$table->string('inscricao_estadual', 20)->nullable();
			$table->string('uf', 2)->nullable();
			$table->string('email', 40)->nullable();
			$table->string('telefone', 20)->nullable();
			$table->string('codigo_ibge', 20)->nullable();
			$table->date('data_abertura')->nullable();
			$table->date('inicio_atividades')->nullable();
			$table->string('codigo_situacao_cadastral', 20)->nullable();
			$table->date('data_situacao_cadastral')->nullable();
			$table->text('motivo_situacao_cadastral', 65535)->nullable();
			$table->integer('numero_consulta')->nullable();
			$table->string('regime_apuracao', 100)->nullable();
			$table->string('regime_recolhimento', 100)->nullable();
			$table->string('regime_pagamento', 100)->nullable();
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
		Schema::drop('api_sintegra');
	}

}

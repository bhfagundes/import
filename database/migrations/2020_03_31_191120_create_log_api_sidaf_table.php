<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogApiSidafTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('log_api_sidaf', function(Blueprint $table)
		{
			$table->integer('id_log', true);
			$table->string('cnpj', 450)->nullable();
			$table->string('cnpj_credor', 450)->nullable();
			$table->integer('codigo_pagamento')->nullable();
			$table->string('imposto', 450)->nullable();
			$table->string('guia', 450)->nullable();
			$table->string('num_guia', 450)->nullable();
			$table->integer('codigo_situacao')->nullable();
			$table->string('vlr_principal', 450)->nullable();
			$table->string('vlr_multa', 450)->nullable();
			$table->string('vlr_juro', 450)->nullable();
			$table->string('vlr_outra_ent', 450)->nullable();
			$table->string('vlr_atualizacao_monet', 450)->nullable();
			$table->string('vlr_total', 450)->nullable();
			$table->date('data_vencimento')->nullable();
			$table->date('data_pagamento')->nullable();
			$table->string('sigla_resp', 450)->nullable();
			$table->date('data_emissao')->nullable();
			$table->string('sigla_aprov_area', 450)->nullable();
			$table->date('data_aprov_area')->nullable();
			$table->string('taxa_expediente', 450)->nullable();
			$table->string('competencia', 450)->nullable();
			$table->string('observacao', 450)->nullable();
			$table->boolean('status_recebimento');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('log_api_sidaf');
	}

}

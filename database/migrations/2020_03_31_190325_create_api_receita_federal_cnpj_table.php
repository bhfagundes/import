<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApiReceitaFederalCnpjTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('api_receita_federal_cnpj', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('cnpj', 20)->nullable();
			$table->string('inscricao_estadual', 20)->nullable();
			$table->string('codigo_ibge', 100)->nullable();
			$table->string('email', 100)->nullable();
			$table->date('data_abertura')->nullable();
			$table->string('situacao_cadastral', 100)->nullable();
			$table->integer('codigo_situacao_cadastral')->nullable();
			$table->date('data_situacao_cadastral')->nullable();
			$table->string('motivo_situacao_cadastral', 100)->nullable();
			$table->integer('numero_consulta')->nullable();
			$table->dateTime('consulta')->nullable();
			$table->string('numero_inscricao', 20)->nullable();
			$table->string('tipo_empresa', 10)->nullable();
			$table->string('nome_empresarial', 100)->nullable();
			$table->string('titulo_estabelecimento', 100)->nullable();
			$table->string('porte', 10)->nullable();
			$table->string('codigo_descricao_atividades', 100)->nullable();
			$table->string('codigo_descricao_atividade_secundaria', 100)->nullable();
			$table->string('codigo_descricao_nat_juridica', 100)->nullable();
			$table->string('logradouro', 100)->nullable();
			$table->integer('numero')->nullable();
			$table->string('complemento', 100)->nullable();
			$table->string('cep', 10)->nullable();
			$table->string('bairro', 100)->nullable();
			$table->string('municipio', 100)->nullable();
			$table->string('uf', 10)->nullable();
			$table->string('telefone', 15)->nullable();
			$table->string('ente_federativo_responsavel', 100)->nullable();
			$table->smallInteger('status')->nullable();
			$table->string('situacao_especial', 100)->nullable();
			$table->date('data_situacao_especial')->nullable();
			$table->string('cnpj_qsa', 20)->nullable();
			$table->string('nome_empresarial_qsa', 100)->nullable();
			$table->string('capital_social_qsa', 100)->nullable();
			$table->string('nome_empresarial_qualificacao_qsa', 100)->nullable();
			$table->integer('status_transacao')->nullable();
			$table->integer('ind_bloqueio')->nullable();
			$table->integer('tipo_forn_cliente')->nullable();
			$table->string('inscricao_municipal', 20)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('api_receita_federal_cnpj');
	}

}

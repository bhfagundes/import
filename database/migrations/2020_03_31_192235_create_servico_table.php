<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('servico', function(Blueprint $table)
		{
			$table->integer('id_servico', true);
			$table->string('uf_origem', 2)->nullable();
			$table->string('uf_destino', 2)->nullable();
			$table->integer('cnae_entidade_origem')->nullable();
			$table->integer('cnae_entidade_destino')->nullable();
			$table->integer('municipio_origem')->nullable();
			$table->integer('municipio_destino')->nullable();
			$table->integer('municipio_fato_gerador')->nullable();
			$table->string('generico_1', 100)->nullable();
			$table->string('chave_banco', 50)->nullable();
			$table->integer('id_item_nota')->nullable();
			$table->decimal('valor_servico', 13, 4)->nullable();
			$table->decimal('valor_desconto_incondicional', 13, 4)->nullable();
			$table->decimal('valor_desconto_condicional', 13, 4)->nullable();
			$table->decimal('valor_deducoes', 13, 4)->nullable();
			$table->integer('codigo_servico')->nullable();
			$table->integer('codigo_servico_execucao')->nullable();
			$table->string('generico_2', 100)->nullable();
			$table->string('cnpj_remetente', 100)->nullable();
			$table->string('cnpj_destinatario', 100)->nullable();
			$table->string('valor_abatido_inss', 100)->nullable();
			$table->string('tipo_nota', 100)->nullable();
			$table->dateTime('timestamp_recepcao_sigvc')->nullable();
			$table->dateTime('timestamp_devolucao_systax')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('servico');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOcmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ocm', function(Blueprint $table)
		{
			$table->integer('id_ocm', true);
			$table->integer('sistema_origem');
			$table->dateTime('data_calculo');
			$table->string('uf_origem', 40);
			$table->string('uf_destino', 40);
			$table->boolean('tipo_operacao');
			$table->string('cnpj_remetente', 14);
			$table->string('cnpj_destinatario', 14);
			$table->integer('cnae_remetente')->nullable();
			$table->integer('cnae_destinatario')->nullable();
			$table->integer('municipio_origem')->nullable();
			$table->integer('municipio_destino')->nullable();
			$table->boolean('imposto_ativa')->nullable();
			$table->string('generico', 200)->nullable();
			$table->string('chave_banco', 50)->nullable();
			$table->decimal('outras_despesas', 13, 4)->nullable();
			$table->decimal('valor_imposto_importacao', 13, 4)->nullable();
			$table->decimal('base_calculo_imposto_importacao', 13, 4)->nullable();
			$table->decimal('valor_iof', 13, 4)->nullable();
			$table->decimal('valor_encargos_cambiais', 13, 4)->nullable();
			$table->string('numero_ocm', 100);
			$table->boolean('tipo_calculo');
			$table->dateTime('timestamp_recepcao_sisup');
			$table->dateTime('timestamp_devolucao_systax')->nullable();
			$table->integer('id_status_ocm')->index('ocm_status_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ocm');
	}

}

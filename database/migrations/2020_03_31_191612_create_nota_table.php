<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNotaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nota', function(Blueprint $table)
		{
			$table->integer('id_nota', true);
			$table->integer('id_ocm')->index('ocm_nota_idx');
			$table->integer('id_pre_nota')->nullable()->index('pre_nota_nota');
			$table->string('cnpj_emitente', 14);
			$table->string('cnpj_destinatario', 14);
			$table->string('url_danfe_nota', 200)->nullable();
			$table->string('url_xml_nota', 200);
			$table->dateTime('timestamp_recepcao_nota');
			$table->string('chave_acesso', 44)->nullable();
			$table->string('numero_nota', 12)->nullable();
			$table->string('serie', 3)->nullable();
			$table->string('subserie', 2)->nullable();
			$table->integer('origem');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nota');
	}

}

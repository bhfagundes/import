<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePreNotaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pre_nota', function(Blueprint $table)
		{
			$table->integer('id_pre_nota', true);
			$table->integer('id_ocm')->index('ocm_pre_nota_idx');
			$table->string('cnpj_emitente', 14);
			$table->string('cnpj_destinatario', 14);
			$table->string('url_danfe_pre_nota', 200);
			$table->string('url_xml_pre_nota', 200);
			$table->integer('id_status_pre_nota')->index('status_pre_nota_pre_nota_idx');
			$table->dateTime('timestamp_recepcao_pre_nota');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pre_nota');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgrupamentoDocumentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agrupamento_documentos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_agrupamento')->index('fk_agrupamento_documentos_agrupamento_idx');
			$table->integer('id_documento')->index('fk_agrupamento_documentos_documentos_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('agrupamento_documentos');
	}

}

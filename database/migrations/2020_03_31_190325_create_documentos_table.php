<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('documentos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nome');
			$table->dateTime('dt_cadastro');
			$table->string('arquivo');
			$table->string('extensao', 4);
			$table->string('img');
			$table->integer('id_filial')->index('fk_anexos_filial_idx');
			$table->date('dt_validade')->nullable();
			$table->integer('id_status')->nullable()->index('fk_anexos_status_idx');
			$table->integer('id_tipo')->nullable()->index('fk_anexos_tipo_idx');
			$table->integer('id_obrigatorio')->nullable()->index('fk_documentos_obrigatorios_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('documentos');
	}

}

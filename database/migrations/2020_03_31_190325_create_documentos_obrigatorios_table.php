<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentosObrigatoriosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('documentos_obrigatorios', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nome', 100)->nullable();
			$table->integer('id_tipo')->nullable()->index('fk_documentos_obrigatorios_tipo_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('documentos_obrigatorios');
	}

}

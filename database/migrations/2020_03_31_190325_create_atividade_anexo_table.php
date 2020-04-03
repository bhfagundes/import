<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAtividadeAnexoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('atividade_anexo', function(Blueprint $table)
		{
			$table->integer('id_atividade_anexo', true);
			$table->string('nome', 100)->nullable();
			$table->dateTime('data_cadastro')->nullable();
			$table->string('arquivo', 100)->nullable();
			$table->string('extensao', 10)->nullable();
			$table->integer('id_data_atividade')->index('fk_atividade_anexo_data_atividade_idx');
			$table->date('data_validade')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('atividade_anexo');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmpresaSociosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('empresa_socios', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_empresa')->nullable()->index('fk_empresa_socios_filial_idx');
			$table->string('nome', 45)->nullable();
			$table->string('cpf', 45)->nullable();
			$table->integer('percentage')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('empresa_socios');
	}

}

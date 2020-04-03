<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnexosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('anexos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nome');
			$table->string('arquivo')->nullable();
			$table->string('extensao', 5)->nullable();
			$table->string('img', 100)->nullable();
			$table->date('dt_validade')->nullable();
			$table->integer('id_filial')->nullable()->index('fk_anexos_filial_idx');
			$table->dateTime('dt_cadastro')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('anexos');
	}

}

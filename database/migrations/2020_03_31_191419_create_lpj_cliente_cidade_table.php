<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLpjClienteCidadeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lpj_cliente_cidade', function(Blueprint $table)
		{
			$table->integer('id_lpj_cliente')->primary();
			$table->integer('id_cidade')->index('fk_lpj_cliente_cidade_cidade_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('lpj_cliente_cidade');
	}

}

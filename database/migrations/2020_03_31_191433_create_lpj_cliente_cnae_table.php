<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLpjClienteCnaeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lpj_cliente_cnae', function(Blueprint $table)
		{
			$table->integer('id_lpj_cliente')->primary();
			$table->integer('id_cnae')->index('fk_lpj_cliente_cnae_cnae_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('lpj_cliente_cnae');
	}

}

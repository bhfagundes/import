<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilialCnaeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('filial_cnae', function(Blueprint $table)
		{
			$table->integer('id_filial')->index('fk_filial_cnae_filial_idx');
			$table->integer('id_cnae')->index('fk_filial_cnae_cnae_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('filial_cnae');
	}

}

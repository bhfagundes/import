<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDataObrigacaoCnaeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('data_obrigacao_cnae', function(Blueprint $table)
		{
			$table->integer('id_data_obrigacao')->index('fk_data_obrigacao_data_idx');
			$table->integer('id_cnae')->index('fk_data_obrigacao_cnae_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('data_obrigacao_cnae');
	}

}

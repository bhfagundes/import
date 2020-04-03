<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRelacEmpresaCnaeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('relac_empresa_cnae', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_empresa')->index('fk_relac_empresa_cnae_filial_idx');
			$table->integer('id_cnae')->index('fk_relac_empresa_cnae_empresa_cnae_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('relac_empresa_cnae');
	}

}

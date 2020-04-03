<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmpresaCnaeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('empresa_cnae', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('numero', 45);
			$table->text('descricao', 65535)->nullable();
			$table->integer('id_tipo')->index('fk_empresa_cnae_tipo_cnae_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('empresa_cnae');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuarioFilialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuario_filial', function(Blueprint $table)
		{
			$table->integer('id_usuario')->index('fk_usuario_filial_usuario_idx');
			$table->integer('id_filial')->index('fk_usuario_filial_filial_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuario_filial');
	}

}

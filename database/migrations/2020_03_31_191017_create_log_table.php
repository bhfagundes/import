<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('log', function(Blueprint $table)
		{
			$table->increments('id_log');
			$table->integer('id_usuario')->nullable()->index('fk_usuario_idx');
			$table->integer('id_acao_sistema')->unsigned()->nullable()->index('fk_acao_sistema_idx');
			$table->integer('id_referencia')->nullable();
			$table->dateTime('data')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('log');
	}

}

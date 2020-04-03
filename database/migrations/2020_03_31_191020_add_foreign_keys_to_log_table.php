<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('log', function(Blueprint $table)
		{
			$table->foreign('id_acao_sistema', 'fk_acao_sistema')->references('id_acao_sistema')->on('acao_sistema')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_usuario', 'fk_usuario')->references('id')->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('log', function(Blueprint $table)
		{
			$table->dropForeign('fk_acao_sistema');
			$table->dropForeign('fk_usuario');
		});
	}

}

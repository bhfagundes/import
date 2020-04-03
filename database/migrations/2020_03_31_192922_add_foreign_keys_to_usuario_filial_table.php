<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsuarioFilialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('usuario_filial', function(Blueprint $table)
		{
			$table->foreign('id_usuario', 'fk_usuario_filial_usuario')->references('id')->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_filial', 'fk_usuario_filial_filial')->references('id')->on('filial')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('usuario_filial', function(Blueprint $table)
		{
			$table->dropForeign('fk_usuario_filial_usuario');
			$table->dropForeign('fk_usuario_filial_filial');
		});
	}

}

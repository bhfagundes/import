<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLpjClienteEstadoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('lpj_cliente_estado', function(Blueprint $table)
		{
			$table->foreign('id_lpj_cliente', 'fk_lpj_cliente_estado_cliente')->references('id_lpj_cliente')->on('lpj_cliente')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_estado', 'fk_lpj_cliente_estado_estado')->references('id')->on('estados')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('lpj_cliente_estado', function(Blueprint $table)
		{
			$table->dropForeign('fk_lpj_cliente_estado_cliente');
			$table->dropForeign('fk_lpj_cliente_estado_estado');
		});
	}

}

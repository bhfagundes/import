<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLpjClienteCidadeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('lpj_cliente_cidade', function(Blueprint $table)
		{
			$table->foreign('id_lpj_cliente', 'fk_lpj_cliente_cidade_cliente')->references('id_lpj_cliente')->on('lpj_cliente')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_cidade', 'fk_lpj_cliente_cidade_cidade')->references('id')->on('cidades')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('lpj_cliente_cidade', function(Blueprint $table)
		{
			$table->dropForeign('fk_lpj_cliente_cidade_cliente');
			$table->dropForeign('fk_lpj_cliente_cidade_cidade');
		});
	}

}

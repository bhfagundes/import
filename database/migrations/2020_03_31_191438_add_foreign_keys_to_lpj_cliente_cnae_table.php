<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLpjClienteCnaeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('lpj_cliente_cnae', function(Blueprint $table)
		{
			$table->foreign('id_lpj_cliente', 'fk_lpj_cliente_cnae_cliente')->references('id_lpj_cliente')->on('lpj_cliente')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_cnae', 'fk_lpj_cliente_cnae_cnae')->references('id_cnae')->on('cnae')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('lpj_cliente_cnae', function(Blueprint $table)
		{
			$table->dropForeign('fk_lpj_cliente_cnae_cliente');
			$table->dropForeign('fk_lpj_cliente_cnae_cnae');
		});
	}

}

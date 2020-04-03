<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToNotaStatusHistoricoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('nota_status_historico', function(Blueprint $table)
		{
			$table->foreign('id_nota', 'nota_status_historico_ibfk_1')->references('id_nota')->on('nota')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_status_nota', 'nota_status_historico_ibfk_2')->references('id_status_nota')->on('status_nota')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_processo', 'nota_status_historico_ibfk_3')->references('id_processo')->on('processo_nota')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('nota_status_historico', function(Blueprint $table)
		{
			$table->dropForeign('nota_status_historico_ibfk_1');
			$table->dropForeign('nota_status_historico_ibfk_2');
			$table->dropForeign('nota_status_historico_ibfk_3');
		});
	}

}

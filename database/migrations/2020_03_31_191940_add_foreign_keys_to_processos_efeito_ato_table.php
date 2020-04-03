<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProcessosEfeitoAtoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('processos_efeito_ato', function(Blueprint $table)
		{
			$table->foreign('id_efeito_ato', 'fk_efeito_ato')->references('id_efeito_ato')->on('efeito_ato')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_processo', 'fk_processos')->references('id')->on('processos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('processos_efeito_ato', function(Blueprint $table)
		{
			$table->dropForeign('fk_efeito_ato');
			$table->dropForeign('fk_processos');
		});
	}

}

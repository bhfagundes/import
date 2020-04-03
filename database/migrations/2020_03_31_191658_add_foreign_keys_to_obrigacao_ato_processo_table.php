<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToObrigacaoAtoProcessoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('obrigacao_ato_processo', function(Blueprint $table)
		{
			$table->foreign('id_obrigacao', 'fk_obrigacao')->references('id_obrigacao')->on('obrigacao')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_processo', 'fk_processo_obrigacao')->references('id')->on('processos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_ato', 'fk_ato_obrigacao')->references('id_ato')->on('ato_remodelagem')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('obrigacao_ato_processo', function(Blueprint $table)
		{
			$table->dropForeign('fk_obrigacao');
			$table->dropForeign('fk_processo_obrigacao');
			$table->dropForeign('fk_ato_obrigacao');
		});
	}

}

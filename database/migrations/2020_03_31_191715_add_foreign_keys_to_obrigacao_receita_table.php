<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToObrigacaoReceitaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('obrigacao_receita', function(Blueprint $table)
		{
			$table->foreign('id_obrigacao', 'fk_obrigacao_receita')->references('id_obrigacao')->on('obrigacao')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_codigo_receita', 'fk_id_codigo_receita')->references('id_codigo_receita')->on('codigo_receita')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('obrigacao_receita', function(Blueprint $table)
		{
			$table->dropForeign('fk_obrigacao_receita');
			$table->dropForeign('fk_id_codigo_receita');
		});
	}

}

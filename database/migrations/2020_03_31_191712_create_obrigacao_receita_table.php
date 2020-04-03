<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateObrigacaoReceitaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('obrigacao_receita', function(Blueprint $table)
		{
			$table->integer('id_obrigacao')->index('fk_obrigacao_receita_idx');
			$table->integer('id_codigo_receita')->index('fk_codigo_receita_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('obrigacao_receita');
	}

}

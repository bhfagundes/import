<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateObrigacaoAtoProcessoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('obrigacao_ato_processo', function(Blueprint $table)
		{
			$table->integer('id_ato')->unsigned()->nullable()->index('fk_ato_obrigacao_idx');
			$table->integer('id_obrigacao')->index('fk_obrigacao_idx');
			$table->integer('id_processo')->index('fk_processo_obrigacao_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('obrigacao_ato_processo');
	}

}

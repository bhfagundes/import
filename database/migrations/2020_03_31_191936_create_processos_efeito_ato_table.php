<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProcessosEfeitoAtoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('processos_efeito_ato', function(Blueprint $table)
		{
			$table->integer('id_processo')->index('fk_processos');
			$table->integer('id_efeito_ato')->unsigned()->index('fk_efeito_ato_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('processos_efeito_ato');
	}

}

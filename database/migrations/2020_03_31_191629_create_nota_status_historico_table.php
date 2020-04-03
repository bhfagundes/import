<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNotaStatusHistoricoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nota_status_historico', function(Blueprint $table)
		{
			$table->integer('id_status_historico', true);
			$table->integer('id_nota')->index('id_nota');
			$table->integer('id_processo')->index('nota_status_historico_ibfk_3_idx');
			$table->integer('id_status_nota')->index('id_status_nota');
			$table->dateTime('timestamp_historico');
			$table->string('descricao', 500)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nota_status_historico');
	}

}

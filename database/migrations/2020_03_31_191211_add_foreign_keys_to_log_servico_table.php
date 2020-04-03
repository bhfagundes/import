<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLogServicoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('log_servico', function(Blueprint $table)
		{
			$table->foreign('id_servico', 'servico_log_servico')->references('id_servico')->on('servico')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_tipo_log', 'tipo_log_log_servico')->references('id_tipo_log')->on('tipo_log')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('log_servico', function(Blueprint $table)
		{
			$table->dropForeign('servico_log_servico');
			$table->dropForeign('tipo_log_log_servico');
		});
	}

}

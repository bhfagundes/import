<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogServicoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('log_servico', function(Blueprint $table)
		{
			$table->integer('id_log_material', true);
			$table->integer('id_tipo_log')->index('tipo_log_log_servico_idx');
			$table->integer('id_servico')->index('servico_log_servico_idx');
			$table->string('descricao_log', 120);
			$table->string('arquivo', 200)->nullable();
			$table->integer('linha')->nullable();
			$table->dateTime('timestamp_log');
			$table->integer('codigo');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('log_servico');
	}

}

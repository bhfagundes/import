<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogMaterialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('log_material', function(Blueprint $table)
		{
			$table->integer('id_log_material', true);
			$table->integer('id_tipo_log')->index('log_material_tipo_log_idx');
			$table->integer('id_material')->index('log_material_material_idx');
			$table->string('descricao_log', 120);
			$table->string('arquivo', 200)->nullable();
			$table->integer('linha')->nullable();
			$table->dateTime('timestamp_log');
			$table->integer('codigo')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('log_material');
	}

}

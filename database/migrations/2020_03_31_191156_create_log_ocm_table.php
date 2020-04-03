<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogOcmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('log_ocm', function(Blueprint $table)
		{
			$table->integer('id_log_ocm', true);
			$table->integer('id_tipo_log')->nullable()->index('log_ocm_tipo_idx');
			$table->integer('id_ocm')->nullable()->index('log_ocm_ocm_idx');
			$table->string('descricao_log', 120)->nullable();
			$table->string('arquivo', 200)->nullable();
			$table->integer('linha')->nullable();
			$table->dateTime('timestamp_log')->nullable();
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
		Schema::drop('log_ocm');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLogOcmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('log_ocm', function(Blueprint $table)
		{
			$table->foreign('id_ocm', 'log_ocm_ocm')->references('id_ocm')->on('ocm')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_tipo_log', 'log_ocm_tipo')->references('id_tipo_log')->on('tipo_log')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('log_ocm', function(Blueprint $table)
		{
			$table->dropForeign('log_ocm_ocm');
			$table->dropForeign('log_ocm_tipo');
		});
	}

}

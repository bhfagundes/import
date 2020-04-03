<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOcmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ocm', function(Blueprint $table)
		{
			$table->foreign('id_status_ocm', 'ocm_status')->references('id_status_ocm')->on('status_ocm')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ocm', function(Blueprint $table)
		{
			$table->dropForeign('ocm_status');
		});
	}

}

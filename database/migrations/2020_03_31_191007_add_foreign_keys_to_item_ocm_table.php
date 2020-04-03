<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToItemOcmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('item_ocm', function(Blueprint $table)
		{
			$table->foreign('id_ocm', 'ocm_item')->references('id_ocm')->on('ocm')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('item_ocm', function(Blueprint $table)
		{
			$table->dropForeign('ocm_item');
		});
	}

}

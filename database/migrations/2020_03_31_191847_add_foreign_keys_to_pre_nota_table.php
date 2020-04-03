<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPreNotaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pre_nota', function(Blueprint $table)
		{
			$table->foreign('id_ocm', 'ocm_pre_nota')->references('id_ocm')->on('ocm')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_status_pre_nota', 'status_pre_nota_pre_nota')->references('id_status_pre_nota')->on('status_pre_nota')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pre_nota', function(Blueprint $table)
		{
			$table->dropForeign('ocm_pre_nota');
			$table->dropForeign('status_pre_nota_pre_nota');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToNotaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('nota', function(Blueprint $table)
		{
			$table->foreign('id_ocm', 'ocm_nota')->references('id_ocm')->on('ocm')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_pre_nota', 'pre_nota_nota')->references('id_pre_nota')->on('pre_nota')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('nota', function(Blueprint $table)
		{
			$table->dropForeign('ocm_nota');
			$table->dropForeign('pre_nota_nota');
		});
	}

}

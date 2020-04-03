<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToNormaReferenciadaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('norma_referenciada', function(Blueprint $table)
		{
			$table->foreign('id_ato', 'fk_ato')->references('id_ato')->on('ato')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('norma_referenciada', function(Blueprint $table)
		{
			$table->dropForeign('fk_ato');
		});
	}

}

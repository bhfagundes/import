<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAtoTributoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ato_tributo', function(Blueprint $table)
		{
			$table->integer('id_ato')->unsigned()->index('fk_ato_tributo_ato_idx');
			$table->integer('id_tributo')->unsigned()->index('fk_ato_tributo_tributo_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ato_tributo');
	}

}

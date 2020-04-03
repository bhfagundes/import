<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAtoCnaeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ato_cnae', function(Blueprint $table)
		{
			$table->integer('id_ato')->unsigned()->index('fk_ato_cnae_ato_idx');
			$table->integer('id_cnae')->index('fk_ato_cnae_cnae_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ato_cnae');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAtoOrgaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ato_orgao', function(Blueprint $table)
		{
			$table->integer('id_ato')->unsigned()->index('fk_ato_orgao_ato_idx');
			$table->integer('id_orgao')->unsigned()->index('fk_ato_orgao_orgao_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ato_orgao');
	}

}

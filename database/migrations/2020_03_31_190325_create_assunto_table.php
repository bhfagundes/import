<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAssuntoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('assunto', function(Blueprint $table)
		{
			$table->increments('id_assunto');
			$table->string('assunto', 350);
			$table->string('numero_iob', 350);
			$table->integer('id_area_tematica')->unsigned()->index('fk_id_area_tematica_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('assunto');
	}

}

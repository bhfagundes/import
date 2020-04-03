<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAtoAssuntoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ato_assunto', function(Blueprint $table)
		{
			$table->integer('id_ato')->unsigned()->index('fk_ato_assunto_ato_idx');
			$table->integer('id_assunto')->unsigned()->index('fk_ato_assunto_assunto_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ato_assunto');
	}

}

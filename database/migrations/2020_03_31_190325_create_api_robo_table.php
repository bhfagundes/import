<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApiRoboTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('api_robo', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nome', 100)->nullable();
			$table->string('descricao_robo', 100)->nullable();
			$table->string('descricao', 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('api_robo');
	}

}

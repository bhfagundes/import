<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCnaeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cnae', function(Blueprint $table)
		{
			$table->integer('id_cnae', true);
			$table->string('secao', 45)->nullable();
			$table->integer('divisao')->nullable();
			$table->string('grupo', 45)->nullable();
			$table->string('classe', 45)->nullable();
			$table->string('excecao', 45)->nullable();
			$table->string('denominacao', 450)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cnae');
	}

}

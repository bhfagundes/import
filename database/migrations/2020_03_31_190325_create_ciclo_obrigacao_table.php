<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCicloObrigacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ciclo_obrigacao', function(Blueprint $table)
		{
			$table->integer('id_ciclo_obrigacao', true);
			$table->string('ciclo', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ciclo_obrigacao');
	}

}

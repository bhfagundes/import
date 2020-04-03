<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConsultaInputTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('consulta_input', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_consulta')->index('fk_consulta_input_consulta_idx');
			$table->integer('id_input')->index('fk_consulta_input_input_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('consulta_input');
	}

}

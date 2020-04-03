<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAtoEstadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ato_estados', function(Blueprint $table)
		{
			$table->integer('id_ato')->unsigned()->index('fk_ato_idx');
			$table->integer('id_estados')->nullable()->index('fk_ato_estado_estado_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ato_estados');
	}

}

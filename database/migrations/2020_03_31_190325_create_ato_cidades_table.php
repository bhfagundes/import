<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAtoCidadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ato_cidades', function(Blueprint $table)
		{
			$table->integer('id_ato')->unsigned()->index('fk_ato_cidades_ato_idx');
			$table->integer('id_cidade')->index('fk_ato_cidades_cidades_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ato_cidades');
	}

}

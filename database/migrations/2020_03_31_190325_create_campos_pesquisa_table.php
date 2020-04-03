<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCamposPesquisaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('campos_pesquisa', function(Blueprint $table)
		{
			$table->integer('id_campos', true);
			$table->string('campo', 100);
			$table->string('label', 100);
			$table->string('pagina', 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('campos_pesquisa');
	}

}

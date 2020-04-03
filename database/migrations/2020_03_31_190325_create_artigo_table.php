<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArtigoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('artigo', function(Blueprint $table)
		{
			$table->increments('id_artigo');
			$table->string('cod_artigo', 100)->nullable();
			$table->string('paragrafo_artigo', 350);
			$table->string('inciso_artigo', 450);
			$table->string('alinea_artigo', 450);
			$table->string('item_artigo', 450)->nullable();
			$table->string('anexos_artigo', 450)->nullable();
			$table->integer('id_ato')->unsigned();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('artigo');
	}

}

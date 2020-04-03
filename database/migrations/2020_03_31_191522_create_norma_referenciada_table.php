<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNormaReferenciadaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('norma_referenciada', function(Blueprint $table)
		{
			$table->increments('id_norma_referenciada');
			$table->integer('id_ato')->unsigned()->index('fk_ato_idx');
			$table->text('descricao');
			$table->string('link_norma', 450)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('norma_referenciada');
	}

}

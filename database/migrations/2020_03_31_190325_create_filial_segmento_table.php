<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilialSegmentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('filial_segmento', function(Blueprint $table)
		{
			$table->integer('id_filial')->index('fk_filial_segmento_filial_idx');
			$table->integer('id_segmento')->nullable()->index('fk_filial_segmento_segmento_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('filial_segmento');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAtoSegmentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ato_segmento', function(Blueprint $table)
		{
			$table->integer('id_ato')->unsigned()->index('fk_ato_segmneto_ato_idx');
			$table->integer('id_segmento')->nullable()->index('fk_ato_segmento_segmento_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ato_segmento');
	}

}

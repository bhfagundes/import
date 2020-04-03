<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTipoObrigacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tipo_obrigacao', function(Blueprint $table)
		{
			$table->foreign('id_area_tematica', 'fk_tipo_area_tematica')->references('id_area_tematica')->on('area_tematica')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tipo_obrigacao', function(Blueprint $table)
		{
			$table->dropForeign('fk_tipo_area_tematica');
		});
	}

}

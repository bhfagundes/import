<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLogMaterialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('log_material', function(Blueprint $table)
		{
			$table->foreign('id_material', 'log_material_material')->references('id_material')->on('material')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_tipo_log', 'log_material_tipo_log')->references('id_tipo_log')->on('tipo_log')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('log_material', function(Blueprint $table)
		{
			$table->dropForeign('log_material_material');
			$table->dropForeign('log_material_tipo_log');
		});
	}

}

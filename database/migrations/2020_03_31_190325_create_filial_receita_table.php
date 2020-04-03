<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilialReceitaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('filial_receita', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_filial')->nullable()->index('fk_filial_receita_filial_idx');
			$table->string('situacao', 100)->nullable();
			$table->dateTime('dt_situacao')->nullable();
			$table->text('motivo', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('filial_receita');
	}

}

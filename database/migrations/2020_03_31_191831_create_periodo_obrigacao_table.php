<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePeriodoObrigacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('periodo_obrigacao', function(Blueprint $table)
		{
			$table->integer('id_periodo_obrigacao', true);
			$table->string('periodo_apuracao', 45);
			$table->integer('intervalo_inicio')->nullable()->default(0);
			$table->integer('intervalo_fim')->nullable()->default(0);
			$table->integer('regra_mes')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('periodo_obrigacao');
	}

}

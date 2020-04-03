<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilialFinanceiroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('filial_financeiro', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_filial')->nullable()->index('fk_filial_financeiro_filial_idx');
			$table->integer('id_banco')->nullable()->index('fk_filial_financeiro_banco_idx');
			$table->string('agencia', 20)->nullable();
			$table->string('cc', 45)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('filial_financeiro');
	}

}

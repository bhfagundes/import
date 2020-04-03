<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConfiguracoesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('configuracoes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_empresa')->index('fk_id_empresa_configuracoes_idx');
			$table->string('campo')->nullable();
			$table->string('valor')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('configuracoes');
	}

}

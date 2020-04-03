<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmpresaEfeitoAtoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('empresa_efeito_ato', function(Blueprint $table)
		{
			$table->integer('id_filial');
			$table->integer('id_efeito_ato')->unsigned()->index('fk_efeito_ato_idx');
			$table->primary(['id_filial','id_efeito_ato']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('empresa_efeito_ato');
	}

}

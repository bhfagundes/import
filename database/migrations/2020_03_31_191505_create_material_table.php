<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaterialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('material', function(Blueprint $table)
		{
			$table->integer('id_material', true);
			$table->string('codigo_uar_tuc', 30);
			$table->integer('ativo_eletrico');
			$table->string('codigo_patrimonial', 30);
			$table->decimal('percentual_divergencia', 10)->nullable();
			$table->string('indicador_credito_pis_cofins_distribuidora', 1);
			$table->string('indicador_credito_pis_cofins_prestadora', 1);
			$table->string('indicador_credito_icms', 1);
			$table->string('codigo_produto', 60);
			$table->integer('origem_produto')->nullable();
			$table->integer('ncm')->nullable();
			$table->integer('tipi')->nullable();
			$table->integer('cean')->nullable();
			$table->string('descricao_tecnica', 120);
			$table->dateTime('timestamp_recepcao_sidup')->nullable();
			$table->dateTime('timestamp_devolucao_systax')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('material');
	}

}

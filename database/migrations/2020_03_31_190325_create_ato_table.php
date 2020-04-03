<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAtoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ato', function(Blueprint $table)
		{
			$table->increments('id_ato');
			$table->string('cod_ato', 350)->nullable();
			$table->text('descricao');
			$table->integer('id_fonte')->unsigned()->nullable()->index('fk_fonte_idx');
			$table->integer('id_orgao')->unsigned()->nullable()->index('fk_orgao_idx');
			$table->integer('id_assunto')->unsigned()->nullable()->index('fk_assunto_idx');
			$table->integer('id_tributo')->unsigned()->nullable()->index('fk_tributo_idx');
			$table->integer('id_cidade')->nullable()->index('fk_cidade_idx');
			$table->integer('id_tipo_ato')->unsigned()->nullable()->index('fk_tipo_ato_idx');
			$table->date('data_referencia')->nullable();
			$table->date('data_publicacao');
			$table->date('data_leitura_ato');
			$table->date('data_vigencia_inicio')->nullable();
			$table->date('data_vigencia_fim')->nullable();
			$table->string('link_acesso', 450);
			$table->integer('id_area_tematica')->unsigned()->nullable()->index('fk_area_tematica_idx');
			$table->dateTime('data_insercao')->nullable();
			$table->integer('cod_aux')->nullable();
			$table->string('abrev_ato', 100)->nullable();
			$table->string('clausula_ato', 50)->nullable();
			$table->string('resumo_ato', 500)->nullable();
			$table->string('link_oficial', 450)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ato');
	}

}

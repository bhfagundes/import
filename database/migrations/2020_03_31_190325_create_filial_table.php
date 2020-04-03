<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('filial', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('razao_social')->nullable();
			$table->string('nome_completo')->nullable();
			$table->string('nome_fantasia')->nullable();
			$table->string('nome_compacto')->nullable();
			$table->string('cnpj', 20);
			$table->string('site')->nullable();
			$table->string('insc_municipal', 100)->nullable();
			$table->string('insc_estadual', 100)->nullable();
			$table->string('duns', 10)->nullable();
			$table->boolean('status')->default(0);
			$table->dateTime('dt_cadastro')->nullable();
			$table->string('base')->nullable();
			$table->integer('id_principal')->nullable();
			$table->boolean('grupo_economico')->default(0);
			$table->boolean('holding')->default(0);
			$table->boolean('matriz')->default(0);
			$table->integer('pai')->nullable();
			$table->text('natpj', 65535)->nullable();
			$table->text('suframa', 65535)->nullable();
			$table->integer('id_reg_trib')->nullable()->index('fk_filial_regime_tributario_idx');
			$table->integer('id_empresa_legado')->nullable();
			$table->date('dt_inicio_atividade')->nullable();
			$table->integer('id_segmento')->nullable()->index('fk_filial_segmento_idx');
			$table->integer('qtd_funcionarios')->nullable();
			$table->decimal('faturamento', 20)->nullable();
			$table->integer('id_tipo_organizacao')->nullable()->index('fk_filial_tipo_organizacao_idx');
			$table->string('img_light')->nullable();
			$table->string('img_dark')->nullable();
			$table->integer('id_categoria')->nullable()->index('fk_filial_categoria_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('filial');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnderecoEmpresaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('endereco_empresa', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_empresa')->index('fk_empresa_endereco_empresa_idx');
			$table->integer('id_tipo')->index('fk_tipo_empresa_endereco_empresa_idx');
			$table->integer('id_estado')->index('fk_estado_endereco_empresa_idx');
			$table->integer('id_cidade')->nullable()->index('fk_cidade_endereco_empresa_idx1');
			$table->string('cidade')->nullable()->index('fk_cidade_endereco_empresa_idx');
			$table->string('cep', 20);
			$table->string('logradouro')->nullable();
			$table->string('numero', 10)->nullable();
			$table->string('complemento', 100)->nullable();
			$table->string('bairro', 100)->nullable();
			$table->primary(['id','id_empresa','id_estado','id_tipo']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('endereco_empresa');
	}

}

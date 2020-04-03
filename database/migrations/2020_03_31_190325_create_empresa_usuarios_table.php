<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmpresaUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('empresa_usuarios', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_usuario')->index('fk_empresa_usuarios_usuarios');
			$table->integer('id_empresa')->index('fk_empresa_usuarios_empresa');
			$table->integer('id_tipo')->default(0)->index('fk_tipo_empresa_usuarios');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('empresa_usuarios');
	}

}

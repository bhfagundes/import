<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConviteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('convite', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('empresa');
			$table->string('cnpj', 20);
			$table->string('nome', 200);
			$table->string('email', 200);
			$table->dateTime('dt_convite');
			$table->dateTime('dt_aprovado')->nullable();
			$table->string('token');
			$table->integer('id_empresa')->index('fk_empresa_convite_idx');
			$table->binary('ativo', 1)->default('0x30');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('convite');
	}

}

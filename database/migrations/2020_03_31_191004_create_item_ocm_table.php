<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemOcmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('item_ocm', function(Blueprint $table)
		{
			$table->integer('id_item_ocm')->primary();
			$table->integer('id_ocm')->index('ocm_item_idx');
			$table->integer('natureza_operacao');
			$table->integer('finalidade')->nullable();
			$table->integer('perfil_remetente');
			$table->integer('perfil_destinatario');
			$table->string('codigo_produto', 120);
			$table->boolean('origem');
			$table->integer('cean')->nullable();
			$table->integer('ncm')->nullable();
			$table->integer('ex_tipi')->nullable();
			$table->decimal('valor_unitario_produto', 13, 1);
			$table->decimal('quantidade', 11, 4);
			$table->decimal('valor_frete', 13, 4)->nullable();
			$table->decimal('valor_seguro', 13, 4)->nullable();
			$table->decimal('valor_desconto', 13, 4)->nullable();
			$table->string('codigo_interno_produto', 120)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('item_ocm');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRelacEmpresaCnaeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('relac_empresa_cnae', function(Blueprint $table)
		{
			$table->foreign('id_cnae', 'fk_relac_empresa_cnae_empresa_cnae')->references('id')->on('empresa_cnae')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_empresa', 'fk_relac_empresa_cnae_filial')->references('id')->on('filial')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('relac_empresa_cnae', function(Blueprint $table)
		{
			$table->dropForeign('fk_relac_empresa_cnae_empresa_cnae');
			$table->dropForeign('fk_relac_empresa_cnae_filial');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToObrigacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('obrigacao', function(Blueprint $table)
		{
			$table->foreign('id_ciclo_obrigacao', 'fk_id_ciclo_obrigacao')->references('id_ciclo_obrigacao')->on('ciclo_obrigacao')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_documento_obrigacao', 'fk_id_documento_obrigacao')->references('id_documento_obrigacao')->on('documento_obrigacao')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_origem_obrigacao', 'fk_id_origem_obrigacao')->references('id_origem_obrigacao')->on('origem_obrigacao')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_tipo_obrigacao', 'fk_id_tipo_obrigacao')->references('id_tipo_obrigacao')->on('tipo_obrigacao')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_ato', 'fk_obrigacao_ato')->references('id_ato')->on('ato')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_periodo_obrigacao', 'fk_obrigacao_periodo_obrigacao')->references('id_periodo_obrigacao')->on('periodo_obrigacao')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('usuario', 'fk_usuario_obrigacao')->references('id')->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('obrigacao', function(Blueprint $table)
		{
			$table->dropForeign('fk_id_ciclo_obrigacao');
			$table->dropForeign('fk_id_documento_obrigacao');
			$table->dropForeign('fk_id_origem_obrigacao');
			$table->dropForeign('fk_id_tipo_obrigacao');
			$table->dropForeign('fk_obrigacao_ato');
			$table->dropForeign('fk_obrigacao_periodo_obrigacao');
			$table->dropForeign('fk_usuario_obrigacao');
		});
	}

}

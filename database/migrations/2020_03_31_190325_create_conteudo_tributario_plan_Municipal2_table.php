<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConteudoTributarioPlanMunicipal2Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('conteudo_tributario_plan_Municipal2', function(Blueprint $table)
		{
			$table->integer('ID')->nullable();
			$table->text('Fonte', 65535)->nullable();
			$table->integer('ID_Fonte')->nullable();
			$table->text('Orgao', 65535)->nullable();
			$table->integer('ID_Orgao')->nullable();
			$table->text('Area_Tematica', 65535)->nullable();
			$table->integer('ID_Area_Tematica')->nullable();
			$table->text('Assunto', 65535)->nullable();
			$table->integer('ID_Assunto')->nullable();
			$table->text('Tributo', 65535)->nullable();
			$table->integer('ID_Tributo')->nullable();
			$table->text('Estado', 65535)->nullable();
			$table->integer('id_estado')->nullable();
			$table->text('Municipio', 65535)->nullable();
			$table->integer('ID_CIDADE')->nullable();
			$table->text('Segmentos', 65535)->nullable();
			$table->integer('Id_segmentos')->nullable();
			$table->text('Cnaes', 65535)->nullable();
			$table->integer('ID_cnae')->nullable();
			$table->text('Tipo_Ato', 65535)->nullable();
			$table->integer('ID_Tipo_Ato')->nullable();
			$table->text('Titulo', 65535)->nullable();
			$table->text('Cod_Ato', 65535)->nullable();
			$table->text('Artigo_Clausula', 65535)->nullable();
			$table->text('resumo_ato', 65535)->nullable();
			$table->text('Data_Referencia', 65535)->nullable();
			$table->text('Data_Publicacao', 65535)->nullable();
			$table->text('Data_leitura_ato', 65535)->nullable();
			$table->text('Data_Vigencia_Inicial', 65535)->nullable();
			$table->text('Data_Vigencia_Final', 65535)->nullable();
			$table->text('Link_Acesso', 65535)->nullable();
			$table->text('link_oficial', 65535)->nullable();
			$table->text('Impacto_efeito', 65535)->nullable();
			$table->integer('id_Impacto_efeito')->nullable();
			$table->text('Modulos', 65535)->nullable();
			$table->integer('Processos')->nullable();
			$table->text('Usuario', 65535)->nullable();
			$table->text('Homologador', 65535)->nullable();
			$table->text('Aprovador', 65535)->nullable();
			$table->text('Workflows', 65535)->nullable();
			$table->text('Tipo_Efeito', 65535)->nullable();
			$table->integer('ID_Tipo_Efeito')->nullable();
			$table->text('Resumo_efeito', 65535)->nullable();
			$table->text('API', 65535)->nullable();
			$table->text('Norma_Referenciada_1', 65535)->nullable();
			$table->text('Link_norma1', 65535)->nullable();
			$table->text('Norma_Referenciada_2', 65535)->nullable();
			$table->text('Link_norma2', 65535)->nullable();
			$table->text('Norma_Referenciada_3', 65535)->nullable();
			$table->text('Link_norma3', 65535)->nullable();
			$table->text('Norma_Referenciada_4', 65535)->nullable();
			$table->text('Link_norma4', 65535)->nullable();
			$table->text('Norma_Referenciada_5', 65535)->nullable();
			$table->text('Link_norma5', 65535)->nullable();
			$table->text('Norma_Referenciada_6', 65535)->nullable();
			$table->text('Link_norma6', 65535)->nullable();
			$table->text('Norma_Referenciada_7', 65535)->nullable();
			$table->text('Link_norma7', 65535)->nullable();
			$table->text('Norma_Referenciada_8', 65535)->nullable();
			$table->text('Link_norma8', 65535)->nullable();
			$table->text('Norma_Referenciada_9', 65535)->nullable();
			$table->text('Link_norma9', 65535)->nullable();
			$table->text('Norma_Referenciada_10', 65535)->nullable();
			$table->text('Link_norma10', 65535)->nullable();
			$table->text('Norma_Referenciada_11', 65535)->nullable();
			$table->text('Link_norma11', 65535)->nullable();
			$table->text('Norma_Referenciada_12', 65535)->nullable();
			$table->text('Link_norma12', 65535)->nullable();
			$table->text('Titulo_tipo_obrigacao', 65535)->nullable();
			$table->text('id_tipo_obrigacao', 65535)->nullable();
			$table->text('periodo_obrigacao', 65535)->nullable();
			$table->text('id_periodo_obrigacao', 65535)->nullable();
			$table->text('data_vencimento', 65535)->nullable();
			$table->text('ulti_dia_mes', 65535)->nullable();
			$table->text('dias_vencimento', 65535)->nullable();
			$table->text('mes_vencimento', 65535)->nullable();
			$table->text('regra_dia_nao_util', 65535)->nullable();
			$table->text('tipo_dia', 65535)->nullable();
			$table->text('ciclo_obrigacao', 65535)->nullable();
			$table->text('ID_Ciclo_obrigacao', 65535)->nullable();
			$table->text('documento_obrigacao', 65535)->nullable();
			$table->text('id_documento_obrigacao', 65535)->nullable();
			$table->text('codigo_receita', 65535)->nullable();
			$table->text('ID_Codigo_receita', 65535)->nullable();
			$table->text('especificidade', 65535)->nullable();
			$table->text('link_obrigacao', 65535)->nullable();
			$table->text('data_publicacao_obg', 65535)->nullable();
			$table->text('data_vigencia_inicio_obg', 65535)->nullable();
			$table->text('data_vigencia_fim_obg', 65535)->nullable();
			$table->text('Data_busca', 65535)->nullable();
			$table->text('idx_ordem', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('conteudo_tributario_plan_Municipal2');
	}

}

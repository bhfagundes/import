<?php

namespace App\Repositories;

use App\Models\Obrigacao;
use App\Repositories\BaseRepository;

/**
 * Class ObrigacaoRepository
 * @package App\Repositories
 * @version March 31, 2020, 8:33 pm UTC
*/

class ObrigacaoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'usuario',
        'id_origem_obrigacao',
        'id_tipo_obrigacao',
        'id_ciclo_obrigacao',
        'id_documento_obrigacao',
        'especificidade',
        'link_obrigacao',
        'data_publicacao',
        'data_vigencia_inicio',
        'data_vigencia_fim',
        'exibe_calendario',
        'id_ato',
        'cod_aux_ato',
        'id_cod_receita',
        'idx_ordem',
        'codigo_receita',
        'id_estado',
        'id_cidade',
        'nome_obrigacao',
        'id_periodo_obrigacao',
        'data_vencimento',
        'qtde_dias_vencimento',
        'mes_vencimento',
        'regra_dia_nao_util',
        'tipo_dia',
        'dia_vencimento',
        'ult_dia_mes'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Obrigacao::class;
    }
}

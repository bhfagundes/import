<div class="table-responsive">
    <table class="table" id="obrigacaos-table">
        <thead>
            <tr>
                <th>Usuario</th>
        <th>Id Origem Obrigacao</th>
        <th>Id Tipo Obrigacao</th>
        <th>Id Ciclo Obrigacao</th>
        <th>Id Documento Obrigacao</th>
        <th>Especificidade</th>
        <th>Link Obrigacao</th>
        <th>Data Publicacao</th>
        <th>Data Vigencia Inicio</th>
        <th>Data Vigencia Fim</th>
        <th>Exibe Calendario</th>
        <th>Id Ato</th>
        <th>Cod Aux Ato</th>
        <th>Id Cod Receita</th>
        <th>Idx Ordem</th>
        <th>Codigo Receita</th>
        <th>Id Estado</th>
        <th>Id Cidade</th>
        <th>Nome Obrigacao</th>
        <th>Id Periodo Obrigacao</th>
        <th>Data Vencimento</th>
        <th>Qtde Dias Vencimento</th>
        <th>Mes Vencimento</th>
        <th>Regra Dia Nao Util</th>
        <th>Tipo Dia</th>
        <th>Dia Vencimento</th>
        <th>Ult Dia Mes</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($obrigacaos as $obrigacao)
            <tr>
                <td>{!! $obrigacao->usuario !!}</td>
            <td>{!! $obrigacao->id_origem_obrigacao !!}</td>
            <td>{!! $obrigacao->id_tipo_obrigacao !!}</td>
            <td>{!! $obrigacao->id_ciclo_obrigacao !!}</td>
            <td>{!! $obrigacao->id_documento_obrigacao !!}</td>
            <td>{!! $obrigacao->especificidade !!}</td>
            <td>{!! $obrigacao->link_obrigacao !!}</td>
            <td>{!! $obrigacao->data_publicacao !!}</td>
            <td>{!! $obrigacao->data_vigencia_inicio !!}</td>
            <td>{!! $obrigacao->data_vigencia_fim !!}</td>
            <td>{!! $obrigacao->exibe_calendario !!}</td>
            <td>{!! $obrigacao->id_ato !!}</td>
            <td>{!! $obrigacao->cod_aux_ato !!}</td>
            <td>{!! $obrigacao->id_cod_receita !!}</td>
            <td>{!! $obrigacao->idx_ordem !!}</td>
            <td>{!! $obrigacao->codigo_receita !!}</td>
            <td>{!! $obrigacao->id_estado !!}</td>
            <td>{!! $obrigacao->id_cidade !!}</td>
            <td>{!! $obrigacao->nome_obrigacao !!}</td>
            <td>{!! $obrigacao->id_periodo_obrigacao !!}</td>
            <td>{!! $obrigacao->data_vencimento !!}</td>
            <td>{!! $obrigacao->qtde_dias_vencimento !!}</td>
            <td>{!! $obrigacao->mes_vencimento !!}</td>
            <td>{!! $obrigacao->regra_dia_nao_util !!}</td>
            <td>{!! $obrigacao->tipo_dia !!}</td>
            <td>{!! $obrigacao->dia_vencimento !!}</td>
            <td>{!! $obrigacao->ult_dia_mes !!}</td>
                <td>
                    {!! Form::open(['route' => ['obrigacaos.destroy', $obrigacao->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('obrigacaos.show', [$obrigacao->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('obrigacaos.edit', [$obrigacao->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

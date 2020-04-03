<!-- Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usuario', 'Usuario:') !!}
    {!! Form::number('usuario', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Origem Obrigacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_origem_obrigacao', 'Id Origem Obrigacao:') !!}
    {!! Form::number('id_origem_obrigacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Tipo Obrigacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_tipo_obrigacao', 'Id Tipo Obrigacao:') !!}
    {!! Form::number('id_tipo_obrigacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Ciclo Obrigacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_ciclo_obrigacao', 'Id Ciclo Obrigacao:') !!}
    {!! Form::number('id_ciclo_obrigacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Documento Obrigacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_documento_obrigacao', 'Id Documento Obrigacao:') !!}
    {!! Form::number('id_documento_obrigacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Especificidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('especificidade', 'Especificidade:') !!}
    {!! Form::text('especificidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Link Obrigacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link_obrigacao', 'Link Obrigacao:') !!}
    {!! Form::text('link_obrigacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Publicacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_publicacao', 'Data Publicacao:') !!}
    {!! Form::date('data_publicacao', null, ['class' => 'form-control','id'=>'data_publicacao']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#data_publicacao').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Data Vigencia Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_vigencia_inicio', 'Data Vigencia Inicio:') !!}
    {!! Form::date('data_vigencia_inicio', null, ['class' => 'form-control','id'=>'data_vigencia_inicio']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#data_vigencia_inicio').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Data Vigencia Fim Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_vigencia_fim', 'Data Vigencia Fim:') !!}
    {!! Form::date('data_vigencia_fim', null, ['class' => 'form-control','id'=>'data_vigencia_fim']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#data_vigencia_fim').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Exibe Calendario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('exibe_calendario', 'Exibe Calendario:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('exibe_calendario', 0) !!}
        {!! Form::checkbox('exibe_calendario', '1', null) !!}
    </label>
</div>


<!-- Id Ato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_ato', 'Id Ato:') !!}
    {!! Form::number('id_ato', null, ['class' => 'form-control']) !!}
</div>

<!-- Cod Aux Ato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_aux_ato', 'Cod Aux Ato:') !!}
    {!! Form::number('cod_aux_ato', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Cod Receita Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cod_receita', 'Id Cod Receita:') !!}
    {!! Form::number('id_cod_receita', null, ['class' => 'form-control']) !!}
</div>

<!-- Idx Ordem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idx_ordem', 'Idx Ordem:') !!}
    {!! Form::number('idx_ordem', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Receita Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_receita', 'Codigo Receita:') !!}
    {!! Form::number('codigo_receita', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_estado', 'Id Estado:') !!}
    {!! Form::number('id_estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cidade', 'Id Cidade:') !!}
    {!! Form::number('id_cidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Nome Obrigacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome_obrigacao', 'Nome Obrigacao:') !!}
    {!! Form::text('nome_obrigacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Periodo Obrigacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_periodo_obrigacao', 'Id Periodo Obrigacao:') !!}
    {!! Form::number('id_periodo_obrigacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Vencimento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_vencimento', 'Data Vencimento:') !!}
    {!! Form::date('data_vencimento', null, ['class' => 'form-control','id'=>'data_vencimento']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#data_vencimento').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Qtde Dias Vencimento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qtde_dias_vencimento', 'Qtde Dias Vencimento:') !!}
    {!! Form::number('qtde_dias_vencimento', null, ['class' => 'form-control']) !!}
</div>

<!-- Mes Vencimento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mes_vencimento', 'Mes Vencimento:') !!}
    {!! Form::number('mes_vencimento', null, ['class' => 'form-control']) !!}
</div>

<!-- Regra Dia Nao Util Field -->
<div class="form-group col-sm-6">
    {!! Form::label('regra_dia_nao_util', 'Regra Dia Nao Util:') !!}
    {!! Form::number('regra_dia_nao_util', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Dia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_dia', 'Tipo Dia:') !!}
    {!! Form::number('tipo_dia', null, ['class' => 'form-control']) !!}
</div>

<!-- Dia Vencimento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dia_vencimento', 'Dia Vencimento:') !!}
    {!! Form::number('dia_vencimento', null, ['class' => 'form-control']) !!}
</div>

<!-- Ult Dia Mes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ult_dia_mes', 'Ult Dia Mes:') !!}
    {!! Form::number('ult_dia_mes', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('obrigacaos.index') !!}" class="btn btn-default">Cancel</a>
</div>

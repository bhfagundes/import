@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Obrigacao
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($obrigacao, ['route' => ['obrigacaos.update', $obrigacao->id], 'method' => 'patch']) !!}

                        @include('obrigacaos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
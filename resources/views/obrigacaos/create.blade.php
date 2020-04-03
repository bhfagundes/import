@extends('layouts.app')

@section('content')
@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Importação
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'obrigacaos.store','files' => true]) !!}

                        @include('tickets.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

 
@endsection

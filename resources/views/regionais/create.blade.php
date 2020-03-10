@extends('regionais.models.model')



@section('card')
    <div class="card">

        <div class="card-header">
            {{__('Cadastrar Nova Regional da Fiel')}}       	
        </div>


        <div class="card-body">

            {!! Form::open(['route' => 'regionais.store']) !!}

            @include ("regionais.includes.form", ['btn_texto' => 'Salvar', 'btn_icon' => 'fas fa-save'])

            {!! Form::close() !!}

        </div>

    </div>

@endsection
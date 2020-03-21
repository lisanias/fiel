@extends('regionais.models.model')



@section('card')
    <div class="card">

        <div class="card-header">
            {{__('Editar Regional da Fiel')}}       	
        </div>


        <div class="card-body">

            {!! Form::model($regional, ['method' => 'PATCH', 'route' => ['regionais.update', $regional->id]]) !!}

            @include ("regionais.includes.form", ['btn_texto' => 'Salvar', 'btn_icon' => 'fas fa-save'])

            {!! Form::close() !!}

        </div>

    </div>

@endsection
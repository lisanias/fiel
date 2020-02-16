@extends('members.models.form')


@section('form')	
            <div class="card-header">{{__('Adicionar Obreiro')}}</div>

			<div class="card-body">
				<h5 class="card-title">{{__('Formulario')}}</h5>

				{!! Form::open(['route' => 'members.store']) !!}

				@include ("members.includes.form", ['btn_texto' => 'Próximo', 'btn_icon' => 'fas fa-arrow-circle-right'])

				{!! Form::close() !!}

			</div>
			<div class="card-footer text-muted">
				
			</div>
			
@endsection
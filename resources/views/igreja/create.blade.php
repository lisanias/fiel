@extends('igreja.model')

@section('page-title', __('Igreja'))

@section('page-title-r')
    <a href="{{ URL::previous() }}" class="btn btn-sm btn-secondary shadow-sm">
    	<i class="fas fa-undo fa-sm text-white-50"></i>
    	<span class="d-none d-md-inline-block">{{__('Voltar')}}</span>
     </a>
@endsection

@section('card')	

	<div class="card">

		<div class="card-header">
			{{__('Cadastrar Nova Igreja')}}       	
		</div>


		<div class="card-body">
				
			{!! Form::open(['route'=>'igrejas.store']) !!}

			@include ("igreja.includes.form", ['btn_texto' => 'Criar'])

			{!! Form::close() !!}					

		</div>

    </div>
    
@endsection
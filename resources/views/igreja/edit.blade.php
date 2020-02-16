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
            	{{__('Alterar dados da igreja')}}
            	<span class="badge badge-info float-right">ID {{ str_pad($igreja->id, 5, "0", STR_PAD_LEFT) }}</span>
        	</div>


			<div class="card-body">
				
				{!! Form::model($igreja, ['method' => 'PATCH', 'url' => route('igrejas.update', $igreja->id) ]) !!}

				@include ("igreja.includes.form", ['btn_texto' => 'Salvar alteração'])

				{!! Form::close() !!}					

			</div>

	</div>
			
@endsection
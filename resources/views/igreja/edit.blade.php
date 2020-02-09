@extends('igreja.model')

@section('page-title', __('Igreja'))

@section('card')	

	<div class="card">

            <div class="card-header">
            	{{__('Alterar dados da igreja')}}
            	<span class="badge badge-info float-right">ID {{ str_pad($igreja->id, 5, "0", STR_PAD_LEFT) }}</span>
        	</div>


			<div class="card-body">
				
				{!! Form::model($igreja, ['method' => 'PATCH', 'url' => 'members/'.$igreja->id]) !!}

				@include ("igreja.includes.form", ['btn_texto' => 'Salvar alteração'])

				{!! Form::close() !!}					

			</div>

	</div>
			
@endsection
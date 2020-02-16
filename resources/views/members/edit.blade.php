@extends('members.models.form')


@section('form')	


            <div class="card-header">
            	{{__('Alterar dados do obreiro')}}
            	<span class="badge badge-info float-right">ID {{ str_pad($member->id, 5, "0", STR_PAD_LEFT) }}</span>
        	</div>


			<div class="card-body">
				<h5 class="card-title">{{__('Formulario')}}</h5>
				
				{!! Form::model($member, ['method' => 'PATCH', 'url' => 'members/'.$member->id]) !!}

				@include ("members.includes.form", ['btn_texto' => 'Salvar alteração'])

				{!! Form::close() !!}					

			</div>
			<div class="card-footer text-muted">
				
			</div>
			
@endsection
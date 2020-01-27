@extends('members.memberModel')

@section('page-title', __('Inserir novo obreiro')) 

@section('card')	
            <div class="card-header">{{__('Verificar se já existe no cadastro')}}</div>

			<div class="card-body">
				<h5 class="card-title">{{__('Insira parte do nome')}}</h5>

				{!! Form::open(['route' => 'member.find']) !!}
				
					<div class="form-group">
						@error('nome')
							{!! Form::text('nome', null, ['class' => 'form-control is-invalid']) !!}
						    <div class="invalid-feedback">{{ $message }}</div>
						@else
							{!! Form::text('nome', null, ['class' => 'form-control']) !!}
						@enderror						
					</div>

					<div class="form-group">
						{!! Form::button(__('Procurar'), ['type' => 'submit', 'class' => 'btn btn-success']) !!}
					</div>				

				{!! Form::close() !!}

			</div>
			<div class="card-footer text-muted">
			</div>			
			
@endsection
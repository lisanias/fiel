@extends('layouts.member')

@push('title', __('Endereço')) 

@section('form')

            <div class="card-header">
            	{{__('Alterar endereço de ')}} {{ $member->nome }}
            	<span class="badge badge-info float-right">ID {{ str_pad($address->id, 5, "0", STR_PAD_LEFT) }}</span>
        	</div>


			<div class="card-body">
				
				{!! Form::model($address, ['method' => 'PATCH', 'url' => 'address/'.$address->id]) !!}

				@include ("address._form", ['btn_texto' => 'Salvar alteração'])

				{!! Form::close() !!}					

			</div>
			
@endsection
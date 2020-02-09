@extends('address.model')

@push('title', __('Endereço')) 

@section('form')

            <div class="card-header">
            	{{__('Criar novo endereço para ')}} {{ $address_pai->nome }}
            	<span class="badge badge-info float-right">ID Membro {{ str_pad($address_pai->id, 5, "0", STR_PAD_LEFT) }}</span>
        	</div>


			<div class="card-body">
				
				{!! Form::open(['method' => 'POST', 'url' => route($address_pai->getTable().'.address.store', $address_pai->id)]) !!}

				

				@include ("address._form", ['btn_texto' => 'Salvar alteração'])

				{!! Form::close() !!}					

			</div>
			
@endsection
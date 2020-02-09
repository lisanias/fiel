@extends('address.model')

@section('form')

	<div class="card-header">
		{{__('Alterar endereço de ')}} {{ $addresspai->nome }} - {{$address->addressable_type}}
		<span class="badge badge-info float-right">ID {{ str_pad($address->id, 5, "0", STR_PAD_LEFT) }}</span>
	</div>


	<div class="card-body">
		
		{!! Form::model($address, ['method' => 'PATCH', 'url' => 'address/'.$address->id]) !!}

		@include ("address._form", ['btn_texto' => 'Salvar alteração'])

		{!! Form::close() !!}	
		
		<div class='float-right'>
			<form id='apagar' method="post" action="{!! route('address.destroy', $address->id) !!}"> 
				{!! Form::token() !!}
				<input type="hidden" name="_method" value="DELETE">
				<button type="submit" class='btn btn-danger'><i class="fas fa-trash-alt"></i></button>
			</form>
		</div>

	</div>
	
@endsection
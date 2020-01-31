@extends('layouts.member')

@push('title', __('Telefone')) 

@section('form')

            <div class="card-header">
            	{{__('Alterar o telefone de ')}} {{ $member->nome }}
            	<span class="badge badge-info float-right">ID {{ str_pad($phone->id, 5, "0", STR_PAD_LEFT) }}</span>
        	</div>


			<div class="card-body">
				
				{!! Form::model($phone, ['method' => 'PATCH', 'url' => route('phones.update', $phone->id)]) !!}

				@include ("phone._form", ['btn_texto' => 'Salvar alteração'])

				{!! Form::close() !!}					

			</div>
			
@endsection
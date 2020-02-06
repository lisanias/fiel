@extends('layouts.member')

@push('title', __('Telefone')) 

@section('form')

            <div class="card-header">
            	{{__('Alterar o telefone de ')}} {{ $member->nome }}
            	<span class="badge badge-info float-right">Membro ID {{ str_pad($member->id, 5, "0", STR_PAD_LEFT) }}</span>
        	</div>


			<div class="card-body">
				
				{!! Form::open(['method' => 'POST', 'url' => route('members.phones.store', $member->id)]) !!}

					<input type="hidden" name="id" value='{{$member->id}}'>
					
					@include ("phone._form", ['btn_texto' => 'Salvar alteração'])

					@yield('btn_action')

				{!! Form::close() !!}					

			</div>
			
@endsection
@extends('layouts.member')

@push('title', __('Telefone')) 

@section('page-title--r')
link
@endsection

@section('form')

            <div class="card-header">
            	{{__('Alterar o telefone de ')}} {{ $member->nome }}
            	<span class="badge badge-info float-right">ID {{ str_pad($phone->id, 5, "0", STR_PAD_LEFT) }}</span>
        	</div>


			<div class="card-body">
				
				{!! Form::model($phone, ['method' => 'PATCH', 'url' => route('phones.update', $phone->id)]) !!}

				@include ("phone._form", ['btn_texto' => 'Salvar alteração'])

				{!! Form::close() !!}
				
				<div class='float-right'>
					<form id='apagar' method="post" action="{!! route('phones.destroy', $phone->id) !!}"> 
						{!! Form::token() !!}
						<input type="hidden" name="_method" value="DELETE">
						<button type="submit" class='btn btn-danger'><i class="fas fa-trash-alt"></i></button>
					</form>
				</div>

			</div>

			
@endsection
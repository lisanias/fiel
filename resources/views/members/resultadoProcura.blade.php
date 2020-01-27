@extends('members.memberModel')

@section('title', __('Obreiros')) 

@section('page-title') 
{{__('Obreiros - Resultado da procura por ')}} "{{ strtoupper($nome) }}"
@endsection

@section('card')			        
			
		@isset($members)
		<ul class="list-group list-group-flush">

			@foreach($members as $member)
			<li class="list-group-item"><a href="{{ route('members.show', $member->id) }}">{{ $member->nome }}</a></li>
			@endforeach

		</ul>				
		@endisset

		<div class="card-body">				
			<a href="{{ route('member.new.dados') }}" class="btn btn-success btn-lg btn-block">Adicionar {{ strtoupper($nome) }}?</a>
		</div>
@endsection
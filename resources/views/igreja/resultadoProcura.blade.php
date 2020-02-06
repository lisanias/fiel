@extends('layouts.app')

@section('title', __('Igreja')) 

@section('page-title', __('Igrejas'))

@section('page-title') 
{{__('Igreja - Resultado da procura por ')}} "{{ strtoupper($nome) }}"
@endsection

@section('page-title-r')
    <a href="{{ URL::previous() }}" class="btn btn-sm btn-secondary shadow-sm">
    	<i class="fas fa-undo fa-sm text-white-50"></i>
    	<span class="d-none d-md-inline-block">{{__('Voltar')}}</span>
     </a>
@endsection

@section('content')


	<div class="col-md-12">
		<div class="card shadow mb-4  border-left-primary">
			        
			@isset($igrejas)
			<ul class="list-group list-group-flush">

				@foreach($igrejas as $igreja)
				<li class="list-group-item"><a href="{{ route('igrejas.show', $igreja->id) }}">{{ $igreja->nome }}</a></li>
				@endforeach

			</ul>				
			@endisset

			<div class="card-body">				
				<a href="{{ route('igrejas.create', $nome) }}" class="btn btn-success btn-lg btn-block">Adicionar {{ strtoupper($nome) }}?</a>
			</div>
				
		</div>
    </div>
</div>


@endsection


@extends('members.models.model')

@section('page-title', __('Aniversariantes')) 

@section('card')

	<div class="card-header">
		<h2 class="mb-0">Mês de {{ $mesPT[$mes] }}</h2>		
	</div>
	<div class="row">
		<div class="card-body col-lg-8">
			
			@foreach($aniversariantes as $niver)
			<div>
					<a class="link list-group-item-action" href="{{ route('members.show', $niver->id) }}">
					{{ $niver->dnas->format('d') }} 
					<i class="fas fa-chevron-right"></i>

					@php 
						$nome = explode(' ', trim($niver->nome ));
						$x = count($nome)-1; 
					@endphp

					{{ $nome[0]}} 

					@if ($x>0)
						{{$nome[$x]}}
					@endif
					
					<em><small style='color:#87CEEB'>{{ Str::upper($niver->titulo) }}</small></em>				  
					</a>				  
			</div>
			@endforeach				

		</div>
		<div class="card-body col-lg-4 ">
			
			<div class="card text-white border-success" style="max-width: 18rem;">
				<div class="card-header bg-success">
					<h4 class="mb-0">Listar outros meses</h4>
				</div>
				<div class="card-body">
					<div class="list-group">
						@include('members.includes.meses')
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="card-footer text-muted">
	<a href="{{route('members.niver.etiquetas', $mes)}}" class="btn btn-primary" target="_BLANK">Imprimir etiquetas</a>
	</div>			
			
@endsection
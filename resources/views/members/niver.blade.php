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
					{{ $niver->nome }} |
					<em><small style='color:#87CEEB'>{{ Str::upper($niver->titulo) }}</small></em>				  
					</a>				  
			</div>
			@endforeach				

		</div>
		<div class="card-body col-lg-4 ">
			<div class="card-header">
				<h4>Listar outros meses</h4>
			</div>
			<div class="card-footer">
				<div class="list-group ">
					@include('members.includes.meses')
				</div>
			</div>
		</div>
	</div>
	<div class="card-footer text-muted">
		<a href="#" class="btn btn-primary">Imprimir etiquetas</a>
	</div>			
			
@endsection
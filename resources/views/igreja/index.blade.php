@extends('igreja.model')

@section('page-title-r')
    <a href="{{ route('igrejas.create') }}" class="btn btn-sm btn-success shadow-sm">
    	<i class="fas fa-user-plus fa-sm text-white-50"></i>
    	<span class="d-none d-md-inline-block">{{__('Adicionar')}}</span>
    </a>
@endsection

@section('card')


	<div class="card shadow mb-4  border-left-primary">
		<div class="card-header">{{__('Lista de igrejas')}}</div>
		<div class="card-body">

			<table class="table table-borderless table-hover" style="line-height: 1.2;">
				
				<tbody>
				@foreach($igrejas as $igreja)
				<tr>
					<td style='vertical-align: middle;' >
						{{Str::upper($igreja->nome)}}<br>
						<small style='color:#87CEEB'>
						{{$igreja->cidade }}
						@if(!is_null($igreja->bairro)) - {{$igreja->bairro}} @endif
						@if(!is_null($igreja->uf)) - {{$igreja->uf}} @endif	
						</small>
					</td>
					<td style='vertical-align: middle;' class="text-right">
					<a class="btn btn-primary" href="{{ route('igrejas.show', $igreja->id) }}"><i class="fas fa-chevron-right"></i></a>
					</td>
				</tr>
				@endforeach
				
				</tbody>
			</table>
			{{ $igrejas->links() }}
		</div>
		<div class="card-footer text-muted">
			
		</div>
	</div>


@endsection
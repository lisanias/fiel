@extends('identidade.models.model')

@section('page-title-r')
    <a href="{{ route('igrejas.create') }}" class="btn btn-sm btn-success shadow-sm">
    	<i class="fas fa-user-plus fa-sm text-white-50"></i>
    	<span class="d-none d-md-inline-block">{{__('Adicionar')}}</span>
    </a>
@endsection

@section('card')


	
		<div class="card-header text-white bg-success" id="chbl">
            <h3 class="mb-0">{{__('Últimas Identidades Ministeriais emitidas')}}</h3>
        </div>
		<div class="card-body">

			<table class="table table-borderless table-hover mb-0" style="line-height: 1.2;">
				
				<tbody>
				@foreach($identidades as $identidade)
				<tr>
                    <td class="" style='vertical-align: middle;'>
                        <small>{{str_pad($identidade->member_id, 4, "0", STR_PAD_LEFT)}}<br></small>
                        <strong class="text-success">{{str_pad($identidade->id, 4, "0", STR_PAD_LEFT)}}</strong>
                    </td>
                    <td class="" style='vertical-align: middle;'>
                        <h5 class="mb-0">{{Str::upper($identidade->nome)}}</h5>				
                    </td>
                    <td class='d-none d-lg-block' style='vertical-align: middle;'>
                        <small class="text-success">Validade</small><br> 
                        {{$identidade->validade->format('m/Y')}}
                    </td>
                    <td class='' style='vertical-align: middle;'>
                        <small class="text-success">Igreja</small><br> 
                        {{substr($identidade->igreja, 0,40)}}
                    </td>
					<td style='vertical-align: middle;'>
					    <a class="link" href="{{ route('identidades.show', $identidade->id) }}"><i class="fas fa-chevron-right"></i></a>
					</td>
				</tr>
				@endforeach
				
				</tbody>
			</table>
			
		</div>
		<div class="card-footer text-muted">
			{{ $identidades->links() }}
		</div>
	


@endsection
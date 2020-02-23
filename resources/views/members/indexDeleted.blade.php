@extends('layouts.app')

@section('title', __('Obreiros')) 

@section('page-title', __('Obreiros Afiliados')) 

@section('page-title-r')
    <a href="{{ route('members.create') }}" class="btn btn-sm btn-success shadow-sm">
    	<i class="fas fa-user-plus fa-sm text-white-50"></i>
    	<span class="d-none d-md-inline-block">{{__('Adicionar')}}</span>
     </a>
@endsection

@section('content')

	<div class="col-md-12">
		<div class="card shadow mb-4 border-left-danger">
            <div class="card-header text-danger"><h3 class="mb-0">{{__('Lista de obreiros apagados')}}</h3></div>
            <div class="card-body">

				
					@foreach($members as $member)
						<div class="d-flex flex-row p-1" style="@if(!$loop->first)border-top: 1px solid silver;@endif">

							<div class="flex-fill">
								{{ $member->nome }} 
								<br>
								<em><small>{{ Str::upper($member->titulo) }}</small></em>
							</div>
							
							<div class="ml-auto align-self-center">
								<a class="btn btn-warning" href="{{ route('members.restore', $member->id) }}">
									<i class="fas fa-trash-restore"></i> 
									<span class="small ml-1">{{__('Restaurar')}}</span>
								</a>
							</div>	
						</div>
				    @endforeach
				   
				  
				{{ $members->links() }}
			</div>
		</div>
		<div class="card-footer text-muted">
	    	
	  	</div>
    </div>

@endsection
@extends('layouts.app')

@section('title', __('Identidades')) 

@section('page-title', __('Identidades Ministeriais')) 

@section('page-title-r')
    <a href="{{ URL::previous() }}" class="btn btn-sm btn-secondary shadow-sm">
    	<i class="fas fa-undo fa-sm text-white-50"></i>
    	<span class="d-none d-md-inline-block">{{__('Voltar')}}</span>
     </a>
@endsection

@section('content')


	<div class="col-md-12">
		<div class="card shadow mb-4  border-left-{{$classColor ?? 'success'}}">
			        
			@yield('card')
				
		</div>
    </div>
</div>


@endsection
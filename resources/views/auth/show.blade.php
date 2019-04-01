@extends('layouts.app')

@section('title', 'Usuários') 

@section('page-title', "Usuários do sistema") 

@section('page-title-r')
    <a href="{{ route('user.index')}}" class="btn btn-sm btn-success shadow-sm" title="{{__('List Users')}}">
    	<i class="fas fa-list-ul fa-sm text-white-50 pr-1"></i> 
    	<span class="d-none d-lg-inline-block">{{__('List Users')}}</span>
    </a>

    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-primary shadow-sm" title="{{__('Edit user')}}">
    	<i class="fas fa-user-edit fa-sm text-white-50 pr-1"></i> 
    	<span class="d-none d-lg-inline-block">{{__('Edit user')}}</span>
    </a>

    <!-- DEETE USER-->
    <a href="{{ route('user.destroy', $user->id) }}" class="btn btn-sm btn-danger shadow-sm" onclick="event.preventDefault(); 
      document.getElementById('delete-form').submit();" title="{{__('Delete User')}}">
    	<i class="fas fa-trash-alt fa-sm text-white-50 pr-1"></i> 
    	<span class="d-none d-lg-inline-block">{{__('Delete User')}}</span>
    </a>   
    <form id="delete-form" action="{{ route('user.destroy', $user->id) }}" method="POST" style="display: none;">
      @csrf
      @method('DELETE')
    </form>
    <!-- END Sair - Log Out -->
@endsection

@section('content')


	<div class="col-md-12">
		<div class="card border-left-primary shadow h-100 mb-4 h-md-250">
            <div class="card-header">{{__('Profile')}}</div>
			<div class="card-body">
				
				<div class="text-center">
				  	<img class="rounded-circle img-fluid shadow border border-ligth img-thumbnail" src="{{ asset('user-images') }}/{{ isset($user->avatar) ? Auth::user()->avatar : 'user.png' }}" width="150px">
				
					<h1 class="py-4">{{$user->name}}</h1>
				</div>

				<div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item"><i class="fas fa-envelope pr-2"></i> {{ $user->email }}</li>
						<li class="list-group-item"><i class="fas fa-sign-in-alt pr-2"></i> {{ $user->username }}</li>
						<li class="list-group-item"><i class="fas fa-calendar-alt pr-2"></i> {{ $user->created_at ? $user->created_at->format('d-m-Y') : '' }}</li>
						<li class="list-group-item"><i class="fas fa-edit pr-2"></i> {{ $user->updated_at ? $user->updated_at->format('d-m-Y') : '' }}</li>
					</ul>					
				</div>

			</div>
			
		</div>		
    </div>
</div>


@endsection
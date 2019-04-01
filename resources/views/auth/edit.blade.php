@extends('layouts.app')

@section('title', 'Usuários') 

@section('page-title', __('Edit user')) 

@section('page-title-r')

    <a href="{{ route('user.index')}}" class="btn btn-sm btn-success shadow-sm">
    	<i class="fas fa-list-ul fa-sm text-white-50 pr-1"></i> 
    	<span class="d-none d-sm-inline-block">{{__('List Users')}}</span>
    </a>

@endsection

@section('content')

<div class="col-md-12">
	<div class="card border-left-primary shadow h-100 mb-4 h-md-250">
		<div class="card-header">{{__('User Profile')}}</div>
		<div class="card-body">

			<form method="POST" action="{{ route('user.update', $user->id) }}">
                @csrf
                @method('PATCH')

				<div class="form-group">
					<label for="name">{{__('Name')}}</label>
					<input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" value="{{$user->name}}" placeholder="{{__('Name')}}">
					@if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
				</div>
				<div class="form-group">
					<label for="username">{{__('User')}}</label>
					<input type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" id="username" value="{{ $user->username }}" placeholder="{{__('User')}}">
					@if ($errors->has('username'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
				</div>	
				<div class="form-group">
					<label for="email">{{__('E-mail')}}</label>
					<input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" value="{{ $user->email }}" placeholder="{{__('E-mail')}}">
					@if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
				</div>				
				<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> {{__('Save')}}</button>
			</form>			

		</div>
	</div>
</div>

<div class="col-md-12 pt-5">
	<div class="card border-left-primary shadow h-100 mb-4 h-md-250">
		<div class="card-header">{{__('New Password')}}</div>
		<div class="card-body">

			@if ($errors->has('password'))
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif


			<form method="POST" action="{{ route('update.password', $user->id) }}">
				@csrf

				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="password">{{__('Password')}}</label>
						<input type="password" class="form-control" name="password" id="password" placeholder="{{__('Password')}}">
						@if ($errors->has('password'))
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $errors->first('password') }}</strong>
	                        </span>
	                    @endif
					</div>
					<div class="form-group col-md-6">
						<label for="password_confirmation">{{__('Confirm Password')}}</label>
						<input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="{{__('Confirm Password')}}">
					</div>					
				</div>
				<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> {{__('Save')}}</button>
			</form>

		</div>
	</div>
</div>

@endsection
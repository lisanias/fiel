@extends('layouts.app')

@section('title', 'Usuários') 

@section('page-title', 'Usuários do sistema') 

@section('page-title-r')
    <a href="{{ route('user.create') }}" class="btn btn-sm btn-success shadow-sm">
    	<i class="fas fa-user-plus fa-sm text-white-50"></i>
    	<span class="d-none d-md-inline-block">{{__('Add user')}}</span>
     </a>
@endsection

@section('content')


	<div class="col-md-12">
		<div class="card shadow mb-4  border-left-primary">
            <div class="card-header">Usuários cadastrados</div>

			<table class="table table-hover">
			  
			  <tbody>
			    @foreach($users as $user)
			    <tr>
			      <th class="d-none" scope="row">{{ $user->id }}</th>
			      <td>{{ $user->name }}</td>
			      <td>
			      	<a class="btn btn-sm btn-primary" href="{{ route('user.show', $user->id) }}"><i class="fas fa-chevron-right"></i></a>
			      </td>
			    </tr>
			    @endforeach
			   
			  </tbody>
			</table>
		</div>
    </div>
</div>


@endsection
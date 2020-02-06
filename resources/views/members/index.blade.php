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
		<div class="card shadow mb-4  border-left-primary">
            <div class="card-header">{{__('Lista de obreiros')}}</div>
            <div class="card-body">

				<table class="table table-hover table-borderless" style='line-height: 1.2;'>
				  
				  <tbody>
				    @foreach($members as $member)
				    <tr>
				      <td>
						  {{ $member->nome }} <br><em><small style='color:#87CEEB'>{{ Str::upper($member->titulo) }}</small></em>
					  </td>
				      <td style='vertical-align: middle;'>
				      	<a class="link" href="{{ route('members.show', $member->id) }}"><i class="fas fa-chevron-right"></i></a>
				      </td>
				    </tr>
				    @endforeach
				   
				  </tbody>
				</table>
				{{ $members->links() }}
			</div>
		</div>
		<div class="card-footer text-muted">
	    	
	  	</div>
    </div>
</div>


@endsection
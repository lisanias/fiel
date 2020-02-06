@extends('layouts.app')

@section('title', __('Igreja')) 

@section('mainsearch')
    @include('igreja.includes.searchForm')
@endsection

@section('page-title', __('Igrejas'))

@section('content')

	<div class="col-md-12">
        
        @yield('card')

    </div>

@endsection

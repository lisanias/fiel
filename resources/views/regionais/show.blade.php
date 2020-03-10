@extends('regionais.models.model')

@section('page-title-r')
    <a href="{{ route('igrejas.create') }}" class="btn btn-sm btn-success shadow-sm">
    	<i class="fas fa-user-plus fa-sm text-white-50"></i>
    	<span class="d-none d-md-inline-block">{{__('Adicionar')}}</span>
    </a>
@endsection

@section('card')

<div class="card text-center">
    <div class="card-header">
        {{$regional->cidade}}-{{$regional->uf}}
    </div>
    <div class="card-body">
      <h5 class="display-3">{{$regional->nome}}</h5>
      <h5 class="display-5">{{$lider->titulo??'Bispo'}} {{$lider->nome??' não cadastrado!'}} </h5>
      <p class="card-text m-5">{{$regional->descricao}}</p>
      <a href="{{route('members.regional', $regional->id)}}" class="btn btn-primary" alt='Discipulos ligados a esta regional'>Obreiros desta regional</a>
    </div>
    <div class="card-footer text-muted">
      
    </div>
  </div>

@endsection
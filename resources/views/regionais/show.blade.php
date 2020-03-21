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
      <h5 class="display-5">{{$lider->titulo??'Bispo'}} {{$lider->nome??' não cadastrado!'}} <br>
       <span class="small">{{$lider->email}}</span> </h5>
      <p class="card-text m-5">{{$regional->descricao}}</p>
      <p class="card-text m-5 small">
          Regional nº {{$regional->id}} | 
          Membro desde {{$regional->created_at->format('d/m/Y')}} | 
          Atualizado pela ultima vez em {{$regional->created_at->format('d/m/Y')}}
      </p>
      <div>
        <a href="{{route('regionais.index')}}" class="btn btn-primary mt-5" alt='Listar Regionais'>Listar</a>
        <a href="{{route('regionais.edit', $regional->id)}}" class="btn btn-primary mt-5" alt='Editar Regional'>Editar</a>
        <a href="{{route('members.regional', $regional->id)}}" class="btn btn-primary mt-5" alt='Discipulos ligados a esta regional'>Obreiros desta regional</a>
        
      </div>
    </div>
  </div>

@endsection
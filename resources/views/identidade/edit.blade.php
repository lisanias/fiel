@extends('identidade.models.model')

@section('page-title-r')
    <!--<a href="#" class="btn btn-sm btn-success shadow-sm">
    	<i class="fas fa-print fa-sm text-white-50"></i>
    	<span class="d-none d-md-inline-block">{{__('Imprimir')}}</span>
    </a>-->    
@endsection

@section('card')

	
		<div class="card-header text-white bg-success" id="chbl">
            <h3 class="mb-0">{{__('Alterara dados da ID Ministerial')}}</h3>
        </div>        
        
        <div class="card-body ml-3">

            <!-- Botões do Topo -->
            <div class="mb-3">
                @if($identidade->member)
                    <a class="btn btn-info" href="{{route('members.show', $identidade->member_id)}}"><i class="far fa-user mr-2"></i>Membro</a>
                @endif
                @if ($identidade->member->igreja)
                    <a class="btn btn-info" href="{{route('igrejas.show', $identidade->member->igreja->id)}}"><i class="fas fa-church mr-2"></i>Igreja</a>
                @endif
                <a class="btn btn-info" href="{{route('identidades.index')}}"><i class="fas fa-list mr-2"></i>Listar</a>
                @if(!$identidade->data_impressao)
                <a class="btn btn-success" href="{{route('identidades.show', $identidade->id)}}"><i class="fas fa-check mr-2"></i>Visualizar</a>
                @endif
            </div>

            <!-- Nome e "string de dados" -->
            <h3>{{Str::upper($identidade->member->nome ?? $identidade->nome)}}</h3>
            <p>
                {{str_pad($identidade->id, 6, "0", STR_PAD_LEFT)}}
                {{str_pad($identidade->member_id, 4, "0", STR_PAD_LEFT)}}
                {{$identidade->created_at->format('dmY')}}
                {{$identidade->updated_at->format('dmY')}}
                @isset($identidade->data_impressao){{  $identidade->data_impressao->format('dmYHms') }} @else 00000000 @endisset
            </p>

            <!-- Formulário de edição de dados da ID Ministerial -->
            <div class="jumbotron">

                <form action="{{route('identidades.update', $identidade->id)}}" method="post">
                    @method('PATCH')
                    @csrf

                    <!-- titulo -->
                    <div class="form-group">
                        <label for="cargo">Titulo</label>
                        
                        <input 
                            id="cargo"
                            name="cargo"
                            type="text" 
                            class="form-control @error('cargo') is-invalid @enderror"
                            value=" {{old('cargo') ?? $identidade->cargo}} "
                        >

                        @error('cargo')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>                

                    <!-- Nome -->
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        
                        <input 
                            id="nome"
                            name="nome"
                            type="text" 
                            class="form-control @error('nome') is-invalid @enderror"
                            value=" {{old('nome') ?? $identidade->nome}} "
                        >

                        @error('nome')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Igreja -->
                    <div class="form-group">
                        <label for="igreja">Igreja</label>
                        
                        <input 
                            id="igreja"
                            name="igreja"
                            type="text" 
                            class="form-control @error('igreja') is-invalid @enderror"
                            value=" {{old('igreja') ?? $identidade->igreja_nome}} "
                        >

                        @error('igreja')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </div>  
		<div class="card-footer text-muted">
        </div>
        
        
	
@endsection
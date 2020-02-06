@extends('igreja.model')

@section('page-title-r')
    <a href="{{ route('igrejas.edit', $igreja->id) }}" class="btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-edit fa-sm text-white-50"></i>
        {{__('Editar')}}
    </a>
    <a href="{{ route('igrejas.index') }}" class="btn btn-sm btn-info shadow-sm">
        <i class="fas fa-list fa-sm text-white-50"></i>
        {{__('Listar')}}
    </a>
    <a href="{{ URL::previous() }}" class="btn btn-sm btn-secondary shadow-sm">
    	<i class="fas fa-undo fa-sm text-white-50"></i>
    	<span class="d-none d-md-inline-block">{{__('Voltar')}}</span>
     </a>
@endsection

@section('card')

    <div class="card">
        <div class="card-body">

            <address>
                <h2>{{$igreja->nome}}</h2>
                <div class='label'>
                    <i class="far fa-envelope"></i>
                    {{_('Endereço:')}}
                </div>
                <div class="card">
                    <div class="card-body">
                        @isset($igreja->endereco){{$igreja->endereco}}<br>@endisset
                        @isset($igreja->bairro){{$igreja->bairro}}<br>@endisset
                        @isset($igreja->cidade){{$igreja->cidade}}<br>@endisset
                        @isset($igreja->estado){{$igreja->estado}}<br>@endisset
                        @isset($igreja->cep){{$igreja->cep}}<br>@endisset
                        @isset($igreja->pais){{$igreja->pais}}@endisset
                    </div>
                </div>
                    
                
            </address>
            
            <div class='label'>
                <i class='fas fa-tag'></i>
                {{_('Nome da Igreja para ser impresso na ID (Máximo 38 caracteres)')}}
            </div>
            <div class="field w75">
                <?php
                    $str40 = substr($igreja->nome, 0, 38);
                ?>
                {{ $igreja->nome_abreviado ?? $str40 }}
            </div>

            <div class='label'>
                <i class='fas fa-phone-square'></i>
                {{_('Telefone da Igreja')}}
            </div>
            <div class="field w75">                
                {{ $igreja->telefone ?? ". . ." }}
            </div>

            <div class='label'>
                <i class="fas fa-user-clock"></i>
                {{_('Membro desde')}}
            </div>
            <div class="field w75">                
                {!! $igreja->membro_desde ? $igreja->membro_desde->format('d/m/Y') : ". . ." !!}
            </div>

            @isset($pastor)
            <div class='label'>
                <i class="fas fa-user-clock"></i>
                {{_('Pastor presidente:')}}
            </div>
            <div class="field w75">                
                {{ $pastor->nome }}
            </div>
            @endisset

            

        </div>
        <div class="card-footer text-muted">
            <p class="small text-right">Ficha criada em <strong>{{ $igreja->created_at->format('d-m-Y [H:m]') }}</strong> e atualizada pela ultima vez em <strong>{{ $igreja->updated_at->format('d-m-Y [H:m]') }}</strong></p>
        </div>
    </div>    

    <div class="card">
        <h5 class="card-header">Obreiros</h5>
        <div class="card-body">           

            @foreach($members as $member)

                <a class="link" href="{{ route('members.show', $member->id) }}"><i class="fas fa-chevron-circle-right"></i></a> {{$member->nome }} <br>

            @endforeach
                
        </div>
    </div>

    

@endsection
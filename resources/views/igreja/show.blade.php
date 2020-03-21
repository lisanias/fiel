@extends('igreja.model')

@section('page-title-r')
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
            
            <h2>{{$igreja->nome}}</h2> {{session('origin')}}
                        
            @foreach ($addresses as $address)

                <div class="card">

                    <div class="card-header">
                        <i class="far fa-envelope text-info"></i>
                        {{ $address->tipo ?? 'Endereco' }}
                        <a href="{{ route('address.edit', $address->id) }}" class="card-link float-right">
                            <i class="fas fa-edit fa-sm text-white-50"></i>
                            {{__('Editar')}}
                        </a>
                    </div>
                
                    <div class="card-body">
                        <address class="mb-0 mt-0">
                            <p class="mb-0">
                                {{ $address->logradouro }}<br>
                                @if ($address->bairro) 	{{ $address->bairro }} <br> @endif                        
                                @if ($address->cep) <strong>{{ $address->cep }}</strong> &mdash; @endif
                                {{ $address->cidade }}, {{ $address->uf }}
                            </p>
                        </address>
                    </div>

                </div>

            @endforeach

            <a href="{{ route('igrejas.address.create', $igreja->id) }}" class="btn btn-success shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i>
                {{__('Adicionar endereço')}}
            </a>

            <div class="card shadow mt-4">
                <div class="card-body">
                
                    <div class="d-flex flex-column">
                        <div class='label'>
                            <i class='fas fa-tag'></i>
                            {{_('Nome abreviado')}}
                        </div>
                        <div class="field w75 form-text mt-0">
                            <?php
                                $str40 = substr($igreja->nome, 0, 38);
                            ?>
                            {{ $igreja->nome_abreviado ?? $str40 }}
                            <small id="nome_abreviadoHelpBlock" class="form-text text-gray-500 mt-0"><em>
                                Nome Abreviado caso o nome normal tenha mais de 35 caracteres ou 
                                nome da igreja como deseja que fique na ID ministerial.
                            </em></small>
                        </div>
                    </div>

                    <div class="d-flex flex-column mt-4">
                        <div class='label'>
                            <i class='fas fa-at'></i>
                            {{_('E-mail')}}
                        </div>
                        <div class="field w75">                
                            {{ $igreja->email ?? ". . ." }}
                        </div>
                    </div>

                    <div class="d-flex flex-column mt-4">
                        <div class='label'>
                            <i class='fas fa-phone-square'></i>
                            {{_('Telefone da Igreja')}}
                        </div>
                        <div class="field w75">                
                            {{ $igreja->telefone ?? ". . ." }}
                        </div>
                    </div>

                    <div class="d-flex flex-column mt-4">
                        <div class='label'>
                            <i class="fas fa-user-clock"></i>
                            {{_('Membro desde')}}
                        </div>
                        <div class="field w75">                
                            {!! $igreja->membro_desde ? $igreja->membro_desde->format('d/m/Y') : ". . ." !!}
                        </div>
                    </div>

                    @isset($pastor)
                    <div class="d-flex flex-column mt-4">
                        <div class='label'>
                            <i class="fas fa-user-clock"></i>
                            {{_('Pastor presidente:')}}
                        </div>
                        <div class="field w75">                
                            {{ $pastor->nome }}
                        </div>
                    </div>
                    @endisset

                    <a href="{{ route('igrejas.edit', $igreja->id) }}" class="btn btn-sm btn-primary shadow-sm mt-3">
                        <i class="fas fa-edit fa-sm text-white-50"></i>
                        {{__('Editar')}}
                    </a>
                      
                    
                </div>
            </div>
            
        </div>
        <div class="card-footer text-muted">
            <p class="fs-50 text-right mb-0">Ficha criada em <strong>{{ $igreja->created_at->format('d-m-Y [H:m]') }}</strong> e atualizada pela ultima vez em <strong>{{ $igreja->updated_at->format('d-m-Y [H:m]') }}</strong></p>
        </div>


    </div>    

    <div class="card">
        <h5 class="card-header">Obreiros</h5>
        <div class="card-body">           

            @if (count($members) >= 1)

                @foreach($members as $member)

                    <a class="link" href="{{ route('members.show', $member->id) }}"><i class="fas fa-chevron-circle-right"></i></a> {{$member->nome }} <br>

                @endforeach

            @else

                <div class="alert alert-primary mb-0" role="alert">
                    Nenhum obreiro associado a esta igreja. Adicione ou procure por obreiros e relacione com a respectiva igreja!
                </div>

            @endif

            @if (session('last_member'))
                
                {!! Form::model($igreja, ['method' => 'POST', 'url' => route('members.upidig', session('last_member')) ]) !!}
                
                    <input type="hidden" name="igreja_id" value="{{$igreja->id}}">
                    {!! Form::button('Adicinar '.session('last_member_nome'), ['type' => 'submit', 'class' => 'btn btn-success mt-3']) !!}
                        
                {!! Form::close() !!}

            @else
                <a class="btn btn-warning mt-3" href="{{ route('members.index') }}">
                    Encontrar um membro para acrescentar a igreja. 
                <i class="fas fa-chevron-circle-right"></i>
            </a>
            @endif
                
        </div>
    </div>

    

@endsection
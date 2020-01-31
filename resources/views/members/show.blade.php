@extends('layouts.app')

@section('title', __('Obreiros')) 

@section('page-title', __('Obreiros')) 

@section('page-title-r')
    <a href="{{ route('members.index')}}" class="btn btn-sm btn-info shadow-sm" title="{{__('Listar usuários')}}">
    	<i class="fas fa-list-ul fa-sm text-white-50 pr-1"></i> 
    	<span class="d-none d-lg-inline-block">{{__('Listar')}}</span>
    </a>
@endsection

@section('content')


	<div class="col-md-12">
		<div class="card shadow mb-4  border-left-primary">
            <div class="card-header">
            	{{__('Ficha pessoal')}}
            	<span class="badge badge-info float-right">ID {{ str_pad($member->id, 5, "0", STR_PAD_LEFT) }}</span>
            </div>

			<div class="card-body">
				<div class="text-center">
				  	<img class="rounded-circle img-fluid shadow border border-ligth img-thumbnail" src="{{ asset('user-images/user.png') }}" width="150px">
				
					<h2 class="py-4">{{$member->nome}}</h2>
					<h5 class="card-subtitle mb-5 text-muted">{{$member->titulo}}</h5>
				</div>

				<div class="row">

					<div class="col col-md-6">

						<div class="card shadow">

							
							<div class="card-header">
								<i class="fas fa-id-card-alt"></i> Dados Pessoais
							</div>

							<div class="card-body">

								@if(!$member->nome_abreviado == null)
									<div class='label'>{{_('Mome Abreviado')}}<</div>
									<div class="field">{{ $member->nome_abreviado }}</div>
								@endif

								<div class='label'>
									<i class='fas fa-at'></i>
									{{_('E-mail')}}
								</div>
								<div class="field w75">
									{!! $member->email ? $member->email : "<i class='fas fa-ellipsis-h text-warning'></i>" !!}
								</div>

								<div class='label'>
									<i class='fas fa-birthday-cake'></i>
									{{__('Data de nascimento')}}
								</div>
								<div class="field w75">
									{!! $member->dnas ? $member->dnas->format('d-m-Y') : '<i class="fas fa-ellipsis-h text-warning"></i>' !!}
								</div>

								<div class='label'>
									<i class='fas fa-map-marker-alt'></i>
									{{__('Local de nascimento')}}
								</div>
								<div class="field w75">
									{!! $member->naturalde ? $member->naturalde : '<i class="fas fa-ellipsis-h text-warning"></i>' !!}
								</div>

								<div class='label'>
									<i class='fas fa-id-card'></i>
									{{__('RG')}}
								</div>
								<div class="field w75">
									{!! $member->rg ? $member->rg : '<i class="fas fa-ellipsis-h text-warning"></i>' !!}
								</div>

								<div class='label'>
									<i class='fas fa-money-check'></i>
									{{__('CPF')}}
								</div>
								<div class="field w75">
									{!! $member->cpf ? $member->cpf : '<i class="fas fa-ellipsis-h text-warning"></i>' !!}
								</div>

								<div class='label'>
									<i class='fas fa-church'></i>
									{{__('Igreja')}}
								</div>
								<div class="field w75">
									@if($igreja)
										{!! $igreja->nome ? $igreja->nome : '<i class="fas fa-ellipsis-h text-warning"></i>' !!}
									@else
										{!! $member->igreja ? $member->igreja : '<i class="fas fa-ellipsis-h text-warning"></i>' !!}
									@endif
								</div>

								<div class='label'>
									<i class='fas fa-user-plus'></i>
									{{__('Data de Filiação')}}
								</div>
								<div class="field w75">
									{!! $member->data_filiacao ? $member->data_filiacao->format('d-m-Y') : '<i class="fas fa-ellipsis-h text-warning"></i>' !!}
								</div>

								<div class='label'>
									<i class="fas fa-book-reader"></i>
									{{__('Data de Ordenação')}}
								</div>
								<div class="field w75">
									{!! $member->data_ordenacao ? $member->data_ordenacao->format('d-m-Y') : '<i class="fas fa-ellipsis-h text-warning"></i>' !!}
								</div>

			    				<a href="{{ route('members.edit', $member->id) }}" class="btn btn-primary shadow-sm">
							    	<i class="fas fa-edit fa-sm text-white-50"></i>
							    	{{__('Editar')}}
							    </a>
							</div>

				        </div>

					</div>

					<div class="col col-md-6">
						
						<div class="card shadow">
							<div class="card-header">
								<i class="far fa-envelope"></i> Endereço
							</div>
							<div class="card-body">
								
								@foreach ($addresses as $address)
									<address class="mb-0 mt-3">
										<p class="mb-0">
											<i class="fas fa-address-card text-info"></i>
											<small class="text-uppercase font-weight-lighter text-info"><strong>{{ $address->tipo ?? 'Endereco' }}</strong></small>
											<a href="{{ route('address.edit', $address->id) }}" class="card-link float-right">
										    	<i class="fas fa-edit fa-sm text-white-50"></i>
										    	{{__('Editar')}}
										    </a>
											<br>
											{{ $address->logradouro }}<br>
											@if ($address->bairro) 	{{ $address->bairro }} <br> @endif
											
											@if ($address->cep) <strong>{{ $address->cep }}</strong> &mdash; @endif
											{{ $address->cidade }}, {{ $address->uf }}
										</p>
									</address>
								@endforeach

								<a href="{{ route('members.address.create', $member->id) }}" class="btn btn-success shadow-sm">
							    	<i class="fas fa-plus fa-sm text-white-50"></i>
							    	{{__('Adicionar')}}
							    </a>

							</div>
						</div>

						<div class="card shadow mt-4">
							<div class="card-header">
								<i class="fas fa-phone"></i> Telefones 
							</div>
							<div class="card-body">
								<i class='fas fa-phone-square text-info'></i>
								<small class="text-uppercase font-weight-lighter text-info"><strong>Telefones:</strong></small><br>
								
								@foreach ($phones as $phone)

								<li>
									{{ $phone->telefone_tipo }} - {{ $phone->numero }}
									<a href="{{ route('phones.edit', $phone->id) }}" class="card-link float-right">
								    	<i class="fas fa-edit fa-sm text-white-50"></i>
								    	{{__('Editar')}}
								    </a>
								</li>

								@endforeach
							
							    <a href="{{ route('phones.create') }}" class="btn btn-success shadow-sm" >
							    	<i class="fas fa-plus fa-sm text-white-50"></i>
							    	{{__('Adicionar')}}
							    </a>
							</div>
						</div>

					</div>
				</div>		                

			</div>
			<div class="card-footer text-muted">
				<p class="small text-right">Ficha criada em <strong>{{ $member->created_at->format('d-m-Y [H:m]') }}</strong> e atualizada pela ultima vez em <strong>{{ $member->updated_at->format('d-m-Y [H:m]') }}</strong></p>
			</div>
			

		</div>
    </div>
</div>


@endsection
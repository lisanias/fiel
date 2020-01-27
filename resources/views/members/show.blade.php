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

							<div class="card-body">

								<table class="table m-0">
				                    <tbody>
				                        @if(!$member->nome_abreviado == null)
				                        <tr>
				                            <th class="text-right w-25 text-info" scope="row">Mome Abreviado</th>
				                            <td class=" w-75">{{ $member->nome_abreviado }}</td>
				                        </tr>
				                        @endif
				                        <tr>
				                            <th class="text-right w-25 text-info align-middle"  scope="row"><small class="text-uppercase font-weight-lighter">{{__('E-mail')}}</small></th>
				                            <td class="w-75 align-middle">{!! $member->email ? $member->email : "<i class='fas fa-ellipsis-h text-warning'></i>" !!}</td>
				                        </tr>
				                        <tr>
				                            <th class="text-right w-25 text-info align-middle" scope="row"><small class="text-uppercase font-weight-lighter">{{__('Data de nascimento')}}</small></th>
				                            <td class=" w-75 align-middle">{!! $member->dnas ? $member->dnas->format('d-m-Y') : '<i class="fas fa-ellipsis-h text-warning"></i>' !!}</td>
				                        </tr>
				                        <tr>
				                            <th class="text-right w-25 text-info align-middle" scope="row"><small class="text-uppercase font-weight-lighter">{{__('Natural de:')}}</small></th>
				                            <td class=" w-75 align-middle">{{ $member->naturalde }}</td>
				                        </tr>
				                        <tr>
				                            <th class="text-right w-25 text-info align-middle" scope="row"><small class="text-uppercase font-weight-lighter">{{__('RG')}}</small></th>
				                            <td class="w-75 align-middle">{{ $member->rg }}</td>
				                        </tr>
				                        <tr>
				                            <th class="text-right w-25 text-info align-middle" scope="row"><small class="text-uppercase font-weight-lighter">{{__('CPF')}}</small></th>
				                            <td class="w-75 align-middle">{{ $member->cpf }}</td>
				                        </tr>
				                        <tr>
				                            <th class="text-right w-25 text-info align-middle" scope="row"><small class="text-uppercase font-weight-lighter">{{__('Igreja (Antigo)')}}</small></th>
				                            <td class="w-75 align-middle">{{ $member->igreja ?? '. . . . ' }}</td>
				                        </tr>
				                        <tr>
				                            <th class="text-right w-25 text-info align-middle" scope="row"><small class="text-uppercase font-weight-lighter">{{__('Igreja ID')}}</small></th>
				                            <td class="w-75 align-middle">
				                            	
				                            		{{ $igreja->name ?? '' }}
				                            	
				                            </td>
				                        </tr>
				                        <tr>
				                            <th class="text-right w-25 text-info align-middle" scope="row"><small class="text-uppercase font-weight-lighter">{{__('Data de Diliação')}}</small></th>
				                            <td class="w-75 align-middle">{!! $member->data_filiacao ? $member->data_filiacao->format('d-m-Y') : "<i class='fas fa-times-circle text-danger'></i>" !!}</td>
				                        </tr>
				                        <tr>
				                            <th class="text-right w-25 text-info align-middle" scope="row"><small class="text-uppercase font-weight-lighter">{{__('Data de Ordenação')}}</small></th>
				                            <td class="w-75 align-middle">{!! $member->data_ordenacao ? $member->data_ordenacao->format('d-m-Y') : "<i class='fas fa-times-circle text-danger'></i>" !!}</td>
				                        </tr>
				                    </tbody>
				                </table>
				            </div>

			                <div class="card-footer">
			    				<a href="{{ route('members.edit', $member->id) }}" class="btn btn-primary shadow-sm">
							    	<i class="fas fa-edit fa-sm text-white-50"></i>
							    	{{__('Editar')}}
							    </a>
							</div>

				        </div>

					</div>

					<div class="col col-md-6">
						
						<div class="card shadow">
							<div class="card-body">
								
								@foreach ($addresses as $address)
									<address class="mb-0 mt-3">
										<p class="mb-0">
											<i class="fas fa-address-card text-info"></i>
											<small class="text-uppercase font-weight-lighter text-info"><strong>{{ $address->tipo ?? 'Endereco' }}</strong></small>
											<a href="{{ route('endereco.edit', $address->id) }}" class="card-link float-right">
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

							</div>
							<div class="card-footer">
			    				
							    <a href="{{ route('endereco.create') }}" class="btn btn-success shadow-sm">
							    	<i class="fas fa-plus fa-sm text-white-50"></i>
							    	{{__('Adicionar')}}
							    </a>
							</div>
						</div>

						<div class="card shadow mt-4">
							<div class="card-body">
								<i class='fas fa-phone-square text-info'></i>
								<small class="text-uppercase font-weight-lighter text-info"><strong>Telefones:</strong></small><br>
								
								@foreach ($phones as $phone)

								<li>
									{{ $phone->telefone_tipo }} - {{ $phone->numero }}
									<a href="{{ route('telefone.edit', $phone->id) }}" class="card-link float-right">
								    	<i class="fas fa-edit fa-sm text-white-50"></i>
								    	{{__('Editar')}}
								    </a>
								</li>

								@endforeach
										
							</div>
							<div class="card-footer">
							    <a href="{{ route('telefone.create') }}" class="btn btn-success shadow-sm">
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
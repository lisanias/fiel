@extends('members.models.model')

@section('title', __('Obreiros')) 

@section('page-title', __('Obreiros')) 

@section('page-title-r')
    <a href="{{ route('members.index')}}" class="btn btn-sm btn-info shadow-sm" title="{{__('Listar usuários')}}">
    	<i class="fas fa-list-ul fa-sm text-white-50 pr-1"></i> 
    	<span class="d-none d-lg-inline-block">{{__('Listar')}}</span>
    </a>
@endsection

@section('card')
	
		
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

			<div class="col col-lg-6 col-md-12">

				<div class="card shadow">

					
					<div class="card-header">
						<i class="fas fa-id-card-alt"></i> Dados Pessoais
					</div>

					<div class="card-body">

						@if(!$member->nome_abreviado == null)
							<div class='label'>{{_('Mome Abreviado')}}</div>
							<div class="field">{{ $member->nome_abreviado }}</div>
						@endif

						<div class="d-flex flex-column mb-3">
							<div class='label'>
								<i class='fas fa-at'></i>
								{{_('E-mail')}}
							</div>
							<div class="field w75">
								{!! $member->email ? $member->email : "<i class='fas fa-ellipsis-h text-warning'></i>" !!}
							</div>
						</div>

						<div class="d-flex flex-column mb-3">
							<div class='label'>
								<i class='fas fa-birthday-cake'></i>
								{{__('Data de nascimento')}}
							</div>
							<div class="field w75">
								{!! $member->dnas ? $member->dnas->format('d-m-Y') : '<i class="fas fa-ellipsis-h text-warning"></i>' !!}
							</div>
						</div>

						<div class="d-flex flex-column mb-3">
							<div class='label'>
								<i class='fas fa-map-marker-alt'></i>
								{{__('Local de nascimento')}}
							</div>
							<div class="field w75">
								{!! $member->naturalde ? $member->naturalde : '<i class="fas fa-ellipsis-h text-warning"></i>' !!}
							</div>
						</div>

						<div class="d-flex flex-column mb-3">
							<div class='label'>
								<i class='fas fa-id-card'></i>
								{{__('RG')}}
							</div>
							<div class="field w75">
								{!! $member->rg ? $member->rg : '<i class="fas fa-ellipsis-h text-warning"></i>' !!}
							</div>
						</div>

						<div class="d-flex flex-column mb-3">
							<div class='label'>
								<i class='fas fa-money-check'></i>
								{{__('CPF')}}
							</div>
							<div class="field w75">
								{!! $member->cpf ? $member->cpf : '<i class="fas fa-ellipsis-h text-warning"></i>' !!}
							</div>
						</div>

						<div class="d-flex flex-column mb-3">
							<div class='label'>
								<i class='fas fa-church'></i>
								{{__('Igreja')}}
							</div>
							<div class="field w75">
								@if($igreja)
									<a href="{{ route('igrejas.show', $igreja->id)}}" class='' >
										{{ $igreja->nome }}
									</a>
								@else
									{!! $member->igreja ? $member->igreja : '<i class="fas fa-ellipsis-h text-warning"></i>' !!}
								@endif
							</div>
						</div>

						<div class="d-flex flex-column mb-3">
							<div class='label'>
								<i class='fas fa-user-plus'></i>
								{{__('Data de Filiação')}}
							</div>
							<div class="field w75">
								{!! $member->data_filiacao ? $member->data_filiacao->format('d-m-Y') : '<i class="fas fa-ellipsis-h text-warning"></i>' !!}
							</div>
						</div>

						<div class="d-flex flex-column mb-3">
							<div class='label'>
								<i class="fas fa-book-reader"></i>
								{{__('Data de Ordenação')}}
							</div>
							<div class="field w75">
								{!! $member->data_ordenacao ? $member->data_ordenacao->format('d-m-Y') : '<i class="fas fa-ellipsis-h text-warning"></i>' !!}
							</div>
						</div>

						<div class='d-flex flex-row'>

							<a href="{{ route('members.edit', $member->id) }}" class="btn btn-primary shadow-sm">
								<i class="fas fa-edit fa-sm text-white-50"></i>
								{{__('Editar')}}
							</a>							

							<div class="ml-1">
								<form id='apagar' method="post" action="{!! route('members.destroy', $member->id) !!}"> 
									{!! Form::token() !!}
									<input type="hidden" name="_method" value="DELETE">
									<button type="submit" class='btn btn-danger'><i class="fas fa-trash-alt"></i></button>
								</form>
							</div>

						</div>
					</div>

				</div>
			</div>

			<div class="col col-lg-6 col-md-12">
					
				<div class="card shadow">
					<div class="card-header">
						<i class="far fa-envelope"></i> Endereço
					</div>
					<div class="card-body">
						
						@foreach ($addresses as $address)
							<address class="mb-0 mb-3">
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

						<div>

							<a href="{{ route('members.address.create', $member->id) }}" class="btn btn-success shadow-sm">
								<i class="fas fa-plus fa-sm text-white-50"></i>
								{{__('Adicionar')}}
							</a>

						</div>

					</div>
				</div>

				<div class="card shadow mt-4">
					<div class="card-header">
						<i class="fas fa-phone"></i> Telefones 
					</div>
					<div class="card-body">
						<i class='fas fa-phone-square text-info'></i>
						<small class="text-uppercase font-weight-lighter text-info"><strong>Telefones:</strong></small><br>
						
						<div class="d-flex flex-column bd-highlight">
							
							@foreach ($phones as $phone)

								<div class="d-flex bd-highlight">
									<div class="flex-fill">
										{{ $phone->telefone_tipo }}
									</div>
									<div>
										@if($phone->ddd)({{ $phone->ddd }})@endif {{ $phone->numero }}
									</div>
									<div class="justify-content-end">
										<a href="{{ route('phones.edit', $phone->id) }}" class="card-link">
											<i class="fas fa-edit fa-sm text-white-50"></i>
											{{__('Editar')}}
										</a>
									</div>
								</div>

							@endforeach

						</div>
					
						<a href="{{ route('members.phones.create', $member->id) }}" class="btn btn-success shadow-sm mt-3" >
							<i class="fas fa-plus fa-sm text-white-50"></i>
							{{__('Adicionar')}}
						</a>

					</div>
					
				</div>

			</div>
			
		</div>

		<div class="row">
			<div class="col col-lg-12 col-md-12">
					
				<div class="card shadow">
					<div class="card-header">
						<i class="fas fa-id-card"></i> 
					Identificação Ministerial de {{ $member->nome }}
					</div>
					<div class="card-body">
						
						<table class="table table-borderless table-hover mb-0" style="line-height: 1.2;">
				
							<tbody>
							@foreach($identidades as $identidade)
							<tr>
								<td style='vertical-align: middle;'>
									<small>{{str_pad($identidade->member_id, 4, "0", STR_PAD_LEFT)}}<br></small>
									<strong class="text-success">{{str_pad($identidade->id, 4, "0", STR_PAD_LEFT)}}</strong>
								</td>
								<td style='vertical-align: middle;'>
									<h5 class="mb-0">{{Str::upper($identidade->nome)}}</h5>				
								</td>
								<td style='vertical-align: middle;'>
									<small class="text-success">Validade:</small><br> 									
									{{$identidade->validade->format('m/Y')}}
								</td>
								<td style='vertical-align: middle;'>
									<small class="text-success">Criado em:</small><br> 
									{{ $identidade->created_at->format('d/m/Y') }}
								</td>
								<td style='vertical-align: middle;'>
									<a class="link" href="{{ route('identidades.show', $identidade->id) }}">
										<i class="fas fa-chevron-right"></i>
									</a>
								</td>
							</tr>
							@endforeach
							
							</tbody>
						</table>
						
					</div>
				</div>
			</div>
		</div>

	</div>
			

	<div class="card-footer text-muted">
		<p class="small text-right">Ficha criada em <strong>{{ $member->created_at->format('d-m-Y [H:m]') }}</strong> e atualizada pela ultima vez em <strong>{{ $member->updated_at->format('d-m-Y [H:m]') }}</strong></p>
	</div>

@endsection
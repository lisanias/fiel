@extends('identidade.models.model')

@section('page-title-r')
    <!--<a href="#" class="btn btn-sm btn-success shadow-sm">
    	<i class="fas fa-print fa-sm text-white-50"></i>
    	<span class="d-none d-md-inline-block">{{__('Imprimir')}}</span>
    </a>-->
    <style>

        @import url('https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Istok+Web|Lato:900|Open+Sans:400,700,800|Roboto:400,700,900&display=swap');

        .envelope {
            display: block;
            position: absolute;
            font-family: 'Roboto Condensed', sans-serif;
            color: #fff;
        }
        p { 
            font-size: 1em;          
            font-weight: 400;
        }
        .id_ministerial { 
			width: 170mm; 
			height: 58.643mm; 
		}
        .preencher {
            position: absolute; 
            display: block;
            text-transform: uppercase;
            font-family: 'Roboto', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 0.78em;

            text-align: left;
            white-space: nowrap;
            overflow: hidden;
        }
        .principal {
            font-weight: 700;
        }
        .titulo {	
            left: 7.5mm;
  			top: 24.5mm;
			width: 70mm;

			font-size: 1.12em;
			font-weight: 900;            
        }
        .nome {			
            left: 7.5mm;
            top: 36.6mm;
            width: 70mm;
        }
        .l2 {			
            font-size: 8.5pt;
            top: 44mm;
        }
        .ordenacao {			
            left: 7.5mm; 
            width: 19mm;
        }
        .identidade {			
            left: 28.3mm;
            width: 21mm;
        }
        .numero {			
            left: 50.4mm;
            width: 14mm;
        }
        .validade {			
            left: 69mm;
            width: 13mm;
        }
        .igreja { 
            top: 50mm;		
            left: 7.5mm;
            width: 70mm;
        }
        .emissao {
  			top: 6mm;		
			left: 97mm;
  			width: 15mm;
			
			font-family: 'Open Sans Condensed', sans-serif;
			font-size: 8pt; 
			line-height: 0.9;

  			text-align: center;
  			color: grey;
		}
		.t-a-r{
			text-align: right;
			padding: 5px 20px;
			font-size: 7.5pt;
		}    
        .margin_0 {margin: 0px; padding: 0px}

   </style>
@endsection

@section('card')

	
		<div class="card-header text-white bg-success" id="chbl">
            <h3 class="mb-0">{{__('Identidade Ministerial')}}</h3>
        </div>
        
        @if ($identidade->validade < now())
            <div class="card-body">
                <div class="alert alert-danger mb-0 text-center" role="alert">
                    <h1><i class="fas fa-exclamation-circle"></i></h1>
                    <p class="mb-0">
                        Identidade Ministerial Vencida
                    </p>                    
                </div>
            </div>
        @endif
		<div class="card-body" style="height: 298.66px;">

            <div class="envelope">
                <div class="margin_0">
                    <img src="{{ asset('images/id_ministerial_2022.png') }}" class="id_ministerial">
                </div>
                <div class="preencher titulo">
                    {{$identidade->cargo}}
                </div>
                <div class="preencher principal nome">
                    {{Str::upper($identidade->nome)}}
                </div>
                <div class="preencher l2 ordenacao">
                    {{$identidade->data_ordenacao->format('d/m/Y')}}
                </div>
                <div class="preencher l2 identidade">
                    {{$identidade->rg}}
                </div>
                <div class="preencher l2 numero">
                    {{str_pad($identidade->id, 4, "0", STR_PAD_LEFT)}}
                </div>
                <div class="preencher l2 validade">
                    {{$identidade->validade->format('m/Y')}}
                </div>
                <div class="preencher igreja">
                    {{ Str::upper($identidade->igreja_nome) }}
                </div>
				<div class="preencher emissao">
					{{str_pad($identidade->id, 6, "0", STR_PAD_LEFT)}}<br />
					{{str_pad($identidade->member->id, 6, "0", STR_PAD_LEFT)}}
				</div>
            </div>         
            
        
        </div>
        <div class="card-body ml-3">
            <div class="mb-3">
                @if($member)
                    <a class="btn btn-info" href="{{route('members.show', $identidade->member_id)}}"><i class="far fa-user mr-2"></i>Membro</a>
                @endif
                @if ($igreja)
                    <a class="btn btn-info" href="{{route('igrejas.show', $igreja->id)}}"><i class="fas fa-church mr-2"></i>Igreja</a>
                @endif
                <a class="btn btn-info" href="{{route('identidades.index')}}"><i class="fas fa-list mr-2"></i>Listar</a>
                @if(!$identidade->data_impressao)
                <a class="btn btn-success" href="{{route('imprimir', $identidade->id)}}" target="_blank"><i class="fas fa-print mr-2"></i>IMPRIMIR</a>
                <a class="btn btn-warning" href="{{route('identidades.edit', $identidade->id)}}"><i class="fas fa-edit mr-2"></i>EDITAR</a>
            @endif
            </div>
            <h3>{{Str::upper($member->nome ?? $identidade->nome)}}</h3>
            <p>
                {{str_pad($identidade->id, 6, "0", STR_PAD_LEFT)}}
                {{str_pad($identidade->member_id, 4, "0", STR_PAD_LEFT)}}                
                @isset ($identidade->created_at)
                    {{$identidade->created_at->format('dmY')}}
                    @else 00000000
                @endisset   
                @isset ($identidade->updated_at)
                    {{$identidade->updated_at->format('dmY')}}
                    @else 00000000
                @endisset                
                @isset($identidade->data_impressao)
                    {{ $identidade->data_impressao->format('dmY') }}
                    {{ $identidade->data_impressao->format('Hms') }}
                    @else 00000000 
                @endisset
            </p>
            <div class="d-xl-flex justify-content-start align-self-stretch">
                <div class="mr-xl-4 mb-4 p-3 bd-highlight flex-fill border bg-light">
                    <h3 class="pt-1">{{__('Dados da Identidade Ministerial')}}</h3>
                    <table class="">
                        <tr><td class="t-a-r">Id. Min. Número</td><td><strong>{{str_pad($identidade->id, 5, "0", STR_PAD_LEFT)}}</strong></td></tr>
                        <tr><td class="t-a-r">Nome Impresso</td><td><strong>{{Str::upper(mb_strimwidth($identidade->nome, 0, 32, ''))}}</strong></td></tr>
                        <tr><td class="t-a-r">Titulo</td><td><strong>{{Str::upper($identidade->cargo)}}</strong></td></tr>
                        <tr><td class="t-a-r">Data Ordenação</td><td>{{$identidade->data_ordenacao->format('d/m/Y')}}</td></tr>
                        <tr><td class="t-a-r">Número de R.G.</td><td>{{$identidade->rg}}</td></tr>
                        <tr><td class="t-a-r">Validade</td><td><strong>{{$identidade->validade->format('m/Y')}}<strong></td></tr>
                        <tr><td class="t-a-r">Data emissão</td><td>{{$identidade->created_at->format('d/m/Y')}}</td></tr>
                        <tr><td class="t-a-r">Impresso em</td><td>@isset($identidade->data_impressao){{  $identidade->data_impressao->format('d/m/Y H:i') }} @else  @endisset</td></tr>
                        <tr><td class="t-a-r">Igreja</td><td>{{ Str::upper(mb_strimwidth($identidade->igreja_nome, 0, 34, '')) }}</td></tr>
                    </table>
                </div>

                <div class="ml-xl-4 mb-4 p-3 bd-highlight flex-fill border bg-light">
                    <h3 class="pt-1">{{__('Dados do Obreiro e Igreja')}}</h3>
                    <table>
                        <tr><td class="t-a-r">Nome Completo</td><td @if(!$member) class="badge badge-danger"@endif>{{$member->nome ?? 'Não consta no Cadastro de Obreiro' }}</td></tr>
                        <tr><td class="t-a-r">Membro Número</td><td>{{str_pad($identidade->member->id, 5, "0", STR_PAD_LEFT)}}</td></tr>
                        @if ($igreja)                        
                            <tr><td class="t-a-r">Igreja</td><td>{{ Str::upper($igreja->nome_abreviado ?? '') }}</td></tr>
                            <tr><td class="t-a-r">Razao Social</td><td>{{ Str::upper($igreja->nome) ?? '' }}</td></tr>
                            <tr><td class="t-a-r">Membro desde</td><td>{{ $igreja->membro_desde->format('d-m-Y') ?? $igreja->created_at }}</td></tr>
                        @endif                    
                    </table>
                </div>
            </div> 
        </div>
		<div class="card-footer text-muted">
        </div>
        
        
	
@endsection
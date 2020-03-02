@extends('identidade.models.model')

@section('page-title-r')
    <!--<a href="#" class="btn btn-sm btn-success shadow-sm">
    	<i class="fas fa-print fa-sm text-white-50"></i>
    	<span class="d-none d-md-inline-block">{{__('Imprimir')}}</span>
    </a>-->
    <style>
        .envelope {
            display: block;
            position: absolute;
            /*width: 600px; height: 388px;*/
            width: 400px; height: 298.66px;
        }
        p { 
            font-size: 11pt; 
            /* font-family: 'Open Sans', sans-serif; */
            
            font-weight: 400;
        }
        .id_ministerial { 
            max-width: 400px;
            max-height: 291px;
        }
        .preencher {
            position: absolute; 
            display: block;
            color: #247c50;
            text-transform: uppercase;
            font-family: 'Open Sans', sans-serif;
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
        }
        .principal {			
            font-size: 11pt; 
            font-weight: 700;
        }
        .numero {			
            left: 85mm;
            top: 13mm;
            width: 15mm;
            text-align: right;
            /* font-family:'Arial Black'; */
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 900;            
            font-size: 13.2pt;
        }
        .titulo {			
            left: 0mm;
            top: 41.5mm;
            width: 35mm;
            text-align: left;
            -webkit-transform: rotate(-90deg);	
            -moz-transform: rotate(-90deg);
            -ms-transform: rotate(-90deg);
            -o-transform: rotate(-90deg);
            transform: rotate(-90deg);
            color: #fff;
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 900; 
            font-size: 14pt;
        }
        .nome {			
            left: 24mm;
            top: 36.7mm;
            width: 75mm;
            text-align: left;
            white-space: nowrap;
            overflow: hidden;
            font-size: 12pt;
        }
        .l2 {			
            font-size: 8.5pt;
            top: 49.4mm;
            font-family: 'Roboto';
            font-weight: 400;
        }
        .ordenacao {			
            left: 24mm; /* 37.5*/
            width: 20mm;
            text-align: left;
            white-space: nowrap;
            overflow: hidden;
        }
        .identidade {			
            left: 46.5mm;
            width: 39mm;
            text-align: left;
            white-space: nowrap;
            overflow: hidden;
        }
        .validade {			
            left: 88mm;
            width: 13.5mm;
            text-align: left;
            white-space: nowrap;
            overflow: hidden;
        }
        .igreja { 
            top: 58.4mm;		
            left: 24mm;
            width: 75mm;
            text-align: left;
            white-space: nowrap;
            overflow: hidden;
            font-weight: 700;
            font-size: 10pt;
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
                    <img src="{{ asset('images/id_ministerial.gif') }}" class="id_ministerial">
                </div>
                <div class="preencher principal numero">
                    {{str_pad($identidade->id, 4, "0", STR_PAD_LEFT)}}
                </div>
                <div class="preencher principal nome">
                    {{Str::upper($identidade->nome)}}
                </div>
                <div class="preencher titulo">
                    {{$identidade->cargo}}
                </div>
                <div class="preencher l2 ordenacao">
                    {{$identidade->dataOrdenacao->format('d/m/Y')}}
                </div>
                <div class="preencher l2 identidade">
                    {{$identidade->rg}}
                </div>
                <div class="preencher l2 validade">
                    {{$identidade->validade->format('m/Y')}}
                </div>
                <div class="preencher igreja">
                    {{ Str::upper($identidade->igreja) }}
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
                @if(!$identidade->dataImpressao)
                <a class="btn btn-info" href="{{route('imprimir', $identidade->id)}}" target="_blank"><i class="fas fa-print mr-2"></i>IMPRIMIR</a>
            @endif
            </div>
            <h3>{{Str::upper($member->nome ?? $identidade->nome)}}</h3>
            <p>
                {{str_pad($identidade->id, 6, "0", STR_PAD_LEFT)}}
                {{str_pad($identidade->member_id, 4, "0", STR_PAD_LEFT)}}
                {{$identidade->created_at->format('dmY')}}
                {{$identidade->updated_at->format('dmY')}}
                @isset($identidade->dataImpressao){{  $identidade->dataImpressao->format('dmYHms') }} @else 00000000 @endisset
            </p>
            <div class="jumbotron">
                <table class="">
                    <tr><td class="t-a-r">Nome Completo</td><td @if(!$member) class="badge badge-danger"@endif>{{$member->nome ?? 'Não consta no Cadastro de Obreiro' }}</td></tr>
                    <tr><td class="t-a-r">Nome Impresso</td><td><strong>{{Str::upper($identidade->nome)}}</strong></td></tr>
                    <tr><td class="t-a-r">Titulo</td><td><strong>{{$identidade->cargo}}</strong></td></tr>
                    <tr><td class="t-a-r">Data Ordenação</td><td>{{$identidade->dataOrdenacao->format('d/m/Y')}}</td></tr>
                    <tr><td class="t-a-r">Identidade</td><td>{{$identidade->rg}}</td></tr>
                    <tr><td class="t-a-r">Validade</td><td><strong>{{$identidade->validade->format('m/Y')}}<strong></td></tr>
                    <tr><td class="t-a-r">Igreja (Impresso)</td><td>{{ Str::upper($identidade->igreja) }}</td></tr>
                    @if ($igreja)                        
                        <tr><td class="t-a-r">Igreja (Razao Social)</td><td>{{ Str::upper($igreja->nome) ?? '' }}</td></tr>
                        <tr><td class="t-a-r">Igreja (Nome Obreviado)</td><td>{{ Str::upper($igreja->nome_abreviado ?? '') }}</td></tr>
                    @endif
                </table>
            </div>
        </div>
		<div class="card-footer text-muted">
        </div>
        
        
	
@endsection
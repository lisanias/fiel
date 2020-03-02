<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Id Ministerial</title>
	<!-- Favivon -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('icon/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('icon/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('icon/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('icon/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('icon/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('icon/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('icon/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('icon/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('icon/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('icon/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('icon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('icon/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icon/favicon-16x16.png') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset('icon/ms-icon-144x144.png') }}">
    <!-- /Favicon -->
	<style>

		@import url('https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Istok+Web|Lato:900|Open+Sans:400,700,800|Roboto:400,700,900&display=swap');

		html { 
			font-size: 10pt; 
			font-family: 'Roboto Condensed', sans-serif;
			font-weight: 400;
		}
		h1, h2, h3, h4, h5 {
			font-family: 'Roboto Condensed', sans-serif;
			font-weight: 400;
		}
		.digitos { 
			font-size: 8pt; 
			font-family: 'Istok+Web', sans-serif;
			font-weight: 400;
		}
		page {
			  background: white;
			  display: block;
			  margin: 0 auto;
			  margin-bottom: 0.5cm;
			  box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
		}
		page[size="A4"] {
			  width: 21cm;
			  height: 29.7cm;
		}
		@media print {
			  body,
			  page {
			    margin: 0;
			    box-shadow: 0;
			  }
		}
		.id_ministerial { 
			width: 793; height: 289px; 
		}
		.preencher {
			position: absolute; 
  			display: block;
  			text-transform: uppercase;
  			#background-color: silver;
		}
		.principal {			
			#font-size: 11pt; 
  			font-weight: 700;
		}
		.numero {			
			left: 90mm;
  			top: 25.8mm;
  			width: 10mm;
  			text-align: right;
			font-weight: 900;
			font-size: 9pt;
  			color: #247c50;
		}
		.titulo {			
			left: 26mm;
  			top: 58mm;
			width: 10mm;
			  
  			text-align: right;
			font-size: 12pt;
			font-family: 'Roboto', sans-serif;
			font-weight: 900;
			  
  			-webkit-transform: rotate(-90deg);	
			-moz-transform: rotate(-90deg);
			-ms-transform: rotate(-90deg);
			-o-transform: rotate(-90deg);
			transform: rotate(-90deg);
  			color: #fff;
		}
		.nome {			
			left: 37.5mm;
  			top: 44.5mm;
  			width: 63mm;
  			text-align: left;
			font-family: 'Roboto', sans-serif;
			font-weight: 900;
  			white-space: nowrap;
  			overflow: hidden;
		}
		.l2 {			
			font-size: 8pt; 
  			font-weight: 700;
  			top: 55.5mm;
		}
		.ordenacao {			
			left: 37.5mm;
  			width: 17mm;
  			text-align: left;
  			white-space: nowrap;
  			overflow: hidden;
		}
		.identidade {			
			left: 56mm;
  			width: 33mm;
  			text-align: left;
  			white-space: nowrap;
  			overflow: hidden;
		}
		.validade {			
			left: 90.2mm;
  			width: 12mm;
  			text-align: left;
  			white-space: nowrap;
  			overflow: hidden;
		}
		.igreja {			
  						
			font-size: 8pt; 
  			font-weight: 700;
  			top: 63mm;		
			left: 37.5mm;
  			width: 64mm;
  			text-align: left;
  			white-space: nowrap;
  			overflow: hidden;
		}
		.emissao {	  						
			font-size: 8pt; 
			font-family: 'Open Sans Condensed', sans-serif;			
  			font-weight: 400;
  			top: 58mm;		
			left: 110mm;
  			width: 12mm;
  			text-align: center;
  			white-space: nowrap;
  			overflow: hidden;
  			color: #fff;
		}

		.margin_0 {margin: 0px; padding: 0px}
		.texto {
			margin: 18mm; 
		}
		.t-a-r{
			text-align: right;
			padding: 5px 20px;
			font-size: 7.5pt;
		}
		table{
			text-transform: uppercase;
		}

		.rodape{
			margin-top: 120mm;
		}

		.a4_vertical_mm { width: 210mm; height: 297mm; display: block; position: absolute;}

	</style>
</head>
<body>
	<page size="A4">
		<div class="a4_vertical_mm">
		

			<div class="margin_0">
				<img src="{{ asset('images/id_ministerial.png') }}" class="id_ministerial"  alt="">
			</div>
			<div class="preencher principal numero">
				{{str_pad($identidade->id, 4, "0", STR_PAD_LEFT)}}
			</div>
			<div class="preencher principal nome">
				{{Str::upper($identidade->nome)}}
			</div>
			<div class="preencher titulo">
				{{Str::upper($identidade->cargo)}}
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
			<div class="preencher emissao">
				<p>
					{{str_pad($identidade->id, 4, "0", STR_PAD_LEFT)}}{{str_pad($identidade->member->id, 4, "0", STR_PAD_LEFT)}}
				</p>
			</div>
			<div class="texto">
				<h2>Impressão de identidade ministerial</h2>
				<h4>
					{{Str::upper($identidade->member->nome??'')}}
					<br>
					<small class="digitos">
						{{str_pad($identidade->id, 5, "0", STR_PAD_LEFT)}}
						{{str_pad($identidade->member->id, 4, "0", STR_PAD_LEFT)}}
						{{$identidade->created_at->format('dmY')}}
						{{$identidade->updated_at->format('dmY')}}
						@isset($identidade->dataImpressao){{  $identidade->dataImpressao->format('dmYHms') }} @else 00000000 @endisset
					</small>
				</h4>
				<table>
					<tr><td class="t-a-r">Nome Impresso</td><td><strong>{{Str::upper($identidade->nome)}}</strong></td></tr>
					<tr><td class="t-a-r">Titulo</td><td><strong>{{Str::upper($identidade->cargo)}}</strong></td></tr>
					<tr><td class="t-a-r">Data Ordenação</td><td>{{$identidade->dataOrdenacao->format('d/m/Y')}}</td></tr>
					<tr><td class="t-a-r">Identidade</td><td>{{$identidade->rg}}</td></tr>
					<tr><td class="t-a-r">Validade</td><td><strong>{{$identidade->validade->format('m/Y')}}<strong></td></tr>
					<tr><td class="t-a-r">Igreja</td><td>{{ Str::upper($identidade->igreja) }}</td></tr>
				</table>
			</div>
			<div class="texto rodape" style="text-align:center;">
				<p>
					{{str_pad('....', 160, ".", STR_PAD_LEFT)}}<br>
					Usuário do sistema: <strong>{{ Auth::user()->name }}</strong> em {{now()}}.
				</p>				
			</div>
		</div>
	</page>
</body>
</html>
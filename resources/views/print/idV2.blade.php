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
		h2 {padding-bottom: 2em;}
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
		.preencher {
			position: absolute; 
  			display: block;
  			text-transform: uppercase;
		}
		.desenho_base {
			margin-top: 14mm;
			margin-left: 18mm;
			width: 170mm;
			background-color: red;
		}
		.id_ministerial { 
			width: 170mm; 
			height: 58.643mm; 
			margin-top: 14mm;
			margin-left: 18mm;
		}
		.principal {
  			font-weight: 700;
		}
		.titulo {			
			left: 25.5mm;
  			top: 40mm;
			width: 70mm;

			font-size: 12pt;
			font-family: 'Roboto', sans-serif;
			font-weight: 900;
		}
		.nome {			
			left: 25.5mm;
  			top: 51.5mm;
  			width: 74mm;
			
			font-family: 'Roboto', sans-serif;			
			font-size: 0.8em;
			font-weight: 900;
			
  			text-align: left;
  			white-space: nowrap;
  			overflow: hidden;
		}
		.l2 {			
			font-size: 7pt; 
  			font-weight: 700;
  			top: 58.5mm;
		}
		.ordenacao {			
			left: 25.5mm;
  			width: 19mm;
  			text-align: left;
  			white-space: nowrap;
  			overflow: hidden;
		}
		.identidade {			
			left: 46.2mm;
  			width: 21mm;
  			text-align: left;
  			white-space: nowrap;
  			overflow: hidden;
		}
		.numero {			
			left: 68.4mm;
  			width: 15mm;
			text-align: left;			
			white-space: nowrap;
  			overflow: hidden;
		}
		.validade {			
			left: 86.8mm;
  			width: 12mm;
  			text-align: left;
  			white-space: nowrap;
  			overflow: hidden;
		}
		.igreja {  			
  			top: 64.5mm;		
			left: 25.5mm;
  			width: 70mm;

			font-size: 7.55pt; 
  			font-weight: 700;

  			text-align: left;
  			white-space: nowrap;
  			overflow: hidden;
		}
		.emissao {
  			top: 19.5mm;		
			left: 114mm;
  			width: 15mm;
			
			font-family: 'Open Sans Condensed', sans-serif;
			font-size: 8pt; 
			line-height: 0.9;

  			text-align: center;
  			white-space: nowrap;
  			overflow: hidden;
  			color: grey;
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
			margin-top: 90mm;
		}

		.a4_vertical_mm { width: 210mm; height: 297mm; display: block; position: absolute;}

		.id { color: #fff;}

	</style>
</head>
<body>
	<page size="A4">
		<div class="a4_vertical_mm">
		
			<div class="id">
				<div class="margin_0">
					<img src="{{ asset('images/id_ministerial_2022.png') }}" class="id_ministerial"  alt="">
				</div>
				<div class="preencher principal nome">
					{{Str::upper($identidade->nome)}}
				</div>
				<div class="preencher titulo">
					{{Str::upper($identidade->cargo)}}
				</div>
				<div class="preencher l2 ordenacao">
					{{$identidade->data_ordenacao->format('d/m/Y')}}
				</div>
				<div class="preencher l2 identidade">
					{{$identidade->rg}}
				</div>
				<div class="preencher l2 numero">
					{{str_pad($identidade->id, 5, "0", STR_PAD_LEFT)}}
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
			<div class="texto">
				<h2>Impressão de identidade ministerial</h2>
				<table>
					<tr><td class="t-a-r">Id. Min. Número</td><td><strong>{{str_pad($identidade->id, 5, "0", STR_PAD_LEFT)}}</strong></td></tr>
					<tr><td class="t-a-r">Nome Impresso</td><td><strong>{{Str::upper(mb_strimwidth($identidade->nome, 0, 32, ''))}}</strong></td></tr>
					<tr><td class="t-a-r">Membro Número</td><td>{{str_pad($identidade->member->id, 5, "0", STR_PAD_LEFT)}}</td></tr>
					<tr><td class="t-a-r">Titulo</td><td><strong>{{Str::upper($identidade->cargo)}}</strong></td></tr>
					<tr><td class="t-a-r">Data Ordenação</td><td>{{$identidade->data_ordenacao->format('d/m/Y')}}</td></tr>
					<tr><td class="t-a-r">Número de R.G.</td><td>{{$identidade->rg}}</td></tr>
					<tr><td class="t-a-r">Validade</td><td><strong>{{$identidade->validade->format('m/Y')}}<strong></td></tr>
					<tr><td class="t-a-r">Data emissão</td><td>{{$identidade->created_at->format('d/m/Y')}}</td></tr>
					<tr><td class="t-a-r">Impresso em</td><td>@isset($identidade->data_impressao){{  $identidade->data_impressao->format('d/m/Y H:i') }} @else  @endisset</td></tr>
					<tr><td class="t-a-r">Igreja</td><td>{{ Str::upper(mb_strimwidth($identidade->igreja_nome, 0, 34, '')) }}</td></tr>
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
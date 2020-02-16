<html>
<head>
	<meta charset="UTF-8">
	<title>Id Ministerial</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto|Roboto+Condensed" rel="stylesheet">
	<style>
		html { 
			font-size: 11pt; 
			font-family: 'Roboto Condensed', sans-serif;
			font-weight: 400;
		}
		h1, h2, h3, h4, h5 {
			font-family: 'Roboto Condensed', sans-serif;
			font-weight: 400;
		}
		p { 
			font-size: 11pt; 
			font-family: 'Open Sans', sans-serif;
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
  			font-family: 'Open Sans', sans-serif;
  			color: #247c50;
  			text-transform: uppercase;
  			#background-color: silver;
		}
		.principal {			
			font-size: 11pt; 
  			font-weight: 700;
		}
		.numero {			
			left: 90mm;
  			top: 26mm;
  			width: 10mm;
  			text-align: right;  			
		}
		.titulo {			
			left: 26mm;
  			top: 58mm;
  			width: 10mm;
  			text-align: right;
			font-size: 12pt;
  			-webkit-transform: rotate(-90deg);	
			-moz-transform: rotate(-90deg);
			-ms-transform: rotate(-90deg);
			-o-transform: rotate(-90deg);
			transform: rotate(-90deg);
  			color: #fff;
		}
		.nome {			
			left: 37.5mm;
  			top: 45mm;
  			width: 63mm;
  			text-align: left;
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
			left: 55mm;
  			width: 33mm;
  			text-align: left;
  			white-space: nowrap;
  			overflow: hidden;
		}
		.validade {			
			left: 90mm;
  			width: 12mm;
  			text-align: left;
  			white-space: nowrap;
  			overflow: hidden;
		}
		.igreja {			
  						
			font-size: 8pt; 
  			font-weight: 400;
  			top: 63mm;		
			left: 37.5mm;
  			width: 64mm;
  			text-align: left;
  			white-space: nowrap;
  			overflow: hidden;
		}
		.emissao {			
  						
			font-size: 8pt; 
  			font-weight: 400;
  			top: 58mm;		
			left: 110mm;
  			width: 12mm;
  			text-align: center;
  			white-space: nowrap;
  			overflow: hidden;
  			color: #fff;
  			font-family: 'Roboto Condensed', sans-serif;
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
				100
			</div>
			<div class="preencher principal nome">
				Lisanias Vieira Loback
			</div>
			<div class="preencher titulo">
				PASTOR
			</div>
			<div class="preencher l2 ordenacao">
				24/07/1972
			</div>
			<div class="preencher l2 identidade">
				26.456.569-0
			</div>
			<div class="preencher l2 validade">
				03/2020
			</div>
			<div class="preencher igreja">
				{{ Str::upper('Casa Oração Para Todos os Povos') }}
			</div>
			<div class="preencher emissao">
				0324|100
			</div>
			<div class="texto">
				<h2>Impressão de identidade ministerial</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia fugit nesciunt non recusandae molestiae facilis quo hic fuga optio praesentium quidem iste temporibus dolorem, dolor veniam eaque voluptates explicabo, laudantium.</p>
				<table>
					<tr><td class="t-a-r">Nome</td><td>Lisanias Viera Loback</td></tr>
					<tr><td class="t-a-r">Nome Impresso</td><td><strong>Lisanias V. Loback</strong></td></tr>
					<tr><td class="t-a-r">Titulo</td><td><strong>Pastor</strong></td></tr>
					<tr><td class="t-a-r">Data Ordenação</td><td>24/01/1998</td></tr>
					<tr><td class="t-a-r">Identidade</td><td>10800835 SSP</td></tr>
					<tr><td class="t-a-r">Validade</td><td><strong>05/2020P<strong></td></tr>
					<tr><td class="t-a-r">Igreja</td><td>Casa de Oração Para Todos os Povos</td></tr>
				</table>
			</div>
		</div>
	</page>
</body>
</html>
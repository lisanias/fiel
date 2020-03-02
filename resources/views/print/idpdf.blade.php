<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Id Ministerial</title>
	
	<style>

/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url(https://fonts.gstatic.com/s/opensans/v17/mem5YaGs126MiZpBA-UN8rsOUuhp.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v17/mem8YaGs126MiZpBA-UFVZ0b.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}


/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  font-display: swap;
  src: local('Roboto Black'), local('Roboto-Black'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmYUtfBBc4.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* latin-ext */
@font-face {
  font-family: 'Roboto Condensed';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local('Roboto Condensed'), local('RobotoCondensed-Regular'), url(https://fonts.gstatic.com/s/robotocondensed/v18/ieVl2ZhZI2eCN5jzbjEETS9weq8-19y7DRs5.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto Condensed';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local('Roboto Condensed'), local('RobotoCondensed-Regular'), url(https://fonts.gstatic.com/s/robotocondensed/v18/ieVl2ZhZI2eCN5jzbjEETS9weq8-19K7DQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* latin-ext */
@font-face {
  font-family: 'Roboto Condensed';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: local('Roboto Condensed Bold'), local('RobotoCondensed-Bold'), url(https://fonts.gstatic.com/s/robotocondensed/v18/ieVi2ZhZI2eCN5jzbjEETS9weq8-32meGCoYb8td.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto Condensed';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: local('Roboto Condensed Bold'), local('RobotoCondensed-Bold'), url(https://fonts.gstatic.com/s/robotocondensed/v18/ieVi2ZhZI2eCN5jzbjEETS9weq8-32meGCQYbw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}


html { 
	font-size: 11pt; 
	font-family: 'Roboto Condensed', sans-serif;
	font-weight: 400;
	margin:0 0
}

h1, h2, h3, h4, h5 {
	font-weight: 400;
}
p { 
	font-size: 11pt; 
	font-weight: 400;
}
page {
		background: white;
		display: block;
		margin: 0 auto;
}
page[size="A4"] {
		width: 21cm;
		height: 29.7cm;
}

body, page {
	margin: 0;
	box-shadow: 0;
}

.id_ministerial { 
	width: 793px; height: 289px; 
}
.preencher {
	position: absolute; 
	display: block;
	#font-family: 'Open Sans', sans-serif;
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
	top: 25.5mm;
	width: 10mm;
	text-align: right;  			
}
.titulo {			
	left: 16mm;
	top: 48.5mm;
	width: 30mm;

	text-align: left;
	font-size: 12pt;
	font-family: 'Open Sans', sans-serif;
  	font-weight: 800;

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
	<div size="A4">
		<div class="a4_vertical_mm">
		

			<div class="margin_0">
				<img src="{{ public_path() . '/images/id_ministerial.png' }}" class="id_ministerial"  alt="">
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
	</div>
</body>
</html>
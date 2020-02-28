
<!-- PARA INSERIR COM FIGURA E DIVS -->
<style>
    .envelope {
        display: block;
        position: absolute;
        /*width: 793px; height: 289px;*/
        width: 1199px; height: 388px;
    }
    p { 
        font-size: 11pt; 
        font-family: 'Open Sans', sans-serif;
        font-weight: 400;
    }
    .id_ministerial { 
        width: 800px;
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
          top: 25mm;
          width: 10mm;
          text-align: right;  			
    }
    .titulo {			
        left: 13mm;
          top: 48mm;
          width: 30mm;
          text-align: left;
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
        left: 56mm;
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
</style>

<div class="envelope">
    <div class="margin_0">
        <img src="{{ asset('images/id_ministerial.jpg') }}" class="id_ministerial"  alt="">
    </div>
    <div class="preencher principal numero">
        {{$identidade->id}}
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
    <div class="preencher emissao">
        {{$identidade->member_id}}|{{$identidade->id}}
    </div>
</div>

<!-- PARA INSERIR COM SVG -->
<object type="image/svg+xml" data="@include('identidade.includes.id-svg')"></object> 
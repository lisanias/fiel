<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        @page {
            margin: 0;
        }
        .etiqueta {
            padding-left: 10mm;
            margin-top: 3mm;
        }

    </style>
</head>

<body style="font-size:0.75em; font-family: Arial, Helvetica, sans-serif;">
   
    @php $w = 0; @endphp

    @foreach($aniversariantes as $aniversariante)
        
            @php
                $addresses = $aniversariante->addresses->first();
            //dd($addresses);
            @endphp

            <div class='font' style="position: absolute; top: {{$top[$w]+$identacaoTop}}mm; left: {{$left[$loop->index%2]+$identacaoLeft}}mm; width:  91.6mm;">
    
                    <strong>{{ $aniversariante->nome }}</strong><br>
                    {!! $addresses->logradouro ?? '<span style="color: red">___Sem rua definida___</span>'!!} <br>
                    @if (isset($addresses->bairro))
                        {{ $addresses->bairro }}<br>
                    @endif
                    {{ $addresses->cep ?? '|__|__|__|__|__|-|__|__|__|' }} &nbsp; {{ $addresses->cidade ?? '________________' }} - {{ strtoupper($addresses->uf??'|__|__|') }}
                
            </div>

    @php 
            if ($loop->index%2) {
                 //($w<9) ? $w++ : $w=0;
                 if ($w<9) {
                     $w++;
                 } else {
                     $w = 0;
                     echo "<div style='page-break-inside:avoid; page-break-after:always;border: 0; margin: 0; padding: 0;'></div>";
                 }
            }
    @endphp

    @endforeach
            
</body>
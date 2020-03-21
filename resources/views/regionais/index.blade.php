@extends('regionais.models.model')

@section('page-title-r')
    <a href="{{ route('igrejas.create') }}" class="btn btn-sm btn-success shadow-sm">
    	<i class="fas fa-user-plus fa-sm text-white-50"></i>
    	<span class="d-none d-md-inline-block">{{__('Adicionar')}}</span>
    </a>
@endsection

@section('card')

<div class="card-header bg-warning text-white" id="chbl">
    <h3 class="mb-0">{{__('Nossas Regionais')}}</h3>
</div>
<div class="card-body">

    @if ($regionais->isEmpty())
        <h4>Sem nenhuma regional cadastrada!</h4>
        <a href="{{ route('regionais.create') }}" class="btn btn-success">Adione agora</a>   
    @endif

    <table class="table table-borderless table-hover mb-0" style="line-height: 1.2;">
				
        <tbody>
        @foreach ($regionais as $regional)
            <tr>
                <td class="" style='vertical-align: middle;'>
                    <strong class="text-warning">{{str_pad($regional->id, 3, "0", STR_PAD_LEFT)}}</strong>                   
                </td>
                <td class="" style='vertical-align: middle;'>
                    <h5 class="mb-0">{{Str::upper($regional->nome)}}</h5>			
                </td>
                <td class='' style='vertical-align: middle;'>
                    <small class="text-warning">Local</small><br> 
                    {{$regional->cidade}} - {{$regional->uf}}
                </td>
                <td class='d-none d-lg-block' style='vertical-align: middle;'>
                    <small class="text-warning">Responsável</small><br> 
                    {{$regional->membros->find($regional->lider_id)->nome??'Sem Lider designado'}}
                </td>
                <td style='vertical-align: middle;' class="text-right">
                    <a class="btn btn-light list-group-item-action text-warning" href="{{ route('regionais.show', $regional->id) }}">
                        <i class="fas fa-chevron-right"></i>		  
                    </a>
                </td>
            </tr>
        @endforeach
    
</div>

@endsection
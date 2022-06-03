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
    @if(!$identidade->arquivo)
    <a class="btn btn-dark" href="{{route('arquivo', $identidade->id)}}"><i class="fas fa-archive mr-2"></i>Arquivar</a>
    @endif
</div>
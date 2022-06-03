@if ($identidade->arquivo == 1)
    <div class="card-body">
        <div class="alert alert-dark mb-0 text-center" role="alert">
            <h1><i class="fas fa-exclamation-circle"></i></h1>
            <p class="mb-0">Identidade Ministerial Arquivada
            </p>                    
        </div>
    </div>
@elseif ($identidade->validade < now())
    <div class="card-body">
        <div class="alert alert-danger mb-0 text-center" role="alert">
            <h1><i class="fas fa-exclamation-circle"></i></h1>
            <p class="mb-0">Identidade Ministerial Vencida
            </p>                    
        </div>
    </div>
@endif
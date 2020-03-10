 <!-- Nome -->
 <div class="form-group">
    <label for="nome">{{__('Nome')}}</label>
    
    <input 
        id="nome"
        name="nome"
        type="text" 
        class="form-control @error('nome') is-invalid @enderror"
        value=" {{old('nome') ?? $regional->nome ?? null }} "
    >

    @error('nome')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Cidade -->
<div class="form-group">
    <label for="cidade">{{__('Cidade')}}</label>
    
    <input 
        id="cidade" 
        name="cidade"
        type="text" 
        class="form-control @error('cidade') is-invalid @enderror"
        value="{{old('cidade') ?? $regional->cidade ?? null }}"
    >

    @error('cidade')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Estado -->
<div class="form-group">
    <label for="uf">{{__('Estado')}}</label>
    
    <input 
        id="uf" 
        name="uf"
        type="text" 
        class="form-control @error('uf') is-invalid @enderror"
        value=" {{old('uf') ?? $regional->uf ?? null }} "
    >

    @error('uf')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>


<!-- Pais -->
<div class="form-group">
    <label for="pais">{{__('Pais')}}</label>
    
    <input 
        id="pais" 
        name="pais"
        type="text" 
        class="form-control @error('pais') is-invalid @enderror"
        value=" {{old('pais') ?? $regional->pais ?? 'Brasil' }} "
    >

    @error('pais')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Descricao -->
<div class="form-group">
    <label for="descricao">{{__('Descrição')}}</label>
    
    <textarea
        id="descricao" 
        name="descricao" 
        class="form-control @error('descricao') is-invalid @enderror"
    >
    {{old('descricao') ?? $regional->descricao ?? null }} 
    </textarea>

    @error('descricao')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Botão de ação -->
<div class="form-group">
    {!! Form::button(__($btn_texto), ['type' => 'submit', 'class' => 'btn btn-success']) !!}
</div>
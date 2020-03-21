<script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)

  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }

}
</script>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Titulo -->
<div class="form-group">
	{!! Form::label('titulo', __('Titulo')) !!}	

	@error('titulo')
		{!! Form::text('titulo', null, ['class' => 'form-control is-invalid']) !!}
	    <div class="invalid-feedback">{{ $message }}</div>
	@else
		{!! Form::text('titulo', null, ['class' => 'form-control']) !!}
	@enderror
</div>

<!-- Nome -->
<div class="form-group">
	{!! Form::label('nome',__('Nome completo')) !!}

	@error('nome')
		{!! Form::text('nome', null, ['class' => 'form-control is-invalid']) !!}
	    <div class="invalid-feedback">{{ $message }}</div>
	@else
		{!! Form::text('nome', null, ['class' => 'form-control']) !!}
	@enderror
</div>

<!-- nome_abreviado -->
<div class="form-group">
	{!! Form::label('nome_abreviado',__('Nome para impressao na ID Ministerial (Máximo de 32 caracteres)')) !!}
			
	@error('nome_abreviado')
		{!! Form::text('nome_abreviado', null, ['class' => 'form-control is-invalid ucase']) !!}
	    <div class="invalid-feedback">{{ $message }}</div>
	@else
		{!! Form::text('nome_abreviado', null, ['class' => 'form-control']) !!}
	@enderror
</div>

<!-- Regional -->
<div class="form-group">
	<?php $invalid = ($errors->has("regional_id")?'is-invalid':'') ?>
	{!! Form::label('regional_id',__('Regional')) !!} 
	{!! Form::select('regional_id', $regionais, null, [
		'class' => 'form-control '.$invalid,
		'placeholder' => 'Selecione ...'
		]) !!}
						
	@error('regional_id')
		<div class="invalid-feedback">{{ $message }}</div>
	@enderror
</div>

<!-- email -->
<div class="form-group">
	{!! Form::label('email',__('E-mail')) !!}
	
	@error('email')
		{!! Form::text('email', null, ['class' => 'form-control is-invalid lcase']) !!}
		<div class="invalid-feedback">{{ $message }}</div>
	@else
		{!! Form::text('email', null, ['class' => 'form-control lcase']) !!}
	@enderror
</div>

<!-- Data de Nascimento -->
<div class="form-group">

	<?php $dnas_invalid = ($errors->has("dnas")?'is-invalid':'') ?>
	<?php $dnas_dados = (isset($member->dnas)?$member->dnas->toDateString():null) ?>

	{!! Form::label('dnas',__('Data de nascimento')) !!}
	{!! Form::date('dnas', $dnas_dados, ['class' => 'form-control '.$dnas_invalid ]) !!}

	@error('dnas')			
		<div class="invalid-feedback">{{ $message }}</div>
	@enderror	
</div>

<!-- Local de nascimento Nascimento -->
<div class="form-group">
	{!! Form::label('naturalde',__('Local de nascimentos')) !!}
	{!! Form::text('naturalde', null, ['class' => 'form-control']) !!}

	@if ($errors->has('dnas'))
	<span class="invalid-feedback" role="alert">
		<strong>{{ $errors->first('dnas') }}</strong>
	</span>
	@endif
</div>

<!-- Numero de indentidade RG -->
<div class="form-group">
	{!! Form::label('rg',__('Número de identidade')) !!}
	
	@error('rg')
		{!! Form::text('rg', null, ['class' => 'form-control is-invalid']) !!}
		<div class="invalid-feedback">{{ __('Precisa digitar o número de identidade, porque o RG é obrigatório!') }}</div>
	@else
		{!! Form::text('rg', null, ['class' => 'form-control']) !!}
	@enderror
</div>

<!-- Numero de CPF -->
<div class="form-group">
	<?php $invalid = ($errors->has("cpf")?'is-invalid':'') ?>
	{!! Form::label('cpf',__('CPF')) !!}		
	{!! Form::text('cpf', null, ['class' => 'form-control ' . $invalid, 'OnKeyPress'=>'formatar("###.###.###-##", this)', 'maxlength'=>'14']) !!}
	@error('cpf')
		<div class="invalid-feedback">{{ $message }}</div>
	@enderror
</div>

@if(isset($member))
@if(!$member->igreja_id)
<!-- Igreja (Cadastro antigo não mais usado... e preciso cadastrar ou selecionar igreja do cadastro) -->
<div class="form-group">
	<div class="card border-warning">
		<div class="card-header border-warning">{{ __('Igreja - NÃO VINCULADA A NENHUMA IGREJA') }}</div>
		<div class="card-body">
			<input 
				id="igreja_nome" 
				type="text" 
				class="form-control border-warning @error('igreja_nome') is-invalid @enderror"
				value='{{$member->igreja_nome??old('igreja_nome')}}'
				disabled
			>
			<p class="card-text text-warning" style="padding-top:1em;">
				Campo da base de dados antiga contendo o nome da igreja. <br>
				Escolha uma igreja ja cadastrada na fiel no campo abaixo ou adicione uma nova igreja como filiada da Fiel.
			</p>
		</div>
		<div class="card-footer border-warning">
			<a href="{{route('igrejas.create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Adicionar Igreja</a>
		</div>
	</div>
</div>
@endif
@endif

@if(isset($igrejas))
<!-- Igreja  -->
<!-- Colocar lista de igrejas da tabela -->
<div class="form-group">
	<?php $invalid = ($errors->has("igreja_id")?'is-invalid':'') ?>
	{!! Form::label('igreja_id',__('Igreja')) !!}
	{!! Form::select('igreja_id', $igrejas, null, [
		'class' => 'form-control '.$invalid,
		'placeholder' => 'Selecione ...'
		]) !!}
						
	@error('igreja_id')
		<div class="invalid-feedback">{{ $message }}</div>
	@enderror
</div>
@endif

<!-- Data de Filiação-->
<div class="form-group">
	{!! Form::label('data_filiacao',__('Data de filiação a FIEL')) !!}

	@isset($member->data_filiacao)		
	{!! Form::date('data_filiacao', $member->data_filiacao->toDateString(), ['class' => 'form-control' ]) !!}
	@else
	{!! Form::date('data_filiacao', null, ['class' => 'form-control' ]) !!}
	@endisset		
</div>

<!-- Data de Ordenação -->
<div class="form-group">
	<?php $data_ordenacao = ($errors->has("data_ordenacao")?'is-invalid':'') ?>
	<?php $data_ordenacao_dados = (isset($member->data_ordenacao)?$member->data_ordenacao->toDateString():'null') ?>
	{!! Form::label('data_ordenacao',__('Data da 1ª ordenação')) !!}
	{!! Form::date('data_ordenacao', $data_ordenacao_dados, ['class' => 'form-control ' . $data_ordenacao ]) !!}

	@error('data_ordenacao')
		<div class="invalid-feedback">{{ $message }}</div>
	@enderror	
</div>

<!-- Botão de ação -->
<div class="form-group">
	{!! Form::button(__($btn_texto), ['type' => 'submit', 'class' => 'btn btn-success']) !!}
</div>




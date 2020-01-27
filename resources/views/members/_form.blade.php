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
	{!! Form::label('nome',__('Nome')) !!}

	@error('nome')
		{!! Form::text('nome', null, ['class' => 'form-control is-invalid']) !!}
	    <div class="invalid-feedback">{{ $message }}</div>
	@else
		{!! Form::text('nome', null, ['class' => 'form-control']) !!}
	@enderror
</div>

<!-- nome_abreviado -->
<div class="form-group">
	{!! Form::label('nome_abreviado',__('Nome abreviado para impressao')) !!}
			
	@error('nome_abreviado')
		{!! Form::text('nome_abreviado', null, ['class' => 'form-control is-invalid ucase']) !!}
	    <div class="invalid-feedback">{{ $message }}</div>
	@else
		{!! Form::text('nome_abreviado', null, ['class' => 'form-control']) !!}
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

	

	<!-- Igreja (Cdastro antigo e lugar para inserir igreja abreviada se for necessário) -->
	<div class="form-group">
		{!! Form::label('igreja',__('Igreja - Nome personalizado para identidade Ministerial')) !!}
		{!! Form::text('igreja', null, ['class' => 'form-control']) !!}

		@if ($errors->has('igreja'))
		<span class="invalid-feedback" role="alert">
			<strong>{{ $errors->first('igreja') }}</strong>
		</span>
		@endif
		<small id="passwordHelpBlock" class="form-text text-muted">
		  Campo da base de dados antiga contendo o nome da igreja. Poderá ser usado, caso necessário, para inserir o nome de igreja personalizado para este usuário no nome da igreja para a Id Ministeria: MSM - Vila Isabel.
		</small>
	</div>

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

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


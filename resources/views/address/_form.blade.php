<div style='margin-bottom:20px'>
	<!-- Tipo de endereço -->
	<div class="form-group">
		{!! Form::label('tipo',__('Tipo (Residencial, Comercial, etc)')) !!}
		@error('tipo')
			{!! Form::text('tipo', null, ['class' => 'form-control is-invalid']) !!}
			<div class="invalid-feedback">{{ $message }}</div>
		@else
			{!! Form::text('tipo', null, ['class' => 'form-control']) !!}
		@enderror
	</div>

	<!-- Nome -->
	<div class="form-group">
		{!! Form::label('logradouro',__('Logradouro')) !!}
		@error('logradouro')
			{!! Form::text('logradouro', null, ['class' => 'form-control is-invalid']) !!}
			<div class="invalid-feedback">{{ $message }}</div>
		@else
			{!! Form::text('logradouro', null, ['class' => 'form-control']) !!}
		@enderror
	</div>

	<!-- Bairro -->
	<div class="form-group">
		{!! Form::label('bairro',__('Bairro')) !!}
		@error('bairro')
			{!! Form::text('bairro', null, ['class' => 'form-control is-invalid']) !!}
			<div class="invalid-feedback">{{ $message }}</div>
		@else
			{!! Form::text('bairro', null, ['class' => 'form-control']) !!}
		@enderror
	</div>

	<!-- Cidade -->
	<div class="form-group">
		{!! Form::label('cidade',__('Cidade')) !!}
		@error('cidade')
			{!! Form::text('cidade', null, ['class' => 'form-control is-invalid']) !!}
			<div class="invalid-feedback">{{ $message }}</div>
		@else
			{!! Form::text('cidade', null, ['class' => 'form-control']) !!}
		@enderror
	</div>

	<!-- Estado -->
	<div class="form-group">
		{!! Form::label('uf',__('UF')) !!}
		@error('uf')
			{!! Form::text('uf', null, ['class' => 'form-control is-invalid']) !!}
			<div class="invalid-feedback">{{ $message }}</div>
		@else
			{!! Form::text('uf', null, ['class' => 'form-control']) !!}
		@enderror
	</div>

	<!-- CEP -->
	<div class="form-group">
		{!! Form::label('cep',__('CEP')) !!}
		@error('cep')
			{!! Form::text('cep', null, ['class' => 'form-control is-invalid', 'OnKeyPress'=>'formatar("#####-###", this)', 'maxlength'=>'9', 'number' ]) !!}
			<div class="invalid-feedback">{{ $message }}</div>
		@else
			{!! Form::text('cep', null, ['class' => 'form-control', 'OnKeyPress'=>'formatar("#####-###", this)', 'maxlength'=>'9' ]) !!}
		@enderror
	</div>
</div>
    
<!-- Botão de ação -->
	{!! Form::button(__($btn_texto), ['type' => 'submit', 'class' => 'btn btn-primary float-left' ]) !!}

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
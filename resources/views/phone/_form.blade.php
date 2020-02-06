<div class="form-row" style='margin-bottom:20px'>
	<!-- Tipo de endereço -->
	<div class="form-group col-md-2">
		{!! Form::label('ddd',__('DDD')) !!}
		@error('ddd')
			{!! Form::text('ddd', null, ['class' => 'form-control is-invalid', 'maxlength'=>'2' ]) !!}
			<div class="invalid-feedback">{{ $message }}</div>
		@else
			{!! Form::text('ddd', null, ['class' => 'form-control', 'maxlength'=>'2' ]) !!}
		@enderror

	</div>

	<!-- Nome -->
	<div class="form-group col-md-4">
		{!! Form::label('numero',__('Número')) !!}
		@error('numero')
			{!! Form::text('numero', null, ['class' => 'form-control is-invalid', 'maxlength'=>'10' ]) !!}
			<div class="invalid-feedback">{{ $message }}</div>
		@else
			{!! Form::text('numero', null, ['class' => 'form-control', 'maxlength'=>'10' ]) !!}
		@enderror
	</div>

	<!-- Tipo de telefone -->
	<div class="form-group col-md-6">
		{!! Form::label('telefone_tipo',__('Marcador')) !!}
		@error('telefone_tipo')
			{!! Form::text('telefone_tipo', null, ['class' => 'form-control is-invalid']) !!}
			<div class="invalid-feedback">{{ $message }}</div>
		@else
			{!! Form::text('telefone_tipo', null, ['class' => 'form-control']) !!}
		@enderror
	</div>
</div>

<!-- Botão de ação -->
{!! Form::button(__($btn_texto), ['type' => 'submit', 'class' => 'btn btn-primary float-left']) !!}

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
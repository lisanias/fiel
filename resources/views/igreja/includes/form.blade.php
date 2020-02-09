<!-- Nome -->
<div class="form-group">
	{!! Form::label('nome', __('Nome')) !!}	

	@error('titulo')
		{!! Form::text('nome', null, ['class' => 'form-control is-invalid']) !!}
	    <div class="invalid-feedback">{{ $message }}</div>
	@else
		{!! Form::text('nome', null, ['class' => 'form-control']) !!}
	@enderror
</div>

<!-- Nome Abreviado -->
<div class="form-group">
	{!! Form::label('nome_abreviado', __('Nome Abreviado')) !!}	

	@error('titulo')
		{!! Form::text('nome_abreviado', null, ['class' => 'form-control is-invalid']) !!}
	    <div class="invalid-feedback">{{ $message }}</div>
	@else
		{!! Form::text('nome_abreviado', null, ['class' => 'form-control']) !!}
    @enderror
    <small id="nome_abreviadoHelpBlock" class="form-text text-muted">
        Nome Abreviado caso o nome normal tenha mais de 35 caracteres ou 
        nome da igreja como deseja que fique na ID ministerial.
    </small>
</div>

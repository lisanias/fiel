<!-- Nome -->
<div class="form-group">
	{!! Form::label('nome', __('Nome')) !!}

	@error('nome')
		{!! Form::text('nome', null, ['class' => 'form-control is-invalid']) !!}
	    <div class="invalid-feedback">{{ $message }}</div>
	@else
		{!! Form::text('nome', null, ['class' => 'form-control']) !!}
	@enderror
</div>

<!-- Nome Abreviado -->
<div class="form-group">
	{!! Form::label('nome_abreviado', __('Nome Abreviado')) !!}

	@error('nome_abreviado')
		{!! Form::text('nome_abreviado', null, ['class' => 'form-control is-invalid']) !!}
	    <div class="invalid-feedback">{{ $message }}</div>
	@else
		{!! Form::text('nome_abreviado', null, ['class' => 'form-control']) !!}
    @enderror
    <small id="nome_abreviadoHelpBlock" class="form-text text-gray-500">
        Nome Abreviado (opcional) caso o nome normal tenha mais de 34 caracteres ou
        nome da igreja como deseja que fique na ID ministerial.
    </small>
</div>

<!-- E-mail -->
<div class="form-group">
	<?php $invalid = ($errors->has("email")?'is-invalid':'') ?>

	{!! Form::label('email', __('E-mail')) !!}
	{!! Form::text('email', null, ['class' => 'form-control '.$invalid]) !!}

	@error('email')
	    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Telefone -->
<div class="form-group">
	{!! Form::label('telefone', __('Telefone')) !!}

	@error('telefone')
		{!! Form::text('telefone', null, ['class' => 'form-control is-invalid']) !!}
	    <div class="invalid-feedback">{{ $message }}</div>
	@else
		{!! Form::text('telefone', null, ['class' => 'form-control']) !!}
    @enderror
</div>

<!-- Membro Desde -->
<div class="form-group">

	<?php $invalid = ($errors->has("membro_desde")?'is-invalid':'') ?>
	<?php $membro_desde = (isset($igreja->membro_desde)?$igreja->membro_desde->toDateString():null) ?>

	{!! Form::label('membro_desde', __('Membro desde:')) !!}
	{!! Form::date('membro_desde', $membro_desde, ['class' => 'form-control '.$invalid]) !!}

	@error('membro_desde')
	    <div class="invalid-feedback">{{ $message }}</div>
	@enderror
	
</div>

@if(isset($members))
<div class="form-group">
	<?php $invalid = ($errors->has("pastor_id")?'is-invalid':'') ?>
	{!! Form::label('pastor_id',__('Pastor Presidente')) !!}
	{!! Form::select('pastor_id', $members, null, [
		'class' => 'form-control '.$invalid,
		'placeholder' => 'Selecione ...'
		]) !!}
						
	@error('pastor_id')
		<div class="invalid-feedback">{{ $message }}</div>
	@enderror
</div>
@endif

<!-- Botão de ação -->
<div class="form-group">
    {!! Form::button(__($btn_texto), ['type' => 'submit', 'class' => 'btn btn-success mt-3']) !!}
</div>

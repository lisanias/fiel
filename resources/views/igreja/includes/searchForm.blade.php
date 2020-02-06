{!! Form::open(['route' => 'igrejas.find', 'class' => 'd-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search']) !!}
	  <div class="input-group">
	  	  {!! Form::text('nome', null, ['class' => 'form-control lcase', 'placeholder'=>__('Procurar por igrejas...')]) !!}		 
		  <div class="input-group-append">
		  	{!! Form::button('<i class="fas fa-search fa-sm"></i>', ['type' => 'submit', 'class' => 'btn btn-primary btn-sm']) !!}		    
		  </div>
	</div>
{!! Form::close() !!}

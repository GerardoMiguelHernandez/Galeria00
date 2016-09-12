@extends('admin1.template_admin')

@section('title', 'Agregar Categoria')

@section('content')
    

<br>
    <div class="container">

<div class="card bordered z-depth-3" style="margin:0% auto; max-width:400px;">
        

	<div class="row">
		<div class="col s12 m12 l12">
			
				<form method="post" action="{{ url('admin/categoria/store') }}" class="col s12">

					<div class="row">
						<div class="col s12 cyan">
							<h5 class="center">Registrar</h5>
						</div>
					</div>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="row">
						<div class="input-field	col s12">
							<label for="name">Nombre</label>
							<input type="text" name="name" id="name" value="">
						</div>	
						<div class="input-field col s12">
							<label for="description">Descripcion</label>
							<input type="text" name="description" id="description" value="">
						</div>
												
					</div>
					
					
					

					<div class="row">
              <div class="col s6 offset-s3">
     <button class="btn waves-effect waves-light" type="submit" name="action">Agregar
    <i class="material-icons right">send</i>
  </button>
  </div></div>
				</form>
			
		</div>
	</div>
	</div>
</div>
@endsection
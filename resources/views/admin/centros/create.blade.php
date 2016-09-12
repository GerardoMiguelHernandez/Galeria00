@extends('admin1.template_admin')

@section('title', 'Agregar Categoria')

@section('content')
    

<br>
    <div class="container">

<div class="card bordered z-depth-3" style="margin:0% auto; max-width:400px;">
        

	<div class="row">
		<div class="col s12 m12 l12">
			
				<form method="post" action="{{ url('admin/centros/store') }}" class="col s12">

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
							<label for="ciudad">Ciudad</label>
							<input type="text" name="ciudad" id="ciudad" value="">
						</div>
						
							<div class="input-field col s12">
    <select id="region" name="region" required>
      <option value="" disabled selected>Elige una region</option>
      <option value="Valles Centrales">Valles Centrales</option>
      <option value="Mixteca">Mixteca</option>
      <option value="Istmo">Istmo</option>
    </select>
    <label>Region</label>
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
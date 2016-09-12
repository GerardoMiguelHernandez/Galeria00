@extends('admin.template_admin')

@section('title', 'Agregar Usuario')

@section('content')
    


    <div class="container">

<div class="card bordered z-depth-3" style="margin:0% auto; max-width:400px;">
        

	<div class="row">
		<div class="col s12 m12 l12">
			

				<form method="post" action="{{ url('admin/usuario/store') }}" class="col s12">

					<div class="row">
						<div class="col s12 cyan">
							<h5 class="center">Registrar</h5>
						</div>
					</div>
					
					<div class="row">
						<div class="input-field	col s12">
						
							<label for="nombre">Nombre</label>
							<input type="text" name="nombre" id="nombre" value="">
						</div>	
						<div class="input-field col s12">
							<label for="apellido_paterno">Apellido Paterno</label>
							<input type="text" name="apellido_paterno" id="apellido_paterno" value="">
						</div>
						<div class="input-field col s12">
							<label for="apellido_materno">Apellido Materno</label>
							<input type="text" name="apellido_materno" id="apellido_materno" value="">
						</div>						
					</div>
					
					
					
					<div class="row">
						<div class="input-field col s12">
							<label for="password">Contrase&ntilde;a</label>
							<input type="password" name="password" id="password" value="">
						</div>
					</div>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="row">
						<div class="input-field col s12">
        <select>
      <option value="" disabled selected>Nivel de Usuario</option>
      <option value="1">Administrador</option>
      <option value="2">Normal</option>
      
    </select>
    <label>Nivel de Usuario</label>
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
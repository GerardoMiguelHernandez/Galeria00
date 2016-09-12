@extends('admin1.template_admin')

@section('title', 'Agregar Usuarios')

@section('content')
    <br>

 <div class="container">

<div class="card bordered z-depth-3" style="margin:0% auto; max-width:400px;">
        

    <div class="row">
        <div class="col s12 m12 l12">
            
                <form method="post" action="{{url('/admin/post_register') }}" class="col s12">

                    <div class="row">
                        <div class="col s12 cyan">
                            <h5 class="center">Registrar</h5>
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row">
                        <div class="input-field col s12">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name" value="">
                           
                        </div>  
                        <div class="input-field col s12">
                            <label for="lastname">Apellido</label>
                            <input type="text" name="lastname" id="lastname" value="">
                        </div>

                     <div class="input-field col s12">
                         <label for="name">Email</label>
                           <input id="email" type="text" name="email" value="">
                             </div>  

                             <div class="input-field col s12">
                         <label for="password">Password</label>
                           <input id="password" type="password" name="password" value="">
                             </div> 

                             <div class="input-field col s12 m6">
    <select class="icons" name="tipo" id="tipo">
      <option value="" disabled selected>Choose your option</option>
      <option value="Administrador" data-icon="/img/1.jpg" class="circle">Admin</option>
      <option value="Normal" data-icon="/img/2.jpg" class="circle">Normal</option>
      
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
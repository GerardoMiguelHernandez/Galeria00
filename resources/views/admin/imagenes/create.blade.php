@extends('admin1.template_admin')

@section('title', 'Agregar Imagenes')

@section('content')
    


<br>
 <div class="container">

<div class="card bordered z-depth-5" style="margin:0% auto;">
        

	<div class="row">
		<div class="col s12 m12 l12">
			
				 {!! Form::open(['route' => 'imagenes.store', 'method' => 'POST', 'files' => 'true','class'=>'col s12']) !!}

					<div class="row">
						<div class="col s12 cyan">
						<div class="panel-heading"><h3 class="header center teal-text ">Agregar Imagen</h3></div>
						</div>

					</div>
					
					<div class="row">

					<div class="col s12">
						{!! form::label('image','Imagen')!!}
                            <input type="file" name="image" />

						</div>	
						<div class="input-field	col s12">
						{!! form::label('descripcion','Descripcion')!!}
                            {!! form::text('descripcion',null,['class' => 'form-control']) !!}
							</div>	

							<div class="input-field	col s12">
						{!! form::label('Usuario',Auth::user()->name)!!}
                            {!! form::text('usuario_id',Auth::user()->id,['class' => 'form-control']) !!}
							</div>	
		
											
					</div>
					
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="row">
                     <div class="input-field col s12">
                <select name="evento_id">
                    <option disabled selected>Elige Evento</option>
                    @foreach($events as $event)
                    <option value="{{$event->id}}">{{$event->nombre}}</option>
                    @endforeach
                </select>
                <label>Elige Evento</label>
            </div>

          </div>
            
         

					<div class="row">
              <div class="col s6 offset-s3">
			
     <button class="btn waves-effect waves-light" type="submit" id="submit">Agregar
    <i class="material-icons right">send</i>
  </button>
  </div></div>
				{!! Form::close() !!}
			
		</div>
	</div>
	</div>
</div>


@endsection
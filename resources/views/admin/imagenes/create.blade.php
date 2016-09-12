@extends('admin1.template_admin')

@section('title', 'Agregar Imagenes')

@section('content')
    


<br>
 <div class="container">

<div class="card bordered z-depth-5" style="margin:0% auto;">
        

	<div class="row">
		<div class="col s12 m12 l12">
			
				 {!! Form::open(['route' => 'imagenes.store', 'method' => 'POST', 'files' => 'true','id' => 'Drop' , 'class' => 'dropzone']) !!}

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

<script>
        Dropzone.options.Drop = {
        	url: "/admin/imagenes",
            autoProcessQueue: false,
            uploadMultiple: true,
            maxFilezise: 10,
            maxFiles: 2,
            
            init: function() {
                var submitBtn = document.querySelector("#submit");
                myDropzone = this;
                
                submitBtn.addEventListener("click", function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });
                this.on("addedfile", function(file) {
                    alert("file uploaded");
                });
                
                this.on("complete", function(file) {
                    myDropzone.removeFile(file);
                });
 
                this.on("success", 
                    myDropzone.processQueue.bind(myDropzone)
                );
            }
        };
    </script>






@endsection
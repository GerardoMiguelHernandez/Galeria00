@extends('admin.template_admin')

@section('title', 'Agregar Imagenes')

@section('content')
    
<!--

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
						<div class="input-field	col s12">
						{!! form::label('image','Imagen')!!}
                            {!! form::file('image',null,['class' => 'form-control']) !!}
							</div>	
							<div class="input-field col s12">
						{!! form::label('descripcion','Descripcion')!!}
                            {!! form::text('descripcion',null,['class' => 'form-control']) !!}
						</div>
											
					</div>
					
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="row">
                    

            <div class="input-field col s12">
                <select name="evento_id">
                    <option disabled selected>Elige Evento </option>
                  @foreach($events as $event)
                    <option value="{{$event->id}}">{{$event->nombre}}</option>
                    @endforeach
                </select>
                <label>Evento</label>
            </div></div>
            
         
<br>
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
-->
@include('galeria.incluir')



<form method="POST" action="{{route('imagenes.store')}}">
	  {{ csrf_field() }}
	 
	   <div class="fallback">
	  <input type="file" class="dropzone" id="my-dropzone" name="file[]" value="" multiple>
	  <div class="dropzone-previews"></div>
	 </div>
	<button id="submit-all">Submit all files</button>
</form> 

<!--	
<form action="{{route('imagenes.store')}}" method="POST" class="dropzone" id="my-dropzone" enctype="multipart/form-data">
   {{ csrf_field() }}
    <div class="dropzone-previews"></div>
 
    <div class="fallback">
       <input name="file" type="file[]" multiple/>
    </div>
 <button type="submit" id="submit-all" class="btn btn-primary btn-xs">Upload the file</button>
 </form>-->
 
 

<script type="text/javascript">
	
    Dropzone.options.myDropzone = {

  // Prevents Dropzone from uploading dropped files immediately
  autoProcessQueue: false,

  init: function() {
    var submitButton = document.querySelector("#submit-all")
        myDropzone = this; // closure

    submitButton.addEventListener("click", function() {
      myDropzone.processQueue(); // Tell Dropzone to process all queued files.
    });

    // You might want to show the submit button only when 
    // files are dropped here:
    this.on("addedfile", function() {
      // Show submit button here and/or inform user to click it.
    });

  }
};
</script>
@endsection



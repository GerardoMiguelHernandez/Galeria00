@extends('admin.template_admin')

@section('title', 'Listado de Imagenes')

@section('content')

<br>

       
   
        

<div class="row">
@foreach($images as $image)
<div class="col s4">
  <div class="card small">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator responsive-img" src="{{$image->image}}">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">{{$image->image}}<i class="material-icons right">more_vert</i></span>
      <p>
      <a href="{{route('imagenes.edit',$image->id)}}">Editar</a>
      </p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">{{$image->image}}<i class="material-icons right">close</i></span>
      <p>
<ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons teal600">date_range</i>Descripcion</div>
      <div class="collapsible-body"><p>{{$image->descripcion}}</p></div>
    </li>
    <li>
    
    </li>
  </ul>
      </p>
    </div>
  </div>
  </div>
 
          @endforeach
           </div>
        

{!! $images->render() !!}

@endsection


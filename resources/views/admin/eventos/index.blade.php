@extends('admin1.template_admin')

@section('title', 'Listado de Categorias')

@section('content')

<br>

       
   
        @foreach($events as $event)


  <div class="card large">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="/thumbnails/{{'thumb_'.$event->imagen}}">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">{{$event->nombre}}<i class="material-icons right">more_vert</i></span>
      <p>
      <a href="{{route('admin.eventos.destroy',$event->id)}}">Eliminar</a>
      <a href="{{route('eventos.edit',$event->id)}}">Editar</a>
      </p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">{{$event->nombre}}<i class="material-icons right">close</i></span>
      <p>
<ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons teal600">date_range</i>Fecha</div>
      <div class="collapsible-body"><p>{{$event->fecha}}</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons orange600">place</i>Lugar</div>
      <div class="collapsible-body"><p>{{$event->lugar}}</p></div>
    </li>
  </ul>
      </p>
    </div>
  </div>
          @endforeach
        

{!! $events->render() !!}

@endsection



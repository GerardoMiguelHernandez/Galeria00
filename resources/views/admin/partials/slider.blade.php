@extends('admin.template_admin')

@section('title', 'Home')

@section('content')

<!--
<div class="row">
<div class="slider">
    <ul class="slides">
      @foreach($events as $event)
      <li>
        <img src="{{$event->imagen}}"> 
        <div class="caption center-align">
          <h1 class="header center teal-text text-darken-4">{{$event->nombre}}</h1>
          <h5 class="light grey-text text-lighten-3">{{$event->fecha}}</h5>
        </div>
      </li>
      @endforeach
      
    </ul>
  </div>


</div>

 -->
 <!--
<div class="container">
    <div id="slides">
    @foreach($events as $event)
      <img src="{{$event->imagen}}" alt="Photo by: Missy S Link: http://www.flickr.com/photos/listenmissy/5087404401/">
     @endforeach
    </div>
  </div> -->
  <div class="container">
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">




{{$collection->random()
          }}</h5>
        </div>
      </li>
    </ul>
  </div>
      </div>
      
       <div class="container">
    <div class="section">
    <div class="wow bounceInUp">            

                    

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons iconfont1 teal600">flash_on</i></h2>
            <h5 class="center">Eventos</h5>

            <p class="light center">{{$count}} Eventos</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons iconfont1 orange600">image</i></h2>
            <h5 class="center">Imagenes</h5>

            <p class="light center">{{$count_imagenes}} Imagenes</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons iconfont1 teal600">photo_album</i></h2>
            <h5 class="center">Albums</h5>

            <p class="light center">{{$count_albums}} Albums</p>
          </div>
        </div>
      </div>
 </div>
    </div>
  </div>

    </div>
<div class="container">
   <div class="parallax-container">

 <div class="row">
 <div class="col s12 m6 l6">
    <div class="carousel">
    @foreach($events as $event)
    <a class="carousel-item" href="#one!"><img class="img-responsive" src="{{$event->imagen}}"></a>
   @endforeach
  </div>

  </div>
 <div class="col s12 m6 l6">
    <div class="carousel">
    @foreach($events as $event)
    <a class="carousel-item" href="#one!"><img class="img-responsive" src="{{$event->imagen}}"></a>
   @endforeach
  </div>

  </div>
      <div class="parallax"><img src="/img/background3.jpg"></div>
    </div>
    </div>
</div>
<div class="divider"></div>
  <div class="section">
   <h3 class="header center teal-text text-darken-4">Eventos</h3>
   
  </div>
  <div class="container">
  <div class="row">
   
        @foreach($events as $event)

        <div class="col s12 m6 l6">

  <div class="card medium z-depth-5">
    <div class="card-image waves-effect waves-block waves-light">
      <a class="waves-effect waves-light modal-trigger" href="#modal1"><img class="responsive-img" width="650" src="{{$event->imagen}}"></a>
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
<ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons teal600">date_range</i>Fecha</div>
      <div class="collapsible-body"><p>{{$event->fecha}}</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons orange600">place</i>Lugar</div>
      <div class="collapsible-body"><p>{{$event->lugar}}</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons orange600">place</i>creado</div>
      <div class="collapsible-body"><p>{{$event->created_at->diffForHumans()}}</p></div>
    </li>
    <li><div class="collapsible-header"><i class="material-icons orange600">place</i>Categoria</div>
      <div class="collapsible-body"><p>{{$event->category->name}}</p></div>
      
    </li>
  </ul>
      </p>
    </div>
  </div></div>


  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>{{$event->nombre}}</h4>
      <img class="materialboxed" width="650" src="{{$event->imagen}}">
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
    </div>
  </div>
          @endforeach
         </div>
         </div>

{!! $events->render() !!}





</div>


  



@endsection

@extends('galeria.main')
@section('title', 'Home')
@include('galeria.incluir')
@section('content')

<div class="slider teal">
    <ul class="slides">
    @foreach($even as $ev)
      <li>
        <img src="thumbnails/{{'thumb_'.$ev->imagen}}" class="img-responsive"> <!-- random image -->
        <div class="caption rigth-align">
          <h3 class="darken-4 blue-text">{{$ev->nombre}}</h3>
          <h3 class="darken-4 blue-text">{{$ev->fecha}}</h3>
          
        </div>
      </li>
      @endforeach
    </ul>
  </div>

<div class="clearfix grid"> 
@foreach($events as $event)
    <figure class="effect-oscar  wowload fadeIn">
        <img src="thumbnails/{{'thumb_'.$event->imagen}}" alt="img01"/>
        <figcaption>
           <h5><a href="{{route('eventos.show',$event->id)}}">{{$event->nombre}}</a></h5>
            <p>{{$event->fecha}}<br>
            <a href="thumbnails/{{'thumb_'.$event->imagen}}" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
    @endforeach  
</div>
<ul class="pagination">
{!! $events->render() !!}</ul>
<!-- works -->









<!-- About Starts -->
<div class="highlight-info">
<div class="overlay spacer">
<div class="container">
<div class="row text-center  wowload fadeInDownBig">
  <div class="col-sm-3 col-xs-6">
  <i class="fa fa-smile-o  fa-5x"></i><h4>{{$count_users}} Usuarios</h4>
  </div>
  <div class="col-sm-3 col-xs-6">
  <i class="fa fa-rocket  fa-5x"></i><h4>{{$count}} Eventos</h4>
  </div>
  <div class="col-sm-3 col-xs-6">
  <i class="fa fa-cloud-download  fa-5x"></i><h4>454 Descargas</h4>
  </div>
  <div class="col-sm-3 col-xs-6">
  <i class="fa fa-map-marker fa-5x"></i><h4>{{$count_centros}} Centros de Trabajo</h4>
  </div>
</div>
</div>
</div>
</div>
<!-- About Ends -->
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>
@endsection
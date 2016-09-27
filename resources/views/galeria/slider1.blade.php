@extends('galeria.main')
@section('title', 'Home')
@section('content')
<div class="slider teal">
    <ul class="slides">
    @foreach($even as $ev)
      <li>
        <img src="thumbnails/{{'thumb_'.$ev->imagen}}" class="img-responsive"> <!-- random image -->
        <div class="caption rigth-align">
          <h3 class="darken-4 blue-text">{{$ev->nombre}}</h3>
          <h5 class="light black-text text-lighten-3">{{$eve->fecha}}</h5>
        </div>
      </li>
      @endforeach
    </ul>
  </div>

  @endsection
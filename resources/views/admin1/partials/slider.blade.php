@extends('admin1.template_admin')

@section('title', 'Home')

@section('content')
    
<br>

<div class="slider">
    <ul class="slides">
      <li>
        <img src="/assets/img/logo.png"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="/img/1.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="/img/2.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="/img/3.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>

  <div class="row">

      <div class="col s6">
         <div class="carousel">
    <a class="carousel-item" href="#one!"><img src="/img/1.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="/img/2.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="/img/3.jpg"></a>
    <a class="carousel-item" href="#four!"><img src="/img/4.jpg"></a>
  </div>
      </div>
      <div class="col s6">
        <!-- Promo Content 2 goes here -->
         <div class="carousel">
    <a class="carousel-item" href="#one!"><img src="/img/1.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="/img/2.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="/img/3.jpg"></a>
    <a class="carousel-item" href="#four!"><img src="/img/4.jpg"></a>
  </div>
      </div>
      

    </div>
      
      @endsection
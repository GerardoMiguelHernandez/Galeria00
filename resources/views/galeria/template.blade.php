<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
<title>@yield('title', 'Home')</title>

  <!-- CSS  -->
  
   <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
     <link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
</head>
<body>


  <nav class="teal scrollTo" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Galeria</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="{{ url('login') }}"><i class="material-icons left">account_circle</i>Login</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="{{ url('login') }}"><i class="material-icons left">account_circle</i>Login</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

   <div class="slider">
    <ul class="slides">
    @foreach($events as $event)
      <li>
        <img src="/thumbnails/{{'thumb_'.$event->imagen}}"> <!-- random image -->
        <div class="caption center-align">
          <h3>{{$event->nombre}}</h3>
          <h4 class="light grey-text text-lighten-3">{{$event->fecha}}</h5>
          <h4 class="light grey-text text-lighten-3">{{$event->lugar}}</h5>
        </div>
      </li>
      @endforeach
    </ul>
  </div>
      


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
             <h2 class="center brown-text"><i class="material-icons iconfont1">place</i></h2>
            <h5 class="center">Localizacion</h5>

            <p class="light">Diversos lugares en donde se llevan a cabo los eventos</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons iconfont1">group</i></h2>
            <h5 class="center">Experiencia del Coolaborador</h5>

            <p class="light">Fomenta la participacion e integracion del personal en las diversas actividades existentes.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons iconfont1">settings</i></h2>
            <h5 class="center">Trabajo en Equipo</h5>

            <p class="light">Deja de enfocarte en el "yo" y crea el "nosotros".</p>
          </div>
        </div>
      </div>

    </div>
  </div>






  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Galeria de Evidencias</h5>
          <p class="grey-text text-lighten-4">Portafolio de Imagenes</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Responsable</h5>
          <ul>
            <li><a class="white-text" href="#!">Ing. Hans Ernesto Seippel Gomez</a></li>
            
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      CFE <a class="brown-text text-lighten-3" href="@!">Zona Oaxaca</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/materialize.js') }}"></script>
  <script src="{{ asset('js/init.js') }}"></script>
  

  </body>
</html>

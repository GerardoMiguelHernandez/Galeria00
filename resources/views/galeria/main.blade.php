<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
<title>@yield('title', 'Home')</title>


  
   <link rel="stylesheet" href="{{ asset('css/index.css') }}">
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   <link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
   <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
  
</head>
<body>

<header>
  @include('galeria.nav')
</header>
<main>

  <div>
    @yield('content')
  </div>
</main>
@include('galeria.floating_button')
<footer>
  @include('galeria.footer')
</footer>
  <!--  Scripts-->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/materialize.js') }}"></script>
  <script src="{{ asset('js/inicio.js') }}"></script>
  

  </body>
</html>

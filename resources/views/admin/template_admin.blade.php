<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Home')</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
	<link rel="stylesheet" href="{{ asset('css/index.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
	<!--<link rel="stylesheet" href="{{ asset('css/form_usuario.css') }}">-->
	<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
	<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
	
	<link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
	<link rel="stylesheet" href="{{ asset('css/material-design-iconic-font.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.css') }}">

</head>
<body>

	<header>
	@include('admin.partials.nav')
</header>

<main>
	

<div class="row">

      <div class="col s12 m4 l3 grey lighten-3"> <!-- Note that "m4 l3" was added -->
        <!-- Grey navigation panel

              This content will be:
          3-columns-wide on large screens,
          4-columns-wide on medium screens,
          12-columns-wide on small screens  -->@include('admin.partials.lateral')

      </div>

      <div class="col s12 m8 l9"> <!-- Note that "m8 l9" was added -->
        <!-- Teal page content

              This content will be:
          9-columns-wide on large screens,
          8-columns-wide on medium screens,
          12-columns-wide on small screens  -->
          
		@yield('content')
      </div>
    </div>
</main>
<footer>
	@include('admin.partials.footer')
    </footer>
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/materialize.js') }}"></script>
	<script src="{{ asset('js/inicio.js') }}"></script>
	<script src="{{ asset('js/sweetalert.min.js') }}"></script>
	<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
	
	
</body>
</html>

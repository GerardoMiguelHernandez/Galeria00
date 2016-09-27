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
	<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">

</head>
<body>

	<header>
	@include('admin.partials.nav')
</header>

<main>
	

<!--

              This content will be:
          3-columns-wide on large screens,
          4-columns-wide on medium screens,
          12-columns-wide on small screens  @include('admin.partials.lateral')-->

      
        <!-- Teal page content

              This content will be:
          9-columns-wide on large screens,
          8-columns-wide on medium screens,
          12-columns-wide on small screens  -->
          
		@yield('content')
     
</main>
<footer>
	@include('admin.partials.footer')
    </footer>
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/materialize.js') }}"></script>
	<script src="{{ asset('js/inicio.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	<script src="{{ asset('js/plupload.full.min.js') }}"></script>
	
	
	<script src="{{ asset('js/sweetalert.min.js') }}"></script>
	<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
	
</body>
</html>

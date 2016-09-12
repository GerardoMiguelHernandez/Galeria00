<!-- 
* Copyright 2016 Carlos Eduardo Alfaro Orellana
-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Material Dark</title>
    
     <!-- Normalize CSS -->
    
   
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/material-design-iconic-font.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.css') }}">
     <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
     <link rel="stylesheet" href="{{ asset('css/dropzone.css') }}">
     <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    
</head>
<body>
    <!-- Nav Lateral -->
    <section class="NavLateral full-width">
        <div class="NavLateral-FontMenu full-width ShowHideMenu"></div>
        <div class="NavLateral-content full-width teal">
            <header class="NavLateral-title full-width center-align blue">
                CFE Galeria<i class="zmdi zmdi-close NavLateral-title-btn ShowHideMenu"></i>
            </header>
            <figure class="full-width NavLateral-logo">
                <img src="/assets/img/logo.png" alt="material-logo" class="responsive-img center-box">
                <figcaption class="center-align">Panel de Administraci&oacuten</figcaption>
            </figure> 
            <div class="NavLateral-Nav teal">
                <ul class="full-width">
                    <li>
                        <a href="#" class="waves-effect waves-light"><i class="zmdi zmdi-desktop-mac zmdi-hc-fw"></i> Dashboard</a>
                    </li>
                    <li class="NavLateralDivider"></li>
                    <li>
                        <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-accounts zmdi-hc-3x"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i>Usuarios</a>
                        <ul class="full-width">
                            <li><a href="{{route('users.index')}}" class="waves-effect waves-light">Listar</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="{{route('users.create')}}" class="waves-effect waves-light">Crear</a></li>
                        </ul>
                    </li>
                    <li class="NavLateralDivider"></li>
                    <li>
                        <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-view-module zmdi-hc-3x"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i> Categorias</a>
                        <ul class="full-width">
                            <li><a href="{{route('categorias.index')}}" class="waves-effect waves-light">Listar</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="{{route('categorias.create')}}" class="waves-effect waves-light">Crear</a></li>
                        </ul>
                    </li>
                    <li class="NavLateralDivider"></li>
                    <li>
                        <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-calendar-alt zmdi-hc-3x"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i> Eventos</a>
                        <ul class="full-width">
                            <li><a href="{{route('eventos.index')}}" class="waves-effect waves-light">Listar</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="{{route('eventos.create')}}" class="waves-effect waves-light">Crear</a></li>
                        </ul>
                    </li> 
                    <li class="NavLateralDivider"></li>
                    <li>
                        <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-calendar-alt zmdi-hc-3x"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i> Centros</a>
                        <ul class="full-width">
                            <li><a href="{{route('centros.index')}}" class="waves-effect waves-light">Listar</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="{{route('centros.create')}}" class="waves-effect waves-light">Crear</a></li>
                        </ul>
                    </li> 
                    <li>
                        <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-picture-in-picture zmdi-hc-3x"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i> Imagenes</a>
                        <ul class="full-width">
                            <li><a href="{{route('imagenes.index')}}" class="waves-effect waves-light">Listar</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="{{route('imagenes.create')}}" class="waves-effect waves-light">Crear</a></li>
                        </ul>
                    </li>  
                </ul>
            </div>  
        </div>  
    </section>

    <!-- Page content -->
    <section class="ContentPage full-width">
        <!-- Nav Info -->
        <div class="ContentPage-Nav full-width teal">
            <ul class="full-width">
                <li class="btn-MobileMenu ShowHideMenu"><a href="#" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Menu"><i class="zmdi zmdi-more-vert"></i></a></li>
                <li><figure><img src="/assets/img/user.png" alt="UserImage"></figure></li>
                <li style="padding:0 5px;">{{ Auth::user()->name }}</li>
                <li><a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Logout"><i class="zmdi zmdi-power"></i></a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>


                </li>
                <li><a href="#" class="tooltipped waves-effect waves-light btn-Search" data-position="bottom" data-delay="50" data-tooltip="Search"><i class="zmdi zmdi-search"></i></a></li>
                <li>
                    <a href="#" class="tooltipped waves-effect waves-light btn-Notification" data-position="bottom" data-delay="50" data-tooltip="Notifications">
                        <i class="zmdi zmdi-notifications"></i>
                        <span class="ContentPage-Nav-indicator bg-danger">2</span>
                    </a>
                </li>
            </ul>   
        </div>
  
        
<div class="container">
        @yield('content')
        @include('admin1.partials.tab')
      </div>

        <!-- Footer -->   
        <footer class="footer-MaterialDark deep-orange lighten-3">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Contacto</h5>

                        <div class="row">
                            <div class="col l6 s12">
                                Telefono
                                <p class="black-text">9512184518</p>
                            </div>
                             <div class="col l4 offset-l2 s12">
                                
                                Correo
                                <p class="black-text">cfe_oaxaca.@cfe</p>
                            </div>
                        </div>
                    </div>
                    <div class="col l4 offset-l2 s12">
    <h5 class="white-text">Siguenos!</h5>
                        <div class="row">
                            <div class="col l6 s12">
                             <a class="grey-text text-lighten-3" href="#!"><i class="zmdi zmdi-facebook zmdi-hc-3x"></i></a>
                            </div>
                             <div class="col l4 offset-l2 s12">
                                
                               <a class="grey-text text-lighten-3" href="#!">

                  <i class="zmdi zmdi-twitter zmdi-hc-3x "></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="NavLateralDivider"></div>
            <div class="footer-copyright">
                <div class="container center-align">
                    © 2016 Derechos Reservados
                </div>
            </div>
        </footer>
    </section>
    
    <!-- Sweet Alert JS -->



    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    
    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')</script>
    
  
    
   <script src="{{ asset('js/dropzone.js') }}"></script>
   <script src="{{ asset('js/inicio.js') }}"></script>
     <script src="{{ asset('js/main.js') }}"></script>
     <script src="{{ asset('js/materialize.min.js') }}"></script>
     <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
     

     
</body>
</html>
 <div style="font-size: 20px" class="content mCustomScrollbar">
    <p><a href="" class="dropdown-button btn" data-activates='dropdown1'><i class="zmdi zmdi-accounts zmdi-hc-3x "></i>Usuarios</i></a>
    <ul id='dropdown1' class='dropdown-content'>
    <li><a href="{{ url('admin/users/index') }}">Listar</a></li>
     <li class="divider"></li>
    <li><a href="#!" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Lista de Usuarios"><i class="material-icons">menu</i></a></li>
    <li class="divider"></li>
    <li><a href="#!"><i class="material-icons">cerrar</i></a></li>
  </ul></p><br>
    <p><a href="{{ url('admin/categoria/index') }}"><i class="zmdi zmdi-view-module zmdi-hc-3x"></i>Categorias</a></p>
    <p><a href="{{ route('centros.index') }}"><i class="zmdi zmdi-menu zmdi-hc-3x"></i>Centros</a></p><br>
    <p><a href=""><i class="zmdi zmdi-calendar-alt zmdi-hc-3x"></i>Eventos</a></p>
    <p><a href=""><i class="zmdi zmdi-picture-in-picture zmdi-hc-3x"></i>Imagenes</a></p><br>
     <p><a href="{{ route('centros.index') }}"><i class="zmdi zmdi-home zmdi-hc-3x"></i>Home</a></p>
    </div>

    
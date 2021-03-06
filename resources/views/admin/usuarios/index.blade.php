@extends('admin1.template_admin')

@section('title', 'Listado de Usuarios')

@section('content')



<table class="bordered striped">
        <thead>
          <tr>
              <th data-field="id">id</th>
              <th data-field="id">Nombre</th>
              <th data-field="name">Apellido Paterno</th>
              <th data-field="name">Apellido Materno</th>
              <th data-field="price">password</th>
              <th data-field="price">Tipo</th>
          </tr>
        </thead>

        <tbody>
        @foreach($users as $user)
          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->nombre}}</td>
            <td>{{$user->apellido_paterno}}</td>
            <td>{{$user->apellido_materno}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->id_tipo}}</td>
            <td><a  href="#" class="waves-effect waves-light btn red darken-1 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Eliminar"><i class="material-icons left">delete</i></a></td>
            <td><a class="waves-effect waves-light btn teal lighten-2 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar"><i class="material-icons left">mode_edit</i></a></td>
             
          </tr>
          @endforeach
        </tbody>
      </table>
{!! $users->render() !!}

@endsection


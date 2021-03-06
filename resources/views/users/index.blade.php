@extends('admin1.template_admin')

@section('title', 'Listado de Usuarios')

@section('content')
<table class="bordered responsive-table highlight">
        <thead>
          <tr>
              <th data-field="id">id</th>
              <th data-field="id">Nombre</th>
              <th data-field="name">Apellidos</th>
              <th data-field="name">Correo</th>
            
              <th data-field="price">Tipo</th>
          </tr>
        </thead>

        <tbody>
        @foreach($users as $user)
          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->lastname}}</td>
            <td>{{$user->email}}</td>

            <td>{{$user->tipo}}</td>
            <td><a  href="{{route('admin.users.destroy',$user->id)}}" class="waves-effect waves-light btn red darken-1 tooltipped btn-Search" data-position="bottom" data-delay="50" data-tooltip="Eliminar"><i class="material-icons left">delete</i></a></td>
            <td><a href="{{route('admin.users.edit',$user->id)}}" class="waves-effect waves-light btn teal lighten-2 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar"><i class="material-icons left">mode_edit</i></a></td>

           
             
          </tr>
          @endforeach
        </tbody>
      </table>
{!! $users->render() !!}

@endsection






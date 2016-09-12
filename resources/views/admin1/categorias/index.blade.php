@extends('admin.template_admin')

@section('title', 'Listado de Categorias')

@section('content')



<table class="bordered striped">
        <thead>
          <tr>
              <th data-field="id">id</th>
              <th data-field="id">Nombre</th>
              <th data-field="name">Descripcion</th>
            
          </tr>
        </thead>

        <tbody>
        @foreach($categorias as $categoria)
          <tr>
            <td>{{$categoria->id}}</td>
            <td>{{$categoria->nombre}}</td>
            <td>{{$categoria->descripcion}}</td>
            
            <td><a href="{{route('admin.categoria.destroy',$categoria->id)}}" class="waves-effect waves-light btn red darken-1 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Eliminar"><i class="material-icons left">delete</i></a></td>
            <td><a class="waves-effect waves-light btn teal lighten-2 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar"><i class="material-icons left">mode_edit</i></a></td>
             
          </tr>
          @endforeach
        </tbody>
      </table>
      
{!! $categorias->render() !!}

@endsection


@extends('admin1.template_admin')

@section('title', 'Listado de Centros de trabajo')

@section('content')
<table class="bordered responsive-table highlight">
        <thead>
          <tr>
             
              <th data-field="id">Nombre</th>
              <th data-field="name">Ciudad</th>
              <th data-field="name">Region</th>
          </tr>
        </thead>

        <tbody>
        @foreach($work_centers as $work_center)
          <tr>
            
            <td>{{$work_center->name}}</td>
            <td>{{$work_center->ciudad}}</td>
            <td>{{$work_center->region}}</td>

            <td><a  href="{{route('admin.centros.destroy',$work_center->id)}}" class="waves-effect waves-light btn red darken-1 tooltipped" onclick="return confirm('Esta seguro que desea eliminar?')" data-position="bottom" data-delay="50" data-tooltip="Eliminar"><i class="material-icons left">delete</i></a></td>
            <td><a href="{{route('centros.edit',$work_center->id)}}" class="waves-effect waves-light btn teal lighten-2 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar"><i class="material-icons left">mode_edit</i></a></td>

           
             
          </tr>
          @endforeach
        </tbody>
      </table>
{!! $work_centers->render() !!}

@endsection

@include('admin.centros.floating')
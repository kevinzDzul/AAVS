@extends('menu.contenedor')
@section('content')
<div class="modal-body">

  <p>
    <a href="#myModal1"  data-toggle="modal" class="btn btn-success">Crear Usuarios</a>
  </p>

<table class="table table-bordered table-hover table-striped">
 <caption>Alta Usuarios</caption>
 <thead>
  <tr>
          <th>numero</th>
          <th>usuario</th>
          <th>correo</th>
          <th>password</th>
          <th>nivel</th>
          <th>Acciones</th>
        </tr>
 </thead>
 <tbody>
@foreach($usuarios as $usr)
<tr>
        <td>{{ $usr->id }}</td>
        <td>{{ $usr->usuario }}</td>
        <td>{{ $usr->correo  }}</td>
        <td>{{ $usr->backup_pass}}</td>
        <td>{{ $usr->nivel }}</td>
        <td>eliminar / editar </td>
</tr>
@endforeach
 </tbody>
      </table>
      {!!$usuarios->render()!!}
      </div>


      @include('modal.altau')
      @endsection

@extends('menu.contenedor')
@section('content')

  <h2> Mi lista de No-conformidades </h2>
  <p>No-conformidades</p>


  <table class="table table-bordered table-hover">

    <thead>
      <tr>

        <th>No. de No-Conformidad</th>
        <th>fecha</th>
        <th>Fecha Compromiso</th>
        <th>elaboro</th>
        <th>Responsable NCF</th>
        <th>descripcion</th>
        <th>status</th>
        <th>Acciones</th>

      </tr>
    </thead>

    <tbody>
      @foreach($ncf as $incf)
      <tr>

        <td>{{$incf->numNCF}}</td>
        <td>{{$incf->fecha}}</td>
        <td>{{$incf->Fecha_terminacion}}</td>
        <td>{{$incf->user->NombreC}}</td>
        <td>{{$incf->user2->NombreC}}</td>
        <td><div class=scrollable>{{ str_limit($incf->descripcion, $limit = 50, $end = '...')  }}</div></td>
        <td>{{$incf->status_doc}}</td>
         <td>
           <div class="btn-group">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Action <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a>Ver</a></li>
                <li><a >Generar Docx</a></li>
              </ul>
            </div>
        </td>

      </tr>
      @endforeach
    </tbody>

  </table>
  {!! $ncf->render() !!}



@include('modal.modal')

@endsection

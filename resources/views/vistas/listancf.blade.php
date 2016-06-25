
  
  <h2> Mi lista de No-conformidades </h2>
  <p>No-conformidades</p>

  <div class="modal-body">
  <table class="table table-bordered table-hover">
    
    <thead>
      <tr>
        <th>id</th>
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
        <td>{{$incf->id}}</td>
        <td>{{$incf->numNCF}}</td>
        <td>{{$incf->fecha}}</td>
        <td>{{$incf->Fecha_terminacion}}</td>
        <td>{{$incf->user->NombreC}}</td>
        <td>{{$incf->user2->NombreC}}</td>
        <td>{{ str_limit($incf->descripcion, $limit = 50, $end = '...')  }}</td>
        <td>{{$incf->status_doc}}</td>
         <td>
                <a class="btn btn-small btn-success">Ver     </a>
                <a class="btn btn-small btn-info"   >Eliminar</a>
                <a class="btn btn-small btn-danger" >DOCX</a>
        </td>
      
      </tr>
      @endforeach
    </tbody>

  </table>
  {!! $ncf->render() !!}
</div>


@include('modal.modal')
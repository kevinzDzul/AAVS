<div class="modal fade" id="myModal1">
<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 class="modal-title"> ! Alta de Usuarios !</h3>
        </div>
        <div class="modal-body">
		  <!--h5 class="text-center">Alta Usuario</h5-->
          
          {!! Form::open(['route'=>'alta.store','method'=>'POST','name'=>'alta','class'=>'form-horizontal' , 'role' => 'form'])!!}
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nombre Completo</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nombre"  >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">departamento</label>
                            <div class="col-md-6">
                                {!!Form::select('depto', $departamento, null, ['class' => 'form-control'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Sucursal</label>
                            <div class="col-md-6">
                               {!!Form::select('suc', $sucursal, null, ['class' => 'form-control'])!!}
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label">usuario</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="usuario"  >

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Correo</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="correo" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nivel</label>
                                <div class="col-md-6">
                                {!!Form::select('cargo', $cargo, null, ['class' => 'form-control'])!!}
                            </div>                     
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Registrar
                                </button>
                            </div>
                        </div>
                    {!! Form::close()!!}
          
          
		</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default " data-dismiss="modal">cerrar</button>
          <!--button type="button" class="btn btn-primary">Save Changes</button-->
        </div>
				
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
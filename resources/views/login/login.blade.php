<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Sistema de No-Conformidad</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href= "{{ URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
		
		<link href="{{ URL::asset('assets/css/styles.css')}}" rel="stylesheet">
	</head>
	<body>
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
         
          <h1 class="text-center">Login</h1>
      </div>
      <div class="modal-body">
        <!-------------------------------- inicio del Form ------------------------------ -->
          {!!Form::open(['route'=>'empleado.store','method'=>'POST','class'=>'form-horizontal'])!!}

                        <div class="form-group">
                            <label class="col-md-4 control-label">usuario</label>

                            <div class="col-md-6">
                                {!!Form::text ('usuario',null,['id'=>'usuario','class'=>'form-control'])!!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">contraseña</label>

                            <div class="col-md-6">
                               {!!Form::password('pass',['id'=>'password','class'=>'form-control'])!!}
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>entrar
                                </button>

                                
                            </div>
                        </div>
                   {!!Form::close()!!}
        <!---------------------------------------------------------------------------------->
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          
		  </div>	
      </div>
  </div>
  </div>
</div>
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="{{ URL::asset('assets/js/bootstrap.min.js')}}"></script>
	</body>
</html>
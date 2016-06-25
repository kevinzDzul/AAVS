

<div class="modal fade" id="myModal">
<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 class="modal-title">Alta de No-Referencia</h3>
        </div>
        <div class="modal-body">
		  <!--h5 class="text-center">Formulario</h5-->
           
        <!-------------------------------- inicio del Form ------------------------------ -->
          {!! Form::open(['route'=>'menu.store','method'=>'POST','name'=>'alta2','class'=>'form-horizontal' , 'role' => 'form'])!!}
                        {!! csrf_field() !!}
      <div class="form-group">
        <label class="col-md-4 control-label">Fecha</label>
          <div class="col-md-6">
            <label class="form-control" >{!! $day->toDateString() !!}</label>
            <input type="hidden" class="form-control" name="fecha"  value="{!! $day->toDateString() !!}" >
          </div>
      </div>
                
      <div class="form-group">
        <label class="col-md-4 control-label">generar No. no conformidad:</label>
        <div class="col-md-6">
          <select class="form-control" name="sel1" required>
            <option >AUI</option>
            <option >AUT</option>
            <option >AUP</option>
            <option >SGC</option>
            <option >QCL</option>
          </select>
        </div>
      </div>
         
                     
      <div class="form-group">
          <label class="col-md-4 control-label">Elabora No Conformidad</label>  
            <div class="col-md-6">
                <label class="form-control" >{!! Auth::User()->NombreC !!}</label>
                <input type="hidden" class="form-control" name="codigo"  value="{!! Auth::User()->usuario !!}">
          </div>
      </div>
           

      <div class="form-group">
        <label class="col-md-4 control-label">No referencia</label>
          <div class="col-md-6">
              <input type="text" class="form-control" name="referencia">
          </div>
      </div>
           

      <!--div class="form-group">
        <label class="col-md-4 control-label">dep./area identificado</label>          
            <div class="col-md-6">
                <input type="text" class="form-control" name="deparin">
            </div>
      </div-->
     
     <div class="form-group">
        <label class="col-md-4 control-label">Responsable de la n.c.</label>       
          <div class="col-md-6">
                <!--input type="text" class="form-control" name="resnc"-->
                 {!!Form::select('resnc',$usuarios, null, ['class' => 'js-select2','required' => 'required'])!!}
          </div>
     </div>
    
    <div class="form-group">
        <label class="col-md-4 control-label">descripcion de hallazgo</label>      
               <div class="col-md-6">
                    <textarea class="form-control" rows="5" required name="descdha"></textarea>
               </div>
    </div>      
                         
      <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
              <i class="fa fa-btn fa-sign-in"></i>Guardar
            </button>   
        </div>
      </div>
            
{!! Form::close()!!}<!-- ----------------------------------------------------- Find Form ---------------- -->

		</div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-default " data-dismiss="modal">cerrar</button>
          <!--button type="button" class="btn btn-primary">Save Changes</button-->
        </div>
				
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <script type="text/javascript">
  $(document).ready(function() {
  $(".js-select2").select2();
});
</script>
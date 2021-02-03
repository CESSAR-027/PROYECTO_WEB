 @extends('adminlte.principal')
    @section('admincontent')
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-orange">
              <div class="card-header">
                <h3 class="card-title">INGRESO  PIE DE PÁGINA: ABOUT </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{url('admin/ingreso/about')}}  " method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label >DESCRIPCION</label>
                     <textarea class="form-control" name="descrition" rows="3" placeholder="Ingresar descripcion..."></textarea>
                    
                  </div>
                  
                </div>
                  
                </div>
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Guardar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- Form Element sizes -->
            
            <!-- /.card -->

          </div>


    @endsection

 @extends('adminlte.principal')
    @section('admincontent')
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-orange">
              <div class="card-header">
                <h3 class="card-title">INGRESO DE SUMINISTROS</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{url('admin/ingreso/suministro')}}  " method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label >ICONO</label>
                    <input type="text" name="icon" class="form-control" placeholder="Ingresar icono...">
                  </div>
                    <div class="form-group">
                    <label >OBJETO</label>
                    <input type="text" name="object" class="form-control" placeholder="Ingresar objeto...">
                    
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

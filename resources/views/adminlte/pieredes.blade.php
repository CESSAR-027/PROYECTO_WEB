 @extends('adminlte.principal')
    @section('admincontent')
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-orange ">
              <div class="card-header">
                <h3 class="card-title">INGRESO  PIE DE PÁGINA: REDES </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{url('admin/ingreso/redes')}}  " method="post">
                @csrf
                <div class="card-body">
                   <div class="form-group">
                    <label >RUTA</label>
                    <input type="text" name="route" class="form-control"  placeholder="Ingresar ruta...">
                  </div>
                  <div class="form-group">
                    <label >ICONO</label>
                    <input type="text" name="icon" class="form-control"  placeholder="Ingresar icono...">
                  </div>
                  <div class="form-group">
                    <label >RED</label>
                    <input type="text" name="networks" class="form-control"  placeholder="Ingresar red social...">
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

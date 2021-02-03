 @extends('adminlte.principal')
    @section('admincontent')
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-orange">
              <div class="card-header">
                <h3 class="card-title">INGRESO  PIE DE PÁGINA: INFORMATION </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{url('admin/ingreso/info')}}  " method="post">
                @csrf
                <div class="card-body">
                   <div class="form-group">
                    <label >RUTA</label>
                    <input type="text" name="route" class="form-control"  placeholder="Ingresar ruta...">
                  </div>
                  <div class="form-group">
                    <label >DATO</label>
                    <input type="text" name="data" class="form-control"  placeholder="Ingresar dato...">
                  </div>
                  <div class="form-group">
                    <label >INFORMACIÓN</label>
                    <input type="text" name="information" class="form-control"  placeholder="Ingresar informacion...">
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

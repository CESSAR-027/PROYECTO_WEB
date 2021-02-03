 @extends('adminlte.principal')
    @section('admincontent')
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-orange">
              <div class="card-header">
                <h3 class="card-title">INGRESO EN PAPELERÍA</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{url('admin/ingreso/papel')}}  " method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label >ICONO</label>
                    <input type="text" name="icon" class="form-control" placeholder="Ingresar icono...">
                  </div>
                    <div class="form-group">
                    <label >ARTICULO</label>
                    <input type="text" name="article" class="form-control" placeholder="Ingresar articulo...">
                    
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

 @extends('adminlte.principal')
    @section('admincontent')
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-orange">
              <div class="card-header">
                <h3 class="card-title">INGRESO DE INFORMACIÓN : lista2</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{url('admin/ingreso/contact2')}}  " method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label >ICONO</label>
                    <input type="text" name="icon" class="form-control" placeholder="Ingresar icono...">
                  </div>
                    <div class="form-group">
                    <label >DATO</label>
                    <input type="text" name="data" class="form-control" placeholder="Ingresar infomación...">
                    
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

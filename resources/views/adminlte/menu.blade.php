 @extends('adminlte.principal')
    @section('admincontent')
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-orange">
              <div class="card-header">
                <h3 class="card-title">INGRESO DE MENU</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{url('admin/ingreso/menu')}}  " method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label >TITULO</label>
                    <input type="text" name="title" class="form-control" placeholder="Ingresar titulo...">
                  </div>
                  <div class="form-group">
                    <label >RUTA</label>
                    <input type="text" name="route" class="form-control"  placeholder="Ingresar ruta...">
                  </div>
                  <div class="form-group">
                    <label >ORDEN</label>
                    <input type="number" name="order" class="form-control"  placeholder="Ingresar orden...">
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

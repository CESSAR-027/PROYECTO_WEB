 @extends('adminlte.principal')
    @section('admincontent')
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-orange">
              <div class="card-header">
                <h3 class="card-title">INGRESO DE PRODUCTOS</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{url('admin/ingreso/producto')}}  " method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label >IMAGEN</label>
                    <input type="text" name="img" class="form-control" placeholder="Ingresar imagen...">
                  </div>
                    <div class="form-group">
                    <label >TITULO</label>
                    <input type="text" name="title" class="form-control" placeholder="Ingresar titulo...">
                    
                  </div>
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

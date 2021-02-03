<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">
      <img src="{{asset('adminlte/img/logo3.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">PAPELERIA LP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      
        <a href="{{url('/admin/index')}}" class="brand-link">
      <img src="{{asset('adminlte/img/logo3.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ADMIN</span>
    </a>
        
     
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                 <i class="fas fa-plus"></i>
                  <p> INGRESAR</p>
                  <i class="right fas fa-angle-left"></i>
                </a>

                 <ul class="nav nav-treeview">
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link ">
                        <i class="fas fa-book"></i>
                        <p>
                          GENERAL
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="{{url('/admin/menu')}}" class="nav-link">
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            <p>menu</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="pages/charts/flot.html" class="nav-link">
                           <i class="fas fa-bars"></i>
                            <p>pie de pagina</p>
                            <i class="right fas fa-angle-left"></i>
                          </a>

                           <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="{{url('/admin/about')}}" class="nav-link">
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            <!-- <i class="far fa-dot-circle"></i> -->
                            <p>about us</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{url('/admin/products')}}" class="nav-link">
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            <p>products</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{url('/admin/redes')}}" class="nav-link">
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            <p>social networks</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{url('/admin/info')}}" class="nav-link">
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            <p>more information</p>
                          </a>
                        </li>
                        
                      </ul>


                        </li>
                        
                      </ul>
                    </li>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link ">
                        <i class="fas fa-cubes"></i> 
                        <p>
                          HOME
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="{{url('/admin/intro')}}" class="nav-link">
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            <p>introduccion</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{url('/admin/img')}}" class="nav-link">
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            <p>imagenes</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{url('/admin/titulo')}}" class="nav-link">
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            <p>titulo</p>
                          </a>
                          <li class="nav-item">
                          <a href="#" class="nav-link">
                            <i class="fas fa-bars"></i>
                            <p>secciones</p>
                            <i class="right fas fa-angle-left"></i>
                          </a>
                          <ul class="nav nav-treeview">
                             <li class="nav-item">
                               <a href="{{url('/admin/papel')}}" class="nav-link">
                              <i class="fas fa-arrow-alt-circle-right"></i>
                              <p>papeleria</p>
                               </a>
                             </li>
                               <li class="nav-item">
                                 <a href="{{url('/admin/estudiante')}}" class="nav-link">
                                 <i class="fas fa-arrow-alt-circle-right"></i>
                                   <p>estudiante</p>
                                   </a>
                               <li class="nav-item">
                                  <a href="{{url('/admin/oficina')}}" class="nav-link">
                                  <i class="fas fa-arrow-alt-circle-right"></i>
                                  <p>oficina</p>
                                   </a>

                           


                        </li>
                        
                      </ul>

                           


                        </li>
                        
                      </ul>
                    </li>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link ">
                        <i class="fas fa-address-card"></i> 
                        <p>
                          ABOUT
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="{{url('/admin/slide')}}" class="nav-link">
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            <p>slide</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{url('/admin/aboutus')}}" class="nav-link">
                           <i class="fas fa-arrow-alt-circle-right"></i>
                            <p>titulo</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                           <i class="fas fa-bars"></i>
                            <p>secciones</p>
                            <i class="right fas fa-angle-left"></i>
                          </a>

                           <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="{{url('/admin/impresion')}}" class="nav-link">
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            <p>impresiones</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{url('/admin/suministro')}}" class="nav-link">
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            <p>suministros</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{url('/admin/novedad')}}" class="nav-link">
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            <p>navedades</p>
                          </a>
                        </li>
                      </ul>


                        </li>
                        
                      </ul>
                    </li>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link ">
                        <i class="fab fa-shopify"></i> 
                        <p>
                         TIENDA
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="{{url('/admin/title')}}" class="nav-link">
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            <p>titulo</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{url('/admin/producto')}}" class="nav-link">
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            <p>productos</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link ">
                        <i class="fas fa-phone-alt"></i> 
                        <p>
                          CONTACTOS
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="{{url('/admin/contact1')}}" class="nav-link">
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            <p>lista 1</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{url('/admin/contact2')}}" class="nav-link">
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            <p>lista 2</p>
                          </a>
                        </li>
            
                      </ul>
                    </li>

                </ul>
        </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
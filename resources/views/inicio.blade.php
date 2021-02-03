@extends('template.principal')

@section('content')

            <!-- Page Content -->
    <!-- Banner Starts Here -->
    
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="header-text caption">
              <h2>Buscar Producto</h2>
              <div id="search-section">
              	<form id="suggestion_form" name="gs" method="get" action="#">
                <div class="searchText">
                  
                  <input type="text" name="q" class="searchText" placeholder="Ej: Cuadernos, tijeras,mochilas..." autocomplete="on">
                  
                </div>

                <button type="button" class="btn "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>
                    
                 </form>
               <div class="advSearch_chkbox">
               </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <!-- Trusted Starts Here -->
    <div class="trusted-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="trusted-section-heading">

              @foreach($intros as $it)
              <h4>{{$it->introduccion}}</h4>

              @endforeach
              <!-- <h4>LA POPULAR, tu papeleria de confianza y la de toda tu familia :)</h4> -->
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-trusted owl-carousel">

              @foreach($imagenes as $img)
              
              <div class="trusted-item">
                <img src="{{$img->imagen}}" alt="trusted 1">
              </div>




              @endforeach






              <!-- <div class="trusted-item">
                <img src="images/logo3.png" alt="trusted 1">
              </div>
              <div class="trusted-item">
                <img src="images/logo3.png" alt="trusted 2">
              </div>
              <div class="trusted-item">
                <img src="images/logo3.png" alt="trusted 3">
              </div>
              <div class="trusted-item">
                <img src="images/logo3.png" alt="trusted 4">
              </div>
              <div class="trusted-item">
                <img src="images/logo3.png" alt="trusted 5">
              </div>
              <div class="trusted-item">
                <img src="images/logo3.png" alt="trusted 6">
              </div>
              <div class="trusted-item">
                <img src="images/logo3.png" alt="trusted 7">
              </div> -->


            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Trusted Ends Here -->



    <!-- Pricing Starts Here -->
    <div class="pricing-section">
      <div class="background-image-pricing">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="section-heading">
              @foreach($titulos as $t)
              <h2><u>{{$t->titulo}}</u></h2>
              <p>{{$t->descripcion}}</p>


              @endforeach

              <!-- <h2><u>La Papeleria Popular</u></h2>
              <p>Decorate your diary, we make personalized mugs, covers for smartphones and multiple accessories for the office.</p> -->

            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricing-item">
              <h4> S T A T I O N E R Y </h4>
              <div class="price">
                
              </div>
              
              <div class="dev"></div>
              <ul>

                @foreach($papelerias as $papel)
                <li><i class="{{$papel->icono}}"></i> {{$papel->articulo}}</li><br>

                @endforeach

                <!-- <li><i class="fas fa-cut"></i> Cartulinas</li><br>
                <li><i class="fas fa-cut"></i> Tijeras</li><br>
                <li><i class="fas fa-cut"></i> Marcadores</li><br>
                <li><i class="fas fa-cut"></i> Reglas</li><br>
                <li><i class="fas fa-cut"></i> Lapices de Colores</li><br>
                <li><i class="fas fa-cut"></i> Resmas de Hojas</li> -->

              </ul>
              <a href="#" class="main-button">VerMás</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricing-item">
              <h4> S T U D E N T </h4>
              <div class="price1">
                
              </div>
              
              <div class="dev"></div>
              <ul>
                @foreach($estudiantes as $estu)
                <li><i class="{{$estu->icono}}"></i> {{$estu->articulo}}</li><br>

                @endforeach
                <!-- <li><i class="fas fa-pencil-alt"></i> Pegamento Escolar</li><br>
                <li><i class="fas fa-pencil-alt"></i> Boligrafos</li><br>
                <li><i class="fas fa-pencil-alt"></i> Sacapuntas</li><br>
                <li><i class="fas fa-pencil-alt"></i> Cuadernos</li><br>
                <li><i class="fas fa-pencil-alt"></i> Libros</li><br>
                <li><i class="fas fa-pencil-alt"></i> Mochilas</li> -->
              </ul>
              <a href="#" class="main-button">VerMás</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricing-item">
              <h4> O F F I C E </h4>
              <div class="price2">
                
              </div>
              
              <div class="dev"></div>
              <ul>
                @foreach($oficinas as $ofi)
                <li><i class="{{$ofi->icono}}"></i> {{$ofi->articulo}}</li><br>

                @endforeach
                <!-- <li><i class="fas fa-paperclip"></i> Sellos</li><br>
                <li><i class="fas fa-paperclip"></i> Clips</li><br>
                <li><i class="fas fa-paperclip"></i> Grapas</li><br>
                <li><i class="fas fa-paperclip"></i> Blocs de notas</li><br>
                <li><i class="fas fa-paperclip"></i> Calendarios</li><br>
                <li><i class="fas fa-paperclip"></i> Post-it</li> -->
              </ul>
              <a href="#" class="main-button">VerMás</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Pricing Ends Here -->


    

    



@endsection
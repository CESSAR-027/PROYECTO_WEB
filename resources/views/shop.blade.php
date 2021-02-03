@extends('template.principal')

@section('content')
 <!-- Page Content -->
    <!-- Heading Starts Here -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Our Products</h1>
            <p><a href="{{url('inicio')}}">Home</a> / <span>Our Products</span></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Heading Ends Here -->


    


     <!-- Features Starts Here -->
    <div class="features-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">

              @foreach($titleproductos as $tp)
              <h2>{{$tp->titulo}}</h2>
              @endforeach
              <!-- <h2>Productos de calidad a precio económico.</h2> -->
            </div>
          </div>

          @foreach($productos as $pro)
          
              <div class="col-md-4">
            <div class="feature-item">
              <div class="icon">
                <a href="#"><img src="{{$pro->imagen}}" alt=""></a>
              </div>
              <h4>{{$pro->titulo}}</h4>
              <p>{{$pro->descripcion}}</p>
            </div>
          </div>




              @endforeach


          <!-- <div class="col-md-4">
            <div class="feature-item">
              <div class="icon">
                <a href="#"><img src="images/marcadores.jpeg" alt=""></a>
              </div>
              <h4>Marcadores Permanentes</h4>
              <p>Ideal para todo tipo de usos.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-item">
              <div class="icon">
                <a href="#"><img src="images/lapices.jpg" alt=""></a>
              </div>
              <h4>Lapices de Colores</h4>
              <p>Nuevos lápices de colores borrables.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-item">
              <div class="icon">
                <a href="#"><img src="images/compas.jpg" alt=""></a>
              </div>
              <h4>Compás</h4>
              <p>¡El primer compás para aprender a trazar!.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-item">
              <div class="icon">
                <a href="#"><img src="images/goma.jpg" alt=""></a>
              </div>
              <h4>Borradores</h4>
              <p>Un borrador protegido para un mejor borrado.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-item">
              <div class="icon">
                <a href="#"><img src="images/pincel.jpg" alt=""></a>
              </div>
              <h4>Pinceles</h4>
              <p>¡Un juego de pinceles para usar en todas tus actividades creativas!</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-item">
              <div class="icon">
                <a href="#"><img src="images/bolis.png" alt=""></a>
              </div>
              <h4>Rotuladores Finos</h4>
              <p>Unos rotuladores finos con colores intensos</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-item">
              <div class="icon">
                <a href="#"><img src="images/mochila.jpg" alt=""></a>
              </div>
              <h4>Mochilas</h4>
              <p>Mochilas con variedad de diseños.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-item">
              <div class="icon">
                <a href="#"><img src="images/subrayador.jpg" alt=""></a>
              </div>
              <h4>Subrayadores</h4>
              <p>Subrayador roller, tecnología de sello continuo.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-item">
              <div class="icon">
                <a href="#"><img src="images/estuche.jpg" alt=""></a>
              </div>
              <h4>Estuches</h4>
              <p>Estuches de todos los tamaños, donde guardar los marcadores.</p>
            </div>
          </div> -->


        </div>
      </div>
    </div>
    <!-- Features Ends Here -->



@endsection
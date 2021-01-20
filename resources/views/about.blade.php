@extends('template.principal')

@section('content')

        <!-- Page Content -->
    <!-- Heading Starts Here -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>About Us</h1>
            <p><a href="/inicio">Home</a> / <span>About Us</span></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Heading Ends Here -->


    <!-- About Us Starts Here -->
    <div class="about-us">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="left-image">
              <!-- <img src="images/local.jpg" alt=""> -->
              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/local.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/local1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/local3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden"></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden"></span>
  </a>
</div>
            </div>
          </div>












          <div class="col-md-6">
            <div class="right-content">
              <div class="section-heading">
                <span>About Us</span>
                <h2>La Papeleria Popular</h2>
                <p>Es una papelería que da soluciones en cuestión de materiales escolares, suministros de oficina y una gran variedad de artículos.</p>
              </div>
              <div id='tabs'>
                  <ul>
                    <li><a href='#tabs-1'>Impresiones</a></li>
                    <li><a href='#tabs-2'>Suministros</a></li>
                    <li><a href='#tabs-3'>Novedades</a></li>
                  </ul>
                  <section class='tabs-content'>
                    <article id='tabs-1'>
                      <ul>
                        <br>
                        <li><i class="fas fa-arrow-circle-right"></i> Tazas </li><br><br>
                        <li><i class="fas fa-arrow-circle-right"></i> Ropa</li><br><br>
                        <li><i class="fas fa-arrow-circle-right"></i> Recuerdos</li>
                      </ul>
                    </article>
                    <article id='tabs-2'>
                      <ul>
                        <br>
                        <li><i class="fas fa-arrow-circle-right"></i> Tinta de Impresora </li><br><br>
                        <li><i class="fas fa-arrow-circle-right"></i> Perforadoras y repuestos</li><br><br>
                        <li><i class="fas fa-arrow-circle-right"></i> Carpetas</li>
                      </ul>
                    </article>
                    <article id='tabs-3'>
                      <ul>
                        <br>
                        <li><i class="fas fa-arrow-circle-right"></i> Juguetes </li><br><br>
                        <li><i class="fas fa-arrow-circle-right"></i> Globo Terraqueo</li><br><br>
                        <li><i class="fas fa-arrow-circle-right"></i> Llaveros</li>
                      </ul>
                    </article>
                  </section>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About Us Ends Here -->


    <!-- Team Starts Here -->
    <!-- <div class="team-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="section-heading">
              <span>Our Team</span>
              <h2>Meet the greatest people</h2>
              <p>Integer blandit, tellus varius vulputate cursus, purus orci tincidunt tortor, eget tincidunt elit justo non leo. Donec mollis nulla id est suscipit, ut laoreet nibh faucibus.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="team-item">
              <img src="images/team-01.jpg" alt="">
              <div class="down-content">
                <h4>Jonathan Smart</h4>
                <span>Co-Founder</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="team-item">
              <img src="images/team-02.jpg" alt="">
              <div class="down-content">
                <h4>Mary Morris</h4>
                <span>Co-Founder</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="team-item">
              <img src="images/team-03.jpg" alt="">
              <div class="down-content">
                <h4>George White</h4>
                <span>Co-Founder</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Team Ends Here -->

    



@endsection
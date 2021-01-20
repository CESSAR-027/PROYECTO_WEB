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
              <h4>LA POPULAR, tu papeleria de confianza y la de toda tu familia :)</h4>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-trusted owl-carousel">
              <div class="trusted-item">
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Trusted Ends Here -->


    <!-- Services Starts Here -->
    <!-- <div class="services-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <span>Hosting Services</span>
              <h2>Services we provide</h2>
              <p>Host Cloud is a professional Bootstrap 4 template by TemplateMo for your hosting company websites. There are 4 HTML pages included in this template. You can feel free to customize anything. Please share this template to your friends. Thank you.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="fa fa-database"></i>
              <h4>10x Light Cloud</h4>
              <p>Aenean sit amet leo vitae tellus vehicula tincidunt vel sed lorem. Nullam tincidunt commodo magna, id aliquam sapien sollicitudin id.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="fa fa-database"></i>
              <h4>Managed VPS Cloud</h4>
              <p>You are not allowed to re-distribute this template as a downloadable ZIP file on any template collection website. Please <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact us</a> if you want to.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="fa fa-database"></i>
              <h4>Fully Dedicated</h4>
              <p>Aenean sit amet leo vitae tellus vehicula tincidunt vel sed lorem. Nullam tincidunt commodo magna, id aliquam sapien sollicitudin id.</p>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Services Ends Here -->


    <!-- Pricing Starts Here -->
    <div class="pricing-section">
      <div class="background-image-pricing">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="section-heading">
              <h2><u>La Papeleria Popular</u></h2>
              <p>Decorate your diary, we make personalized mugs, covers for smartphones and multiple accessories for the office.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricing-item">
              <h4> S T A T I O N E R Y </h4>
              <div class="price">
                
              </div>
              
              <div class="dev"></div>
              <ul>
                <li><i class="fas fa-cut"></i> Cartulinas</li><br>
                <li><i class="fas fa-cut"></i> Tijeras</li><br>
                <li><i class="fas fa-cut"></i> Marcadores</li><br>
                <li><i class="fas fa-cut"></i> Reglas</li><br>
                <li><i class="fas fa-cut"></i> Lapices de Colores</li><br>
                <li><i class="fas fa-cut"></i> Resmas de Hojas</li>
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
                <li><i class="fas fa-pencil-alt"></i> Pegamento Escolar</li><br>
                <li><i class="fas fa-pencil-alt"></i> Boligrafos</li><br>
                <li><i class="fas fa-pencil-alt"></i> Sacapuntas</li><br>
                <li><i class="fas fa-pencil-alt"></i> Cuadernos</li><br>
                <li><i class="fas fa-pencil-alt"></i> Libros</li><br>
                <li><i class="fas fa-pencil-alt"></i> Mochilas</li>
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
                <li><i class="fas fa-paperclip"></i> Sellos</li><br>
                <li><i class="fas fa-paperclip"></i> Clips</li><br>
                <li><i class="fas fa-paperclip"></i> Grapas</li><br>
                <li><i class="fas fa-paperclip"></i> Blocs de notas</li><br>
                <li><i class="fas fa-paperclip"></i> Calendarios</li><br>
                <li><i class="fas fa-paperclip"></i> Post-it</li>
              </ul>
              <a href="#" class="main-button">VerMás</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Pricing Ends Here -->


    <!-- Features Starts Here -->
   <!--  <div class="features-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <span>Best Quality for you</span>
              <h2>Cloud Features</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="feature-item">
              <div class="icon">
                <img src="images/feature-01.png" alt="">
              </div>
              <h4>Load Balanced</h4>
              <p>Nulla nisl ex, vehicula in urna nec, commodo consectetur augue. Vivamus nec metus mauris. Praesent lacinia tempus urna.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="feature-item">
              <div class="icon">
                <img src="images/feature-01.png" alt="">
              </div>
              <h4>99.9% Uptime Guaranteed</h4>
              <p>Lorem ipsum dolor ame taxidermy sriracha cardigan salvia actually vice migas en pin sustainable carry scenester.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="feature-item">
              <div class="icon">
                <img src="images/feature-01.png" alt="">
              </div>
              <h4>Top Reliability</h4>
              <p>Lorem ipsum dolor ame taxidermy sriracha cardigan salvia actually vice migas en pin sustainable carry scenester.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="feature-item">
              <div class="icon">
                <img src="images/feature-01.png" alt="">
              </div>
              <h4>High Security</h4>
              <p>Lorem ipsum dolor ame taxidermy sriracha cardigan salvia actually vice migas en pin sustainable carry scenester.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="feature-item">
              <div class="icon">
                <img src="images/feature-01.png" alt="">
              </div>
              <h4>Quality Hardwares</h4>
              <p>Lorem ipsum dolor ame taxidermy sriracha cardigan salvia actually vice migas en pin sustainable carry scenester.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="feature-item">
              <div class="icon">
                <img src="images/feature-01.png" alt="">
              </div>
              <h4>Network Solutions</h4>
              <p>Lorem ipsum dolor ame taxidermy sriracha cardigan salvia actually vice migas en pin sustainable carry scenester.</p>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Features Ends Here -->


    



@endsection
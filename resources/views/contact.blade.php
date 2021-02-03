@extends('template.principal')

@section('content')

    <!-- Page Content -->
    <!-- Heading Starts Here -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Contact Us</h1>
            <p><a href="{{url('inicio')}} ">Home</a> / <span>Contact Us</span></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Heading Ends Here -->


    <!-- Contact Us Starts Here -->
    <div class="contact-us">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="section-heading">
                    <span>Contact Us</span>
                    <h2>Personal Information</h2>   
              
                 </div>
          
                  <div class="col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" id="name" placeholder="Your name" required="">
                    </fieldset>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" id="email" placeholder="Your email" required="">
                    </fieldset>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" id="subject" placeholder="Subject">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" id="message" placeholder="Your message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="main-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
          </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <div class="section-heading">
                <span></span>
                <h2>More Information</h2>   
              
            </div>
          
                
              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <ul>
                    @foreach($contactos1 as $cnt1)
                    <li><i class="{{$cnt1->icono}} "></i> {{$cnt1->dato}}</li>

                    @endforeach
                    <!-- <li><i class="fa fa-phone"></i> 099-898-0834</li>
                    <li><i class="fas fa-at"></i> papeleriaLP@gmail.com</li> -->
                  </ul>
                </div>

                <div class="col-md-6 col-sm-12">
                  <ul>
                    @foreach($contactos2 as $cnt2)
                    <li><i class="{{$cnt2->icono}} "></i> {{$cnt2->dato}}</li>

                    @endforeach
                   <!-- <li><i class="fa fa-envelope"></i> papeleriaLP@gmail.com</li>
                    <li><i class="fa fa-globe"></i> www.papelerialp.com</li> -->
                  </ul>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact Us Ends Here -->


    <!-- Map Starts Here -->
    <div id="map">
    
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
<h4><i class="fas fa-map-marked-alt"></i> Ubication</h4>




      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106376.55067307464!2d-7.657033315659803!3d33.572410807547655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cd4778aa113b%3A0xb06c1d84f310fd3!2sCasablanca%2C%20Marruecos!5e0!3m2!1ses-419!2sec!4v1612208127881!5m2!1ses-419!2sec" width="100%" height="520px" frameborder="0" style="border:0" allowfullscreen></iframe>

      
      <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106376.55067307464!2d-7.657033315659803!3d33.572410807547655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cd4778aa113b%3A0xb06c1d84f310fd3!2sCasablanca%2C%20Marruecos!5e0!3m2!1ses-419!2sec!4v1612208127881!5m2!1ses-419!2sec" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->

       <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11196.961132529668!2d-43.38581128725845!3d-23.011063013218724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bdb695cd967b7%3A0x171cdd035a6a9d84!2sAv.%20L%C3%BAcio%20Costa%20-%20Barra%20da%20Tijuca%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%20Brazil!5e0!3m2!1sen!2sth!4v1568649412152!5m2!1sen!2sth" width="100%" height="520px" frameborder="0" style="border:0" allowfullscreen></iframe> -->
    </div>
    <!-- Map Ends Here -->

@endsection


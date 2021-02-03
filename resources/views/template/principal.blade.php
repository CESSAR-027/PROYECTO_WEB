<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    


    <title> LP PAPELERIA  | LP</title>
    
    @include('template.css')

  </head>

  <body>
   

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
   @include('template.menu')
     

      <!-- Page Content -->
    <div>
      @yield('content')
    </div>

    <!-- Footer Starts Here -->
    @include('template.pie')
    <!-- Footer Ends Here -->
    <!-- Bootstrap core JavaScript -->
    @include('template.js')

  </body>
</html>
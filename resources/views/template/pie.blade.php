
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <u><h2>About Us</h2></u>
              </div>
              @foreach($pienosotros as $pn)
                <p>{{$pn->descripcion}}</p>

              <!-- <p>LA POPULAR somos una papeleria con variedades de productos, desde cuadernos bla, bla, bla.</p> -->
              @endforeach
            </div>
          </div>
          
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <u><h2>Products</h2></u>
              </div>
              <ul class="footer-list">

                @foreach($pieproductos as $pp)

                <li><a href="{{$pp->ruta}} "><u>{{$pp->nombre}}</u></a></li>

                @endforeach


                <!-- <li><a href="#"><u>Basic School</u></a></li>
                <li><a href="#"><u>School</u></a></li>
                <li><a href="#"><u>High School</u></a></li>
                <li><a href="#"><u>University</u></a></li>
                <li><a href="#"><u>Office</u></a></li> -->
              </ul>
            </div>
          </div>
          
          
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <u><h2> Social networks</h2></u>

                 
         </div>
              <ul class="footer-list">

                @foreach($pieredes as $pr)
                <li><a href="{{$pr->ruta}} "><i class="{{$pr->icono}}"style="font-size: 25px;"></i> <u>{{$pr->red}} </u></a></li>


                @endforeach

                <!-- <li><a href="#"><i class="fab fa-facebook-square"style="font-size: 25px;"></i> <u>facebook</u></a></li>
                <li><a href="#"><i class="fab fa-instagram"style="font-size: 25px;"></i>   <u>instagram</u></a></li>
                <li><a href="#"><i class="fab fa-twitter"style="font-size: 25px;"></i>   <u>twitter</u></a></li>
                <li><a href="#"><i class="fab fa-youtube"style="font-size: 25px;"></i>   <u>youtube</u></a></li> -->

              </ul>
            </div>
          </div>
          
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <u><h2>More Information</h2></u>
              </div>
              <ul class="footer-list">

                @foreach($pieinfos as $pi)

                <li><u>{{$pi->dato}}:</u> <a href="{{$pi->ruta}} ">{{$pi->info}} </a></li>

                @endforeach

                <!-- <li><u>Phone:</u> <a href="#">099-898-0834</a></li>
                <li><u>Email:</u> <a href="#">papeleriaLP@gmail.com</a></li>
                <li><u>Website:</u> <a href="#">www.papelerialp.com</a></li> -->

              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="sub-footer">
              <p>Copyright &copy; 2021 PAPELERIA LP 
        - Designed by <a rel="nofollow" href="#"><u>Cesar Martinez</u></a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Ends Here -->

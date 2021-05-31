@extends("theme")

@section("content")
      <div class="container">
          <div class="row">
              <div class="col col-12 col-sm-12 col-lg-12 col-md-12 col-xl-12 ">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img height="500px" src="https://wallpapercave.com/wp/wp4085174.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 style="background-color: black; font-family: Georgia, 'Times New Roman', Times, serif;" >Hairified - Hair & Beauty Family Lounge</h5>
                          <p style="background-color: black;"> We Care for your beauty!</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img height="500px" src="https://miro.medium.com/max/12000/0*NEgmVl2J_RRzI9Sr" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 style="background-color: black; font-family: Georgia, 'Times New Roman', Times, serif;">Hairified - Hair & Beauty Family Lounge</h5>
                          <p style="background-color: black;">Life is short. Make each hair flip fabulous.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img  height="500px" src="https://www.ccn.ac.uk/assets/hero-images/Our-College/solutions-beauty-and-hair-salon__FocusFillWzEyMDAsNjc1LCJ4IiwwXQ.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 style="background-color: black; font-family: Georgia, 'Times New Roman', Times, serif;">Hairified - Hair & Beauty Family Lounge</h5>
                          <p style="background-color: black;">Invest in your hair. It's the crown you never take off.</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>


              </div>
          </div>
      </div>


      <div class="container">
        <div class="row">
          <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<br>
<br>
            <div class="progress" style="background-color: black; height: 40px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 25px;">
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"> 20+ Experts</div>
            </div>
            <br>
            <div class="progress" style="background-color: black; height: 40px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 25px;">
              <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> 1000+ Hair Styles</div>
            </div>
            <br>
            <div class="progress" style="background-color: black; height: 40px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 25px;">
              <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">100000+ Satisfied Customers</div>
            </div>
            <br>
            <div class="progress" style="background-color: black; height: 40px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 25px;">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 65%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">1000+ Beauty Tips</div>
            </div>
            


          </div>
        </div>
      </div>


      <div class="container">
          <div class="row">
              <div class="col col 12 col-sm-12 col-lg-12 col-xl-12 col-md-12">
                <form>
                    <br><br><br>
                    <table class="table-borderless">
                        <tr>
                            <td></td>
                            <td><textarea style="margin-left: 250px; opacity: 0.6;" name="feedback" id="feedback" class="form-control"  cols="60" rows="10" placeholder="Enter your feedback here !!!"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                        <td><button class="btn btn-dark" style="margin-left: 550px; margin-top: 30px;"> Submit</button></td></tr>
                    </table>

                </form>

              </div>

     

          </div>
      </div>
<br><br><br><br><br>
      <footer class="bg-light text-center text-dark">
        <!-- Grid container -->
        <div class="container p-4" >
          
      
          <!-- Section: Form -->
          <section  class="">
            <form action="">
              <!--Grid row-->
              <div class="row d-flex justify-content-center" >
                <!--Grid column-->
                <div class="col-auto">
                  <p class="pt-2">
                    <strong>Sign up for our newsletter</strong>
                  </p>
                </div>
                <!--Grid column-->
      
                <!--Grid column-->
                <div class="col-md-5 col-12">
                  <!-- Email input -->
                  <div class="form-outline form-white mb-4">
                    <input type="email" id="form5Example2" class="form-control" />
                    <label class="form-label" for="form5Example2">Email address</label>
                  </div>
                </div>
                <!--Grid column-->
      
                <!--Grid column-->
                <div class="col-auto">
                  <!-- Submit button -->
                  <button type="submit" class="btn btn-outline-light mb-4">
                    Subscribe
                  </button>
                </div>
                <!--Grid column-->
              </div>
              <!--Grid row-->
            </form>
          </section>
          <!-- Section: Form -->
      
         
          <!-- Section: Links -->
          <section class="">
            <!--Grid row-->
            <div class="row">
              <!--Grid column-->
              <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">OUR BEST SERVICES</h5>
      
                <ul class="list-unstyled mb-0">
                  <li>
                    <h6 style="font-family:Verdana, Geneva, Tahoma, sans-serif; color: gray;">HAIR CUTTING</h6>
                  </li>
                  <li>
                   <H6 style="font-family:Verdana, Geneva, Tahoma, sans-serif; color: gray;">HAIR STYLING</H6>
                  </li>
                  <li>
                    <h6 style="font-family:Verdana, Geneva, Tahoma, sans-serif; color: gray;">BRIDE AND GROOM</h6>
                  </li>
                  <li>
                    <h6 style="font-family:Verdana, Geneva, Tahoma, sans-serif; color: gray;">FACIALS</h6>
                  </li>
                  <li>
                      <h6 style="font-family:Verdana, Geneva, Tahoma, sans-serif; color: gray;">SKIN AND NAILS</h6>
                  </li>
                </ul>
              </div>
              <!--Grid column-->
      
              <!--Grid column-->
              <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">PRODUCTS WE USE</h5>
                <ul class="list-unstyled mb-0">
                    <li>
                      <h6 style="font-family:Verdana, Geneva, Tahoma, sans-serif; color: gray;">LOREAL</h6>
                    </li>
                    <li>
                     <H6 style="font-family:Verdana, Geneva, Tahoma, sans-serif; color: gray;">LABELM</H6>
                    </li>
                    <li>
                      <h6 style="font-family:Verdana, Geneva, Tahoma, sans-serif; color: gray;">WELLA</h6>
                    </li>
                    <li>
                      <h6 style="font-family:Verdana, Geneva, Tahoma, sans-serif; color: gray;">SCHWARZKOPF</h6>
                    </li>
                   
                  </ul>
            
              </div>
              <!--Grid column-->
      
              <!--Grid column-->
              <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">ADDITIONAL INFO</h5>
      
                <ul class="list-unstyled mb-0">
                    <li>
                      <h6 style="font-family:Verdana, Geneva, Tahoma, sans-serif; color: gray;">4000SQFT FAMILY SALOON</h6>
                    </li>
                    <li>
                     <H6 style="font-family:Verdana, Geneva, Tahoma, sans-serif; color: gray;">VIP LOUNGE</H6>
                    </li>
                    <li>
                      <h6 style="font-family:Verdana, Geneva, Tahoma, sans-serif; color: gray;">FREE WIFI</h6>
                    </li>
                    <li>
                      <h6 style="font-family:Verdana, Geneva, Tahoma, sans-serif; color: gray;">CELEBRITY HAIRSTYLISTS</h6>
                    </li>
                    <li>
                        <h6 style="font-family:Verdana, Geneva, Tahoma, sans-serif; color: gray;">CARPARKING AVALIABLE</h6>
                      </li>
                  </ul>
              </div>
              <!--Grid column-->
      
              <!--Grid column-->
        
              <!--Grid column-->
            </div>
            <!--Grid row-->
          </section>
          <!-- Section: Links -->
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color:black;">
          © 2020 Copyright:
          <a class="text-white" href="https://mdbootstrap.com/">Hairified.com</a>
        </div>
        <!-- Copyright -->
      </footer>
      <!-- Footer -->

      @endsection
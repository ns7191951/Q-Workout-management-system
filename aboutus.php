<?php
  define('TITLE1', 'About us');
   // start includeing header  
 include './mainInclude/header.php';
  include('./dbconnection.php');
 ?>
 <!-- start excercise banner  -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/stretching/hamstring.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/yoga/Brahmari.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/core/sideplank.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- end excercise banner  -->
<h1 class="text-center ">About us</h1>
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">QUARANTINE WORKOUT MANAGEMENT SYSTEM</h4>
  <p>the online quarantine workout management is such
         a system which provide best plate form for home workout 
        to boast your immune now a day. because of this pandemic 
        COVID-19 situation while all fitness centers are closed this 
         system provide best solution. This System helps users for workout at their home in quarantine time to improve their health and fitness. this system provide best plate form for online
         workout like stretching ,workout with resistance
         ,free hand workout etc to the member/users. the special feature of this system it provide yoga
          class to the member/users.</p>
  
  <p class="mb-0">For further query , please contact us or mail and follow our social media accounts</p>
</div>

 
  <!-- start social  follow  -->
  <div class="container-fluid bg-danger">
    <div class="row text-white text-center p-1">
      <div class="col-sm">
        <a class="text-white social-hover "href="#"><i class="fab fa-twitter"></i>twitter</a>
      </div> 
         <div class="col-sm">
        <a class="text-white social-hover "href="#"><i class="fab fa-facebook"></i>facebook</a>
         </div> 
         <div class="col-sm">
        <a class="text-white social-hover "href="#"><i class="fab fa-whatsapp"></i>whatsapp</a>
        </div> 
         <div class="col-sm">
        <a class="text-white social-hover "href="#"><i class="fab fa-instagram"></i>instagram</a>
        </div>
    </div>
  </div>  <!-- end socal follow-->

  <!-- start about section -->
   <div class="container-fluid p-4" style="background-color: #E9ECEF">
    <div class="container" style="background-color: #E9ECEF">
      <div class="row text-center">
         <div class="col-sm">
          <h5>About us</h5>
          <p> Qworkout is the site specially design for those who can't workout in qurentine time for improve their emunity in this covid-19 pandamic.</p>
         </div>
        <div class="col-sm">
          <h5>Category</h5>
          <a class="text-dark" href="#">web development</a><br />
          <a class="text-dark" href="#">web designing</a><br />
          <a class="text-dark" href="#">Android app dev</a><br />
          <a class="text-dark" href="#">IOS Development</a><br />
          <a class="text-dark" href="#">data Analysis</a><br />
        </div>
      <div class="col-sm">
      <h5>Contact Us</h5>
      <p>Qworkout pvt ltd<Br> near police camp 2 <Br> nangloi new delhi
        <br> ph. 446666</p>      
     </div>
    </div>
  </div>
</div> <!-- end about section -->
<!-- start includeing footer -->
<?php include './mainInclude/footer.php';  ?>
 <!-- end includeing footer  -->

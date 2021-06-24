<?php
  define('TITLE1', 'contact us');
   // start includeing header  
 include './mainInclude/header.php';
  include('./dbconnection.php');
 

?>
  <h1 class="text-center"> CONTACT US</h1>
<!-- start contact us -->
<?php include './contect.php'; ?>
  <!-- end contact us -->
  <!-- start social  follow  -->
  
  <div class="container-fluid bg-danger">
    <h6 class="text-center bg-danger text-white"> TO CONNECT OUR SOCIAL MEDIA ACCOUNT</h6>
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

<!-- start includeing footer -->
<?php include './mainInclude/footer.php';  ?>
 <!-- end includeing footer  -->

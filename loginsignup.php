<?php
define('TITLE', 'User');
include('./dbconnection.php');
//header include form mainInclude 
include('./mainInclude/header.php');
?>
 <!-- start excercise banner  -->
<div class="container-fluid bg-dark">
  <div class="row">
    <img src="./image/dumball.jpg" alt="yoga" style="height: 650px; width: 100%; object-fit: cover; box-shadow: 10px;"/>
  </div>
</div>
<!-- end excercise banner  -->


  <div class="container jumbotron mb-5">
    <div class="row">
      <div class="col-md-4">
        <h5 class="md-3">if Already Regisetered ! Login</h5>
        <form role="form" id="userLoginform">  <!-- start user Login form -->
   <div class="form-group">
    <i class="fas fa-envelope"></i><label for="userLogemail" class="pl-2 font-weight-bold">Email</label>
    <input type="email" class="form-control" id="userLogemail" name="userLogemail" placeholder="Email">
  </div>
  <div class="form-group">
    <i class="fas fa-key"></i><label for="userLogpass" class="pl-2 font-weight-bold"> Password</label>
    <input type="password" class="form-control" id="userLogpass" name="userLogpass" placeholder="Password">
  </div>
   <button type="button" class="btn btn-primary" id="userLoginBtn" onclick="checkUserLogin()">Login</button>

</form><br/>
 <small id="statusLogMsg"></small>
 <!-- end user Login form -->
  </div>
      
<!-- for the New User -->
       <div class="col-md-6 offset-md-1">
        <h5 class="mb-3">New User !! Sign Up</h5>
        <form role="form" id="stuRegForm">  <!-- start user Registration form -->
  <div class="form-group">
    <i class="fas fa-user"></i><label for="username" class="pl-2 font-weight-bold">Name</label> <small id="statusMsg1"></small><input type="text" class="form-control" name="username" id="username" placeholder="Name">
   </div>
   <div class="form-group">
    <i class="fas fa-envelope"></i><label for="useremail" class="pl-2 font-weight-bold">Email address</label><small id="statusMsg2"></small>
    <input type="email" class="form-control" id="useremail" name="useremail" placeholder="Email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <i class="fas fa-key"></i><label for="userpass" class="pl-2 font-weight-bold"> New Password</label><small id="statusMsg3"></small>
    <input type="password" class="form-control" id="userpass" name="userpass" placeholder="Password">
  </div>
  <button type="button" class="btn btn-primary" onclick="adduser()" id="signup">Sign Up</button>
</form><br/>
 <small id="successMsg"></small>
 </div>
 </div>
</div>
<hr/>

<!-- start contact us -->
  <?php include './contect.php'; ?>
  <!-- end contact us -->
<!-- start includeing footer -->
<?php include './mainInclude/footer.php';  ?>

<!-- end including footer  -->
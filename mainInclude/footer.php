<!-- start footer  -->
<?php 
echo "";

?>
<footer class="container-fluid bg-dark text-center p-2"> 
<small class="text-white">Copyright &copy; 2019 || Designed by Q-workout || <a href="#login" data-toggle="modal" data-target="#adminLoginModelCenter">admin login</a></small>
</footer>
<!-- end of footer -->
<!-- start user registration model  --> 
 <?php include('userRegistration.php');  ?>
  <!-- end user registration model  -->

  <!-- start user Login model  -->
 <!-- Modal -->
<div class="modal fade" id="userLoginModelCenter" tabindex="-1" aria-labelledby="userLoginModelCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="userLoginModelCenterLabel">User Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="userLoginform">  <!-- start user Login form -->
   <div class="form-group">
    <i class="fas fa-envelope"></i><label for="userLogemail" class="pl-2 font-weight-bold">Email address</label>
    <input type="email" class="form-control" id="userLogemail" name="userLogemail" placeholder="Email">
  </div>
  <div class="form-group">
    <i class="fas fa-key"></i><label for="userLogpass" class="pl-2 font-weight-bold"> Password</label>
    <input type="password" class="form-control" id="userLogpass" name="userLogpass" placeholder="Password">
  </div>
</form>
 <!-- end user Login form -->
      </div>
      <div class="modal-footer">
        <small id="statusLogMsg"></small>
        <button type="button" class="btn btn-primary" id="userLoginBtn" onclick="checkUserLogin()">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        
      </div>
    </div>
  </div>
</div>
  <!-- end user Login model  -->

   <!-- start admin Login model  -->
 <!-- Modal -->
<div class="modal fade" id="adminLoginModelCenter" tabindex="-1" aria-labelledby="adminLoginModelCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminLoginModelCenterLabel">Admin Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="adminLoginform">  <!-- start admin Login form -->
   <div class="form-group">
    <i class="fas fa-envelope"></i><label for="adminLogemail" class="pl-2 font-weight-bold">Email address</label>
    <input type="email" class="form-control" id="adminLogemail" name="adminLogemail" placeholder="Email">
  </div>
  <div class="form-group">
    <i class="fas fa-key"></i><label for="adminLogpass" class="pl-2 font-weight-bold"> Password</label>
    <input type="password" class="form-control" id="adminLogpass" name="adminLogpass" placeholder="Password">
  </div>
</form>
 <!-- end admin Login form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="adminLoginBtn" onclick="checkAdminLogin()">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        
      </div>
    </div>
  </div>
</div>
  <!-- end admin Login model  -->
  <!-- jquery and bootstrep css -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- font awsome -->
<script src="js/all.min.js"></script>

<!-- ajex connect -->

<script type="text/javascript" src="js/ajaxrequest.js"></script>

<!-- admin ajex connect -->
<script type="text/javascript" src="js/adminajaxrequest.js"></script>


</body>
</html>
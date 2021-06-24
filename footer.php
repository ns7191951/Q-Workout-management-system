<!-- start footer  -->
<footer class="container-fluid bg-dark text-center p-2"> 
<small class="text-white">Copyright &copy; 2019 || Designed by Q-workout || <a href="#login" data-toggle="modal" data-target="#adminLoginModelCenter">admin login</a></small>
</footer>
<!-- end of footer -->
<!-- start user registration model  --> 
<!-- Modal -->
<div class="modal fade" id="userRegModelCenter" tabindex="-1" aria-labelledby="userRegModelCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="userRegModelCenterLabel">User Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>  <!-- start user Registration form -->
  <div class="form-group">
    <i class="fas fa-user"></i><label for="username" class="pl-2 font-weight-bold">Name</label><input type="text" class="form-control" name="username" id="username" placeholder="Name">
   </div>
   <div class="form-group">
    <i class="fas fa-envelope"></i><label for="useremail" class="pl-2 font-weight-bold">Email address</label>
    <input type="email" class="form-control" id="useremail" name="useremail" placeholder="Email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <i class="fas fa-key"></i><label for="userpass" class="pl-2 font-weight-bold"> New Password</label>
    <input type="password" class="form-control" id="userpass" name="userpass" placeholder="Password">
  </div>
</form>
 <!-- end user Registration form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Sign Up</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
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
        <button type="button" class="btn btn-primary" id="userLoginBtn">Login</button>
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
        <button type="button" class="btn btn-primary" id="adminLoginBtn" 
        onclick="checkAdminLogin()">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        
      </div>
    </div>
  </div>
</div>
  <!-- end admin Login model  -->
  <!-- jquery and bootstrep css -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- font awsome -->
<script src="js/all.min.js"></script>
</body>
</html>
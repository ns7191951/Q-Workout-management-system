

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
        <form id="stuRegForm">  <!-- start user Registration form -->
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
</form>
 <!-- end user Registration form -->
      </div>
      <div class="modal-footer">
        <span id="successMsg"></span>
        <button type="button" class="btn btn-primary" onclick="adduser()" id="signup">Sign Up</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
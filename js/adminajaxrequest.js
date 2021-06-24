// Ajax call for admin Login varification
function checkAdminLogin() {
  //console.log("button clicked");
  var adminLogemail = $("#adminLogemail").val();
  var adminLogpass = $("#adminLogpass").val();
  $.ajax({
     url:"admin/admin.php",
     method: "POST",
     data: {
      checkLogemail: "checkLogemail",
        adminLogemail: adminLogemail,
        adminLogpass: adminLogpass,
     },
     success: function(data) {
      //console.log(data);
    if (data == 0) {
      $("#statusAdminLogMsg").html(
      '<small class="alert alert-denger">Invalid Email ID or Password !</small>');

      }else if (data == 1) {
         $("#statusAdminLogMsg").html(
          '<small class="alert alert-success">succes loading...</small>');
         setTimeout(()=>{
          window.location.href = "admin/adminDashboard.php";
         },1000);
      }
     },
  });
}
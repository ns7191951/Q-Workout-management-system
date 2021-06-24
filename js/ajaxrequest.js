$(document).ready(function(){
  //ajax call form already Exists Email Varification
  $("#useremail").on("keypress blur", function(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var charvalid =  /^[A-Za-z]+$/;
    var username = $("#username").val();
    var useremail = $("#useremail").val();
    $.ajax({
      url: "users/adduser.php",
      method: "POST",
      data: {
        checkemail: "checkemail",
        username: username,
        useremail: useremail,
      },
      success: function(data){
        //console.log(data);
        
        if (data != 0) {
          $("#statusMsg2").html(
      '<small style="color:red;">This Email has been already used !</small>');
          $("#signup").attr("disabled",true);
        }else if (data == 0 && reg.test(useremail)) {
           $("#statusMsg2").html(
      '<small style="color:green;">There You go !</small>');
          $("#signup").attr("disabled",false);
        }else if(!reg.test(useremail)){
          $("#statusMsg2").html(
      '<small style="color:red;">TPlease Enter valid Email e.g. example@mail.com</small>');
          $("#signup").attr("disabled",false);
        } 
        if(data == 0 && charvalid.test(usrename)){
          $("#statusMsg1").html(
            '<small style="color:green;">There You go !</small>');
          $("#signup").attr("disabled",false);
        }else if(!charvalid.test(usrename)){
        $("#statusMsg1").html(
      '<small style="color:red;">Please Enter only character and whitspace !</small>');
          $("#signup").attr("disabled",false);
       }
      },

    });
  });
});

function adduser(){
  var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
  var charvalid =  /^[A-Za-z]+$/;
	var username = $("#username").val();
  var useremail = $("#useremail").val();
	var userpass = $("#userpass").val();
    
   //checking form field on form submission
   if (username.trim() == "") {
    $("#statusMsg1").html(
      '<small style="color:red;">Please Enter Name !</small>');
      $("#username").focus();
      return false;
     } else if(username.trim() !="" && !charvalid.test(username)){
         $("#statusMsg1").html(
      '<small style="color:red;">Please Enter only character and whitspace !</small>');
      $("#username").focus();
      }
    
    else if (useremail.trim() == "") {
    $("#statusMsg2").html(
      '<small style="color:red;">Please Enter Email !</small>');
      $("#useremail").focus();
      return false;
    }else if (useremail.trim() != "" && !reg.test(useremail)){
      $("#statusMsg2").html(
        '<small style="color:red;">Please Enter valid Email e.g. example@mail.com</small>');

    }

   else if(userpass.trim() == "") {
    $("#statusMsg3").html(
      '<small style="color:red;">Please Enter Password !</small>');
      $("#userpass").focus();
      return false;
    }
    else {
    $.ajax({
   
     url:'users/adduser.php',
     method: 'POST',
     dataType: "json",
     data:{
     	usersignup: "usersignup",
     	username: username,
     	useremail: useremail,
     	userpass: userpass,

     },
      success:function(data){
      	console.log(data);
        if (data == "ok") {
          $("#successMsg").html("<span class='alert alert-success'>Registration successfull !</span>");
          clearStuRegField();
        }else if (data == "failed") {
          $("#successMsg").html("<span class='alert alert-denger'>Unable to register </span>");

        }
      },
    });
   }
}


// empty all field 
function clearStuRegField(){
  $("#stuRegForm").trigger("reset");
  $("#statusMsg1").html(" ");
  $("#statusMsg2").html(" ");
  $("#statusMsg3").html(" ");
}

// Ajax call for User Login varification
function checkUserLogin(){
  var userLogemail = $("#userLogemail").val();
  var userLogpass = $("#userLogpass").val();
  $.ajax({
     url:'users/adduser.php',
     method: "POST",
     data: {
      checkLogemail: "checkLogemail",
        userLogemail: userLogemail,
        userLogpass: userLogpass,
     },
     success: function(data) {
      //console.log(data);
    if (data == 0) {
      $("#statusLogMsg").html(
      '<small class="alert alert-denger">Invalid Email ID or Password !</small>');

      }else if (data == 1) {
         $("#statusLogMsg").html(
          '<div class="spinner-border text-success" role="status"></div>'
          );
         setTimeout(()=>{
          window.location.href = "index.php";
         },1000);
      }
     },
  });
}
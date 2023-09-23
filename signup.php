<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-md-6">
         <div class="card col-md-13">
           <div class="card-header">
             <img src="assets/images/images.jfif" style="width:100%;height: 700px;">
           </div>
           <div class="card-body">

           </div>
         </div>
        </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                           <form method="POST">
                            <div id="msg"></div>
<div class="form-group col-sm-9 mb-3 ">
                 <label>First Name</label>
                 <input  type="text" class="form-control" id="full_name"  alt="full_name" placeholder="Please enter first name" onkeyup="textonly(this)" maxlength="30"  autocomplete="off">
                 <span class="fname-error"></span>
               </div>
               
               <div class="form-group col-sm-9 mb-3 ">
                 <label>Middle Name</label>
                 <input  type="text" class="form-control" id="middle_name"  alt="middle_name" placeholder="Optional" onkeyup="textonly(this)" maxlength="30" autocomplete="off">
               
               </div>
               <div class="form-group col-sm-9 mb-3 ">
                 <label>Last Name</label>
                 <input  type="text" class="form-control" id="last_name"  alt="last_name" placeholder="Please enter last name" onkeyup="textonly(this)" maxlength="30" autocomplete="off">
                 <span class="lastname-error"></span>
               </div>

               <div class="form-group col-sm-9 mb-3 ">
                 <label>Email Address</label>
                  <input type="text" class="form-control" id="email_address" alt="email_address" placeholder="Please enter Email Address" maxlength="35" autocomplete="off">
                  <span class="email-error"></span> <br>
             
                  <span id="msg-email" style="color:#CC0000;" ></span>                  
                   
               </div>

               <div class="form-group col-sm-9 mb-3 ">
                 <label>Username</label>
                 <input type="text" class="form-control" id="username" alt="username" placeholder="Please enter Username" maxlength="30" autocomplete="off">
                  <span class="uname-error"></span>
                  <span class="username_error"></span>
               </div>

              


                <div class="form-group col-sm-9 mb-3 mb-sm-0 " >
                   <label>Password</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                
              </div>
              <input type="password" class="form-control" id="password" alt="password" placeholder="Please enter Password" minlength="8" maxlength="15"  autocomplete="off">
               
              <div class="input-group-append">
                <span class="input-group-text " onclick="password_show_hide();">
                  <i class="fas fa-eye-slash" id="hide_eye"></i>
                  <i class="fas fa-eye d-none" id="show_eye"></i>
                  
                </span>
               
              </div>
            </div>
            <span class="pass-error"></span>
                      </div> 
<h6> Password must contain at least one number and one uppercase and one special character, and at least 8 or more characters</h6>
           <div class="btn form-controlbtn-user btn-block">
                  <button type="button" class="btn btn-primary" value="Submit" id="btn-submit">Submit</button>
               </div>
               <div class="text-center">
                                        <a class="small" href="login">Already have account?</a>
                                    </div>
          </div>




             
           </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

  <!---- For toggle eye --->
<script type="text/javascript">
  function password_show_hide() {
  var x = document.getElementById("password");
  var show_eye = document.getElementById("show_eye");
  var hide_eye = document.getElementById("hide_eye");
  show_eye.classList.remove("d-none");
  if (x.type === "password") {
    x.type = "text";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
  } else {
    x.type = "password";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  }
}
</script>

  <!---- End For toggle eye --->
 
  <!-- jquery and javascript -->
<!-- 
    <script>
      $( document ).ready(function() {
         $(".btn-submit").on('click', function(){

         // const fullname = $("#full_name").val(); //get element using jquery
         // console.log("===============fullname===========");
         // console.log(fullname);
            

         // const fullname = document.getElementById("full_name").value;  //get element using javascript
         // console.log("===============fullname===========");
         // console.log(fullname);

        //  const fullname = document.querySelector('input[alt=full_name]').value; //get element using javascript ES6
        // console.log('==========fullname==========')
        // console.log(fullname);



            // alert("click me");
    
         });
     });
    </script>
 -->
    <!--end jquery and javascript -->

  <!-- javascript ES6 -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script type="text/javascript"> 

    document.addEventListener('DOMContentLoaded', () => {
      let btn = document.querySelector('#btn-submit')
          btn.addEventListener('click', (event) => {
              event.preventDefault();

              const fullname = document.querySelector('input[alt=full_name]').value;
              console.log('==========fullname==========')
              console.log(fullname);

               const middlename = document.querySelector('input[alt=middle_name]').value;
              console.log('==========middlename==========')
              console.log(middlename);

               const lastname = document.querySelector('input[alt=last_name]').value;
              console.log('==========lastname==========')
              console.log(lastname);

              const emailaddress = document.querySelector('input[alt=email_address]').value;
              console.log('==========emailaddress==========')
              console.log(emailaddress);

              const username = document.querySelector('input[alt=username]').value;
              console.log('==========username==========')
              console.log(username);

              const password = document.querySelector('input[alt=password]').value;
              console.log('==========password==========')
              console.log(password);


          function isValidFullname(){            
             var pattern = /^[a-z A-Z ]+$/;
             var full_name = $("#full_name").val();
             if(pattern.test(full_name) && full_name !== ""){
                $("#full_name").removeClass("is-invalid").addClass("is-valid");
                $(".fname-error").css({
                 "color": "green",
                 "font-size": "14px",
                 "display": "none"
               });
                return true;

             }else if(full_name === ""){
               $("#full_name").removeClass("is-valid").addClass("is-invalid");
               $(".fname-error").html("Required First Name");
                 $(".fname-error").css({
                   "color": "red",
                   "font-size": "14px"
                 });
             }else{
               $("#full_name").removeClass("is-valid").addClass("is-invalid");
               $(".fname-error").html("Please input Character Only");
                 $(".fname-error").css({
                 "color": "red",
                 "font-size": "14px",
                 "display": "block"
               });

             };

          }

          function isValidmiddlename(){
             
             var pattern = /^[a-z A-Z ]+$/;
             var  middle_name = $("#middle_name").val();
             if(pattern.test(middle_name) && middle_name !== ""){
                $("#middle_name").removeClass("is-invalid").addClass("is-valid");
                $(".middle-error").css({
                 "color": "green",
                 "font-size": "14px",
                 "display": "none"
               });
                return true;

    
             }else{
               $("#middle_name").removeClass("is-valid").addClass("is-valid");
               
                 return true;
                 
               };

             };

          



          function isValidlastname(){
             
             var pattern = /^[a-z A-Z ]+$/;
             var last_name = $("#last_name").val();
             if(pattern.test(last_name) && last_name !== ""){
                $("#last_name").removeClass("is-invalid").addClass("is-valid");
                $(".lastname-error").css({
                 "color": "green",
                 "font-size": "14px",
                 "display": "none"
               });
                return true;
last_name             }else if(last_name === ""){
               $("#last_name").removeClass("is-valid").addClass("is-invalid");
               $(".lastname-error").html("Required Last Name");
                 $(".lastname-error").css({
                   "color": "red",
                   "font-size": "14px"
                 });
             }else{
               $("#last_name").removeClass("is-valid").addClass("is-invalid");
               $(".lastname-error").html("Please input Character Only");
                 $(".lastname-error").css({
                 "color": "red",
                 "font-size": "14px",
                 "display": "block"
               });

             };

          }


            function isValidUsername(){
           
               var pattern = /^[a-z A-Z 0-9 #_.]+$/;
               var username = $("#username").val();
               if(pattern.test(username) && username !== ""){
                  $("#username").removeClass("is-invalid").addClass("is-valid");
                  $(".uname-error").css({
                   "color": "green",
                   "font-size": "14px",
                   "display": "none"
                 });
                  return true;

               }else if(username === ""){
                 $("#username").removeClass("is-valid").addClass("is-invalid");
                 $(".uname-error").html("Required Username");
                   $(".uname-error").css({
                     "color": "red",
                     "font-size": "14px"
                   });
               }else{
                 $("#username").removeClass("is-valid").addClass("is-invalid");
                 $(".uname-error").html("Please input Character Only");
                   $(".uname-error").css({
                   "color": "red",
                   "font-size": "14px",
                   "display": "block"
                 });

               };

            }

           function isValidEmail(){
             
                 var pattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
                 var email_address = $("#email_address").val();
                 if(pattern.test(email_address) && email_address !== ""){
                    $("#email_address").removeClass("is-invalid").addClass("is-valid");
                    $(".email-error").css({
                     "color": "green",
                     "font-size": "14px",
                     "display": "none"
                   });
                    return true;

                 }else if(email_address === ""){
                   $("#email_address").removeClass("is-valid").addClass("is-invalid");
                   $(".email-error").html("Required Email address");
                     $(".email-error").css({
                       "color": "red",
                       "font-size": "14px"
                     });
                 }else{
                   $("#email_address").removeClass("is-valid").addClass("is-invalid");
                   $(".email-error").html("Please input Unique Email Address");
                     $(".email-error").css({
                     "color": "red",
                     "font-size": "14px",
                     "display": "block"
                   });

                 };

              }


           function isValidPassword(){
              
                 var pattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+=]).{8,}$/
                 var password = $("#password").val();
                 if(pattern.test(password) && password !== ""){
                    $("#password").removeClass("is-invalid").addClass("is-valid");
                    $(".pass-error").css({
                     "color": "green",
                     "font-size": "14px",
                     "display": "none"
                   });
                    return true;

                 }else if(password === ""){
                   $("#password").removeClass("is-valid").addClass("is-invalid");
                   $(".pass-error").html("Please Enter Password");
                     $(".pass-error").css({
                       "color": "red",
                       "font-size": "14px"
                     });
                 }else{
                   $("#password").removeClass("is-valid").addClass("is-invalid");
                   $(".pass-error").html("Must contain at least one number and one uppercase and one special character, and at least 8 or more characters");
                     $(".pass-error").css({
                     "color": "red",
                     "font-size": "14px",
                     "display": "block"
                   });

                 };

              }


            isValidFullname();
            isValidEmail();
            isValidUsername();
            isValidPassword();

            var data = new FormData(this.form);

            data.append('fullname', fullname);
            data.append('middlename', middlename);
            data.append('lastname', lastname);
            data.append('emailaddress', emailaddress)
            data.append('username', username)
            data.append('password', password)


            if(isValidFullname() === true  && isValidmiddlename() === true && isValidlastname() === true  && isValidEmail() === true && isValidUsername() === true && isValidPassword() === true){

                 $.ajax({

                         url: 'config/register.php',
                          type: "POST",
                          data: data,
                          processData: false,
                          contentType: false,
                          async: false,
                          cache: false,
                      success: function(res){
                        console.log('==================res===========');
                        console.log(res);
                        $('#msg').html(res);

                    },error: function(res){
                      console.log("Failed Insert");
                    }

                  });

             }

          });
     });
  </script>


   
 <script type="text/javascript">
                function textonly(input) {

                    var text = /[^a-z ,]/gi;
                    input.value = input.value.replace(text,"");
                    // body...
                }
            </script>



            <script type="text/javascript">
                function numberonly(input) {

                    var num = /[0-9]/gi;
                    input.value = input.value.replace(num,"");
                    // body...
                }
            </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

            <!-- check email validation !-->

            <script type="text/javascript">
      $(document).ready(function() {
   
          var timeOut = null; // this used for hold few seconds to made ajax request
   
          var loading_html = '<img src="assets/images/spinner.gif" style="height: 40px; width: 40px;"/>'; // just an loading image or we can put any texts here
   
          //when button is clicked
          $('#email_address').keyup(function(e){
   
              // when press the following key we need not to make any ajax request, you can customize it with your own way
              switch(e.keyCode)
              {
                  //case 8:   //backspace
                  case 9:     //tab
                  case 13:    //enter
                  case 16:    //shift
                  case 17:    //ctrl
                  case 18:    //alt
                  case 19:    //pause/break
                  case 20:    //caps lock
                  case 27:    //escape
                  case 33:    //page up
                  case 34:    //page down
                  case 35:    //end
                  case 36:    //home
                  case 37:    //left arrow
                  case 38:    //up arrow
                  case 39:    //right arrow
                  case 40:    //down arrow
                  case 45:    //insert
                  //case 46:  //delete
                      return;
              }
              if (timeOut != null)
                  clearTimeout(timeOut);
              timeOut = setTimeout(is_available, 500);  // delay delay ajax request for 1000 milliseconds
              $('#msg-email').html(loading_html); // adding the loading text or image
          });
    });
  function is_available(){
      //get the username
      var email_address = $('#email_address').val();
   
      //make the ajax request to check is email available or not
      $.post("config/check_email.php", { email_address: email_address },
      function(result)
      {
          console.log(result);
          if(result != 0)
          {
            $('#msg-email').html('Email already exists');
            document.getElementById("btn-submit").disabled = true;
          } else
          {
              $('#msg-email').html('<span style="color:#006600;">Available</span>');
              document.getElementById("btn-submit").disabled = false;
          }
      });
   
  }
  </script>

   
</body>

</html>
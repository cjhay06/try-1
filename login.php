

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>try</title>

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
             <img src="assets/images/login-removebg-preview.png" style="width:100%;height: 500px;">
           </div>
           <div class="card-body">

           </div>
         </div>
        </div>
                
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form method="POST" id="logform">
        <div id="msg_login"></div>
               <div class="">
                  <center><span id="myalert2"></span></center>
               </div>
              
               <div class="" id="myalert" style="display: none;">
                     <div class="">
                        <center><span id="alerttext"></span></center>
                     </div>
               </div>

               <div class="" id="myalert3" style="display: none;">
                     <div class="">
                          <div class="alert alert-success" id="alerttext3"></div>
                     </div>
               </div>

               <?php


if(!empty($_POST["remember"])) {
    setcookie ("emailaddress",$_POST["emailaddress"],time()+ 3600);
    setcookie ("password",$_POST["password"],time()+ 3600);
    
} else {
    setcookie("emailaddress","");
    setcookie("password","");
   ;
}

?>
                                        <div class="form-group">
                                        	 <label>Email</label>
                                            <input type="email" name="emailaddress" id="emailaddress" value="<?php if(isset($_COOKIE["emailaddress"])) { echo $_COOKIE["emailaddress"]; } ?>" class="form-control" placeholder="email">
                          <span class="email-error"></span>
                                        </div>
                                        <div class="form-group">
                                        	 <label>Password</label>
                                            <input type="password" id="password" name="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" class="form-control" placeholder="password">
                                        </div>
                                        <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck" name="remember" >
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                        
                        
                        
                    </div>
                                         <a  class="btn btn-primary btn-user btn-block" id="login-button"   >
                                            Login
                                        </a>
                                        <hr>
                                        
                                    </form>

                                
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="signup">Create an Account!</a>
                                    </div>
                                      <div class="text-center">
                                        <a class="small" href="index">Back to Home!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
  
// Wait for document to load
        $(document).ready(() => {
            $('#logform').on('submit', () => {

                // prevents default behaviour
                // Prevents event propagation
                return false;
            });
        });
        $('#logform').keypress((e) => {

            // Enter key corresponds to number 13
            if (e.which === 13) {
                $('#logform').submit();
                console.log('form submitted');
            }
        })


        $(document).on('click', '#login-button', function() {

            if ($('#emailaddress').val() != '' && $('#password').val() != '') {

                // $('#login-button').html(' Loading...');
                $('#myalert').slideUp();
                $('#myalert3').slideUp();
                var logform = $('#logform').serialize();
                setTimeout(function() {
                    $.ajax({
                        method: 'POST',
                        url: 'config/login.php', 
                        data: logform,
                        //   beforeSend: function() {

                        //    $('#login-button').html(' Loading...');
                        //    $('#login-button').html('');
                        // },
                        success: function(data) {
                            if (data == 1) {

                                $('#myalert3').slideDown();
                                $('#alerttext3').html(data);
                                $('#alerttext3').html('<i class="fa fa-check"></i> Login Successful. Admin Verified!');
                                $('#login-button').text('Login');
                                $('#logform')[0].reset();
                                $('#myalert').hide();
                                $('#alerttext').hide();
                                $('#myalert2').hide();
                                $('#alerttext2').hide();
                                setTimeout(function() {
                                    window.location = './admin/home';
                                }, 1000);
                            }  else if (data == 2) {

                                $('#myalert3').slideDown();
                                $('#alerttext3').html(data);
                                $('#alerttext3').html('<i class="fa fa-check"></i> Login Successful. User Verified!');
                                $('#login-button').text('Login');
                                $('#logform')[0].reset();
                                $('#myalert').hide();
                                $('#alerttext').hide();
                                $('#myalert2').hide();
                                $('#alerttext2').hide();
                                setTimeout(function() {
                                    window.location = './user/home';
                                }, 1000);
                            }

                            else if (data == 3) {

                                $('#myalert3').slideDown();
                                $('#alerttext3').html(data);
                                $('#alerttext3').html('<i class="fa fa-check"></i> Login Successful. Respondent Verified!');
                                $('#login-button').text('Login');
                                $('#logform')[0].reset();
                                $('#myalert').hide();
                                $('#alerttext').hide();
                                $('#myalert2').hide();
                                $('#alerttext2').hide();
                                setTimeout(function() {
                                    window.location = './respondent/home';
                                }, 1000);
                            }

                             else {
                                $('#myalert').slideDown();
                                $('#alerttext').html(data);
                                $('#logtext').text('Login');
                                $('#logform')[0].reset();
                                $('#myalert2').hide();
                                $('#alerttext3').hide();

                            }
                        }
                    });
                }, 1000);
            } else {
                $('#myalert2').slideDown();
                $('#myalert').hide();
                $('#alerttext3').hide();
                $('#myalert2').html('<div class="alert alert-warning err_msg"><i class="fa fa-info"></i> Please input both fields/select to Login</div>');
                $('#logtext').text('Login');
                $('#logform')[0].reset();

            }
        });


</script>
</body>

</html>
<?php

  require_once "sampleclass.php";
   use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require '../vendor/autoload.php';


  if(ISSET($_POST)){

  	  $conn = new class_php();

  	    $fullname = htmlentities(strip_tags(stripcslashes(trim($_POST['fullname']))));
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
  	    $emailaddress = $_POST['emailaddress'];

  	    $username = $_POST['username'];
  	    $password = $_POST['password'];

        $otp = rand(100000,999999);
         $add = $conn->add_user($fullname,$middlename,$lastname, $emailaddress, $username, $password,$otp);
         
        
          $mail = new PHPMailer(true);
         if($add){
            //Server settings
          //  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                    //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'johncarlaguibay01@gmail.com';             //SMTP username
            $mail->Password   = 'ghcaiaycapvxfckj';                    //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;  // 465   //587                    //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS

            //Recipients
            $mail->setFrom('johncarlaguibay01@gmail.com', 'ALPHA CORP');
            $mail->addAddress($emailaddress);

            //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = "Your email confirmation code";
                $mail->Body    =  "<h1>Hello! <span><b>$fullname $lastname</b></span> </h1> <h3><b> Use this code to verify your email address on System.</h3></b>  <h3>This code can only be used once. If you did not request a code, ignore this email.
                     Never share this code with anyone else.</h3> <h2>Confirmation code:</h2>  <h1>$otp </h1>";

            if(!$mail->send()){

                                              
                                       echo '<div class="alert alert-success">Send Link Successfully!</div><script> setTimeout(function() {  location.replace("verification.php"); }, 1000); </script>';
                               
                            }else{
                               
                                  echo '<div class="alert alert-success">Send Link Successfully!</div><script> setTimeout(function() {  location.replace("verification.php"); }, 1000); </script>';
                               
                            }


     }
   }

 ?>
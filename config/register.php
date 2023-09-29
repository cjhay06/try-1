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
       

        $files = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
        $photo ="../uploads/". addslashes($_FILES['photo']['name']);
        $file_size =  $_FILES['photo']['size'];
        move_uploaded_file($_FILES["photo"]["tmp_name"], $_SERVER['DOCUMENT_ROOT']."/try-1/uploads/" .   addslashes($_FILES["photo"]["name"]));

        

        $otp = rand(100000,999999);
        $code = md5(rand());

         $add = $conn->add_user($fullname,$middlename,$lastname, $emailaddress, $username, $password,$otp,$code,$photo);
         
        
         //  $mail = new PHPMailer(true);
         // try{
         //    //Server settings
         //  //  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                    //Enable verbose debug output
         //    $mail->isSMTP();                                            //Send using SMTP
         //    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
         //    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
         //    $mail->Username   = 'johncarlaguibay01@gmail.com';             //SMTP username
         //    $mail->Password   = 'ghcaiaycapvxfckj';                    //SMTP password
         //    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
         //    $mail->Port       = 465;  // 465   //587                    //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS

         //    //Recipients
         //    $mail->setFrom('johncarlaguibay01@gmail.com', 'ALPHA CORP');
         //    $mail->addAddress($emailaddress);

         //    //Content
         //        $mail->isHTML(true);                                  //Set email format to HTML
         //        $mail->Subject = "Your email confirmation code";
         //        $mail->Body    =  'Hi there,<br/><br/>Forgot your password?<br/><br/>To reset your password, click a link below:<br/><b><a href="http://localhost/try-1/verification.php?code='.$code.'">Password Reset Link</a></b><br/><br/>Otherwise, if you did not make this request then please ignore this email.';
         //      $mail->send();
         //        echo '';
         //    } catch (Exception $e) {
         //        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
         //   }

            // $send = $conn->sending_code($otp,$code);
          if($add == TRUE){
              echo '<div class="alert alert-success">Verification Code Successfully Send!</div><script> setTimeout(function() {  location.replace("login.php"); }, 1000); </script>';

            }else{
              echo '<div class="alert alert-danger">Verification Code Failed to Send!</div><script> setTimeout(function() {  location.replace("login.php"); }, 1000); </script>';

        
           }
   }

 ?>
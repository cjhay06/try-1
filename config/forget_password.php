<?php

  require_once "sampleclass.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require '../vendor/autoload.php';

  if(ISSET($_POST)){

      $conn = new class_php();
        
        $code = md5(rand());
        $email = htmlentities(strip_tags(stripcslashes(trim($_POST['emailaddress']))));


      $mail = new PHPMailer(true);
        try {
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
            $mail->setFrom($email);
            $mail->addAddress($email);

            //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Password Reset';
                $mail->Body    = 'Hi there,<br/><br/>Forgot your password?<br/><br/>To reset your password, click a link below:<br/><b><a href="http://localhost/try-1/change-password.php?reset='.$code.'">Password Reset Link</a></b><br/><br/>Otherwise, if you did not make this request then please ignore this email.';


             $mail->send();
                echo '';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
           }

            $send = $conn->send_email($code, $email);
          if($send == TRUE){
              echo '<div class="alert alert-success">Send Link Successfully!</div><script> setTimeout(function() {  location.replace("forget-password.php"); }, 1000); </script>';

            }else{
              echo '<div class="alert alert-danger">Send Link Failed!</div><script> setTimeout(function() {  location.replace("forget-password.php"); }, 1000); </script>';

        
           }


     }

 ?>
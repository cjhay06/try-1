<?php

  require_once "sampleclass.php";

  if(ISSET($_POST)){

      $conn = new class_php();

        $codes = htmlentities(strip_tags(stripcslashes(trim($_POST['codes']))));
        $email = $_SESSION['mail'];
        $otp_code = $_POST['otp_code'];
       


        $sending = $conn->send_code($codes,$email,$otp_code);
         
         if($sending == TRUE){
          echo "<div class='alert alert-success' role='alert' id='msg'>Verification Successful </div><script> setTimeout(function(){location.replace('login.php');}, 1000);</script>";
           }else{
            echo "<div class='alert alert-danger' role='alert' id='msg'>Verification Failed</div><script> setTimeout(function(){location.replace('Verification.php');}, 1000);</script>";
           }


     }

 ?>
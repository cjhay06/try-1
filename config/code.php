<?php

  require_once "sampleclass.php";

  if(ISSET($_POST)){

      $conn = new class_php();

 
                $otp_code = $_POST['otp_code'];
                $email = $_SESSION['mail'];
       
                $codes = htmlentities(strip_tags(stripcslashes(trim($_POST['codes']))));

        $sending = $conn->send_code($otp,$otp_code,$email);
         
         if($sending == TRUE){
          echo "<div class='alert alert-success' role='alert' id='msg'>Verification Successful </div><script> setTimeout(function(){location.replace('login.php');}, 1000);</script>";
           }else{
            echo "<div class='alert alert-danger' role='alert' id='msg'>Verification Failed</div><script> setTimeout(function(){location.replace('Verification.php');}, 1000);</script>";
           }


     }

 ?>
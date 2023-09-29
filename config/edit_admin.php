<?php

  require_once "sampleclass.php";

  if(ISSET($_POST)){

  	  $conn = new class_php();

  	    $firstname = htmlentities(strip_tags(stripcslashes(trim($_POST['firstname']))));
        $middlename = htmlentities(strip_tags(stripcslashes(trim($_POST['middlename']))));
         $lastname = htmlentities(strip_tags(stripcslashes(trim($_POST['lastname']))));
        $emailaddress = htmlentities(strip_tags(stripcslashes(trim($_POST['emailaddress']))));
        $username = htmlentities(strip_tags(stripcslashes(trim($_POST['username']))));
        $password = htmlentities(strip_tags(stripcslashes(trim($_POST['password']))));

        $edit = $conn->edit_admin($firstname,$middlename,$lastname,$emailaddress,$username,$password);
         
         if($edit == TRUE){
         	echo "<div class='alert alert-success' role='alert' id='msg'>Updated admin Successfully</div><script> setTimeout(function(){location.replace('admin_table');}, 1000);</script>";
           }else{
           	echo "<div class='alert alert-danger' role='alert' id='msg'>Updated admin Failed</div><script> setTimeout(function(){location.replace('admin_table');}, 1000);</script>";
           }


     }

 ?>
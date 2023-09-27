<?php

  require_once "sampleclass.php";

  if(ISSET($_POST)){

  	  $conn = new class_php();

  	    $fullname = htmlentities(strip_tags(stripcslashes(trim($_POST['fullname']))));
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
  	    $emailaddress = $_POST['emailaddress'];
  	    $username = $_POST['username'];
  	    $password = $_POST['password'];

          $files = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
        $photo ="../admin/uploads/". addslashes($_FILES['photo']['name']);
        $file_size =  $_FILES['photo']['size'];
        move_uploaded_file($_FILES["photo"]["tmp_name"], $_SERVER['DOCUMENT_ROOT']."/try-1/admin/uploads/" .   addslashes($_FILES["photo"]["name"]));



          

      
       $add = $conn->add_admin($fullname,$middlename,$lastname, $emailaddress, $username, $password, $photo);
         
         if($add == TRUE){
         	echo "<div class='alert alert-success' role='alert' id='msg'>Added Admin Successfully</div><script> setTimeout(function(){location.replace('../admin/admin_tables.php');}, 1000);</script>";
           }else{
           	echo "<div class='alert alert-danger' role='alert' id='msg'>Added Admin Failed</div><script> setTimeout(function(){location.replace('index.php');}, 1000);</script>";
           }


     }

 ?>
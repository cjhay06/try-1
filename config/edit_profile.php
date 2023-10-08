<?php

  require_once "sampleclass.php";

  if(ISSET($_POST)){

      $conn = new class_php();

        $fname = htmlentities(strip_tags(stripcslashes(trim($_POST['fname']))));
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $eemail = $_POST['eemail'];
        $uname = $_POST['uname'];
        $pword = $_POST['pword'];

        $default = htmlentities(strip_tags(stripcslashes($_POST['default_img'])));

        $pic = htmlentities(strip_tags(stripcslashes(trim($_POST['photo']))));

        if(!empty($pic)){
           
           $photo = $default;

        }else{

            $files = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
            $photo ="../admin/uploads/". addslashes($_FILES['photo']['name']);
            $file_size =  $_FILES['photo']['size'];
           move_uploaded_file($_FILES["photo"]["tmp_name"], $_SERVER['DOCUMENT_ROOT']."/try-1/admin/uploads/" .   addslashes($_FILES["photo"]["name"]));
         }
        $id = $_POST['id'];


         
        $edit_profile = $conn->edit_profile($fname,$mname,$lname, $eemail, $uname,$photo,$id);
         
         if($edit_profile == TRUE){
          echo "<div class='alert alert-success' role='alert' id='msg'>Updated profile Successfully</div><script> setTimeout(function(){location.replace('home');}, 1000);</script>";
           }else{
            echo "<div class='alert alert-danger' role='alert' id='msg'>Updated profile Failed</div><script> setTimeout(function(){location.replace('home');}, 1000);</script>";
           }


     }

 ?>

   

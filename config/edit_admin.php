<?php

  require_once "sampleclass.php";

  if(ISSET($_POST)){

      $conn = new class_php();

        $firstname = htmlentities(strip_tags(stripcslashes(trim($_POST['firstname']))));
        $id = htmlentities(strip_tags(stripcslashes(trim($_POST['id']))));

        $edit = $conn->edit_category($firstname, $id);
         
         if($edit == TRUE){
          echo "<div class='alert alert-success' role='alert' id='msg'>Updated category Successfully</div><script> setTimeout(function(){location.replace('category');}, 1000);</script>";
           }else{
            echo "<div class='alert alert-danger' role='alert' id='msg'>Updated category Failed</div><script> setTimeout(function(){location.replace('category');}, 1000);</script>";
           }


     }

 ?>
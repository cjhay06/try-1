<?php

  require_once "sampleclass.php";

  if(ISSET($_POST['id'])){

  	  $conn = new class_php();
  	    $id = $_POST['id'];
        $conn->row_category1($id);
   

     }

 ?>
<?php
     require_once "sampleclass.php";
      $conn = new Database();
      $code  = htmlspecialchars(strip_tags(stripslashes(trim($_GET['code']))));
      $glevels = $conn->recover($username);
     foreach ($glevels as $row) { ?>


       <?php } ?>
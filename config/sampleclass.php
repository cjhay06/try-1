<?php

require 'connection.php';

  class class_php {
      private $server = DB_HOST;
      private $user   = DB_USER;
      private $pass   = DB_PASS;
      private $db     = DB_NAME;
      private $pdo; 

      public function __construct()
      {
           $this->db_connect();
      }

   public function db_connect()//connection OOP PDO
        {
        	$this->pdo = null;
          try{
              $this->pdo = new PDO("mysql:host=".$this->server.";dbname=".$this->db, $this->user, $this->pass);
             	$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              if(!$this->pdo){
              	return false;
              }	
          }catch(PDOException $e){
             echo $e->getMessage();
          }
        }


          // registration
          public function add_user($fullname,$middlename,$lastname, $emailaddress, $username, $password){

           
                   $role = "user";
                   $hashpassword = password_hash($password, PASSWORD_DEFAULT);
                   $stmt = $this->pdo->prepare("INSERT INTO `tbl_user` (`firstname`,`middlename`,`lastname`, `email`, `username`, `password`, `role`)VALUES(?,?,?,?,?,?,?)");
                   $true = $stmt->execute([$fullname,$middlename,$lastname, $emailaddress, $username, $hashpassword, $role]);
                  if($true == true){
                   	 return true;

                   }else{
                   	  return false;
             }

          }
        

        // end registration

        //login user

          public function login($emailaddress, $password){

            
                    session_start();

              $stmt1 = $this->pdo->prepare("SELECT id, password FROM `tbl_admin` WHERE `email` = :uemail  AND `role` = 'Admin'");
              $stmt1->bindParam(':uemail', $emailaddress);
              $stmt1->execute();
              $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);

              $stmt2 = $this->pdo->prepare("SELECT id, password FROM `tbl_user` WHERE `email` = :uemail  AND `role` = 'user'");
              $stmt2->bindParam(':uemail', $emailaddress);
              $stmt2->execute();
              $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);

              $stmt3 = $this->pdo->prepare("SELECT id, password FROM `tbl_respondent` WHERE `email` = :uemail  AND `role` = 'respondent'");
              $stmt3->bindParam(':uemail', $emailaddress);
              $stmt3->execute();
              $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);


              if($stmt1->rowCount() > 0){
                
                if (password_verify($password, $row1['password'])) {
                     $_SESSION['userid'] = htmlentities($row1['id']);
                $_SESSION['logged_in'] = true;
               echo '1';
           }else{
            echo "<div class='alert alert-danger'>Invalid password!</div>";
           }
               
              }else if($stmt2->rowCount() > 0){

                 if (password_verify($password, $row2['password'])){
                     $_SESSION['userid2'] = htmlentities($row2['id']);
                $_SESSION['logged_in2'] = true;
               echo '2';

               }else{
            echo "<div class='alert alert-danger'>Invalid password!</div>";
           }

                
              }
                   else if($stmt3->rowCount() > 0){
                
                if(password_verify($password, $row3['password'])) {
                     $_SESSION['userid3'] = htmlentities($row3['id']);
                $_SESSION['logged_in3'] = true;
               echo '3';
           }else{
            echo "<div class='alert alert-danger'>Invalid password!</div>";
           }
       }






       
               else{
                echo "<div class='alert alert-danger'>Incorrect Email Address or Password</div>";
              }

          }
   //end login user
   


   // get session ID for admin

          public function fetch_adminsessionId($getsessionID){
             
               $query = $this->pdo->prepare("SELECT * FROM `tbl_admin` WHERE `id` =  ?");
               $query->execute([$getsessionID]);
               return $query->fetchAll();


          }

  


    // get session ID for User

          public function fetch_usersessionId($getsessionID){
             
               $query = $this->pdo->prepare("SELECT * FROM `tbl_user` WHERE `id` =  ?");
               $query->execute([$getsessionID]);
               return $query->fetchAll();


          }
    // end get session ID for User 


    // get session ID for respondent

          public function fetch_ressessionId($getsessionID){
             
               $query = $this->pdo->prepare("SELECT * FROM `tbl_respondent` WHERE `id` =  ?");
               $query->execute([$getsessionID]);
               return $query->fetchAll();


          }
    // end get session ID for respondent 



           // registration for admin
          public function add_admin($fullname,$middlename,$lastname, $emailaddress, $username, $password){

                  
                   $role = "admin";
                   $hashpassword = password_hash($password, PASSWORD_DEFAULT);
                   $stmt = $this->pdo->prepare("INSERT INTO `tbl_admin` (`firstname`,`middlename`,`lastname`, `email`, `username`, `password`, `role`)VALUES(?,?,?,?,?,?,?)");
                   $true = $stmt->execute([$fullname,$middlename,$lastname, $emailaddress, $username, $hashpassword, $role]);
                  if($true == true){
                     return true;

                   }else{
                      return false;
             }

          }
        

        // end registration for admin



           // registration for Respondent
          public function add_respondent($fullname,$middlename,$lastname, $emailaddress, $username, $password){

                   $role = "respondent";
                   $hashpassword = password_hash($password, PASSWORD_DEFAULT);
                   $stmt = $this->pdo->prepare("INSERT INTO `tbl_respondent` (`firstname`,`middlename`,`lastname`, `email`, `username`, `password`, `role`)VALUES(?,?,?,?,?,?,?)");
                   $true = $stmt->execute([$fullname,$middlename,$lastname, $emailaddress, $username, $hashpassword, $role]);
                  if($true == true){
                     return true;

                   }else{
                      return false;
             }

          }
        
        // end registration for Respondent


           // count all users
              
        public function getallUsers(){
           $query = $this->pdo->prepare("SELECT COUNT(id) as count_id FROM tbl_user");
               $query->execute();
               return $query->fetchAll();

        }

          // end get all users



         // count all Respondents
              
        public function getallRespondents(){
           $query = $this->pdo->prepare("SELECT COUNT(id) as count_id FROM tbl_respondent");
               $query->execute();
               return $query->fetchAll();

        }

          // end get all Respondents

         // count all Admin
              
        public function getallAdmin(){
           $query = $this->pdo->prepare("SELECT COUNT(id) as count_id FROM tbl_admin");
               $query->execute();
               return $query->fetchAll();

        }

          // end get all Respondents




          // get all category
              
        public function getalluser(){
              $query = $this->pdo->prepare("SELECT * FROM `tbl_user` ORDER BY id  DESC");
               $query->execute();
               return $query->fetchAll();

        }

          // end get all category

        // check email

          public function check_email($email_address){

         
          $query = $this->pdo->prepare("SELECT email FROM `tbl_user`  WHERE email = ?");
          $query->execute([$email_address]);
          $email = $query->rowCount();
           print($email);  
            // end check email


     }

     public function send_email($code, $email){

          $sql = "UPDATE `tbl_user` SET  `code` = ? WHERE email = ?";
           $update = $this->pdo->prepare($sql)->execute([$code, $email]);
             if ($update == true) {
                 return true;
              } else {
                 return false;
            }

         }

       public function change_password($password, $code){
          $hashpassword = password_hash($password, PASSWORD_DEFAULT);
           
          $sql = "UPDATE `tbl_user` SET  `password` = ?, `code` = '' WHERE code = ?";
           $update = $this->pdo->prepare($sql)->execute([$hashpassword, $code]);
             if ($update == true) {
                 return true;
              } else {
                 return false;
            }

         }








}


 ?>
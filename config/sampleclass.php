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
          public function add_user($fullname,$middlename,$lastname, $emailaddress, $username, $hashpassword){

             $stmt = $this->pdo->prepare("SELECT * FROM tbl_user WHERE email = ?");


           $stmt->execute([$emailaddress]);
           $result = $stmt->rowCount();
           if ($result > 0 ) {
            echo "<div class='alert alert-danger' role='alert' id='email_error'>email already exist</div>";
             // code...
           }
           


                
            else { 
                   $role = "user";
                   $stmt = $this->pdo->prepare("INSERT INTO `tbl_user` (`firstname`,`middlename`,`lastname`, `email`, `username`, `password`, `role`)VALUES(?,?,?,?,?,?,?)");
                   $true = $stmt->execute([$fullname,$middlename,$lastname, $emailaddress, $username, $hashpassword, $role]);
                  if($true == true){
                   	 return true;

                   }else{
                   	  return false;
             }

          }
        }

        // end registration

        //login

          public function login($emailaddress, $password){

            

             //login admin

             
                //login user
             $sql = "SELECT * FROM `tbl_user` WHERE `email` = :umail";
              $stmt2 = $this->pdo->prepare($sql);
              $stmt2->bindParam(':umail',$emailaddress);
              $stmt2->execute();
              $result = $stmt2->fetch(PDO::FETCH_ASSOC);

             

              
               //login user
             if($result && password_verify($password, $result['password']))
             {
                 if ($stmt2->rowCount() > 0){
                $_SESSION['userid1'] = htmlentities($result['id']);
                $_SESSION['logged_in1'] = true;
                echo '2';

    
                exit();
              }else{
                echo "<div class='alert alert-danger'>Incorrect Email Address or Password</div>";
              }
          }
      }

       //end login

   
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

                   $stmt = $this->pdo->prepare("INSERT INTO `tbl_admin` (`firstname`,`middlename`,`lastname`, `email`, `username`, `password`, `role`)VALUES(?,?,?,?,?,?,?)");
                   $true = $stmt->execute([$fullname,$middlename,$lastname, $emailaddress, $username, $password, $role]);
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

                   $stmt = $this->pdo->prepare("INSERT INTO `tbl_respondent` (`firstname`,`middlename`,`lastname`, `email`, `username`, `password`, `role`)VALUES(?,?,?,?,?,?,?)");
                   $true = $stmt->execute([$fullname,$middlename,$lastname, $emailaddress, $username, $password, $role]);
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

       public function change_password($hashpassword, $code){
           
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
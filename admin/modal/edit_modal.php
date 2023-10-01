<!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form method="POST">
            <div id="msg2"></div>
          <div class="modal-body">
            <div class="form-group">
               <div class="row g-3">
  <div class="col -md-6">
     <label for="inputCity" class="form-label">First Name</label>
    <input type="text" class="form-control" placeholder="First name" id="edit_firstname" name="firstname" aria-label="First name" alt="firstname">
  </div>
  <div class="col -md-6">
     <label for="inputCity" class="form-label">Middle Name</label>
    <input type="text" class="form-control" placeholder="Middle name" id="edit_middlename" name="middlename"  aria-label="First name">
  </div>
</div>
<div class="row g-3">
  <div class="col-md-6">
    <br>
     <label for="inputCity" class="form-label">Last Name</label>
    <input type="text" class="form-control" placeholder="Last name" id="edit_lastname" name="lastname"  aria-label="Middle name">
  </div>
  <div class="col-md-6">
    <br>
     <label for="inputCity" class="form-label">Email</label>
    <input type="text" class="form-control" placeholder="Email" id="edit_email" name="email"  aria-label="Last name">
  </div>
</div>
<div class="row g-3">
  <div class="col-md-6">
    <br>
     <label for="inputCity" class="form-label">User Name</label>
    <input type="text" class="form-control" placeholder="User name" id="edit_username" name="username" aria-label="User name">
  </div>
  <div class="col-md-6">
    <br>
     <label for="inputCity" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Password" id="edit_password" name="password" aria-label="Last name">
  </div>
</div>
            </div>
          </div>
          <div class="modal-footer">
            <input type="text" id="edit_categoryid" name="">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="btn-editcategory">Update</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <script>
       document.addEventListener('DOMContentLoaded', () => {
          let btn = document.querySelector('#btn-editcategory'); 
          btn.addEventListener('click', (e) => {

             
              const edit_firstname = document.querySelector('input[alt=edit_firstname]').value;
              console.log('==========fullname==========')
              console.log(edit_firstname);

               const edit_middlename = document.querySelector('input[alt=edit_middlename]').value;
              console.log('==========middlename==========')
              console.log(edit_middlename);

               const edit_lastname = document.querySelector('input[alt=edit_lastname]').value;
              console.log('==========lastname==========')
              console.log(edit_lastname);

              const edit_email = document.querySelector('input[alt=edit_email]').value;
              console.log('==========emailaddress==========')
              console.log(edit_email);

              const edit_username = document.querySelector('input[alt=edit_username]').value;
              console.log('==========username==========')
              console.log(edit_username);

              const edit_password = document.querySelector('input[alt=edit_password]').value;
              console.log('==========password==========')
              console.log(edit_password);

              const chooseFile = document.querySelector('input[alt=chooseFile]').value;
              console.log('==========chooseFile==========')
              console.log(chooseFile);


          function isValidFullname(){            
             var pattern = /^[a-z A-Z ]+$/;
             var edit_firstname = $("#edit_firstname").val();
             if(pattern.test(edit_firstname) && edit_firstname !== ""){
                $("#edit_firstname").removeClass("is-invalid").addClass("is-valid");
                $(".fname-error").css({
                 "color": "green",
                 "font-size": "14px",
                 "display": "none"
               });
                return true;

             }else if(full_name === ""){
               $("#full_name").removeClass("is-valid").addClass("is-invalid");
               $(".fname-error").html("Required First Name");
                 $(".fname-error").css({
                   "color": "red",
                   "font-size": "14px"
                 });
             }else{
               $("#full_name").removeClass("is-valid").addClass("is-invalid");
               $(".fname-error").html("Please input Character Only");
                 $(".fname-error").css({
                 "color": "red",
                 "font-size": "14px",
                 "display": "block"
               });

             };

          };

          function isValidmiddlename(){
             
             var pattern = /^[a-z A-Z ]+$/;
             var  edit_middlename = $("#edit_middlename").val();
             if(pattern.test(edit_middlename) && edit_middlename !== ""){
                $("#middle_name").removeClass("is-invalid").addClass("is-valid");
                $(".middle-error").css({
                 "color": "green",
                 "font-size": "14px",
                 "display": "none"
               });
                return true;

    
             }else{
               $("#middle_name").removeClass("is-valid").addClass("is-valid");
               
                 return true;
                 
               };

             };

          



          function isValidlastname(){
             
             var pattern = /^[a-z A-Z ]+$/;
             var edit_lastname = $("#edit_lastname").val();
             if(pattern.test(edit_lastname) && edit_lastname !== ""){
                $("#edit_lastname").removeClass("is-invalid").addClass("is-valid");
                $(".lastname-error").css({
                 "color": "green",
                 "font-size": "14px",
                 "display": "none"
               });
                return true;
           }else if(edit_lastname === ""){
               $("#edit_lastname").removeClass("is-valid").addClass("is-invalid");
               $(".lastname-error").html("Required Last Name");
                 $(".lastname-error").css({
                   "color": "red",
                   "font-size": "14px"
                 });
             }else{
               $("#edit_lastname").removeClass("is-valid").addClass("is-invalid");
               $(".lastname-error").html("Please input Character Only");
                 $(".lastname-error").css({
                 "color": "red",
                 "font-size": "14px",
                 "display": "block"
               });

             };

          };


            function isValidUsername(){
           
               var pattern = /^[a-z A-Z 0-9 #_.]+$/;
               var edit_username = $("#edit_username").val();
               if(pattern.test(edit_username) && edit_username !== ""){
                  $("#edit_username").removeClass("is-invalid").addClass("is-valid");
                  $(".uname-error").css({
                   "color": "green",
                   "font-size": "14px",
                   "display": "none"
                 });
                  return true;

               }else if(edit_username === ""){
                 $("#edit_username").removeClass("is-valid").addClass("is-invalid");
                 $(".uname-error").html("Required Username");
                   $(".uname-error").css({
                     "color": "red",
                     "font-size": "14px"
                   });
               }else{
                 $("#edit_username").removeClass("is-valid").addClass("is-invalid");
                 $(".uname-error").html("Please input Character Only");
                   $(".uname-error").css({
                   "color": "red",
                   "font-size": "14px",
                   "display": "block"
                 });

               };

            };

           function isValidEmail(){
             
                 var pattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
                 var edit_email = $("#edit_email").val();
                 if(pattern.test(edit_email) && edit_email !== ""){
                    $("#edit_email").removeClass("is-invalid").addClass("is-valid");
                    $(".email-error").css({
                     "color": "green",
                     "font-size": "14px",
                     "display": "none"
                   });
                    return true;

                 }else if(edit_email === ""){
                   $("#edit_email").removeClass("is-valid").addClass("is-invalid");
                   $(".email-error").html("Required Email address");
                     $(".email-error").css({
                       "color": "red",
                       "font-size": "14px"
                     });
                 }else{
                   $("#edit_email").removeClass("is-valid").addClass("is-invalid");
                   $(".email-error").html("Please input Unique Email Address");
                     $(".email-error").css({
                     "color": "red",
                     "font-size": "14px",
                     "display": "block"
                   });

                 };

              };


           function isValidPassword(){
              
                 var pattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+=]).{8,}$/
                 var edit_password = $("#edit_password").val();
                 if(pattern.test(edit_password) && edit_password !== ""){
                    $("#edit_password").removeClass("is-invalid").addClass("is-valid");
                    $(".pass-error").css({
                     "color": "green",
                     "font-size": "14px",
                     "display": "none"
                   });
                    return true;

                 }else if(edit_password === ""){
                   $("#edit_password").removeClass("is-valid").addClass("is-invalid");
                   $(".pass-error").html("Please Enter Password");
                     $(".pass-error").css({
                       "color": "red",
                       "font-size": "14px"
                     });
                 }else{
                   $("#edit_password").removeClass("is-valid").addClass("is-invalid");
                   $(".pass-error").html("Must contain at least one number and one uppercase and one special character, and at least 8 or more characters");
                     $(".pass-error").css({
                     "color": "red",
                     "font-size": "14px",
                     "display": "block"
                   });

                 };

              };

                    isValidlastname();
                    isValidmiddlename();
                    isValidFullname();
                    isValidEmail();
                    isValidUsername();
                    isValidPassword();
           

            
                var row = new FormData(this.form);
                 row.append('edit_firstname', firstname);
                 row.append('edit_middlename', middlename);
                 row.append('edit_lastname', lastname);
                 row.append('edit_email', email);
                 row.append('edit_username', usernames);
                 row.append('edit_password', password);


                   if(isValidFullname() === true  &&isValidmiddlename() === true  &&isValidlastname() === true  && isValidEmail() === true && isValidUsername() === true && isValidPassword() === true && isValidPhoto() === true){


                    $.ajax({

                         url: '../config/edit_admin.php',
                          type: "POST",
                          data: data,
                          processData: false,
                          contentType: false,
                          async: false,
                          cache: false,
                      success: function(res){
                        console.log('==================res===========');
                        console.log(res);
                        $('#msg').html(res);

                    },error: function(res){
                      console.log("Failed Insert");
                    }

                  });

             }

          });
     });
                  




    </script>

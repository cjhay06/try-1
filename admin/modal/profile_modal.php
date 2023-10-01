<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Modal -->
<div class="modal fade" id="profile_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method="POST">
            <div id="msg2"></div>
          <div class="modal-body">
            <div class="form-group">
               <div class="row g-3">
               
                               
                              

                                <img id="imgPlaceholder" class="img-profile rounded-circle"
                                    src="<?php foreach ($admin as  $row){echo ''. $row['photo'];}; ?>" width="300px" height="300px">
                                    <input type="file"  accept=".jpg, .png, .gif" id="chooseFile" class="form-control" alt="chooseFile"  name="">
                  <span class="pic-error"></span>

                            
  <div class="col -md-6">
     <label for="inputCity" class="form-label">First Name</label>

    <input type="text" class="form-control" placeholder="First name" value="<?php foreach ($admin as  $row){echo ''. $row['firstname'];}; ?>" id="fname" name="fname" aria-label="First name" alt="firstname" onkeyup="textonly(this)">
    <span class="firstname-error"></span>
  </div>
  <div class="col -md-6">
     <label for="inputCity" class="form-label">Middle Name</label>
    <input type="text" class="form-control" placeholder="Middle name" value="<?php foreach ($admin as  $row){echo ''. $row['middlename'];}; ?>" id="mname" name="mname"  aria-label="First name" onkeyup="textonly(this)">
    <span class="middlename-error"></span>
  </div>
</div>
<div class="row g-3">
  <div class="col-md-6">
    <br>
     <label for="inputCity" class="form-label">Last Name</label>
    <input type="text" class="form-control" placeholder="Last name" value="<?php foreach ($admin as  $row){echo ''. $row['lastname'];}; ?>" id="lname" name="lname"  aria-label="Middle name" onkeyup="textonly(this)">
    <span class="lastname-error"></span>
  </div>
  <div class="col-md-6">
    <br>
     <label for="inputCity" class="form-label">Email</label>
    <input type="email" class="form-control" placeholder="Email" value="<?php foreach ($admin as  $row){echo ''. $row['email'];}; ?>" id="eemail" name="eemail"  aria-label="Last name" >
    <span class="email-error"></span>
  </div>
</div>
<div class="row g-3">
  <div class="col-md-6">
    <br>
     <label for="inputCity" class="form-label">User Name</label>
    <input type="text" class="form-control" placeholder="User name" value="<?php foreach ($admin as  $row){echo ''. $row['username'];}; ?>" id="uname" name="uname" aria-label="User name">
    <span class="username-error"></span>
  </div>
  <div class="col-md-6">
    <br>
     <label for="inputCity" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Password" value="<?php foreach ($admin as  $row){echo ''. $row['password'];}; ?>" id="pword" name="pword" aria-label="Last name" autocomplete="current-password">
    <span class="password-error"></span>
  </div>
</div>
            </div>
          </div>
        
          </form>
      </div>
      <div class="modal-footer">
         <input type="hidden" id="id" value="<?php foreach ($admin as  $row){echo ''. $row['id'];}; ?>" name="">
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="btn-editprofile">Update</button>
      </div>
    </div>
  </div>
</div>
    <script>
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $('#imgPlaceholder').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]); // convert to base64 string
      }
    }
    $("#chooseFile").change(function () {
      readURL(this);
    });
  </script>

<script>
       document.addEventListener('DOMContentLoaded', () => {
          let btn = document.querySelector('#btn-editprofile'); 
          btn.addEventListener('click', (e) => {

             
             const fname = document.querySelector('input[id=fname]').value;
             console.log("==============firstname===========");
             console.log(fname);

             const mname = document.querySelector('input[id=mname]').value;
             console.log("==============middlename===========");
             console.log(mname);

             const lname = document.querySelector('input[id=lname]').value;
             console.log("==============lastname===========");
             console.log(lname);

             const eemail = document.querySelector('input[id=eemail]').value;
             console.log("==============email===========");
             console.log(eemail);

             const uname = document.querySelector('input[id=uname]').value;
             console.log("==============username===========");
             console.log(uname);

             const pword = document.querySelector('input[id=pword]').value;
             console.log("==============password===========");
             console.log(pword);

          


             const id = document.querySelector('input[id=id]').value;
             console.log("==============id===========");
             console.log(id);


             var row = new FormData(this.form);
                 row.append('fname', fname);
                 row.append('mname', mname);
                 row.append('lname', lname);
                 row.append('eemail', eemail);
                 row.append('uname', uname);
                 row.append('pword', pword);
                row.append('photo', $('#chooseFile')[0].files[0]);
                   row.append('id', id);
                


             function isValidFirstname(){            
             var pattern = /^[a-z A-Z ]+$/;
             var fname = $("#fname").val();
             if(pattern.test(fname) && fname !== ""){
                $("#fname").removeClass("is-invalid").addClass("is-valid");
                $(".fname-error").css({
                 "color": "green",
                 "font-size": "14px",
                 "display": "none"
               });
                return true;

             }else if(fname === ""){
               $("#fname").removeClass("is-valid").addClass("is-invalid");
               $(".fname-error").html("Required First Name");
                 $(".fname-error").css({
                   "color": "red",
                   "font-size": "14px"
                 });
             }else{
               $("#fname").removeClass("is-valid").addClass("is-invalid");
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
             var  mname = $("#mname").val();
             if(pattern.test(mname) && mname !== ""){
                $("#mname").removeClass("is-invalid").addClass("is-valid");
                $(".middle-error").css({
                 "color": "green",
                 "font-size": "14px",
                 "display": "none"
               });
                return true;

    
             }else{
               $("#mname").removeClass("is-valid").addClass("is-valid");
               
                 return true;
                 
               };

             };

          



          function isValidlastname(){
             
             var pattern = /^[a-z A-Z ]+$/;
             var lname = $("#lname").val();
             if(pattern.test(lname) && lname !== ""){
                $("#lname").removeClass("is-invalid").addClass("is-valid");
                $(".lname-error").css({
                 "color": "green",
                 "font-size": "14px",
                 "display": "none"
               });
                return true;
           }else if(lname === ""){
               $("#lname").removeClass("is-valid").addClass("is-invalid");
               $(".lname-error").html("Required Last Name");
                 $(".lname-error").css({
                   "color": "red",
                   "font-size": "14px"
                 });
             }else{
               $("#lname").removeClass("is-valid").addClass("is-invalid");
               $(".lname-error").html("Please input Character Only");
                 $(".lname-error").css({
                 "color": "red",
                 "font-size": "14px",
                 "display": "block"
               });

             };

          };


            function isValidUsername(){
           
               var pattern = /^[a-z A-Z 0-9 #_.]+$/;
               var uname = $("#uname").val();
               if(pattern.test(uname) && uname !== ""){
                  $("#uname").removeClass("is-invalid").addClass("is-valid");
                  $(".username-error").css({
                   "color": "green",
                   "font-size": "14px",
                   "display": "none"
                 });
                  return true;

               }else if(uname === ""){
                 $("#uname").removeClass("is-valid").addClass("is-invalid");
                 $(".username-error").html("Required Username");
                   $(".username-error").css({
                     "color": "red",
                     "font-size": "14px"
                   });
               }else{
                 $("#uname").removeClass("is-valid").addClass("is-invalid");
                 $(".username-error").html("Please input Character Only");
                   $(".username-error").css({
                   "color": "red",
                   "font-size": "14px",
                   "display": "block"
                 });

               };

            };

           function isValidEmail(){
             
                 var pattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
                 var eemail = $("#eemail").val();
                 if(pattern.test(eemail) && eemail !== ""){
                    $("#eemail").removeClass("is-invalid").addClass("is-valid");
                    $(".email-error").css({
                     "color": "green",
                     "font-size": "14px",
                     "display": "none"
                   });
                    return true;

                 }else if(eemail === ""){
                   $("#eemail").removeClass("is-valid").addClass("is-invalid");
                   $(".eemail-error").html("Required Email address");
                     $(".email-error").css({
                       "color": "red",
                       "font-size": "14px"
                     });
                 }else{
                   $("#eemail").removeClass("is-valid").addClass("is-invalid");
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
                 var pword = $("#pword").val();
                 if(pattern.test(pword) && pword !== ""){
                    $("#pword").removeClass("is-invalid").addClass("is-valid");
                    $(".password-error").css({
                     "color": "green",
                     "font-size": "14px",
                     "display": "none"
                   });
                    return true;

                 }else if(pword === ""){
                   $("#pword").removeClass("is-valid").addClass("is-invalid");
                   $(".password-error").html("Please Enter Password");
                     $(".password-error").css({
                       "color": "red",
                       "font-size": "14px"
                     });
                 }else{
                   $("#pword").removeClass("is-valid").addClass("is-invalid");
                   $(".password-error").html("Must contain at least one number and one uppercase and one special character, and at least 8 or more characters");
                     $(".password-error").css({
                     "color": "red",
                     "font-size": "14px",
                     "display": "block"
                   });

                 };

              };

              function isValidPhoto(){
               if($("#chooseFile").val() === ""){
                  $("#chooseFile").addClass("is-invalid");
                  $(".pic-error").html("Please Upload Photo");
                  $(".pic-error").css({"color":"red", "font-size":"14px"});
                  return false;

               }else{

                  $("#chooseFile").removeClass("is-invalid").addClass("is-valid");
                   $(".pic-error").css({"display":"none"});
                    return true;
                 }
           

             };




            isValidFirstname();
             isValidmiddlename();
              isValidlastname();
            isValidEmail();
            isValidUsername();
            isValidPassword();
            isValidPhoto();
            


             


               if(isValidFirstname() === true  && isValidmiddlename() === true && isValidlastname() === true  && isValidEmail() === true && isValidUsername() === true && isValidPassword() === true && isValidPhoto() === true){

                 $.ajax({

                         url: '../config/edit_profile.php',
                          type: "POST",
                          data: row,
                          processData: false,
                          contentType: false,
                          async: false,
                          cache: false,
                      success: function(res){
                        console.log('==================res===========');
                        console.log(res);
                        $('#msg2').html(res);

                    },error: function(res){
                      console.log("Failed Insert");
                    }

                  });

             }


         });
       });
    </script>



 <script type="text/javascript">
                function textonly(input) {

                    var text = /[^a-z ,]/gi;
                    input.value = input.value.replace(text,"");
                    // body...
                }
            </script>



            <script type="text/javascript">
                function numberonly(input) {

                    var num = /[0-9]/gi;
                    input.value = input.value.replace(num,"");
                    // body...
                }
            </script>

  
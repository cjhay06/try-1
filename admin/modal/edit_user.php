<!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
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
            <input type="hidden" id="edit_categoryid" name="">
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

             
             const firstname = document.querySelector('input[id=firstname]').value;
             console.log("==============firstname===========");
             console.log(firstname);

             const category_id = document.querySelector('input[id=edit_categoryid]').value;
             console.log("==============category_id===========");
             console.log(category_id);

             var row = new FormData(this.form);
                 row.append('firstname', firstname);
                 row.append('category_id', category_id);


             function isValidCategory2(){
               if($("#firstname").val() === ""){
                  $("#firstname").addClass("is-invalid");
                  $(".cat2-error").html("Please input category");
                  $(".cat2-error").css({"color":"red", "font-size":"14px"});
                  return false;

               }else{

                  $("#edit_category").removeClass("is-invalid").addClass("is-valid");
                   $(".cat2-error").css({"display":"none"});
                    return true;
                 }
           

             };

             isValidCategory2();


               if(isValidCategory2() === true){

                 $.ajax({

                         url: '../config/edit_category.php',
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

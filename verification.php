
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sample Website</title>
  </head>
  <body>


  <div class="container mt-3"> 
   <div class="card">
    <div class="card-body">

      <div class="row">

       <!-- div 6 1/2-->
        <div class="col-md-6">
         

           </div>
         </div>
        </div>

        <!--end div 6 1/2-->

       <!-- div 6 1/2-->
        <div class="col-md-6">
         <div class="card">
           <div class="card-header">Insert Code</div>
           <div class="card-body">
             <form method="POST" id="logform">

              <div id="msg"></div>
               <div class="">
                  <center><span id="myalert2"></span></center>
               </div>
              
               <div class="" id="myalert" style="display: none;">
                     <div class="">
                        <center><span id="alerttext"></span></center>
                     </div>
               </div>

               <div class="" id="myalert3" style="display: none;">
                     <div class="">
                          <div class="alert alert-success" id="alerttext3"></div>
                     </div>
               </div>


               <div class="form-group">
                 <label>Insert Code</label>
                  <input type="text" class="form-control" id="codes" name="codes"  placeholder="Please enter Code" onkeyup="numberonly(this)" maxlength="6" required>
                  <span class="codes-error"></span>
               </div>
               <div class="form-group mt-2">
                  <button type="button" class="btn btn-primary" id="btn-code" style="float: right;">Submit</button>
               </div>

            </form>

           </div>
         </div>
        </div>

        <!--end div 6 1/2-->

      </div>   


    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script type="text/javascript"> 

    document.addEventListener('DOMContentLoaded', () => {
      let btn = document.querySelector('#btn-code')
          btn.addEventListener('click', (event) => {
              event.preventDefault();

              const codes = document.querySelector('input[id=codes]').value;
              console.log('==========code==========')
              console.log(codes);


           function isValidCode(){
             
                 var pattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
                 var codes = $("#codes").val();
                 if(pattern.test(codes) && codes !== ""){
                    $("#codes").removeClass("is-invalid").addClass("is-valid");
                    $(".codes-error").css({
                     "color": "green",
                     "font-size": "14px",
                     "display": "none"
                   });
                    return true;

                 }else if(codes === ""){
                   $("#codes").removeClass("is-valid").addClass("is-invalid");
                   $(".codes-error").html("Required code");
                     $(".codes-error").css({
                       "color": "red",
                       "font-size": "14px"
                     });
                 }else{
                   $("#codes").removeClass("is-valid").addClass("is-invalid");
                   $(".codes-error").html("Incorrect Code");
                     $(".codes-error").css({
                     "color": "red",
                     "font-size": "14px",
                     "display": "block"
                   });

                 };

              }



            isValidCode();


            var data = new FormData(this.form);

            data.append('codes', codes)


            if(isValidCode() === true){

                 $.ajax({

                          url: 'config/code.php',
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





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

     <script type="text/javascript">
                function numberonly(input) {

                    var num = /[^0-9]/gi;
                    input.value = input.value.replace(num,"");
                    // body...
                }
            </script>
            <script type="text/javascript">
                function textonly(input) {

                    var text = /[^a-z]/gi;
                    input.value = input.value.replace(text,"");
                    // body...
                }
            </script>
  </body>
</html>
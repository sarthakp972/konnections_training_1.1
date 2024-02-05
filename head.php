
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>SignUP Form</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="common.css">   
<link rel="stylesheet" href="real_icon.css">
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

 
  </head>
<body>
 


      <div class="container-fluid d-flex align-items-center justify-content-center vh-100">
           <div class="card">
                <div class="card-body">
  


                     <h1 class="text-center mb-3 ">SignUP Form</h1>
                        <div class="text-center">
                          <!-- code start here  icons-->

                          <!-- icon code start -->
                          <div class="icons">
      <div class="flex">
        <h5>Name</h5>

        <div>
        
        
<img src="icon_number\circle-1.png" id='myImage' alt="">
<div class="line_comma1" id="line"></div>
</div>
<!-- <img src="icon_number\substract (1).png" id="img" alt=""> -->

</div>

<div class="flex">
        <h5>contact</h5>
        <img src="icon_number\circle-2.png"  id='myImage2'alt="">
        <div class="line_comma2"></div>

</div>

<div class="flex">
        <h5>Birth</h5>
        <img src="icon_number\circle-3.png" id='myImage3' alt="">
        <div class="line_comma3"></div>

</div>

<div class="flex">

        <h5>submit</h5>
        <img src="icon_number\circle-4.png" id='myImage4' alt="">
        
       
</div>
</div>
                          <!-- icon code End -->

                       <!--form code start -->
                       <div id="myForm">
    


    <?php
    include 'page1.php';
    ?>
    
    <?php
    
    include 'page2.php';
    ?>
    <?php
    
    include 'page3.php';
    ?>
    
    <?php
    include 'page4.php';
    ?>
    <!-- form code End -->
    </div>
    
        <script type=text/javascript>
            function nextPhase() {
            $("#phase1").hide();
            $("#phase2").show();
            $("#phase3").hide();
            $("#phase4").hide();
            changeImage();

            /////////////////////////
            // icon-1 code
            function changeImage() {
              
              var imageElement = document.getElementById("myImage");
        
              var newSrc = "icon_number/accept.png";
    
              imageElement.setAttribute("src", newSrc);
    
            
              imageElement.setAttribute("alt", "New Image Alt Text");
              var element = document.querySelector('.line_comma1::before');
                
            
        
           


              
              // icon-1 code
          }
        }
        function next1() {


                    function doesCharacterExist(inputString, characterToFind) {
   
                        return inputString.indexOf(characterToFind) !== -1;
                       }

            var inputString =  $("#email").val();
            var characterToFind = "@" && ".";



//////////////////////////////////////////////////////////////////////
if (doesCharacterExist(inputString, characterToFind)) {
    console.log("@ & . exists in the string.");

            $("#phase2").hide();
            $("#phase3").show();
            $("#phase1").hide();
            $("#phase4").hide();
            changeImage();

            /////////////////////////
            // icon-1 code
            function changeImage() {
              
              var imageElement = document.getElementById("myImage2");
              var newSrc = "icon_number/accept.png";
              imageElement.setAttribute("src", newSrc);
              imageElement.setAttribute("alt", "New Image Alt Text");
            }     
          
            //var pseudoElement = window.getComputedStyle(myElement, '::before');



       
      }//if character exixt
      else{
        
     alert("please enter a valid email");
            
          
      }//else part end
      }    
        function previousPhase1() {
            $("#phase2").hide();
            $("#phase1").show();
            $("#phase3").hide();
            $("#phase4").hide();
        }
        function previousPhase2() {
            $("#phase2").show();
            $("#phase1").hide();
            $("#phase3").hide();
            $("#phase4").hide();
        }
        function previousPhase3() {
            $("#phase2").hide();
            $("#phase1").hide();
            $("#phase3").show();
            $("#phase4").hide();
        }
        function next2() {
            $("#phase2").hide();
            $("#phase3").hide();
            $("#phase1").hide();
            $("#phase4").show();
            changeImage();

/////////////////////////
// icon-1 code
function changeImage() {
  
  var imageElement = document.getElementById("myImage3");

  var newSrc = "icon_number/accept.png";

  imageElement.setAttribute("src", newSrc);


  imageElement.setAttribute("alt", "New Image Alt Text");
}
        }
    
     ////////////////////////////////
      console.log('pk');
            function submitForm() {
              /*image change*/
              changeImage()
              function changeImage() {
  
  var imageElement = document.getElementById("myImage4");

  var newSrc = "icon_number/accept.png";

  imageElement.setAttribute("src", newSrc);


  imageElement.setAttribute("alt", "New Image Alt Text");
}

/*image change end*/
                console.log("hellow");
                var firstname = $("#firstname").val();
                var lastname = $("#lastname").val();
    
                var email= $("#email").val();
                var phone = $("#phone").val();
    
                var date = $("#date").val();
                var gender = $("#gender").val();
    
                var username = $("#username").val();
                var password = $("#password").val();
    
                
    
    
    
                $.ajax({
                    url: "saveData.php",
                    type: "POST",
                    data: { input1:firstname,input2:lastname,input3:email,input4:phone,input5:date,input6:gender,input7:username,input8:password, },
                    success: function(response) {
                        alert("Thank you!" + response);
                    },
                    error: function(xhr, status, error) {
                        alert("Error: " + status + "\nMessage: " + error);
                    }
                });
            }
        </script>


                         </div>
     
                </div>
            </div>
        </div>

  </body>
</html>
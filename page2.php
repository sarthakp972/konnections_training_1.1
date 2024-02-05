<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  
  <div id="phase2" style="display: none;">
  <div class="flex d-flex justify-content-start mt-2">
      <h5 >Contact info:</h5>
      </div>
       <div class="mb-3">
         <label for="email" class="form-label">Email address</label>
         <input type="email"  class="form-control" id="email" aria-describedby="emailHelp">
         <div id="liveAlertPlaceholder"></div>
        </div>

            <div class="mb-3">
                  <label for="Phone" class="form-label">Phone</label>
                   <input type="text" class="form-control" id="lastname">
             </div>
 
  <button  onclick="previousPhase1()" class="btn btn-primary">Previous</button>
  
  <button  onclick="next1()" class="btn btn-primary">Next</button>
</div>

</body>
</html>
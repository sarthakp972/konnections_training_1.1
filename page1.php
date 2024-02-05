<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="common.css">
</head>


<div id="phase1">

<div class="flex d-flex justify-content-start mt-2">
      <h5 >Basic Info:</h5>
      </div>

  <div class="mb-3">
  <div class="flex justify-content-start">
    <label for="firstname" class="form-label">First Name</label>
</div>
    <input type="text" class="form-control" name="firstname" id="firstname">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>

  <div class="mb-3">
    <label for="lastname" class="form-label">Last Name</label>
    <input type="text" class="form-control" name="lastname" id="lastname">
  </div>
 
  <button  onclick="nextPhase()" id="hello" class="btn btn-primary ">Next</button>
  </div>
</body>
</html>

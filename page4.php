<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
      <div id="phase4" style="display: none;">
      <div class="flex d-flex justify-content-start mt-2">
      <h5 >Login Details:
      </h5>
      </div>
       <div class="mb-3">
         <label for="username" class="form-label">User name</label>
         <input type="username" class="form-control" id="username" required>
   
        </div>

        <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" required>
      </div>
 
  <button  onclick="previousPhase3()" class="btn btn-primary">Previous</button>
  
  <button   onclick="submitForm()" class="btn btn-primary">Submit</button>
</div>

</body>
</html>
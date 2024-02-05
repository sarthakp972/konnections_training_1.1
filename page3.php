<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



      <div id="phase3" style="display: none;">
      <div class="flex d-flex justify-content-start mt-2">
      <h5 >Date:</h5>
      </div>
       <div class="mb-3">
         <label for="date" class="form-label">Date of birth</label>
         <input type="date" class="form-control" id="date">
   
        </div>

        <div class="mb-3">
                <label for="gender">Gender:</label>
                <select class="form-control" id="gender" name="gender">
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
 
  <button  onclick="previousPhase2()" class="btn btn-primary">Previous</button>
  
  <button onclick="next2()" class="btn btn-primary">Next</button>
 
</div>
</body>
</html>
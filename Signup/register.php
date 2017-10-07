<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Signup</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <!--Google Font - Work Sans-->
<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,700' rel='stylesheet' type='text/css'>
<form name="registerForm" id="registerForm" action="registerProcess.php" method="post">
  <div class="container">
    <div class="profile">
      <button class="profile__avatar" id="toggleProfile">
       <img src="avatar.png" alt="Avatar" /> 
      </button>
      <div class="profile__form">
        <div class="profile__fields">
          <div class="field">
            <input type="text" id="fieldUser" name="rollNo"class="input" required pattern=.*\S.* />
            <label for="fieldUser" class="label">Roll No</label>
          </div>
             <div class="field">
            <input type="text" id="fieldUser" name="name"class="input" required pattern=.*\S.* />
            <label for="fieldUser" class="label">Name</label>
          </div>
          <div class="field">
            <input type="password" id="fieldPassword" name="password" class="input" required pattern=.*\S.* />
            <label for="fieldPassword" class="label">Password</label>
          </div>
          <div class="field">
            <input type="password" id="fieldPassword" class="input" required pattern=.*\S.* />
            <label for="fieldPassword" class="label">Confirm Password</label>
          </div>
          

  <div class="field">
         <label class = "label">Semester:</label>
        <div align="right">  
          <select name="sem">
            <option value="1">Sem 1</option>
            <option value="2">Sem 2</option>
            <option value="3">Sem 3</option>
            <option value="4">Sem 4</option>
            <option value="5">Sem 5</option>
            <option value="6">Sem 6</option>
            <option value="7">Sem 7</option>
            <option value="8">Sem 8</option>
        </select>
      </div>
  </div>
          <div class="profile__footer">
            <button class="btn" id="registerForm">Register</button>
          </div>
        </div>
       </div>
    </div>
  </div>
</form>
    <script  src="js/index.js"></script>

</body>
</html>

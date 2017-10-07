<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Signin</title>
      <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!--Google Font - Work Sans-->
<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,700' rel='stylesheet' type='text/css'>
<form name="loginForm" id="loginForm" method="post" action="loginProcess.php">
  <div class="container">
    <div class="profile">
      <button class="profile__avatar" id="toggleProfile">
       <img src="avatar.png" alt="Avatar" /> 
      </button>
      <div class="profile__form">
        <div class="profile__fields">
          <div class="field">
            <input type="text" id="fieldUser" class="input" name="roll_no" required pattern=.*\S.* />
            <label for="fieldUser" class="label">Roll No</label>
          </div>
          <div class="field">
            <input type="password" id="fieldPassword" class="input" name="password" required pattern=.*\S.* />
            <label for="fieldPassword" class="label">Password</label>
          </div>
          <div class="profile__footer">
            <button class="btn" id="loginForm">Login</button>
          </div>
        </div>
       </div>
    </div>
  </div>
</form>
    <script  src="js/index.js"></script>

</body>
</html>
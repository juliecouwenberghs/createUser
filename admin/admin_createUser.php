<?php
   ini_set('display_errors',1);
   error_reporting(E_ALL);

   require_once('phpscripts/config.php');
   //confirm_logged_in();
   if(isset($_POST['submit'])) {
     $fname = trim($_POST['fname']);
     $username = trim($_POST['username']);
     $password = trim($_POST['password']);
     $email = trim($_POST['email']);
     $userlvl = ($_POST['userlvl']);
     if(empty($userlvl)) {
       $message = "Please select a user level";
     }else {
       $encryption = rand(111111,999999);
       $password == $encryption;
       $sendMessage = sendEmail($email, $username, $encryption);
       $result = createUser($fname, $username, $encryption, $email, $userlvl);
       //$message = $result;
     }
   }

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/main.css">
<title>CMS Portal</title>
</head>
<body>
<div id="container">
  <h1>Welcome! Create a New User Below</h1>

  <?php if(!empty($sendMessage)){echo $sendMessage;} ?>

  <form action="admin_createUser.php" method="post">
    <label>First Name:</label>
    <input type="text" name="fname" id="name" value="<?php if(!empty($fname)){echo $fname;} ?>"><br><br>

    <label>Username:</label>
    <input type="text" name="username" id="username" value="<?php if(!empty($username)){echo $username;} ?>"><br><br>

    <label>Passsword:</label>
    <input type="text" name="password" id="password" value="<?php if(!empty($password)){echo $password;} ?>"><br><br>

    <label>Email:</label>
    <input type="text" name="email" id="email" value="<?php if(!empty($email)){echo $email;} ?>"><br><br>

    <label>User Level:</label>
    <select name="userlvl">
      <option value="">Please select user level</option>
      <option value="2">Web Admin</option>
      <option value="1">Web Master</option>
    </select><br><br>
    <div id="lower">
      <input type="submit" name="submit" value="Create User">
  </div>
  </form>
</div>

</body>
</html>

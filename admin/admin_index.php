<?php
   //ini_set('display_errors',1);
   //error_reporting(E_ALL);

   require_once('phpscripts/config.php');
   confirm_logged_in();

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/main.css">
<title>CMS Portal</title>
</head>
<body>
  <div id="container2">
  <h1>Welcome!</h1>
  <?php echo "<h2>Hi {$_SESSION['user_name']}</h2>"; ?>
  <a href="admin_createUser.php">Create User</a>
  <a href="phpscripts/caller.php?caller_id=logout">Sign Out</a>
</div>
</body>
</html>

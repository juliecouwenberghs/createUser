<?php

function sendEmail($email, $username, $password) {
  $to = $email;
  $subject = "Login Information";
  $msg = "Your Username:". $username. "\n\nPassword:". $password. "\n\nLogin Here: http://localhost:8888/user-login/admin/admin_login.php";
  mail($to, $subject, $msg);
  echo"<h2 style='text-align: center;
  border-radius: 3px;
  border: 1px solid #ccc;
  box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
  padding: 10px;
  background-color: white;'>An email has been sent! Please go to your email and confirm the account.</h2>";
}
?>

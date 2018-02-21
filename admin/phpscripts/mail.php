<?php

function sendEmail($email, $username, $password) {
  $to = $email;
  $subject = "Login Information";
  $msg = "Your Username:". $username. "\n\nPassword:". $password. "\n\nLogin Here: http://localhost:8888/user-login/admin/admin_login.php";
  mail($to, $subject, $msg);
  echo"An email has been sent, BITCHHUH!";
}
?>

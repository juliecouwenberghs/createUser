<?php

  function createUser ($fname, $username, $encryption, $email, $userlvl){
    include('connect.php');
    $usersString = "INSERT INTO tbl_user VALUES(NULL, '{$fname}', '{$username}', '{$encryption}', '{$email}', NULL, '{$userlvl}', 'no', NULL)";
    //echo $usersString;
    $userQuery = mysqli_query($link, $usersString);
    if($userQuery) {
      redirect_to("admin_index.php");
    }else {
      $message = "There was a problem setting up this user. Maybe reconsider your hiring practices.";
      return $message;
    }

    mysqli_close($link);
  }



?>

<?php
  //DO NOT PUT LINK TO CALLER.PHP IN THE CONFIG FILE
  //ITS ONLY CALLED BY ANOTHER FILE
  require_once("config.php");

  if(isset($_GET['caller_id'])) {
    $dir = $_GET['caller_id'];
      if($dir == 'logout') {
        logged_out();
      }else {
        echo "Caller id was passed incorrectly";
      }
  }

?>

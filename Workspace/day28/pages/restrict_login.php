<?php
  session_start();

  // check if the session name is valid
  if (!isset($_SESSION['name'])) {
    header("location: signin.php");
  }

?>
<?php

  session_start();

  $_SESSION["user_name"] = "user1";
  print("user_name updated in the session");
  
?>
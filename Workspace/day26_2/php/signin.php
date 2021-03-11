<?php

  // super global variables
  // associative array
  // $_GET, $_POST, $_REQUEST, $_ENV, $_SERVER, $_SESSION, $_FILES  

  // print("from signup.php PAGE");

  // insert the values into the table (db)

  $connection = mysqli_connect('localhost', 'root', 'root', 'mydb');
  if (!$connection) {
    print("db can not be connected");
  }

  $query = "select * from user where email = '" . $_GET["email"] . "' and password = '" . $_GET["password"] . "';";

  $result = mysqli_query($connection, $query);

  $num_rows = mysqli_num_rows($result);
  if ($num_rows == 0) {
    // user not found
    print("no_user");
  } else {
    print("user_found");
  }

  mysqli_close($connection);
  
?>
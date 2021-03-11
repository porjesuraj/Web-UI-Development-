<?php

  // super global variables
  // associative array
  // $_GET, $_POST, $_REQUEST, $_ENV, $_SERVER, $_SESSION, $_FILES  

  // print("from signup.php PAGE");

  // print_r($_GET);
  // print("Name: " . $_GET['name'] . "<br>");
  // print("Email: " . $_GET['email'] . "<br>");
  // print("Phone: " . $_GET['phone'] . "<br>");
  // print("Password: " . $_GET['password'] . "<br>");


  // print("Name: " . $_POST['name'] . "<br>");
  // print("Email: " . $_POST['email'] . "<br>");
  // print("Phone: " . $_POST['phone'] . "<br>");
  // print("Password: " . $_POST['password'] . "<br>");

  // insert the values into the table (db)

  $connection = mysqli_connect('localhost', 'root', 'root', 'mydb');
  if (!$connection) {
    print("db can not be connected");
  }

  $query = "insert into user (name, phone, email, password) values ('" . $_GET["name"] . "', '" . $_GET["phone"] . "', '" . $_GET["email"] . "', '" . $_GET["password"] . "')";
  // $query = "insert into user (name, phone, email, password) values ('" . $_POST["name"] . "', '" . $_POST["phone"] . "', '" . $_POST["email"] . "', '" . $_POST["password"] . "')";
  // print($query);

  $result = mysqli_query($connection, $query);

  // print_r($result);

  mysqli_close($connection);

  print("successfully registered the user");

?>
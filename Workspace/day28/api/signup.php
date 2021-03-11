<?php

  // used only when client sends the data using GET method
  // print_r($_GET);

  // used only when client sends the data using POST method
  // print_r($_POST);

  // used when client sends the data using GET or POST method
  // print_r($_REQUEST);

  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];
  $phone = $_REQUEST['phone'];
  $email = $_REQUEST['email'];

  include_once "database.php";

  $query = "insert into user (name, email, phone, password) values ('$username', '$email', '$phone', '$password');";
  executeQuery($query);
  
  $response = [
    'status' => 'success'
  ];

  print(json_encode($response));

?>
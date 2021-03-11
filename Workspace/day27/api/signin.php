<?php

  $email = $_REQUEST["email"];
  $password = $_REQUEST["password"];
  
  include_once 'database.php';

  $query = "select * from user where email = '$email' and password = '$password'";
  $result = executeQuery($query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $response = [
        "status" => "success",
        "data" => [
          "name" => $row["name"],
          "email" => $row["email"],
          "phone" => $row["phone"]
        ]
    ];
  } else {
    $response = [ "status" => "error" ];
  }

  print(json_encode($response));

?>
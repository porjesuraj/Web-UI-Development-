<?php


  $productId = $_GET["productId"];

  $query = "select id, title, description, category, company, price from products where id = $productId";

  include_once 'database.php';
  $result = executeQuery($query);

  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);

    // create an associative array with the key-value pairs
    $product = [
      "id" => $row["id"],
      "title" => $row["title"],
      "description" => $row["description"],
      "category" => $row["category"],
      "company" => $row["company"],
      "price" => $row["price"],
    ];

    $result = [
      "status" => "success",
      "data" => $product
    ];
    print(json_encode($result));

  } else {
    $result = [
      "status" => "error"
    ];
    print(json_encode($result));
  }


?>
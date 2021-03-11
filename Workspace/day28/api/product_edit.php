<?php

  $title = $_REQUEST['title'];
  $description = $_REQUEST['description'];
  $price = $_REQUEST['price'];
  $category = $_REQUEST['category'];
  $company = $_REQUEST['company'];
  $productId = $_REQUEST['productId'];

  $query = "update products set title = '$title', description = '$description', price = '$price', category = '$category', company = '$company' where id = $productId";

  include_once 'database.php';
  executeQuery($query);

  print(json_encode([ "status" => "success" ]))

?>
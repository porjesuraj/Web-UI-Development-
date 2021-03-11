<?php

  $title = $_REQUEST['title'];
  $description = $_REQUEST['description'];
  $price = $_REQUEST['price'];
  $category = $_REQUEST['category'];
  $company = $_REQUEST['company'];

  $query = "insert into products (title, description, price, category, company) values ('$title', '$description', '$price', '$category', '$company')";

  include_once 'database.php';
  executeQuery($query);

  print(json_encode([ "status" => "success" ]))

?>
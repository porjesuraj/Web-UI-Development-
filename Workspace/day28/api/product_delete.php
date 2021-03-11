<?php

  $id = $_REQUEST["id"];

  include_once 'database.php';
  $query = "delete from products where id = $id";
  executeQuery($query);

  print(json_encode([ "status" => "success" ]));

?>
<?php

/*
  C: create
  R: read
  U: update
  D: delete
*/


  function function1() {
    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $db = 'mydb';
    $port = 3306;
    
    print("opening connection");

    // step 1: create/open the connection
    $link = mysqli_connect('localhost', 'root', 'root', 'mydb', 3306);
    
    // step 1.1: select the db
    // mysqli_select_db($connection, $db);
    
    // step 2: prepare the query
    $query = "select id, title, description, price from products;";
    print($query);

    // step 3: execute the query
    print("executing query");
    $result = mysqli_query($link, $query);
    print($result);

    // step 4: read/process the result 
    print("no of rows = " . mysqli_num_rows($result));
    $row = mysqli_fetch_row($result);
    // while (($row = mysqli_fetch_row($result)) != -1) {
    //   print($row);
    // }
    
    print("closing connection");
    // step 5: close the connection
    mysqli_close($link);
  }

  function1();


?>
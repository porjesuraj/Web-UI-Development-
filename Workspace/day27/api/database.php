<?php

  function executeQuery($query) {
    
    // step 1
    $connection = mysqli_connect('localhost', 'root', 'root', 'mydb');
    if (!$connection) {
      print('db can not be connected');
    }
    
    // step 2

    // step 3
    $result = mysqli_query($connection, $query);

    // step 4

    // step 5
    mysqli_close($connection);

    return $result;
  }


?>
<?php


  // Create
  function createProduct() {
    $title = "product 5";
    $description = "this is a product 5";
    $price = 500;

    // step 1: open the connection
    $connection = mysqli_connect('localhost', 'root', 'root', 'mydb');
    if (!$connection) {
      print("the database can not be connected");
    }

    // step 2: prepare the query
    $query = "insert into products (title, description, price) values ('$title', '$description', $price)";

    // step 3: execute the query
    $result = mysqli_query($connection, $query);

    // step 4: process the result
    print_r($result);
    
    // step 5: close the connection
    mysqli_close($connection);

    print("product created successfully");
  }

  // createProduct();

  // Read
  function readProducts() {
    
    // step 1: open the connection
    $connection = mysqli_connect('localhost', 'root', 'root', 'mydb');
    if (!$connection) {
      print("the database can not be connected");
    }    
 
    // step 2: prepare sql query
    $query = "select id, title, description, price from products";

    // step 3: execute the query
    $result = mysqli_query($connection, $query);
    // print_r($result);

    // step 4: process the result
    print("<table border=\"1\">");
    // print('<table border="1">');
    print("<thead>");
    print(" <tr>");

    print("   <th>Id</th>");
    print("   <th>Title</th>");
    print("   <th>Description</th>");
    print("   <th>Price</th>");
    
    print(" </tr>");
    print("</thead>");
    
    print("<tbody>");

    while ($row = mysqli_fetch_assoc($result)) {
      print("<tr>");
      print(" <td>" . $row["id"] . "</td>");
      print(" <td>" . $row["title"] . "</td>");
      print(" <td>" . $row["description"] . "</td>");
      print(" <td>" . $row["price"] . "</td>");
      print("</tr>");
    }

    print("</tbody>");

    print("</table>");


    // step 5: close the connection
    mysqli_close($connection);
  }

  readProducts();

  // Update
  function updateProduct() {
    $productId = 2;
    $price = 250;

    // step 1: open the connection
    $connection = mysqli_connect('localhost', 'root', 'root', 'mydb');
    if (!$connection) {
      print("the database can not be connected");
    }

    // step 2: prepare the query
    $query = "update products set price = $price where id = $productId";

    // step 3: execute the query
    $result = mysqli_query($connection, $query);

    // step 4: process the result
    print_r($result);
    
    // step 5: close the connection
    mysqli_close($connection);

    print("updated product's price");
  }

  // updateProduct();

  // Delete
  function deleteProduct() {
    $productId = 4;

    // step 1: open the connection
    $connection = mysqli_connect('localhost', 'root', 'root', 'mydb');
    if (!$connection) {
      print("the database can not be connected");
    }

    // step 2: prepare the query
    $query = "delete from products where id = $productId";

    // step 3: execute the query
    $result = mysqli_query($connection, $query);

    // step 4: process the result
    print_r($result);
    
    // step 5: close the connection
    mysqli_close($connection);

    print("Product 4 got deleted successfully");
  }

  // deleteProduct();



?>
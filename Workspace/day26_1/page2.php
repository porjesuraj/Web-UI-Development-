<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>page2</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
  <div class="container">
    <h1>Products</h1>

    <?php

      // step 1: open the connection
      $connection = mysqli_connect('localhost', 'root', 'root', 'mydb');
      if (!$connection) {
        print("the database can not be connected");
      }    
  
      // step 2: prepare sql query
      $query = "select id, title, description, price from products";

      // step 3: execute the query
      $result = mysqli_query($connection, $query);

      // step 4: process the result
      print("<table class=\"table table-striped\">");
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

    ?>
  
  </div>
  
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
</body>
</html>
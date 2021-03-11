<!DOCTYPE html>
<html lang="en">
<head>
  <title>Products</title>
  <?php include_once "pages/header.php" ?>
  
  <style>

    h4 {
      text-align: center;
      margin-bottom: 50px;
      margin-top: 50px;
    }

    .btn-add {
      margin-bottom: 20px;
    }

  </style>
</head>
<body onload="getAllProducts()">
  
  <div class="container">
    <h4>Product List</h4>

    <button onclick="addProduct()" class="btn btn-success btn-add float-right">Add</button>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Id</th>
          <th>Title</th>
          <th>Price</th>
          <th>Company</th>
          <th>Category</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody id="products">

      </tbody>
    </table>
  </div>

  <?php include_once 'pages/footer.php' ?>
  <script>

    function addProduct() {
      // redirect to product_add.php page
      window.location = 'product_add.php'
    }

    function getAllProducts() {
      $.get('api/product_list.php', function(response) {
        let rows = ''
        const products = JSON.parse(response)
        for (let index = 0; index < products.length; index++) {
          const product = products[index]
          rows += `<tr>`
          rows += ` <td>${product['id']}</td>`
          rows += ` <td>${product['title']}</td>`
          rows += ` <td>${product['price']}</td>`
          rows += ` <td>${product['company']}</td>`
          rows += ` <td>${product['category']}</td>`
          rows += ` <td>
            <button onclick="deleteProduct(${product['id']})" class="btn btn-link text-danger">Delete</button>
            <button onclick="editProduct(${product['id']})" class="btn btn-link text-success">Edit</button>
          </td>`
          rows += `</tr>`
        }

        $('#products').html(rows)
      })
    }

    function deleteProduct(id) {
      const answer = confirm("Are you sure you want to delete this product?")
      if (answer) {
        $.post('api/product_delete.php', { "id": id }, function(response) {
          const result = JSON.parse(response)
          if (result['status'] == 'success') {
            alert('deleted successfully')

            // get the new list of products
            getAllProducts()
          } else {
            alert('error while deleting the product')
          }
        })
      }
    }

    function editProduct(id) {
      alert('editing product = ' + id)
    }

  </script>
</body>
</html>
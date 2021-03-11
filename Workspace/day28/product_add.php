<?php include_once "pages/restrict_login.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Product</title>
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
<body>
  
  <div class="container">
    <h4>Add Product</h4>

    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea id="description" rows="5" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <label for="price">Price</label>
          <input type="number" class="form-control" id="price">
        </div>
        <div class="form-group">
          <label for="">Category</label>
          <select id="category" class="form-control">
            <option value="kitchen">Kitchen Appliances</option>
            <option value="electronics">Electronics</option>
            <option value="computers">Computers</option>
            <option value="mobiles">Mobiles</option>
            <option value="pantry">Pantry</option>
            <option value="baby">Baby</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Company</label>
          <select id="company" class="form-control">
            <option value="samsung">Samsung</option>
            <option value="lg">LG</option>
            <option value="apple">Apple</option>
            <option value="itc">ITC</option>
            <option value="lifebouy">LifeBouy</option>
            <option value="himalaya">Himalaya</option>
          </select>
        </div>
        <div class="form-group">
          <button onclick="addProduct()" class="btn btn-success">Add</button>
          <a href="product_list.php" class="btn btn-danger">Cancel</a>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>

  <?php include_once 'pages/footer.php' ?>
  <script>

    function addProduct() {
      const title = $('#title').val()
      const description = $('#description').val()
      const price = $('#price').val()
      const category = $('#category option:selected').val()
      const company = $('#company option:selected').val()

      const body = {
        "title": title,
        "description": description,
        "price": price,
        "category": category,
        "company": company
      }

      $.post('api/product_add.php', body, function(response) {
        const result = JSON.parse(response)
        if (result['status'] == 'success') {
          alert('successfully added product')
          $('#title').val('')
          $('#description').val('')
          $('#price').val('')
        } else {
          alert('error while adding product')
        }
      })
    }
  </script>
</body>
</html>
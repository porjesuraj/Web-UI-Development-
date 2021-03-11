<?php

  session_start();

  // remove the value stored with key name in the session
  unset($_SESSION['name']);

  // remove the value stored with key email in the session
  unset($_SESSION['email']);

  // remove the value stored with key phone in the session
  unset($_SESSION['phone']);

  // remove the value stored with key userId in the session
  unset($_SESSION['userId']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signin</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <style>
    h4 {
      text-align: center;
      margin-bottom: 50px;
      margin-top: 50px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <h4>Sign In</h4>
        <div class="form-group">
          <label for="">Email</label>
          <input type="email" class="form-control" id="email" placeholder="email">
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="password" class="form-control" id="password" placeholder="********">
        </div>
        <div class="form-group">
          <div>Dont you have an account? <a href="signup.html">Signup here</a></div>
          <button onclick="signin()" class="btn btn-success">Signin</button>
        </div>
      </div>
      <div class="col-md-4"></div>
    </div>
    
  </div>
  <script src="js/jquery.js"></script>
  <script>

    function signin() {
      const email = $('#email').val()
      const password = $('#password').val()

      if (email.length == 0) {
        alert('please enter email addres')
      } else if (password.length == 0) {
        alert('please enter password')
      } else {

        // JSON
        const body = {
          "email": email,
          "password": password
        }

        $.post('api/signin.php', body, function(response) {
          // console.log(response)
          // console.log(typeof(response))

          // converts a string to JSON object/array
          const result = JSON.parse(response)
          // console.log(result)
          // console.log(typeof(result))

          if (result['status'] == 'success') {
            window.location = "product_list.php"
          } else {
            alert('invalid email or password')
          }
        })
      }
    }

  </script>
</body>
</html>
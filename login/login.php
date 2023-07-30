<?php
//connects to connection.php
require_once('../connection.php');

session_start();

if (isset($_POST['submit'])) {

  $username = mysqli_real_escape_string($connection, $_POST['username']);
  $pass = $_POST['password'];

  $select = " SELECT * FROM account WHERE username = '$username' AND password = '$pass'";
  $result = mysqli_query($connection, $select);

  if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_array($result);

    if ($row['account_type'] == 'admin') {
      $adminLogin[] = 'admin login success';
    } else if ($row['account_type'] == 'user') {
      $userLogin[] = 'user login success';
    }
  } else {
    $error[] = 'incorrect username or password!';
  }
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- set icon -->
  <link rel="icon" type="image/x-icon" href="../assets/images/BayanLuma1Logo.png">

  <title>VIRS Login</title>

  <!-- fontawesome  -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'>
  <link rel="stylesheet" href="login.css">
  <!-- sweetalert -->
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
  <!-- sweetalert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>

  <div class="wrapper">
    <div class="title"><span>Login now</span><img src="../assets/images/BayanLuma1Logo.png" width="50px"></div>
    <?php
    //if login is an ADMIN
    if (isset($adminLogin)) {
      $_SESSION['admin_name'] = $row['id'];
    ?>
      <script>
        swal({
          title: "Login!",
          text: "You have successfully logged in.",
          icon: "success",
          button: "OK",
        }).then(function() {
          document.location.href = "../admin/dashboard/dashboard.php";
        });
      </script>
    <?php
    };
    //if login is an USER
    if (isset($userLogin)) {
      $_SESSION['user_name'] = $row['id'];
    ?>
      <script>
        swal({
          title: "Login!",
          text: "Login Success.",
          icon: "success",
          button: "OK",
        }).then(function() {
          document.location.href = "../user/dashboard/dashboard.php";
        });
      </script>
    <?php
    };
    if (isset($error)) {
      echo '
        <script>
          swal({
            title: "Access Denied!",
            text: "Incorrect username or password.",
            icon: "error",
            button: "OK",
          });
        </script>';
    };
    ?>
    <form action="#" method="POST">
      <div class="row">
        <i class="fas fa-solid fa-user"></i>
        <input type="username" name="username" required placeholder="Enter your username">
      </div>
      <div class="row">
        <i class="fas fa-solid fa-lock"></i>
        <input type="password" name="password" id="password" required onkeypress="return checkSpecialChar(event)" placeholder="Enter your password">
        <h5 style="color: red; float: right;">Note* Do not use special characters for password</h5>
      </div>
      <br />
      <div class="row button">
        <input type="submit" name="submit" value="login" class="form-btn">
      </div>
    </form>
  </div>

  <script>
    //disable special characters on keyboard
    function checkSpecialChar(event) {
      var key = event.which || event.keyCode;

      // allow enter key (key code 13)
      if (key === 13) {
        return;
      }

      // allow only alphanumeric characters (including space)
      var char = String.fromCharCode(key);
      var regex = /[a-zA-Z0-9\s]/;

      if (!regex.test(char)) {
        event.preventDefault();
      }
    }
  </script>
</body>

</html>
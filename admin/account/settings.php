<?php
include('../../connection.php');

session_start();

if (!isset($_SESSION['admin_name'])) {
  header('location: ../../login/login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- set icon -->
  <link rel="icon" type="image/x-icon" href="../../assets/images/BayanLuma1Logo.png">

  <link rel="stylesheet" href="../style.css">

  <!-- import css file -->
  <?php require('../../assets/css.php') ?>
  <!-- import cdn file -->
  <?php require('../../assets/js.php') ?>

  <title>Account Settings</title>
</head>

<body class="body">
  <!-- sidebar -->
  <section id="menu">
    <div class="logo-container">
      <div class="logo">
        <img src="../../assets/images/BayanLuma1Logo.png">
      </div>
    </div>

    <div class="scrollable-sidebar">
      <div class="scrollable-sidebar-inner">
        <div class="items">
          <li class=""><a href="../dashboard/dashboard.php"><i class="fa-solid fa-table-columns"></i>Dashboard</a></li>
          <li class=""><a href="../brgy_officials/brgy_officials.php"><i class="fa-solid fa-users"></i>Officials</a></li>
          <li class=""><a href="../report/report.php"><i class="fa-solid fa-file-lines"></i>Report</a></li>
          <li class=""><a href="../blotter/blotter.php"><i class="fa-solid fa-clipboard"></i>Blotter</a></li>
          <li class=""><a href="../clearance/clearance.php"><i class="fa-solid fa-folder-open"></i>Clearance</a></li>
          <li class=""><a href="../about/about_virs.php"><i class="fa-solid fa-computer"></i>About VIRS</a></li>
          <li class=""><a href="../about/about_us.php"><i class="fa-solid fa-graduation-cap"></i>Developers</a></li>
        </div>
      </div>
    </div>
  </section>

  <!-- container -->
  <section id="interface">

    <!-- topbar -->
    <?php include('../nav/topbar.php') ?>

    <!-- main content -->
    <div class="head-border">
      <h3 class="i-name">Account Settings</h3>
    </div>

    <?php
    //connects to connection.php
    require_once('../../connection.php');

    $i = 1;
    $username = $_SESSION['admin_name'];
    $sql = "SELECT * FROM account WHERE id = '$username'";

    //executes the sql
    $result = $connection->query($sql);

    //statement if sql is wrong
    if (!$result) {
      die("Invalid query: " . $connection->error);
    }

    while ($row = $result->fetch_assoc()) :
    ?>
      <div class="board-account">
        <div class="name-acc">
          <input type="hidden" id="acc-id" value="<?php echo $row['id'] ?>">
          <h4 style="margin-left: 30px;"><b>Name:</b> <?php echo $row['fullName'] ?></h4>
        </div>
        <hr />
        <div class="user-acc">
          <h4 style="margin-left: 30px;"><b>Username:</b> <?php echo $row['username'] ?> <button type="button" class="btn btn-success" id="cUsernameBtn" onclick="changeUsername()">Change Username</button></h4>
          <div class="change-username" id="change-username" style="margin-left: 50px; display: none;">
            <h5>New Username: <input type="text" id="acc-username"></h5>
            <div class="alert alert-danger" id="alert-username-empty" style="margin-left: 150px; display: none;" role="alert">
              Username cannot be empty
            </div>
            <div style="margin-left: 260px;">
              <button type="button" class="btn btn-secondary" onclick="cancelUsername()">Cancel</button>
              <button type="button" class="btn btn-primary" onclick="saveUsername()">Save</button><br /><br />
            </div>
          </div>
        </div>
        <div class="pw-acc">
          <h4 style="margin-left: 30px;"><b>Password:</b> <?php echo md5($row['password']) ?> <button type="button" class="btn btn-success" id="cPasswordBtn" onclick="changePassword()">Change Password</button></h4>
          <div class="change-password" id="change-password" style="margin-left: 50px; display: none;">
            <h5>Old Password: <input type="text" id="acc-old-password" onkeypress="return checkSpecialChar(event)"></h5>
            <h5>New Password: <input type="text" id="acc-new-password" onkeypress="return checkSpecialChar(event)"></h5>
            <h5 style="color: red; font-size: 12px;">Note* Do not use special characters for password</h5>
            <div class="alert alert-danger" id="alert-password-empty" style="margin-left: 150px; display: none;" role="alert">
              Password cannot be empty
            </div>
            <div style="margin-left: 260px;">
              <button type="button" class="btn btn-secondary" onclick="cancelPassword()">Cancel</button>
              <button type="button" class="btn btn-primary" onclick="savePassword()">Save</button><br /><br />
            </div>
          </div>
        </div>
        <hr />
        <div class="acc-type">
          <h4 style="margin-left: 30px;"><b>Account Type:</b> <label style="text-transform: uppercase;"><?php echo $row['account_type'] ?></label></h4>
        </div>
        <hr />
      </div>
    <?php endwhile; ?>
  </section>

  <!-- import cdn file -->
  <?php require('../../assets/js.php') ?>

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

    //show change username
    function changeUsername() {
      document.getElementById('change-username').style.display = 'block';
      document.getElementById('cUsernameBtn').style.display = 'none';
    }

    //cancel username
    function cancelUsername() {
      var newUsername = $('#acc-username').val("");
      document.getElementById('change-username').style.display = 'none';
      document.getElementById('alert-username-empty').style.display = 'none';
      document.getElementById('cUsernameBtn').style.display = 'inline-block';
    }

    //save username
    function saveUsername() {
      var accIDUser = $('#acc-id').val();
      var newUsername = $('#acc-username').val();

      if (newUsername == "")
        document.getElementById('alert-username-empty').style.display = 'inline-block';
      else {
        document.getElementById('alert-username-empty').style.display = 'none';
        $.post("function/aUpdate.php", {
          accIDUserSend: accIDUser,
          newUsernameSend: newUsername
        }, function(editUsername) {
          console.log(editUsername)
          swal({
            title: "Success!",
            text: "Username Successfully Updated.",
            icon: "success",
            button: "OK"
          }).then(function() {
            setTimeout(() => {
              location.reload();
            }, 300);
          });
        });
      }
    }

    //show change password
    function changePassword() {
      document.getElementById('change-password').style.display = 'block';
      document.getElementById('cPasswordBtn').style.display = 'none';
    }

    //cancel password
    function cancelPassword() {
      var oldPassword = $('#acc-old-password').val("");
      var newPassword = $('#acc-new-password').val("");
      document.getElementById('change-password').style.display = 'none';
      document.getElementById('alert-password-empty').style.display = 'none';
      document.getElementById('cPasswordBtn').style.display = 'inline-block';
    }

    //save password
    function savePassword() {
      var accIDPw = $('#acc-id').val();
      var oldPassword = $('#acc-old-password').val();
      var newPassword = $('#acc-new-password').val();

      if (oldPassword == "" || newPassword == "")
        document.getElementById('alert-password-empty').style.display = 'inline-block';
      else {
        document.getElementById('alert-password-empty').style.display = 'none';
        $.post("function/aUpdate.php", {
          accIDPwSend: accIDPw,
          oldPasswordSend: oldPassword,
          newPasswordSend: newPassword
        }, function(editPassword) {
          if (editPassword == "true") {
            swal({
              title: "Success!",
              text: "Password Successfully Updated.",
              icon: "success",
              button: "OK"
            }).then(function() {
              setTimeout(() => {
                location.reload();
              }, 300);
            });
          } else {
            swal({
              title: "Warning!",
              text: "Old password is wrong.",
              icon: "warning",
              button: "OK",
            });
          }
        });
      }
    }

    //user dropdown menu on topright
    $('#menu-btn').click(function() {
      $('#menu').toggleClass("active");
    })

    let subMenu = document.getElementById("subMenu")

    function toggleMenu() {
      subMenu.classList.toggle("open-menu");
    }
  </script>
</body>

</html>
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

  <title>Dashboard</title>
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
          <li class="active"><a href="#"><i class="fa-solid fa-table-columns"></i>Dashboard</a></li>
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
      <h3 class="i-name">Dashboard</h3>
    </div>
    <?php
    //connects to connection.php
    require_once('../../connection.php');

    $sql = "SELECT (SELECT COUNT(*) FROM report WHERE status = 'Active') AS TotalActiveReport,
                     (SELECT COUNT(*) FROM report WHERE status = 'Closed') AS TotalClosedReport,
                     (SELECT COUNT(*) FROM blotter) AS TotalBlotter";
    //executes the sql
    $result = $connection->query($sql);
    $totalRecords = mysqli_fetch_array($result);

    //statement if sql is wrong
    if (!$result) {
      die("Invalid query: " . $connection->error);
    }
    ?>
    <div class="card-container">
      <!--card #0-->
      <div class="val-box card-cases">
        <i class="fa-solid fa-layer-group"></i>
        <div class="val-text">
          <h3><?php echo $totalRecords['TotalActiveReport'] + $totalRecords['TotalClosedReport'] + $totalRecords['TotalBlotter'] ?></h3>
          <span>Total Cases</span>
        </div>
      </div>
      <div class="values">
        <!--card #1-->
        <div class="val-box card-report">
          <i class="fa-solid fa-file-lines"></i>
          <div class="val-text">
            <h3><?php echo $totalRecords['TotalActiveReport'] ?></h3>
            <span>Total Active Report</span>
          </div>
        </div>

        <!--card #2-->
        <div class="val-box card-report1">
          <i class="fa-solid fa-file-lines"></i>
          <div class="val-text">
            <h3><?php echo $totalRecords['TotalClosedReport'] ?></h3>
            <span>Total Settled Report</span>
          </div>
        </div>

        <!--card #3-->
        <div class="val-box card-blotter">
          <i class="fa-solid fa-clipboard"></i>
          <div class="val-text">
            <h3><?php echo $totalRecords['TotalBlotter'] ?></h3>
            <span>Total Blotter</span>
          </div>
        </div>
      </div>
    </div>

    <h4 style="margin-left: 30px;"><b>Account List</b></h4>
    <div class="dashboard-cont">
      <h5 style="margin-left: 30px;">Reset Password: password123</h5>
      <button type="button" class="add-btn" onclick="addModal()"><span class="btn-wrap"><i class="add-icon fa-sharp fa-solid fa-plus"></i>Add</span></button>
    </div>

    <div class="board">
      <table class="table table-striped" id="sortTbl">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Username</th>
            <th>Password</th>
            <th>Type</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          //connects to connection.php
          require_once('../../connection.php');

          $i = 1;
          $username = $_SESSION['admin_name'];
          $sql = "SELECT * FROM account WHERE id != '$username'";
          //executes the sql
          $result = $connection->query($sql);

          //statement if sql is wrong
          if (!$result) {
            die("Invalid query: " . $connection->error);
          }

          while ($row = $result->fetch_assoc()) :
          ?>
            <tr>
              <td style="width: 100px;">
                <h5><?php echo $i++; ?></h5>
              </td>
              <td>
                <p><?php echo $row['fullName'] ?></p>
              </td>
              <td>
                <p><?php echo $row['username'] ?></p>
              </td>
              <td>
                <p><?php echo md5($row['password']) ?></p>
              </td>
              <td>
                <p><?php echo $row['account_type'] ?></p>
              </td>
              <td style="width: 50px; text-align: center; white-space: nowrap">
                <button type="button" class="btn btn-success" title="Reset Password" onclick="resetPassword(<?php echo $row['id'] ?>, '<?php echo $row['password'] ?>')"><i class="fa-solid fa-arrow-rotate-left"></i></button>
                <button type="button" class="btn btn-danger" title="Delete Account" onclick="deleteAccount(<?php echo $row['id'] ?>)"><i class="fa-solid fa-trash"></i></button>
              </td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </section>

  <!-- import modal files -->
  <?php include('modal/add_account.php') ?>
  <!-- import cdn file -->
  <?php require('../../assets/js.php') ?>

  <script>
    $(document).ready(function() {
      $('#sortTbl').DataTable();
    });

    //open add modal
    function addModal() {
      $("#addAccount").modal('show');
    }

    //resets password
    function resetPassword(accID, password) {
      swal({
          title: "Reset password?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.post("function/dUpdate.php", {
              accIDSend: accID,
              passwordSend: password
            }, function(resetPassword) {
              swal({
                title: "Success!",
                text: "Password Reset Successfully.",
                icon: "success",
                button: "OK"
              }).then(function() {
                setTimeout(() => {
                  location.reload();
                }, 300);
              });
            });
          }
        });
    }

    //delete account
    function deleteAccount(accID) {
      swal({
          title: "Delete Account?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.post("function/dDelete.php", {
              accIDSend: accID
            }, function(deleteAccount) {
              swal({
                title: "Success!",
                text: "Account Deleted Successfully.",
                icon: "success",
                button: "OK"
              }).then(function() {
                setTimeout(() => {
                  location.reload();
                }, 300);
              });
            });
          }
        });
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